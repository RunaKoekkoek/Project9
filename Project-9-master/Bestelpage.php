<?php
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
    //run the function to reload the page
    PlaceOrder();
}
    $aWinkelwagen = LoadArray();
////Old work    
////Declaring variables
//$fPrijs;
//$sProduct;
//$sNoodles;
//$sSoupBase = $_POST["sSoupBaseName"];
//$sVegtable = $_POST["sVegtableName"];
//$sMeat = $_POST["sMeatName"];
//$sSushi;
////Switches, breaks and cases
////Switches and cases for the Product
//switch($sProduct){
//
//}
//
////Switches and cases for the Noodles
//switch($sNoodles){
//    case "Seafood":
//        $sNoodles="seafood";
//        break;
//    case "Duck":
//        $sNoodles="duck";
//        break;
//    case "Beef":
//        $sNoodles="beef";
//        break;
//    case "Kimchi":
//        $sNoodles="kimchi";
//        break;
//    case "Chicken":
//        $sNoodles="chicken";
//        break;
//    case "Curry":
//        $sNoodles="curry";
//        break;
//    default:
//        $sNoodles=0;
//        break;
//}
//
////Switches and cases for the HotPot
//switch($sSoupBase){
//    case"half-half soup base":
//        $sSoupBase="half-half soup base";
//        break;
//    case"spicy soup base":
//        $sSoupBase="spicy soup base";
//        break;
//    case"normal soup base":
//        $sSoupBase="normal soup base";
//        break;
//    default:
//        $sSoupBase=0;
//        break;
//}
//switch($sVegtable){
//    case"Chives":
//        $sVegtable="Chives";
//        break;
//    case"Asperges":
//        $sVegtable="Asperges";
//        break;
//    case"union":
//        $sVegtable="union";
//        break;
//    default:
//        $sVegtable=0;
//        break;
//}
//switch($sMeat){
//    case"Steak":
//        $sMeat="Steak";
//        break;
//    case"chicken":
//        $sMeat="chicken";
//        break;
//    case"pork":
//        $sMeat="pork";
//        break;
//    default:
//        $sMeat=0;
//        break;
//}
//
////Switches and cases for the Sushi
//switch($sSushi){
//    case "CaliR":
//        $sSushi="CaliR";
//        break;
//    case "TempR":
//        $sSushi="TempR";
//        break;
//    case "PhillyR":
//        $sSushi="PhillyR";
//        break;
//    case "Inari":
//        $sSushi="Inari";
//        break;
//    case "RanibowR":
//        $sSushi="RainbowR";
//        break;
//    default:
//        $sSushi=0;
//        break;
//}
////End of old work
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
<br>
</body>
</html>

<?php
if (!empty($aWinkelwagen[0])) {
    echo("<table width='25%' border='1'>");
    foreach ($aWinkelwagen as $iKey => $aContentArray) {
        echo("<tr>"
            . "<td>" . $aContentArray[0] . "</td>"                                                 //product naam
            . "<td>" . $aContentArray[1] . "</td>"                                                 //SoupBase naam
            . "<td>" . $aContentArray[2] . "</td>"                                                 //Vegtable naam
            . "<td align='right'> € " . number_format($aContentArray[3],2,".",""). "</td>"         //Product prijs
            . "</tr>");
    }
    echo("</table>");
} else {
    echo("looking prety empty here");
}


?>
<!DOCTYPE html>
<html lang="en"><br>
<button type="submit">bestellen</button>
</html>