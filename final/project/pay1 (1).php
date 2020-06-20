
<!DOCTYPE html>

<html lang="en">

<head>

</head>

<body>

<div class="body-text">Write your name in the right fields. Also write your imaginary card number. By clicking CCV field card will turn.</div>

<form action="pay-func.php" method="post">

    <div class="personal-information">

        <h1>Payment Information</h1>

    </div> <!-- end of personal-information -->

    <div class="form-container">

        <div class="left-column">

            <input  type="text" name="cnumber" id="cnumber" placeholder="Card Number" minlength="19" maxlength="19" required><br>

            <input  type="text" name="expiry" id="expiry" placeholder="MM / YY"required minlength="7" maxlength="7"><br>

            <input  type="text" name="cvc" id="cvc" placeholder="CCV" minlength="3" maxlength="3"required>

            <br>

            <input type="submit" name="submit" id="submit">

        </div>

        <div class="card-wrapper">

            <img src="" alt="" id="img" height="16px">

        </div>

    </div>

</form>

</div>

</body>

<script type="text/javascript">

    function operator(value){

        if (value.startsWith("4")){

            document.getElementById("img").src = "https://dhome-mebel.ru/files/uploads/53BDC549-CA4F-4514-AFF5-1C152D4DA92A-290-000000926A43594A.png";

        }

        if (value.startsWith("5")) {

            document.getElementById("img").src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/1599px-Visa_Inc._logo.svg.png";

        }

    }

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">

    $(function(){

        $('#submit').click(function() {

            event.preventDefault();



            var valid = this.form.checkValidity();

            if(valid) {

                var cnumber = $('#cnumber').val();

                var expiry = $('#expiry').val();

                var cvc = $('#cvc').val();

                $.ajax({

                    type: 'POST',

                    url: 'pay-func.php',

                    data:{cnumber:cnumber, expiry:expiry, cvc:cvc,},

                    success: function (data) {

                        Swal.fire(

                            'Congratulations!',

                            data,

                            'success'

                        )

                    },

                    error: function (data) {

                        Swal.fire(

                            'ERRORS!',

                            data,

                            'error'

                        )

                    }

                });

            }else{

            }

        });

    });

</script>

<style>

    body{

        background-color: #1D8348;

    }

    h1{

        text-align: center;

    }



    input{

        padding: 8px;

        margin: 5px;

    }



    .body-text{

        text-align: center;

    }



    .form-container{

        display: flex;

        margin-left:35%;

        text-align: right;

    }



    .left-column{

    }
</style>

</html>
