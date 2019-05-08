<!DOCTYPE html>
<html>
    <head>
        <title> Product Information </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script>
            
            
        $(document).ready( function(){    
            
              $.ajax({
                    type: "GET",
                    url: "api/getProductInfo.php",
                    dataType: "json",
                    data:{"product_id": <?=$_GET['product_id']?>},
                    success: function(data, status) {
                         $("#name").html(data["name"]);
                         $("#description").html(data["description"]);
                         $("#price").html("$"+data["price"]);
                         $("#image_url").attr("src", data["image_url"]);
                    }
                });
            
        });
        
        </script>

    </head>
    <body>
        
        
        <h2 id="name"></h2>

        <h3 id="description"></h3>

        <img src="" id="image_url" width="200"/>
        
        <div id="price"></div>

    </body>
</html>