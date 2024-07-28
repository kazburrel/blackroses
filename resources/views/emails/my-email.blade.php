<!DOCTYPE html>
<html>

<head>
    <title>{{ $subject }}</title>
    <meta charset="UTF-8">
</head>

<body>
    <div
        style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
            style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
            <tbody>
                <tr>
                    <td align="center" valign="center" style="text-align:center; padding: 40px">
                        <a href="https://blackrosessupport.co.uk" rel="noopener" target="_blank">
                            <img alt="Logo"
                                src="{{ $message->embed(public_path('images/Black Roses Support-04.png')) }}"
                                style="max-width: 100%; height: auto; width: 150px;" />
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="center">
                        <div
                            style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                            <!--begin:Email content-->
                            {{-- <div style="padding-bottom: 30px; font-size: 17px;">

                            </div> --}}
                            <div style="padding-bottom: 30px; line-height: 1.8;">
                                {!! nl2br(e($body)) !!}
                            </div>
                            <!--end:Email content-->
                            <div style="padding-bottom: 10px">Kind regards,
                                <br>{{ $user->fname }} {{ $user->lname }}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="center"
                        style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                        <p>{{ $setting->address }}, {{ $setting->postcode }}</p>
                        <p>Copyright © {{ date('Y') }}
                            <a href="https://blackrosessupport.co.uk" rel="noopener" target="_blank">Black Roses
                                Support</a>.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
