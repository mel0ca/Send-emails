<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

//instance
$mail = new PHPMailer(true);

try {
    
    if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'adnanuqba@gmail.com';                    
    $mail->Password   = 'usxx lrwe dtly chak';                             
    $mail->Port       = 587;     
    //sender                         
    $mail->setFrom($email, $name);
    $mail->addAddress($email);   
    //recepient 
    $mail->addAddress('adnanuqba@gmail.com');      
    $mail->addReplyTo('info@example.com', 'Information');

    //content
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

    }
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Send emails with PHP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    " rel="stylesheet">


    <meta name="theme-color" content="#712cf9">

   </head>
   <body>
        <div class="container marketing">

        <!--Section: Contact v.2-->
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5 mx-auto">
                        <form   action="index.php" method="POST">

                            <!--Grid row-->

                                <!--Grid column-->
                                
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>

                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                <!--Grid column-->

                                <!--Grid column-->
                            
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>

                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                            
                            <!--Grid row-->

                            <!--Grid row-->
                        
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>

                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                            
                            <!--Grid row-->

                            <!--Grid row-->

                                <!--Grid column-->

                                    <div class="md-form">
                                        <label for="message">Your message</label>

                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    </div>

                            </div>
                            <!--Grid row-->

                            <div class="text-center text-md-left">
                                <button name="submit" class="w-50 btn btn-lg btn-primary mt-4"  type="submit">Send</button>                    </div>
                            <div class="status"></div>

                        </form>

                    
                    </div>
                    <!--Grid column-->

                </div>

            </section>
        <!--Section: Contact v.2-->


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js
        "></script>
    </body>
</html>
