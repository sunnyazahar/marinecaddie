<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $formTitle }}</title>
</head>
<body style="margin:0;padding:0;background:#eef3f8;font-family:Arial,Helvetica,sans-serif;color:#1a2b4a;">
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#eef3f8;padding:24px 12px;">
    <tr>
        <td align="center">
            <table role="presentation" width="600" cellspacing="0" cellpadding="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 8px 24px rgba(4,33,88,0.08);">
                <tr>
                    <td style="background:#042158;padding:22px 28px;">
                        @php
                            $logoPath = public_path('assets/img/logos/footer-light-logo.png');
                        @endphp
                        <a href="{{ config('company.website', config('seo.url')) }}" style="text-decoration:none;display:inline-block;margin-bottom:14px;">
                            @if(isset($message) && is_file($logoPath))
                                <img src="{{ $message->embed($logoPath) }}"
                                     alt="{{ config('company.brand', 'MarineCaddie') }}"
                                     width="180"
                                     height="34"
                                     style="display:block;border:0;outline:none;max-width:180px;height:auto;">
                            @else
                                <p style="margin:0 0 14px;font-size:12px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#F7941D;">{{ config('company.brand', 'MarineCaddie') }}</p>
                            @endif
                        </a>
                        <p style="margin:0 0 4px;font-size:11px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:#F7941D;">New Enquiry</p>
                        <p style="margin:0;font-size:15px;line-height:1.45;font-weight:600;color:#ffffff;">Website contact form submission</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:24px 28px 8px;">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:18px;">
                            <tr>
                                <td style="padding:10px 14px;background:#f7fafc;border:1px solid #e3eaf2;border-radius:6px;font-size:13px;color:#5a6a82;">
                                    <strong style="color:#042158;">Source:</strong> {{ $sourcePage }}<br>
                                    <strong style="color:#042158;">Received:</strong> {{ $submittedAt }} (UTC)
                                </td>
                            </tr>
                        </table>
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #e3eaf2;border-radius:6px;overflow:hidden;">
                            @foreach($fields as $index => $field)
                                @php
                                    $isLast = $loop->last;
                                    $value = trim((string) ($field['value'] ?? ''));
                                    if ($value === '') {
                                        $value = '—';
                                    }
                                @endphp
                                <tr>
                                    <td valign="top" width="34%" style="padding:14px 16px;background:#f7fafc;border-bottom:{{ $isLast ? '0' : '1px solid #e3eaf2' }};font-size:12px;font-weight:700;letter-spacing:0.04em;text-transform:uppercase;color:#042158;">
                                        {{ $field['label'] }}
                                    </td>
                                    <td valign="top" style="padding:14px 16px;border-bottom:{{ $isLast ? '0' : '1px solid #e3eaf2' }};font-size:15px;line-height:1.55;color:#334155;white-space:pre-wrap;">{{ $value }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:8px 28px 24px;">
                        <p style="margin:0;font-size:12px;line-height:1.6;color:#6b7a90;">
                            This message was sent from the MarineCaddie website contact system.
                            @if(filled($replyToEmail))
                                Reply directly to this email to reach the sender.
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
