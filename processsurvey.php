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

<title>Successfully Inserted</title>

    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

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

             <a name="about"></a>
             <div class="intro-header">
                 <div class="container">

                     <div class="row">
                         <div class="col-lg-12">
                             <div class="intro-message">
                                 <h1>Done!</h1>
                                 <h3>Youve been inserted</h3>

                             </div>
                         </div>
                     </div>

                 </div>


             </div>





</body>

</html>

<?php


/////// database variables
$servername = "localhost"; 
$username   = "root";
$password   = "";
$dbname     = "youthsurvey";
$table      = "survey";


/// connect to database
$connection = new mysqli($servername, $username, $password, $dbname);


/////check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//// processing variables
$name                                             = $_POST['name'];
$address                                          = $_POST['address'];
$lga                                              = $_POST['lga'];
$sex                                              = $_POST['sex'];
$agelastbirthday                                  = $_POST['agelastbirthday'];
$relationship                                     = $_POST['relationship'];
$maritalstatus                                    = $_POST['maritalstatus'];
$attendanceatformalschool                         = $_POST['attendanceatformalschool'];
$highestlevelreached                              = $_POST['highestlevelreached'];
$job                                              = $_POST['job'];
$otherjob                                         = $_POST['otherjob'];
$holdingownedbyholder                             = $_POST['holdingownedbyholder'];
$numberoffarms                                    = $_POST['numberoffarms'];
$sizeofeachfarm                                   = $_POST['sizeofeachfarm'];
$cropfarming                                      = $_POST['cropfarming'];
$livestockorpoultry                               = $_POST['livestockorpoultry'];
$fishfarming                                      = $_POST['fishfarming'];
$forestry                                         = $_POST['forestry'];
$otherholdings                                    = $_POST['otherholdings'];
$economicactivities                               = $_POST['economicactivities'];
$holdinglocated                                   = $_POST['holdinglocated'];
$ownotherholdings                                 = $_POST['ownotherholdings'];
$seasonoffarming                                  = $_POST['seasonoffarming'];
$typeoftenure                                     = $_POST['typeoftenure'];
$ownerlikepossesion                               = $_POST['ownerlikepossesion'];
$formalityland                                    = $_POST['formalityland'];
$landtypeusedforfarming                           = $_POST['landtypeusedforfarming'];
$creditfacilities                                 = $_POST['creditfacilities'];
$statethesource                                   = $_POST['statethesource'];
$refused                                          = $_POST['refused'];
$givenrefusal                                     = $_POST['givenrefusal'];
$farmno                                           = $_POST['farmno'];
$nameofcrop                                       = $_POST['nameofcrop'];
$no                                               = $_POST['no'];
$nameofunit                                       = $_POST['nameofunit'];
$cultivatingmorecrops                             = $_POST['cultivatingmorecrops'];
$numberofcropstobeplanted                         = $_POST['numberofcropstobeplanted'];
$farmno1                                          = $_POST['farmno1'];
$nameofcrop1                                      = $_POST['nameofcrop1'];
$no1                                              = $_POST['no1'];
$nameofunit1                                      = $_POST['nameofunit1'];
$farmimplementyouuse                              = $_POST['farmimplementyouuse'];
$harvestingimplement                              = $_POST['harvestingimplement'];
$transportation                                   = $_POST['transportation'];
$workersonyourfarm                                = $_POST['workersonyourfarm'];
$usedfertilizer                                   = $_POST['usedfertilizer'];
$reasonnotusingfertilizer                         = $_POST['reasonnotusingfertilizer'];
$otherreason                                      = $_POST['otherreason'];
$organicorinorganicfertilizer                     = $_POST['organicorinorganicfertilizer'];
$inorganicfertilizeryouuse                        = $_POST['inorganicfertilizeryouuse'];
$doyouuseimprovedseed                             = $_POST['doyouuseimprovedseed'];
$dryorrainingseasonfarming                        = $_POST['dryorrainingseasonfarming'];
$chemicalfertilizer                               = $_POST['chemicalfertilizer'];
$farmmanure                                       = $_POST['farmmanure'];
$doyouuseimprovedseedlings                        = $_POST['doyouuseimprovedseedlings'];
$duringrainingseasonfarming                       = $_POST['duringrainingseasonfarming'];
$duringdryseasonfarming                           = $_POST['duringdryseasonfarming'];
$doyoukeeplivestock                               = $_POST['doyoukeeplivestock'];
$held                                             = $_POST['held'];
$islivestockbeingkeptbelongtoyou                  = $_POST['islivestockbeingkeptbelongtoyou'];
$totalnoofeachcloseoflivestock                    = $_POST['totalnoofeachcloseoflivestock'];
$doyoukeepanypoultry                              = $_POST['doyoukeepanypoultry'];
$totalnumberofeachtypeofpoultrykept               = $_POST['totalnumberofeachtypeofpoultrykept'];
$doyouhaveaccesstoveterinaryservices              = $_POST['doyouhaveaccesstoveterinaryservices'];
$whatarethesourcesofyourvaccinedrugs              = $_POST['whatarethesourcesofyourvaccinedrugs'];
$howdoyougetyourlivestockfeed                     = $_POST['howdoyougetyourlivestockfeed'];
$whatisyourmethodofproduction                     = $_POST['whatisyourmethodofproduction'];
$howdoyougettheservicesofavetassistant            = $_POST['howdoyougettheservicesofavetassistant'];
$fishfarmingcarriedoutinyourholding               = $_POST['fishfarmingcarriedoutinyourholding'];
$whattypeoffishfarmingdoyoudo                     = $_POST['whattypeoffishfarmingdoyoudo'];
$sourcesoffingerlingsfeed                         = $_POST['sourcesoffingerlingsfeed'];
$howdoyouprepareyourlandforfarming                = $_POST['howdoyouprepareyourlandforfarming'];
$farmingsystemoperated                            = $_POST['farmingsystemoperated'];
$doyouhaveaccesstoimprovedseeds                   = $_POST['doyouhaveaccesstoimprovedseeds'];
$nameandsourceofseeds                             = $_POST['nameandsourceofseeds'];
$howdoyouplantyourseeds                           = $_POST['howdoyouplantyourseeds'];
$ifmechanicalnameimplementsused                   = $_POST['ifmechanicalnameimplementsused'];
$howdoyoucontrolweed                              = $_POST['howdoyoucontrolweed'];
$nameofherbicideofimplement                       = $_POST['nameofherbicideofimplement'];
$namecroppestsencounteredonyourholding            = $_POST['namecroppestsencounteredonyourholding'];
$howdoyouapplythesepesticides                     = $_POST['howdoyouapplythesepesticides'];
$howdoyouapplyfertilizeronyourholding             = $_POST['howdoyouapplyfertilizeronyourholding'];
$howdoyouharvestcrop                              = $_POST['howdoyouharvestcrop'];
$specifycropforwhichyouuseamechanicaldevice       = $_POST['specifycropforwhichyouuseamechanicaldevice'];
$howdoyouhandleexcessfarmproduce                  = $_POST['howdoyouhandleexcessfarmproduce'];
$ifprocessingnamefacility                         = $_POST['ifprocessingnamefacility'];
$ifstoragenamefacility                            = $_POST['ifstoragenamefacility'];
$cropea                                           = $_POST['cropea'];
$livestockea                                      = $_POST['livestockea'];
$othersea                                         = $_POST['othersea'];
$howoftendoestheeavisit                           = $_POST['howoftendoestheeavisit'];
$howdoyoudisposeofyourphone                       = $_POST['howdoyoudisposeofyourphone'];
$howcloseisthenearestmarkettoyourholding          = $_POST['howcloseisthenearestmarkettoyourholding'];
$howgoodisaccesstothemarket                       = $_POST['howgoodisaccesstothemarket'];
$isgovernmentdoingenoughtoassisttheruralfarmer    = $_POST['isgovernmentdoingenoughtoassisttheruralfarmer'];
$feedback                                         = $_POST['feedback'];
$constraintss                                     = $_POST['constraintss'];


//// insert data
$query = "INSERT INTO $table "."VALUES('$name','$address','$lga','$sex','$agelastbirthday',
'$relationship','$maritalstatus','$attendanceatformalschool','$highestlevelreached','$job',
'$otherjob','$holdingownedbyholder','$numberoffarms','$sizeofeachfarm','$cropfarming',
'$livestockorpoultry','$fishfarming','$forestry','$otherholdings','$economicactivities',
'$holdinglocated','$ownotherholdings','$seasonoffarming','$typeoftenure','$ownerlikepossesion',
'$formalityland','$landtypeusedforfarming','$creditfacilities','$statethesource','$refused',
'$givenrefusal','$farmno','$nameofcrop','$no','$nameofunit','$cultivatingmorecrops',
'$numberofcropstobeplanted','$farmno1','$nameofcrop1','$no1','$nameofunit1',
'$farmimplementyouuse','$harvestingimplement','$transportation','$workersonyourfarm',
'$usedfertilizer','$reasonnotusingfertilizer','$otherreason','$organicorinorganicfertilizer',
'$inorganicfertilizeryouuse','$doyouuseimprovedseed','$dryorrainingseasonfarming',
'$chemicalfertilizer','$farmmanure','$doyouuseimprovedseedlings','$duringrainingseasonfarming',
'$duringdryseasonfarming','$doyoukeeplivestock','$held','$islivestockbeingkeptbelongtoyou',
'$totalnoofeachcloseoflivestock','$doyoukeepanypoultry','$totalnumberofeachtypeofpoultrykept',
'$doyouhaveaccesstoveterinaryservices','$whatarethesourcesofyourvaccinedrugs','$howdoyougetyourlivestockfeed',
'$whatisyourmethodofproduction','$howdoyougettheservicesofavetassistant',
'$fishfarmingcarriedoutinyourholding','$whattypeoffishfarmingdoyoudo','$sourcesoffingerlingsfeed',
'$howdoyouprepareyourlandforfarming','$farmingsystemoperated','$doyouhaveaccesstoimprovedseeds',
'$nameandsourceofseeds','$howdoyouplantyourseeds','$ifmechanicalnameimplementsused','$howdoyoucontrolweed',
'$nameofherbicideofimplement','$namecroppestsencounteredonyourholding','$howdoyouapplythesepesticides',
'$howdoyouapplyfertilizeronyourholding','$howdoyouharvestcrop','$specifycropforwhichyouuseamechanicaldevice',
'$howdoyouhandleexcessfarmproduce','$ifprocessingnamefacility','$ifstoragenamefacility','$cropea',
'$livestockea','$othersea','$howoftendoestheeavisit','$howdoyoudisposeofyourphone',
'$howcloseisthenearestmarkettoyourholding','$howgoodisaccesstothemarket',
'$isgovernmentdoingenoughtoassisttheruralfarmer','$feedback','$constraintss')";


/// error query
mysqli_query($connection, $query)
or die("Error! Error! Error!");


?>
