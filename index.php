<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="container">
    <h1 class="title">Order Form</h1>
    <div id="errorSpace"></div>
    <form id="form" name ="orderForm" action="display.php" method="POST" onsubmit="return validateForm()">
        <table>
            <tr>
                <td class="labelTable">Product: </td>
                <td><input type="text" id="productName" name="productName" required></td>
            </tr>   
            <tr>
                <td class="labelTable">Product Quantity: </td>
                <td><select id="productQnty" name="productQnty">
                    </select></td>
            </tr>   
            <tr>
                <td class="labelTable">Unit Price: </td>
                <td><input type="text" name="unitPrice" required></td>
            </tr>
            <tr>
                <td class="labelTable">Name:</td>
                <td><input type="text" name="custName" required></td>
            </tr>
            <tr>
                <td class="labelTable">Shipping Address:</td>
                <td><textarea name="custAddr" rows="3" cols="40" required> </textarea></td>
            </tr>        
            <tr>
                <td class="labelTable">Credit Card:</td>
                <td><input type="radio" name="creditCard" value="Visa" checked>Visa<br>
                <input type="radio" name="creditCard" value="Master Card">Master Card<br>
                <input type="radio" name="creditCard" value="American Express">American Express<br>   
                <input type="radio" name="creditCard" value="Discover">Discover<br>   
                </td>
            </tr>         
            <tr>
                <td class="labelTable">Credit Card Number:</td>
                <td><input type="password" name="ccNumber" required></td>
            </tr>
            <tr>
                <td class="labelTable">Repeat Credit Card Number:</td>
                <td><input type="password" name="repeatCcNumber" required></td>
            </tr>
        </table>
        <input class="submitBtn" type="submit" value="Submit">
    </form>
</div>

 <script>/*
     $('#form').on('submit', function() {
    // check validation
    if (productName == "false") {
        return false;
    }
});*/
     
     for (var i=1; i < 11; i++) { 
         $('#productQnty').append('<option value="' + i + '">' + i +' </option>');
     }
 function validateForm() {
     $("#errorSpace").text("");
     // Product quantity
     var x= document.forms["orderForm"]["productQnty"].value;
     if (x > 0) { }
     else { 
         $("#errorSpace").append("Invalid Product Quantity");
         return false; }
     
    // Unit price
     x= document.forms["orderForm"]["unitPrice"].value;
     if (x > 0) { }
     else { 
         $("#errorSpace").append("Invalid Price");
         return false; }
 
    // Unit price
     x= document.forms["orderForm"]["ccNumber"].value;
     y = document.forms["orderForm"]["repeatCcNumber"].value;
     if (x == y) { return true; }
     else { 
         $("#errorSpace").append("Credit Card Numbers Do Not Match");
         return false; }
  }
 </script>
</body>
</html>