<html>
<head></head>
<body>
    <div style="margin: 0; padding: 0;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td style="padding: 10px 0 30px 0;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td align="center" bgcolor="#282828" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                                    <img src="{{asset('assets/images/whitelogo.png')}}" alt="Transcendtrade logo"  style="display: block;" class="CToWUd a6T" tabindex="0" />
                                    <div class="a6S" dir="ltr" style="opacity: 1; left: 574.5px; top: 133px;">
                                        <div id=":ub" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V" data-tooltip="Download">
                                            <div class="akn"><div class="aSK J-J5-Ji aYr"></div></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                                    <b>Reset Your  Password</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                    <i>
                                                        <span style="font-family: Arial, sans-serif; font-size: 14px;">
                                                            <h1>Hello ,{{$body ['fullname']}} </h1><br/><br /> 
                                                            <p>You have requested to reset your password. To reset your password, click below:</p>
                                                        <center>
                                                            <a href="{{route('user.post.change.password',$body ['token'])}}"><button type="button" class="btn btn-primary">Reset Password</button></a>
                                                        </center> 

                                                        <br>
                                                        <p>if you did not request to reset your password, please disregard this email and your account will not be modified.</p>

                                                        <br /><br />Best Regards,<br />
                                                        Transcendtrade Team<br /> 
                                                        <br /> 
                                                        <br />
                                                        </span>
                                                    </i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#353e48" style="padding: 30px 30px 30px 30px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="color: #ccc; font-family: Arial, sans-serif; font-size: 12px;" width="100%">
                                                    <i>
                                                        Thank you,<br />
                                                        Transcendtrade.org ® <br />
                                                        <a href="mailto:support@transcendtrade.org" style="color: #ffffff;" target="_blank"><font color="#ffffff">support@transcendtrade.org</font></a>
                                                    </i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    
    <br />
    </div>
</body>
</html>


