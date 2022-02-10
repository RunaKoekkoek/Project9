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
    $sCaliRoll      = $_POST['sCaliName'];
    $sRainbowRoll   = $_POST['sRainbowName'];
    $sTempRoll      = $_POST['sTempName'];
    $fPrijs         = $_POST['fPrijsCaliroll'];
    $fPrijs         = $fPrijs + $_POST['fPrijsRainbowroll'];
    $fPrijs         = $fPrijs + $_POST['fPrijsTemproll'];
    $aWinkelwagen   = LoadArray();
    $iRecordCounter = count($aWinkelwagen);
    $aWinkelwagen[$iRecordCounter] = array($sCaliRoll,$sRainbowRoll,$sTempRoll,$fPrijs);
    //save the array to the file
    SaveArray($aWinkelwagen);
    header('location: Bestelpage.php');
}
$iTotaal = 0;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <link rel="shortcut icon" href="stylesheet/images/favicon.ico"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Sushi</title>
</head>

<body>
    <div class="logo">
        <img src="./stylesheet/images/logo.PNG">
        <img class="openGif" src="./stylesheet/images/open.gif" width="8%">
        <p4></p4>
    </div>
    <ul style="">
        <li><a href="Index.html">Home</a></li>
        <li><a href="HotPot.php">Hot Pot</a></li>
        <li><a href="Sushi.php">Sushi</a></li>
        <li><a href="InstantNoodles.php">Noodles</a></li>
        <li><a href="bestelpage.php">Bestellen</a></li>
    </ul>
    <form method="POST">
        <div class="container">
            <div class="group-header">
                <span>12 oz.</span>
                <span>34 oz.</span>
            </div>

            <h3>
                <span>California Roll<img class="img" src="./stylesheet/images/Cali.jpg" alt="CaliRoll"></span>
                <span>10Rolls<input type="hidden" name="fPrijsCaliroll" value="25"> $25 <br><input type="radio"
                        name="sCaliName" value="Caliroll"></span>
                <span>------</span>
                <span>15Rolls<input type="hidden" name="fPrijsCaliroll" value="30"> $30 <br> <input
                        type="radio" name="sCaliName" value="Caliroll"></span>
                <span>----</span>
                <button type="submit">Order</button>
            </h3>
            <p>A California roll is usually made with crab and avocado. If you purchase a California roll in a
                supermarket,
                you may get one with mayonnaise in it. In the California roll above, there is crab, ahi (tuna), and
                avocado.
                Sometimes it will be served with a slab of ahi on top.</p>
            <h3>
                <span>Tempura Roll <img class="img" src="./stylesheet/images/Roll1.jpg" alt="TempRoll"></span>
                <span>8Rolls <input type="hidden" name="fPrijsTemproll" value="15"> $15 <br><input type="radio"
                        name="sTempName" value="Temproll"></span>
                <span>------</span>
                <span>16Rolls <input type="hidden" name="fPrijsTemproll" value="9"> $9 <br><input type="radio"
                        name="sTempName" value="Temproll"></span>
                <span>----</span>
                <button type="submit">Order</button>
            </h3>
            <p>Tempura is a Japanese style of deep frying that uses a light batter. As shown in the photo above, one way
                to
                make this crunchy delight is to make the entire roll tempura. In the photo above, the chef created
                sashimi
                rolls, covered it in tempura batter, and deep-fried the whole thing.</p>
            <!-- <h3>
                <span>Philly Roll<img class="img" src="./Images/Philly.jpg" alt="PhillyRoll"></span>
                <span>12$ for 5Rolls <input type="hidden" name="fPrijs" value=""></span>
                <span>------</span>
                <span> 17$ for 10Rolls <input type="hidden" name="fPrijs" value=""></span>
                <span>----</span>
                <button>Order</button>
            </h3>
            <p>The Philly roll is a popular kind of sushi that you will find on many menus around the country. It
                usually
                has salmon, cream cheese, and cucumber, though it might come with other ingredients like avocado, onion,
                and
                sesame seed. It's named the Philly roll because of Philadelphia Cream Cheese, not because it's from
                Philadelphia.</p>
            <h3>
                <span>Inari<img class="img" src="./Images/Inari.jpg"></span>
                <span>16$ for 10Rolls <input type="hidden" name="fPrijs" value=""></span>
                <span>------</span>
                <span>25$ for 20Rolls <input type="hidden" name="fPrijs" value=""></span>
                <span>----</span>
                <button>Order</button>
            </h3>
            <p>Inari is breaded-rice sushi. The bread is thin and sweet and sometimes filled with vegetables such as
                carrot
                strips or cucumber. Recommended for a light snack</p> -->
            <h3>
                <span>Rainbow Roll <img class="img" src="./stylesheet/images/RainbowR.jpg"></span>
                <span>15Rolls <input type="hidden" name="fPrijsRainbowroll" value="23"> $23 <br><input type="radio"
                        name="sRainbowName" value="Rainbowroll"></span>
                <span>------</span>
                <span>24Rolls <input type="hidden" name="fPrijsRainbowroll" value="32"> $32 <br><input type="radio"
                        name="sRainbowName" value="Rainbowroll"></span>
                <span>----</span>
                <button type="submit">Order</button>
            </h3>
            <p>A rainbow roll is a sushi roll topped with many different types of sashimi.
                The sushi roll underneath the sashimi is usually a California roll (avocado and crab).
                To make this type of sushi, the chef prepares a California roll and adds the toppings afterwards.</p>
    </form>
    </div>
</body>

</html>