<?php
function myCalculator($num01, $oper, $num02) {
    $sum;
    switch ($oper) {
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
         case "divi":
                $sum = $num01 / $num02;
                break;
        case "multi":
                $sum = $num01 * $num02;
                    break;
        default:
            $sum = "There was an error";
            break;
    }
    return $sum;
}

$num01 = isset($_GET["num01"]) ? $_GET["num01"] : 0;
$oper = isset($_GET["oper"]) ? $_GET["oper"] : "";
$num02 = isset($_GET["num02"]) ? $_GET["num02"] : 0;
$result = myCalculator($num01, $oper, $num02);

echo "Value: " . htmlspecialchars($result);
?>
