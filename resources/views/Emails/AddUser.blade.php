@extends('Emails.Master-Email')

@section('body')

<body class="respond" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- pre-header -->
<table style="display:none!important;">
    <tr>
        <td>
            <div style="overflow:hidden;display:none;font-size:1px;color:#ffffff;line-height:1px;font-family:Arial;maxheight:0px;max-width:0px;opacity:0;">
                Welcome to Karlos Cabral ! You Added Successfully
            </div>
        </td>
    </tr>
</table>
<!-- pre-header end -->
<!-- header -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">

    <tr>
        <td align="center">
            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                <tr>
                    <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                </tr>

                <tr>
                    <td align="center">

                        <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                            <tr>
                                <td align="center" height="70" style="height:70px;">
                                    <a href="http://dashboard.karloscabral.com.br/" style="display: block; border-style: none !important; border: 0 !important;"><img width="100" border="0" style="display: block; width: 100px;" src="http://picfixstudio.com/wp-content/uploads/2018/06/Logo.jpg" alt="" /></a>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                </tr>

            </table>
        </td>
    </tr>
</table>
<!-- end header -->

<!-- big image section -->

<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="bg_color">

    <tr>
        <td align="center">
            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                <tr>
                    <td align="center" style="color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;"
                        class="main-header">
                        <!-- section text ======-->

                        <div style="line-height: 35px">

                            Welcome to the  <span style="color: #5caad2;">HemaCare</span> Blood Bank

                        </div>
                    </td>
                </tr>

                <tr>
                    <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                </tr>

                <tr>
                    <td align="center">
                        <table border="0" width="40" align="center" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
                            <tr>
                                <td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                </tr>

                <tr>
                    <td align="left">
                        <table border="0" width="590" align="center" cellpadding="0" cellspacing="0" class="container590">
                            <tr>
                                <td align="left" style="color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;">
                                    <!-- section text ======-->

                                    <p style="line-height: 24px; margin-bottom:15px;">

                                        Hi {{ $name }},

                                    </p>
                                    <p style="line-height: 24px;margin-bottom:15px;">
                                        We are glad to see you to be a part of Karlos Cabral, You'r Added to our System.
                                    </p>
                                    <p style="line-height: 24px; margin-bottom:20px;">
                                        You can login to your account at any time using the link below using "{{$email}}" and this password "{{$Password}}"
                                    </p>
                                    <table border="0" align="center" width="180" cellpadding="0" cellspacing="0" bgcolor="5caad2" style="margin-bottom:20px;">

                                        <tr>
                                            <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td align="center" style="color: #ffffff; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 22px; letter-spacing: 2px;">
                                                <!-- main section button -->

                                                <div style="line-height: 22px;">
                                                    <a href="{{url($link)}}" style="color: #ffffff; text-decoration: none;">Go To Login</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                                        </tr>

                                    </table>
                                    <p style="line-height: 24px">
                                        Thanks to,<br/>
                                            The Elite-Developers team<br/>
                                            <mail>saeedulhassan@gmail.com</mail>
                                    </p>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>





            </table>

        </td>
    </tr>

    <tr>
        <td height="40" style="font-size: 40px; line-height: 40px;">&nbsp;</td>
    </tr>

</table>

<!-- end section -->




<!-- contact section -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="bg_color">

    <tr>
        <td height="60" style="font-size: 60px; line-height: 60px;">&nbsp;</td>
    </tr>

    <tr>
        <td align="center">
            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590 bg_color">

                <tr>
                    <td align="center">
                        <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590 bg_color">

                            <tr>
                                <td>
                                    <table border="0" width="300" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
                                           class="container590">

                                        <tr>
                                            <!-- logo -->
                                            <td align="left">
                                                <a href="http://dashboard.karloscabral.com.br/" style="display: block; border-style: none !important; border: 0 !important;"><img width="80" border="0" style="display: block; width: 80px;" src="http://picfixstudio.com/wp-content/uploads/2018/06/Logo.jpg" alt="" /></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td align="left" style="color: #888888; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 23px;"
                                                class="text_color">
                                                <div style="color: #333333; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">

                                                    Email us: <br/> <a href="mailto:" style="color: #888888; font-size: 14px; font-family: 'Hind Siliguri', Calibri, Sans-serif; font-weight: 400;">contato@karloscabral.com.br</a>

                                                </div>
                                            </td>
                                        </tr>

                                    </table>

                                    <table border="0" width="2" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
                                           class="container590">
                                        <tr>
                                            <td width="2" height="10" style="font-size: 10px; line-height: 10px;"></td>
                                        </tr>
                                    </table>

                                    <table border="0" width="200" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
                                           class="container590">

                                        <tr>
                                            <td class="hide" height="45" style="font-size: 45px; line-height: 45px;">&nbsp;</td>
                                        </tr>



                                        <tr>
                                            <td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <table border="0" align="right" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td>
                                                            <a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://i.imgur.com/Qc3zTxn.png" alt=""></a>
                                                        </td>
                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                        <td>
                                                            <a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://i.imgur.com/RBRORq1.png" alt=""></a>
                                                        </td>
                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                        <td>
                                                            <a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="http://i.imgur.com/Wji3af6.png" alt=""></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td height="60" style="font-size: 60px; line-height: 60px;">&nbsp;</td>
    </tr>

</table>
<!-- end section -->

<!-- footer ====== -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="f4f4f4">

    <tr>
        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
    </tr>

    <tr>
        <td align="center">

            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                <tr>
                    <td>
                        <table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
                               class="container590">
                            <tr>
                                <td align="left" style="color: #aaaaaa; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;">
                                    <div style="line-height: 24px;">

                                        <span style="color: #333333;">If you are not requested to register yourself at Karlos Cabral,
                                                then you have no need any action</span>

                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table border="0" align="left" width="5" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
                               class="container590">
                            <tr>
                                <td height="20" width="5" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                            </tr>
                        </table>

                        <table border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"
                               class="container590">

                            <tr>
                                <td align="center">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td align="center">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>

    <tr>
        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
    </tr>

</table>
<!-- end footer ====== -->

@stop
