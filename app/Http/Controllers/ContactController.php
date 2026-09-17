<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
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
            $request->merge([
                'name' => trim((string) $request->input('name', '')),
                'email' => trim((string) $request->input('email', '')),
                'subject' => trim((string) $request->input('subject', '')),
                'phone' => trim((string) $request->input('phone', '')) ?: null,
                'message' => trim((string) $request->input('message', '')),
            ]);

            $data = $request->validate([
                'name' => ['required', 'string', 'min:2', 'max:120', 'regex:/^[\p{L}\p{M}][\p{L}\p{M}\s.\'-]{1,119}$/u'],
                'email' => ['required', 'string', 'email:rfc', 'max:160'],
                'subject' => ['required', 'string', 'min:3', 'max:200'],
                'phone' => ['nullable', 'string', 'max:30', 'regex:/^(?=.*\d)[0-9+\s().-]{7,30}$/'],
                'message' => ['required', 'string', 'min:10', 'max:4000'],
                'form_source' => ['nullable', 'string', 'max:160'],
            ], [
                'name.required' => 'Please enter your name.',
                'name.min' => 'Name must be at least 2 characters.',
                'name.max' => 'Name must be 120 characters or fewer.',
                'name.regex' => 'Please enter a valid name (letters only).',
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'email.max' => 'Email must be 160 characters or fewer.',
                'subject.required' => 'Please enter a subject.',
                'subject.min' => 'Subject must be at least 3 characters.',
                'subject.max' => 'Subject must be 200 characters or fewer.',
                'phone.regex' => 'Please enter a valid contact number.',
                'phone.max' => 'Contact number must be 30 characters or fewer.',
                'message.required' => 'Please enter a message.',
                'message.min' => 'Message must be at least 10 characters.',
                'message.max' => 'Message must be 4000 characters or fewer.',
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

        $request->validate(recaptcha_request_rules());

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
