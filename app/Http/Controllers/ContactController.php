<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(recaptcha_request_rules());

        $formType = $request->input('form_type', 'contact');

        if ($formType === 'blog_reply') {
            $data = $request->validate([
                'form_type' => 'required|in:blog_reply',
                'name' => 'required|string|max:120',
                'email' => 'required|email|max:160',
                'reply' => 'required|string|max:4000',
                'form_source' => 'nullable|string|max:160',
            ]);

            $source = $data['form_source'] ?? 'Blog — Leave a reply';
            $fields = [
                ['label' => 'Name', 'value' => $data['name']],
                ['label' => 'Email', 'value' => $data['email']],
                ['label' => 'Reply', 'value' => $data['reply']],
            ];
            $subject = 'Blog reply — '.$data['name'];
            $replyTo = $data['email'];
            $replyName = $data['name'];
        } else {
            $data = $request->validate([
                'name' => 'required|string|max:120',
                'email' => 'required|email|max:160',
                'subject' => 'required|string|max:200',
                'phone' => 'nullable|string|max:60',
                'message' => 'required|string|max:4000',
                'form_source' => 'nullable|string|max:160',
            ]);

            $source = $data['form_source'] ?? 'Website contact form';
            $fields = [
                ['label' => 'Name', 'value' => $data['name']],
                ['label' => 'Email', 'value' => $data['email']],
                ['label' => 'Phone', 'value' => $data['phone'] ?? ''],
                ['label' => 'Subject', 'value' => $data['subject']],
                ['label' => 'Message', 'value' => $data['message']],
            ];
            $subject = 'Contact enquiry — '.$data['subject'].' ('.$data['name'].')';
            $replyTo = $data['email'];
            $replyName = $data['name'];
        }

        send_form_notification($subject, $fields, $replyTo, $replyName, $source);

        $message = 'Thank you. Your message has been sent — we will respond within one business day.';

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'ok' => true,
                'message' => $message,
            ]);
        }

        return back()->with('contact_success', $message);
    }
}
