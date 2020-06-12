<!DOCTYPE html>
<html>
<head>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\"></script>
    <script>
        $(document).ready(function () {
            $('.new').click(function () {
                event.preventDefault();
                //$('#name').css('type','text');
                // $('#price').css('type','number');
                $.ajax("update.php",{
                    type:'POST',
                    data:{product_name:$('#name').val(),
                        price:$('#price').val(),
                        id:$('#id').val()},
                    accepts: 'application/json; charset=utf-8',
                    success:function (data) {
                        if(data.message === 'success'){
                            $('#info').text("Updated successfully");
                        }
                    }
                    error:function(data) {
                        if(data.message==='error'){
                            $('#info').text('Error!');
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>
<form method="post">
<span id ='info'></span>
    <label for="name"></label>
<input type = 'text' name = 'name' id ='name' placeholder='Product name'>
    <label for="price"></label>
<input type = 'number' name = 'price' id = 'price' placeholder='Price'>
    <label for="id"></label>
<input type ='number' name ='id' id ='id' placeholder='Product_id'>
<input type ='submit' class ='new' style='background-color: orange' value='Change'>
</form>
</body>
</html>