<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $type = $request->input('request_type', 'information');

        if ($type === 'quote') {
            $data = $request->validate([
                'request_type' => 'required|in:quote',
                'q_name' => ['required', 'string', 'min:2', 'max:120', 'regex:/^[\p{L}\p{M}][\p{L}\p{M}\s.\'-]{1,119}$/u'],
                'q_company' => ['required', 'string', 'min:2', 'max:160'],
                'q_address' => ['nullable', 'string', 'max:255'],
                'q_email' => ['required', 'string', 'email:rfc', 'max:160'],
                'q_phone' => ['required', 'string', 'max:30', 'regex:/^(?=.*\d)[0-9+\s().-]{7,30}$/'],
                'q_service' => ['required', 'string', 'max:160'],
                'q_origin' => ['required', 'string', 'min:2', 'max:160'],
                'q_destination' => ['required', 'string', 'min:2', 'max:160'],
                'q_vessel' => ['nullable', 'string', 'max:160'],
                'q_urgency' => ['nullable', 'string', 'max:80'],
                'q_cargo' => ['required', 'string', 'min:10', 'max:4000'],
                'q_remarks' => ['nullable', 'string', 'max:4000'],
                'q_privacy' => ['accepted'],
            ], [
                'q_name.required' => 'Please enter your name.',
                'q_name.min' => 'Name must be at least 2 characters.',
                'q_name.regex' => 'Please enter a valid name (letters only).',
                'q_company.required' => 'Please enter your company.',
                'q_company.min' => 'Company must be at least 2 characters.',
                'q_email.required' => 'Please enter your email address.',
                'q_email.email' => 'Please enter a valid email address.',
                'q_phone.required' => 'Please enter your phone number.',
                'q_phone.regex' => 'Please enter a valid contact number.',
                'q_service.required' => 'Please select a service.',
                'q_origin.required' => 'Please enter origin / port.',
                'q_destination.required' => 'Please enter destination / port.',
                'q_cargo.required' => 'Please describe your cargo / commodity.',
                'q_cargo.min' => 'Please describe your cargo / commodity.',
                'q_privacy.accepted' => 'Please agree to the privacy policy.',
            ]);

            $fields = [
                ['label' => 'Request type', 'value' => 'Quote request'],
                ['label' => 'Name', 'value' => $data['q_name']],
                ['label' => 'Company', 'value' => $data['q_company']],
                ['label' => 'Address', 'value' => $data['q_address'] ?? ''],
                ['label' => 'Email', 'value' => $data['q_email']],
                ['label' => 'Phone', 'value' => $data['q_phone']],
                ['label' => 'Service needed', 'value' => $data['q_service']],
                ['label' => 'Origin / Port', 'value' => $data['q_origin']],
                ['label' => 'Destination / Port', 'value' => $data['q_destination']],
                ['label' => 'Vessel name', 'value' => $data['q_vessel'] ?? ''],
                ['label' => 'Timing / urgency', 'value' => $data['q_urgency'] ?? ''],
                ['label' => 'Cargo details', 'value' => $data['q_cargo']],
                ['label' => 'Additional remarks', 'value' => $data['q_remarks'] ?? ''],
            ];
            $subject = 'Quote request — '.$data['q_name'].' / '.$data['q_company'];
            $replyTo = $data['q_email'];
            $replyName = $data['q_name'];
            $source = 'Get Quote modal — Quote (3-step)';
        } else {
            $data = $request->validate([
                'request_type' => 'required|in:information',
                'name' => 'required|string|max:120',
                'company' => 'nullable|string|max:160',
                'email' => 'required|email|max:160',
                'phone' => 'required|string|max:60',
                'remarks' => 'nullable|string|max:4000',
                'privacy' => 'accepted',
            ], [
                'privacy.accepted' => 'Please agree to the privacy policy.',
            ]);

            $fields = [
                ['label' => 'Request type', 'value' => 'Information request'],
                ['label' => 'Name', 'value' => $data['name']],
                ['label' => 'Company', 'value' => $data['company'] ?? ''],
                ['label' => 'Email', 'value' => $data['email']],
                ['label' => 'Phone', 'value' => $data['phone']],
                ['label' => 'Remarks', 'value' => $data['remarks'] ?? ''],
            ];
            $subject = 'Information request — '.$data['name'];
            $replyTo = $data['email'];
            $replyName = $data['name'];
            $source = 'Get Quote modal — Information';
        }

        $request->validate(recaptcha_request_rules());

        send_form_notification($subject, $fields, $replyTo, $replyName, $source);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'ok' => true,
                'message' => 'Thank you. We will respond within one business day.',
            ]);
        }

        return back()->with('quote_success', 'Thank you. We will respond within one business day.');
    }
}
