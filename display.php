<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */
$productQnty = filter_input(INPUT_POST, 'productQnty', FILTER_SANITIZE_NUMBER_INT);
$unitPrice = filter_input(INPUT_POST, 'unitPrice', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
$custName = filter_input(INPUT_POST, 'custName', FILTER_SANITIZE_STRING);
$custAddr = filter_input(INPUT_POST, 'custAddr', FILTER_SANITIZE_STRING);
$creditCard = filter_input(INPUT_POST, 'creditCard', FILTER_SANITIZE_STRING);
$ccNumber = filter_input(INPUT_POST, 'ccNumber', FILTER_SANITIZE_NUMBER_INT);
$repeatCcNumber = filter_input(INPUT_POST, 'repeatCcNumber', FILTER_SANITIZE_NUMBER_INT);
$totalPrice = floatval($unitPrice) * $productQnty;
$totalPrice = number_format($totalPrice, 2)
?>



<!DOCTYPE html>
<html>
<head>
    <title>Display</title>
    
</head>
<body>
    <div class="container">
    <?php 
    echo nl2br($custName.", you placed an order with ".
        $creditCard." for a total of $".$totalPrice.
        ".\r\nYour order will be shipped to\r\n".
        $custAddr);
    
    ?>
    
    <!-- testing, ignore
    <?php echo $productQnty?>
    <?php echo $unitPrice?>
    <?php echo $custName?>
    <?php echo $custAddr?>
    <?php echo $creditCard?>
    <?php echo $ccNumber?>
    <?php echo $repeatCcNumber?>
    <?php echo $totalPrice?>
    -->
    </div>
</body>
</html>