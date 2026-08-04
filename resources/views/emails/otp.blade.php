<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode OTP Reset Password</title>
</head>

<body
    style="margin:0; padding:0; background-color:#ffffff; font-family: Arial, sans-serif; -webkit-font-smoothing: antialiased;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
        style="background-color:#ffffff; padding: 40px 15px;">
        <tr>
            <td align="center">

                <!-- CONTAINER UTAMA NEO-BRUTALISM -->
                <table role="presentation" width="520" cellpadding="0" cellspacing="0"
                    style="background-color:#ffffff; border: 3px solid #323232; border-radius: 10px; box-shadow: 8px 8px 0px #323232; overflow: hidden; width: 100%; max-width: 520px;">

                    <!-- HEADER -->
                    <tr>
                        <td
                            style="background-color:#ffffff; border-bottom: 3px solid #323232; padding: 30px; text-align: center;">

                            <!-- BADGE LOGO UTAMA -->
                            <div
                                style="display: inline-block; background-color: #ffffff; border: 3px solid #323232; border-radius: 10px; box-shadow: 4px 4px 0px #323232; padding: 12px 18px; margin-bottom: 15px;">
                                <span
                                    style="font-size: 24px; font-weight: 900; color: #323232; text-transform: uppercase; letter-spacing: 1px;">
                                    FLOW TECH
                                </span>
                            </div>

                            <h1
                                style="margin: 10px 0 0 0; font-size: 24px; font-weight: 900; color: #323232; text-transform: uppercase;">
                                RESET PASSWORD
                            </h1>
                            <p style="margin: 5px 0 0 0; font-size: 14px; font-weight: 700; color: #666666;">
                                Verifikasi Keamanan Akun Kamu
                            </p>

                        </td>
                    </tr>

                    <!-- CONTENT BODY -->
                    <tr>
                        <td style="padding: 35px 30px;">

                            <p style="font-size: 15px; font-weight: 700; color: #323232; margin: 0 0 10px 0;">
                                Halo 👋
                            </p>

                            <p
                                style="font-size: 14px; font-weight: 600; color: #555555; line-height: 1.6; margin: 0 0 25px 0;">
                                Kami menerima permintaan untuk mereset password akun kamu. Gunakan kode OTP di bawah ini
                                untuk melanjutkan proses reset password.
                            </p>

                            <!-- OTP BOX NEO-BRUTALIST -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin: 25px 0;">
                                <tr>
                                    <td align="center">
                                        <div
                                            style="background-color: #ffffff; border: 3px solid #323232; border-radius: 8px; box-shadow: 6px 6px 0px #323232; padding: 20px; text-align: center;">

                                            <div
                                                style="font-size: 12px; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; color: #666666; margin-bottom: 10px;">
                                                KODE OTP KAMU
                                            </div>

                                            <div
                                                style="font-size: 38px; font-weight: 900; letter-spacing: 10px; color: #2d8cf0; font-family: 'Courier New', Courier, monospace;">
                                                {{ $otp }}
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- WARNING BADGES -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top: 25px;">
                                <!-- EXPIRE INFO -->
                                <tr>
                                    <td
                                        style="background-color: #fef08a; border: 2px solid #323232; border-radius: 6px; box-shadow: 3px 3px 0px #323232; padding: 12px 15px; font-size: 13px; font-weight: 700; color: #323232;">
                                        ⏰ Kode OTP ini berlaku selama <b>5 menit</b>. Jangan berikan kode ini kepada
                                        siapapun!
                                    </td>
                                </tr>

                                <tr>
                                    <td height="12"></td>
                                </tr>

                                <!-- SECURITY WARNING -->
                                <tr>
                                    <td
                                        style="background-color: #fca5a5; border: 2px solid #323232; border-radius: 6px; box-shadow: 3px 3px 0px #323232; padding: 12px 15px; font-size: 13px; font-weight: 700; color: #323232;">
                                        🛡️ Jika kamu tidak merasa meminta reset password, abaikan email ini. Akunmu
                                        tetap aman.
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td
                            style="background-color: #ffffff; border-top: 3px solid #323232; padding: 20px; text-align: center;">
                            <p
                                style="margin: 0; font-size: 12px; font-weight: 800; color: #323232; text-transform: uppercase; letter-spacing: 1px;">
                                © {{ date('Y') }} FlowDoc System
                            </p>
                            <p style="margin: 5px 0 0 0; font-size: 11px; font-weight: 600; color: #888888;">
                                Email otomatis, tidak perlu dibalas.
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
