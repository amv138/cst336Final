<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

         <script>
                
                 
            function getProductInfo() {    
                $.ajax({
                    type: "GET",
                    url: "api/getProductInfo.php",
                    dataType: "json",
                    data:{"product_id": <?=$_GET['product_id']?>},
                    success: function(data, status) {
                         $("#name").val(data["name"]);
                         $("#description").val(data["description"]);
                         $("#price").val(data["price"]);
                         $("#image_url").val(data["image_url"]);
                    }
                });
                
            }    
                
                $(document).ready(function(){  
                                    $.ajax({
                    type: "GET",
                    url: "api/getProductInfo.php",
                    dataType: "json",
                    data:{"product_id": <?=$_GET['product_id']?>},
                    success: function(data, status) {
                         $("#name").val(data["name"]);
                         $("#description").val(data["description"]);
                         $("#price").val(data["price"]);
                         $("#image_url").val(data["image_url"]);
                    }
                });
                    $("#submitButton").on("click",function(){
                        
                        $.ajax({
                            type: "GET",
                            url: "api/updateProductAPI.php",
                            dataType: "json",
                            data:{"product_id": <?=$_GET['product_id']?>,
                                "description": $("#description").val(),
                                "price": $("#price").val(),
                                "name": $("#name").val(),
                                "image_url": $("#image_url").val()
    
                            },
                            success: function(data, status) {
                                //$("#updated").html("Product Updated");
                            }
                            
                        });//end
                        $("#updated").html("Product Updated");
                    });
                    
                });//documentReady
                
                </script>
        
        
    </head>
    <body>
    <h1> Update Product</h1>
    Enter Product Name:<input type="text" id = "name" size="50">
    <br>
    Enter Product Description: <textarea id="description" cols="40" rows="3"></textarea>
    <br>
    Product Image:<input type = "text" id = "image_url">
    <br/>
    Product Price: <input type="text" id="price">
    <br/>
    <button id="submitButton">Update Product</button>
    
    <span id="updated"></span>
    
    
    
    
    
    
    
    </body>
</html>