<!doctype html>
<html lang="en">
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Survey is a system designed to take out survey questions.">
    <meta name="author" content="Survey System">
    <link rel="icon" href="img/Logo.png">
  
    <title>Thank you</title>
     
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


  </head>

  <body>

    <div class="container">

        <div class="row" style="margin-top: 20px;" align="center">
           <a href="index.php">
            <img src="img/survey.png" style="height:500" width="500">
           </a>
        </div>

<p align="center" style="margin-top:15px;font-family:'Courier New'; font-size: large">

   <?php 

    /// Send mail
      $name = $_POST['name'];
      $email = $_POST['email'];
      $feedback = $_POST['feedback'];
      $formcontent="From: $name \n Message: $feedback";
      $recipient = "kingsleyanamelechi@gmail.com";
      $subject = "Feedback";
      $mailheader = "From: $email \r\n";
      mail($recipient, $subject, $formcontent, $mailheader) or die("Error in sending message!");
      echo "Thank you for your feedback!";
 
   ?>

</>


    </div>

  </body>

</html>


