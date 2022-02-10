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
    $sSmaak         = $_POST['sNoodleSmaak'];
    $fPrijs         = $_POST['fPrijsNoodles'];
    $empty1         = '';
    $empty2         = '';
    $aWinkelwagen   = LoadArray();
    $iRecordCounter = count($aWinkelwagen);
    $aWinkelwagen[$iRecordCounter] = array($sSmaak,$empty1,$empty2,$fPrijs);
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
    <link rel="stylesheet" href="./stylesheet/stylesheet.css">
    <link rel="shortcut icon" href="stylesheet/images/favicon.ico"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Instant Noodles</title>
</head>

<body>
<div class="logo">
    <img src="stylesheet/images/logo.PNG">
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
<!--How to order noodles-->
<div class="NoodlesTitle">
    <h1>Hier kunt u uw Noodles bestellen!<BR></h1>
</div>
<br>
<!--Images of the noodles-->
<!--Ordering the "smaak" of the noodles on the website-->
<div align="center">
<!--seafood smaak-->
  <div class="InstantNoodlesRow1">
    <div class="InstantNoodlesColumn1">
      <h2>seafood smaak</h2>
      <img src="./stylesheet/images/InstantNoodles2.1.png" alt="Instant Noodles" style="width:100%">
      <form method="POST">
        <input type="hidden" name="fPrijsNoodles" value="0.45">€ 0,45<br><br>
        <input type="submit" name="sNoodleSmaak"  value="Seafood smaak">
      </form>
      <p>aan winkelwagen toevoegen</p>
    </div>
<!--duck smaak-->
    <div class="InstantNoodlesColumn1">
      <h2>duck smaak</h2>
      <img src="./stylesheet/images/InstantNoodles2.2.png" alt="Instant Noodles" style="width:100%">
      <form method="POST">
        <input type="hidden" name="fPrijsNoodles" value="0.45">€ 0,45<br><br>
        <input type="submit"  name="sNoodleSmaak"  value="Duck smaak">
      </form>
      <p>aan winkelwagen toevoegen</p>
    </div>
<!--beef smaak-->
    <div class="InstantNoodlesColumn1">
      <h2>beef smaak</h2>
      <img src="./stylesheet/images/InstantNoodles2.3.png" alt="Instant Noodles" style="width:100%">
      <form method="POST">
        <input type="hidden" name="fPrijsNoodles" value="0.45">€ 0,45<br><br>
        <input type="submit"  name="sNoodleSmaak"  value="Beef smaak">
      </form>
      <p>aan winkelwagen toevoegen</p>
    </div>
  </div>
<!--kimchi smaak-->
  <div class="InstantNoodlesRow2">
    <div class="InstantNoodlesColumn2">
      <h2>kimchi smaak</h2>
      <img src="./stylesheet/images/InstantNoodles2.4.png" alt="Instant Noodles" style="width:100%">
      <form method="POST">
        <input type="hidden" name="fPrijsNoodles" value="0.45">€ 0,45<br><br>
        <input type="submit"  name="sNoodleSmaak"  value="Kimchi smaak">
      </form>
      <p>aan winkelwagen toevoegen</p>
    </div>
<!--chicken smaak-->
    <div class="InstantNoodlesColumn2">
      <h2>chicken smaak</h2>
      <img src="./stylesheet/images/InstantNoodles2.5.png" alt="Instant Noodles" style="width:100%">
      <form method="POST">
        <input type="hidden" name="fPrijsNoodles" value="0.45">€ 0,45<br><br>
        <input type="submit"  name="sNoodleSmaak"  value="Chicken smaak">
      </form>
      <p>aan winkelwagen toevoegen</p>
    </div>
<!--curry smaak-->
    <div class="InstantNoodlesColumn2">
      <h2>curry smaak</h2>
      <img src="./stylesheet/images/InstantNoodles2.6.png" alt="Instant Noodles" style="width:100%">
      <form method="POST">
        <input type="hidden" name="fPrijsNoodles" value="0.45">€ 0,45<br><br>
        <input type="submit"  name="sNoodleSmaak"  value="Curry smaak">
      </form>
      <p>aan winkelwagen toevoegen</p>
    </div>
  </div>

</body>

</html>