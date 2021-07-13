<?php 

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name1 = $_POST['name1'];
        $signature1 = $_POST['signature1'];
        $date1 = $_POST['date1'];
        $name2 = $_POST['name2'];
        $signature2 = $_POST['signature2'];
        $date2 = $_POST['date2'];
        $name3 = $_POST['name3'];
        $signature3 = $_POST['signature3'];
        $date3 = $_POST['date3'];
        $name4 = $_POST['name4'];
        $signature4 = $_POST['signature4'];
        $date4 = $_POST['date4'];

        $message = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Consent Form</title>
        </head>
        <body>
            <style>

                td,th {
                    text-align: left;
                    padding: 8px;
                }

                table, th, td {
                  border: 1px solid black;
                  border-collapse: collapse;
                }
            </style>
            <table style="width:100%">
                <thead>
                    <tr>
                        <th>Name1</th>
                        <th>Signature1</th>
                        <th>Date1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$name1.'</td>
                        <td>'.$signature1.'</td>
                        <td>'.$date1.'</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th>Name2</th>
                        <th>Signature2</th>
                        <th>Date2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$name2.'</td>
                        <td>'.$signature2.'</td>
                        <td>'.$date2.'</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th>Name3</th>
                        <th>Signature3</th>
                        <th>Date3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$name3.'</td>
                        <td>'.$signature3.'</td>
                        <td>'.$date3.'</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th>Name4</th>
                        <th>Signature4</th>
                        <th>Date4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$name4.'</td>
                        <td>'.$signature4.'</td>
                        <td>'.$date4.'</td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>';

        try {
        //Server settings
        $mail->SMTPDebug = 0;    // 0=no output, 1=Commands, 2=Data & Commands, 3=2+connection status 4=Low-Level data output
        $mail->isSMTP();                           // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';            // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                    // Enable SMTP authentication
        $mail->Username = 'raufkham953@gmail.com'; // SMTP username
        $mail->Password = 'oarwkxrbvipazotz';      // SMTP password (used google Generated app password) 
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                 // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                         // TCP port to connect to

        $mail->isHTML(true);   

        $mail->setFrom('RaufKham953@gmail.com','Consent Form Website');
        $mail->addAddress('RaufKham953@gmail.com'); 
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "New Consent Form Submission"; 
        $mail->Body = $message;

        $mail->send();
        } 
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    
    
 ?>
 <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Patient Informed Consent</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .pujaspace{
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .pujaspace1{
            padding: 30px 0 30px 0;
        }
        .pujaright{
            padding-left: 42px;
        }
        .pujatop{
            padding-top: 12px;
        }
        .pujat{
            padding-top: 10px;
        }
        .pujat1{
            padding-top: 34px;
        }
        .border1{
            border: 2px solid #000;
            height: 100%;
            background: #DDDDDD;
            font-size: 19px;
        }
        .border11 {
            border-right: 1px solid #000;
            height: 100%;
        }
        .pright{
            padding-right: -9px;

        }
        .pline{
            height: 1.5px;
            background:#343434;
            width: 100%;
        }
        .bsignature{
            background: #DDDDDD;
            padding: 8px;
        }
        .ptext{
            font-size: 29px;
            font-weight: 900px;
            padding-top: 37px;
        }
    </style>
</head>
<body>

<!--first container-->
 <div class="container">

    <div class="row ptext text-center">
        <label>Patient Informed Consent</label> <br />
    </div>

    <div class="row para">
        <p style="font-size: 22px; font-weight: 900px;">During your dental hygiene visit, your dental hygienist will be preforming procedures within her scope of practice. She
            may inform you and get your verbal consent before starting a new procedure. lf you have any questions during the
            appointment, please feel free to ask. She will educate you and inform you as best as she can to allow you to make an
            informed decision about each procedure. By schedule a "dental cleaning" you accept the practice of scaling
            automatically.
        </p>
    </div>
    <div class="row pujatop">
    </div>
    <form class="form-horizontal" action="" id="contactForm" method="post">
        <div class="row para">
            <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                |, <input type="text" style="width: 300px;" name="name1" id="exampleInputFile">&nbsp;&nbsp;&nbsp;(print name)give permission to Polished Dental Hygiene Clinic to preform the dental hygiene procedures deemed necessary during my appointment.
            </p>
        </div>

         <div class="row para">
             <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                 Signature: <input type="text" style="width: 500px;" name="signature1" id="exampleInputFile">&nbsp;&nbsp;Date:  <input type="datetime-local" style="width: 400px;" name="date1" id="exampleInputFile">&nbsp;
             </p>
         </div>

        </div>

        <!--second container-->
        <div class="container">

            <div class="row ptext">
                <label>Insurance</label> <br />
            </div>

            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px;">
                    We direct bill your insurance company. This means we will send all your information to your insurance company and
                    they will pay us. You are responsible for any and all fees that your insurance company does not pay. We will work with
                    your insurance company as best as we can, but if they do not cover a procedure you accepted, you are responsible for
                    the entire amount. By signing this form, you give Polished Dental Hygiene Clinic permission to share information and
                    communicate with your insurance company on your behalf. You are responsible for 100% of the cost if the insurance
                    company denies any claim. We accept Mastercard, Visa, Debit, cash, or E-transfer. Your co-payment is due on day of
                    service. lf we do not know what your co-payment is, you have 14 days from day of notification of co-payment to pay the
                    remaining balance.
                </p>
            </div>
            <div class="row pujatop">
            </div>
            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                    |, <input type="text" style="width: 500px;" name="name2" id="exampleInputFile">&nbsp;&nbsp;&nbsp;(print name) have read the above paragraph and accept the conditions listed.
                </p>
            </div>

            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                    Signature: <input type="text" style="width: 500px;" name="signature2" id="exampleInputFile">&nbsp;&nbsp;Date:  <input type="datetime-local" style="width: 400px;" name="date2" id="exampleInputFile">&nbsp;
                </p>
            </div>

        </div>

        <!--third container-->
        <div class="container">

            <div class="row ptext">
                <label>Privacy</label> <br />
            </div>

            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px;">
                    Polished Dental Hygiene Clinic take privacy extremely important. We follow the highest standards to make sure your
                    privacy is protected. Some information we collect will need to be shared with third parties. This includes insurance
                    companies, medical professionals and the referring dentist. Any information we collect may be sent electronically to the
                    dentist of your choice when needed for additional treatment.
                </p>
            </div>
            <div class="row pujatop">
            </div>
            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                    |, <input type="text" style="width: 500px;" name="name3" id="exampleInputFile">&nbsp;&nbsp;&nbsp;(print name) give Polished Dental Hygiene Clinic permission to share
                    my information to the accepted third parties.
                </p>
            </div>

            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                    Signature: <input type="text" style="width: 500px;" name="signature3" id="exampleInputFile">&nbsp;&nbsp;Date:  <input type="datetime-local" style="width: 400px;" name="date3" id="exampleInputFile">&nbsp;
                </p>
            </div>

        </div>

        <!--fourth container-->
        <div class="container">

            <div class="row ptext">
                <label>Missed Appointments</label> <br />
            </div>

            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px;">
                    Missed appointments become a burden on our small independent dental hygiene clinic. Please give us as much notice as
                    possible when needing to change or cancel an appointment. Any appointment changed or canceled withing 48 hours
                    may be subject to a $50.00 cancellation fee. Any missed appointment will be charged a $5O.OO no show appointment
                    fee.
                </p>
            </div>
            <div class="row pujatop">
            </div>
            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                    |, <input type="text" style="width: 500px;" name="name4" id="exampleInputFile">&nbsp;&nbsp;&nbsp;(print name) willgive as much notice as possible when altering my
                    appointment. I understand that a $50.00 cancellation/no show fee may apply.
                </p>
            </div>

            <div class="row para">
                <p style="font-size: 22px; font-weight: 900px; padding-top: 10px;">
                    Signature: <input type="text" style="width: 500px;" name="signature4" id="exampleInputFile">&nbsp;&nbsp;Date:  <input type="datetime-local" style="width: 400px;" name="date4" id="exampleInputFile">&nbsp;
                </p>
            </div>

        </div>

        <div class="pujaspace"></div>
          <!--<div class="container">
            <div class="row text-center">
            <div class="row pujaspace">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="exampleInputFile">Reviewed By: </label>
                        </div>
                        <div class="col-sm-9">
                            <input type="file" style="width: 400px;" name="Reviewed" id="exampleInputFile">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="exampleInputFile">Date: </label>
                        </div>
                        <div class="col-sm-10">
                            <input type="date" style="width: 400px;" name="Date1" id="exampleInputFile">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>-->


        <!--    start of 3rd of first container-->
        <div class="container">

            <div class="row">
                <div class="pujaspace"></div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary uzz">Submit Patient Informed Consent Form</button>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        <!-- <button type="submit" class="btn btn-default">Sign in</button>-->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<div class="pujaspace1"></div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
