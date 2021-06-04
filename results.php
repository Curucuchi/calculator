<?php
// start session
session_start();
// Grabbing input from user
$num01 = filter_input(INPUT_GET,'num01',FILTER_VALIDATE_INT);
$num02 = filter_input(INPUT_GET,'num02',FILTER_VALIDATE_INT);
$oper = filter_input(INPUT_GET,'oper');
//Set session variables to user input
$_SESSION['num1'] = $num01;
$_SESSION['num2'] = $num02;
$_SESSION['opera'] = $oper;
$_SESSION['answer'] = calculations($num01,$oper, $num02);

//function doing calculations based on which operation user chooses
function calculations($num01,$oper, $num02){
    switch ($oper) {
        case 'add':
            $sum = $num01 + $num02;
            break;

            case 'sub':
                $sum = $num01 - $num02;
                break;

                case 'div':
                    $sum = $num01 / $num02;
                    break;
        
        default:
            $sum = "There was an error";
            break;
    }
    return $sum;
}

header('Location: index.php');