<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $type = $request->input('request_type', 'information');

        if ($type === 'quote') {
            $data = $request->validate([
                'request_type' => 'required|in:quote',
                'q_name' => 'required|string|max:120',
                'q_company' => 'required|string|max:160',
                'q_address' => 'nullable|string|max:255',
                'q_email' => 'required|email|max:160',
                'q_phone' => 'required|string|max:60',
                'q_service' => 'required|string|max:160',
                'q_origin' => 'required|string|max:160',
                'q_destination' => 'required|string|max:160',
                'q_vessel' => 'nullable|string|max:160',
                'q_urgency' => 'nullable|string|max:80',
                'q_cargo' => 'required|string|max:4000',
                'q_remarks' => 'nullable|string|max:4000',
                'q_privacy' => 'accepted',
            ], [
                'q_privacy.accepted' => 'Please agree to the privacy policy.',
            ]);

            $payload = [
                'Type' => 'Quote request',
                'Name' => $data['q_name'],
                'Company' => $data['q_company'],
                'Address' => $data['q_address'] ?? '',
                'Email' => $data['q_email'],
                'Phone' => $data['q_phone'],
                'Service' => $data['q_service'],
                'Origin' => $data['q_origin'],
                'Destination' => $data['q_destination'],
                'Vessel' => $data['q_vessel'] ?? '',
                'Urgency' => $data['q_urgency'] ?? '',
                'Cargo' => $data['q_cargo'],
                'Remarks' => $data['q_remarks'] ?? '',
            ];
            $subject = 'Quote request — '.$data['q_name'].' / '.$data['q_company'];
            $replyTo = $data['q_email'];
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

            $payload = [
                'Type' => 'Information request',
                'Name' => $data['name'],
                'Company' => $data['company'] ?? '',
                'Email' => $data['email'],
                'Phone' => $data['phone'],
                'Remarks' => $data['remarks'] ?? '',
            ];
            $subject = 'Information request — '.$data['name'];
            $replyTo = $data['email'];
        }

        $lines = [];
        foreach ($payload as $key => $value) {
            $lines[] = $key.': '.(is_string($value) ? $value : json_encode($value));
        }
        $body = implode("\n", $lines);

        Log::channel('single')->info('Quote/info request', $payload);

        $to = config('company.email', 'ops@marinecaddie.com');

        try {
            Mail::raw($body, function ($message) use ($to, $subject, $replyTo) {
                $message->to($to)
                    ->subject($subject)
                    ->replyTo($replyTo);
            });
        } catch (\Throwable $e) {
            Log::warning('Quote mail failed: '.$e->getMessage(), $payload);
            // Still accept the submission locally when mail is not configured
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'ok' => true,
                'message' => 'Thank you. We will respond within one business day.',
            ]);
        }

        return back()->with('quote_success', 'Thank you. We will respond within one business day.');
    }
}
