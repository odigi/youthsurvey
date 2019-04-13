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

    <title>Take your survey</title>

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>

<body style="font-family: Lato;">

<div class="container" align="center">
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
                        <h1>Take your Survey!</h1>
                        <hr class="intro-divider">

                    </div>
                </div>
            </div>

        </div>

    </div>



    <form method ="post" action="processsurvey.php">

        <div class="row" align="center">
            <h3>
                Please do not leave any space blank
            </h3>
            <p>
                This questionnaire is meant for data collection on youth empowerment/agricultural holdings of the rural people in Nigeria
            </p>


        </div>

        <table class="table table-bordered table-hover" style="margin: 0 auto; margin-top: 8px; width: 800px; ">
            <tbody>
                <tr>
                    <td colspan="2"><b>Demographic Data</b></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input class="form-control" name="title" type="text" placeholder="E.g Mr, Ms, Mrs, Master" required></td>
                </tr>
                <tr>
                    <td>First name</td>
                    <td><input class="form-control" name="name" type="text" required></td>
                </tr>
                <tr>
                    <td>Middle name</td>
                    <td><input class="form-control" name="middlename" type="text" required></td>
                </tr>
                <tr>
                    <td>Maiden name</td>
                    <td><input class="form-control" name="maidenname" type="text" required></td>
                </tr>
                <tr>
                    <td>Other names</td>
                    <td><input class="form-control" name="name" type="text" required></td>
                </tr>
                <tr>
                    <td>Previous Surname</td>
                    <td><input class="form-control" name="previoussurname" type="text" required></td>
                </tr>
                <tr>
                    <td>Previous First name</td>
                    <td><input class="form-control" name="previousname" type="text" required></td>
                </tr>
                <tr>
                    <td>Previous Middle name</td>
                    <td><input class="form-control" name="previousmiddlename" type="text" required></td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td><input class="form-control" name="name" type="text" required></td>
                </tr>
                <tr>
                    <td>Birth Date</td>
                    <td><input class="form-control" name="dob" type="date" required></td>
                </tr>
                <tr>
                    <td>Birth Country</td>
                    <td><input class="form-control" name="birthcountry" type="text" required></td>
                </tr>
                <tr>
                    <td>Birth State</td>
                    <td><input class="form-control" name="birthstate" type="text" required></td>
                </tr>
                <tr>
                    <td>Birth LGA</td>
                    <td><input class="form-control" name="birthlga" type="text" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select class="form-control" required="" name="gender">
                            <option>----- Select -----</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option> 
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Maritial Status</td>
                    <td>
                        <select class="form-control" required="" name="maritialstatus">
                            <option>----- Select -----</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Widow</option>
                            <option>Widower</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Residence Status</td>
                    <td>
                        <select class="form-control" required="" name="residencestatus">
                            <option>----- Select -----</option>
                            <option>Naturalisation</option>
                            <option>Birth</option>
                            <option>Registration</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td>
                        <select class="form-control" required="" name="religion">
                            <option>----- Select -----</option>
                            <option>Christianity</option>
                            <option>Islam</option>
                            <option>Traditional</option>
                            <option>Athiest</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email address</td>
                    <td><input class="form-control" name="email" type="email" required></td>
                </tr>
                <tr>
                    <td>Telephone No</td>
                    <td><input class="form-control" name="phone" type="text" required></td>
                </tr>
                <tr>
                    <td>Native Spoken language</td>
                    <td><input class="form-control" name="nativelanguage" type="text" required></td>
                </tr>
                <tr>
                    <td>Other Spoken langauge</td>
                    <td><input class="form-control" name="otherlanguage" type="text" required></td>
                </tr>
                <tr>
                    <td>Education level</td>
                    <td>
                        <select class="form-control" required="" name="educationlevel">
                            <option>----- Select -----</option>
                            <option>None</option>
                            <option>Primary</option>
                            <option>Secondary</option>
                            <option>Tertiary</option>
                            <option>Post Graduate</option>
                            <option>Certification</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Profession</td>
                    <td><input class="form-control" name="profession" type="text" required></td>
                </tr>
                <tr>
                    <td>Employment Status</td>
                    <td>
                        <select class="form-control" required="" name="employmenystatus">
                            <option>----- Select -----</option>
                            <option>Unemployed</option>
                            <option>Employed</option>
                            <option>Pensioner</option>
                            <option>Self Employed</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Homeless</td>
                    <td>
                        <select class="form-control" required="" name="homeless">
                            <option>----- Select -----</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Document Type</td>
                    <td>
                        <select class="form-control" required="" name="documenttype">
                            <option>----- Select -----</option>
                            <option>National Insurance</option>
                            <option>Immigration Document</option>
                            <option>Nigerian Passport</option>
                            <option>Other Passport</option>
                            <option>Other travel document</option>
                            <option>Other national identity card</option>
                            <option>Any identity reference</option>
                            <option>Nigeria Driver License</option>
                            <option>Other designated document</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Document Number</td>
                    <td><input class="form-control" name="documentnumber" type="number" required></td>
                </tr>
                <tr>
                    <td>Document Expiry Date</td>
                    <td><input class="form-control" name="documentexpirydate" type="date" required></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Residence Data</b></td>
                </tr>
                <tr>
                    <td>Address line 1</td>
                    <td><input class="form-control" name="addressline1" type="text" required></td>
                </tr>
                <tr>
                    <td>Address line 2</td>
                    <td><input class="form-control" name="addressline2" type="text" required></td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td><input class="form-control" name="postalcode" type="text" required></td>
                </tr>
                <tr>
                    <td>Town</td>
                    <td><input class="form-control" name="town" type="text" required></td>
                </tr>
                <tr>
                    <td>LGA</td>
                    <td><input class="form-control" name="lga" type="text" required></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input class="form-control" name="country" type="text" required></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Origin Data</b></td>
                </tr>
                <tr>
                    <td>Relation</td>
                    <td>
                        <select class="form-control" required="" name="relation">
                            <option>----- Select -----</option>
                            <option>Self</option>
                            <option>Father</option>
                            <option>Mother</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td>Origin Place</td>
                    <td><input class="form-control" name="originplace" type="text" required></td>
                </tr>
                 <tr>
                    <td>Origin State</td>
                    <td><input class="form-control" name="originstate" type="text" required></td>
                </tr>
                <tr>
                    <td>Origin LGA</td>
                    <td><input class="form-control" name="originlga" type="text" required></td>
                </tr>
                 <tr>
                    <td>Origin Country</td>
                    <td><input class="form-control" name="origincountry" type="text" required></td>
                </tr>
                 <tr>
                     <td colspan="2"><b>Physical | Feature Data | Disability Data | Parent Data</b></td>
                </tr>
                 <tr>
                    <td>Father Surname</td>
                    <td><input class="form-control" name="fathersurname" type="text" required></td>
                </tr>
                <tr>
                    <td>Father Firstname</td>
                    <td><input class="form-control" name="fatherfirstname" type="text" required></td>
                </tr>
                <tr>
                    <td>Father Middle Name</td>
                    <td><input class="form-control" name="fathermiddlename" type="text" required></td>
                </tr>
                <tr>
                    <td>Father Identification Number</td>
                    <td><input class="form-control" name="fatherinumber" type="text" required></td>
                </tr>
                <tr>
                    <td>Mother Surname</td>
                    <td><input class="form-control" name="mothersurname" type="text" required></td>
                </tr>
                <tr>
                    <td>Mother First Name</td>
                    <td><input class="form-control" name="motherfirstname" type="text" required></td>
                </tr>
                <tr>
                    <td>Mother Middle Name</td>
                    <td><input class="form-control" name="mothermiddlename" type="text" required></td>
                </tr>
                <tr>
                    <td>Mother Maiden Name</td>
                    <td><input class="form-control" name="mothermaidenname" type="text" required></td>
                </tr>
                <tr>
                    <td>Mother Identification Number</td>
                    <td><input class="form-control" name="motherinumber" type="text" required></td>
                </tr>
                <tr>
                    <td>Guardian Surname</td>
                    <td><input class="form-control" name="guardiansurname" type="text" required></td>
                </tr>
                <tr>
                    <td>Guardian Firstname</td>
                    <td><input class="form-control" name="guardianfirstname" type="text" required></td>
                </tr>
                <tr>
                    <td>Guardian Middle Name</td>
                    <td><input class="form-control" name="guardianmiddlename" type="text" required></td>
                </tr>
                <tr>
                    <td>Guardian Identification Number</td>
                    <td><input class="form-control" name="guardianinumber" type="text" required></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Next of Kin Data</b></td>
                </tr>
                 <tr>
                    <td>Surname</td>
                    <td><input class="form-control" name="surname" type="text" required></td>
                </tr> 
                <tr>
                    <td>First Name</td>
                    <td><input class="form-control" name="firstname" type="text" required></td>
                </tr>
                 <tr>
                    <td>Middle Name</td>
                    <td><input class="form-control" name="middlename" type="text" required></td>
                </tr>
                 <tr>
                    <td>National Identification Number</td>
                    <td><input class="form-control" name="nationalidentificationnumber" type="text" required></td>
                </tr>
                 <tr>
                    <td>Address line 1</td>
                    <td><input class="form-control" name="addressline1" type="text" required></td>
                </tr>
                 <tr>
                    <td>Address line 2</td>
                    <td><input class="form-control" name="addressline2" type="text" required></td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td><input class="form-control" name="postalcode" type="text" required></td>
                </tr>
                <tr>
                    <td>Town</td>
                    <td><input class="form-control" name="town" type="text" required></td>
                </tr>
                <tr>
                    <td>LGA</td>
                    <td><input class="form-control" name="lga" type="text" required></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input class="form-control" name="country" type="text" required></td>
                </tr>
                <tr>
                    <td>Relation</td>
                    <td><input class="form-control" name="relation" type="text" required></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Card Financial Data</b></td>
                </tr>
                <tr>
                    <td>Card Type</td>
                    <td>
                        <select class="form-control" required="" name="cardtype">
                            <option>----- Select -----</option>
                            <option>Master</option>
                            <option>Visa</option>
                            <option>Verve</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Issuing Bank</td>
                    <td><input class="form-control" name="issuingbank" type="text" required></td>
                </tr>
                <tr>
                    <th colspan="2"><input class="btn btn-default" type="submit" name="submit" value="Submit"></th>
                </tr>
            </tbody>
        </table>

     </form>


</body>
</html>