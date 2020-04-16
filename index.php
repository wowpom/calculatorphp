<?php
$number_one = $_GET['number_one'];
$number_two = $_GET['number_two'];
$operation = $_GET['operation'];

switch($operation){
    case '+' :{
        $result = $number_one + $number_two;
        break;
    }
    case '-' :{
        $result = $number_one - $number_two;
        break;
    }
    case '*' :{
        $result = $number_one * $number_two;
        break;
    }
    case '/' :{
        $result = $number_one / $number_two;
        break;
    }
}
$result = round($result, 2);
echo "Результат вычислений $result";

?>