<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    header('location: login.html'); //sends users to login screen if they haven't logged in
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
    <body>
        
        <h1>Add new product</h1>
        Enter Product Name:<input type="text" id = "name" size="50">
        <br>
        Enter Product Description: <textarea id="description" cols="40" rows="3"></textarea>
        <br>
        Product Image:<input type = "text" id = "image_url">
        <br/>
        Product Price: <input type="text" id="price">
        <br/>
        
        <button id="submitButton">Add Product</button>
        <span id="totalProducts"></span>
    </body>
    
    <script>    
        $("#submitButton").on("click", function(){
                   $.ajax({
                    type: "GET",
                    url: "api/addProductAPI.php",
                    dataType: "json",
                    data : {"name": $("#name").val(),
                        "description": $("#description").val(),
                        "image_url": $("#image_url").val(),
                        "price": $("#price").val()
                        
                    },
                    success: function(data, status) {
                        $("#totalProducts").html(data.totalproducts + " Products");
                    }
                }); 
        });
    </script>
</html>