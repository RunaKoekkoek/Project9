<?php
//function to save the array the 'winkelwagen.json' file
function SaveArray($p_aSaveArray) {
    //change string into json compatible data
    $aJSONArray = json_encode($p_aSaveArray);
    //open the file in writing mode
    $file = fopen('winkelwagen.json','w');
    //change the files content of the opened file to what it already was + the new array
    file_put_contents('winkelwagen.json', $aJSONArray);
    //close the file
    fclose($file);
}

//function to load the 'winkelwagen.json' file
function LoadArray() {
    //open the file in reading mode
    $file = fopen('winkelwagen.json','r');
    //get the content of the opened file
    $aJSONArray = file_get_contents('winkelwagen.json');
    //change the read string to php compatible data
    $aReadArray = json_decode($aJSONArray,TRUE);
    //close the file
    fclose($file);
    //save the loaded data to be used in the page
    return($aReadArray);
}

if(!empty($_POST)){
    $sSoupBase      = $_POST['sSoupBaseName'];
    $sVegtable      = $_POST['sVegtableName'];
    $sMeat          = $_POST['sMeatName'];
    $fPrijs         = $_POST['fPrijsSoupBase'];
    $fPrijs         = $fPrijs + $_POST['fPrijsVegtable'];
    $fPrijs         = $fPrijs + $_POST['fPrijsMeat'];
    $aWinkelwagen   = LoadArray();
    $iRecordCounter = count($aWinkelwagen);
    $aWinkelwagen[$iRecordCounter] = array($sSoupBase,$sVegtable,$sMeat,$fPrijs);
    //save the array to the file
    SaveArray($aWinkelwagen);
    header('location: Bestelpage.php');
}
$iTotaal = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hot Pot</title>
    <link rel="stylesheet" href="./stylesheet/stylesheet.css">
    <link rel="shortcut icon" href="stylesheet/images/favicon.ico"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!--start of the nav bar-->
<div class="logo">
    <img src="stylesheet/images/logo.PNG">        <!--the logo-->
    <img class="openGif" src="stylesheet/images/open.gif" width="8%">
    <p4></p4>
</div>
<ul style=>
  <li><a href="index.html">Home</a></li>
  <li><a href="HotPot.php">Hot Pot</a></li>
  <li><a href="Sushi.php">Sushi</a></li>
  <li><a href="InstantNoodles.php">Noodles</a></li>
  <li><a href="Bestelpage.php">Bestellen</a></li>
</ul>
<!--end of the navbar-->
<div>
    <!--steps for your own hot pot-->
<h2>Producten</h2> <div><img src="stylesheet/images/DOrFwp.gif" class="zawardo"></p></div>
<h4>Hot Pot Soup</h4><pre><p style="text-align: right; position: relative;"<br>
<h3>Step 1</h3>
<p>Select your soup base</p>
<h3>Step 2</h3>
<p>choose your ingriedients</p>
<h3>Step 3</h3>
<p>You start doing the hot pot</p>
<br></div>
<!--images i used-->
<div>
<img src="stylesheet/images/FatalIdioticGypsymoth-max-1mb.gif" class="" muda width="33%">
<img src="stylesheet/images/giphy.gif" class="lick" align="right">
</div>
<div align="center">
<!--the ingridient part of the site-->
         <h2>Soup base</h2>
    <form method="POST">
        <h3>half-half soup base</h3>
        <input type="hidden" name="fPrijsSoupBase" value="5.50">5,50<br>
        <input type="radio" name="sSoupBaseName" value="half-half soup base">
        <h3>spicy soup base</h3>
        <input type="hidden" name="fPrijsSoupBase" value="4.50">4,50<br>
        <input type="radio" name="sSoupBaseName" value="spicy soup base">
        <h3>normal soup base</h3>
        <input type="hidden" name="fPrijsSoupBase" value="4.00">4,00<br>
        <input type="radio" name="sSoupBaseName" value="spicy soup base">


        <h2>Vegtables</h2>

        <h3>Chives</h3>
        <input type="hidden" name="fPrijsVegtable" value="5.50">2,40<br>
        <input type="radio" name="sVegtableName" value="Chives">
        <h3>Asperges</h3>
        <input type="hidden" name="fPrijsVegtable" value="2.10">2,10<br>
        <input type="radio" name="sVegtableName" value="Asperges">
       <h3>Union</h3>
        <input type="hidden" name="fPrijsVegtable" value="1.80">1,80<br>
        <input type="radio" name="sVegtableName" value="Union">

        <h2>Meat</h2>

       <h3>Steak</h3>
        <input type="hidden" name="fPrijsMeat" value="3.40">3,40<br>
        <input type="radio" name="sMeatName" value="Steak">
        <h3>chicken</h3>
        <input type="hidden" name="fPrijsMeat" value="3.20">3,20<br>
        <input type="radio" name="sMeatName" value="Chicken">
        <h3>Pork</h3>
        <input type="hidden" name="fPrijsMeat" value="3.10">3,10<br>
        <input type="radio" name="sMeatName" value="Pork">
        <br> <button type="submit">bestel</button><br>
    </form>
    <!--end of the indgridient part-->
</div>
<p style="text-align: center;"><img src="stylesheet/images/static-assets-upload1966055015942721094.gif" class="cars"></p>
</body>
</html>