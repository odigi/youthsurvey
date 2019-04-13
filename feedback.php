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

    <title>Give us Feedback</title>

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>

<body style="font-family: Lato;">

<body class="container" align="center">
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php">Agric Youth Survey</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">Admin</a>
                    </li>
                    <li>
                        <a href="selectgeolocation.php">Take Survey</a>
                    </li>
                    <li>
                        <a href="feedback.php">Feedback</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>



    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Give us a feedback!</h1>
                        <hr class="intro-divider">

                        <form method="post" action="mail.php">
                            <table class="table table-bordered table-hover" style="margin:0 auto; margin-top:40px; width:450px;">
                                <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><input class="form form-control" name="name" type="text" null></td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td><input class="form form-control" name="email" type="email" null></td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td><textarea class="form-control"  name="feedback" rows="5" id="comment"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td><td><input class="btn btn-default" type="submit" value="Send"><input class="btn btn-default" type="reset" value="Clear"></td>
                                </tr>
                                </tbody>

                            </table>
                        </form>

                    </div>
                </div>
            </div>

        </div>


    </div>



</body>
</html>