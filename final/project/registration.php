<?php

require_once('database/authorization.php');
include_once ('header.php')
?>


<div xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" type="text/css" href="CSS/registration.css">



</div>

<body>


<div class="main">

    <form class="form">

        <div class="f">

            <h1>User information form</h1>

            <input class="input" type="text" id="u_fullname" name="u_fullname" placeholder="Full Name" required>
            <input class="input"  type="Email" id="u_email" name="u_email" placeholder="Email" required>
            <input class="input" type="tel" name="u_telnum" id="u_telnum" placeholder="8(XXX)-XXX-XX-XX" minlength="11" maxlength="11" required>
            <input class="input" type="text" name="u_address" id="u_address" placeholder="Address" required>
            <h3>Card information</h3>
            <input class="input" type="tel" name="u_card_n" id="u_card_n" minlength="16" maxlength="16" placeholder="Card number" required>
            <input class="input" type="text" name="u_card_e" id="u_card_e" minlength="5" maxlength="5" placeholder="MM/YY"required>
            <input class="input" type="tel" name="u_card_c" id="u_card_c" minlength="3" maxlength="3" placeholder="CCV" required>
            <input class="inputsub" type="submit" name="register" id="register" value="Submit">
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e) {
            var valid = this.form.checkValidity();
            if(valid) {
                var u_fullname = $('#u_fullname').val();
                var u_email = $('#u_email').val();
                var u_telnum = $('#u_telnum').val();
                var u_address = $('#u_address').val();
                var u_card_n = $('#u_card_n').val();
                var u_card_e = $('#u_card_e').val();
                var u_card_c = $('#u_card_c').val();
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'reg.php',
                    data:{u_fullname:u_fullname,u_email:u_email, u_telnum:u_telnum, u_address:u_address,u_card_n:u_card_n,u_card_e:u_card_e,u_card_c:u_card_c},
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
<?php
include_once 'footer.php';
?>

</body>

</html>
