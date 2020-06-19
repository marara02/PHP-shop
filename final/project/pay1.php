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
            <input id="column-left" type="text" name="first-name" placeholder="First Name"/><br>
            <input id="column-right" type="text" name="last-name" placeholder="Surname"/><br>
            <input id="input-field" type="text" name="number" placeholder="Card Number" maxlength="19" oninput="operator(this.value)"/><br>
            <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/><br>
            <input id="column-right" type="text" name="cvc" placeholder="CCV" maxlength="3" />
        </div>
        <div class="right-column">
            <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address"/><br>
            <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/><br>
            <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/><br>
            <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/><br>
            <input id="input-button" type="submit" value="Submit" name="submit" />
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
        if (value == "4444 4444"){
            document.getElementById("img").src = "https://dhome-mebel.ru/files/uploads/53BDC549-CA4F-4514-AFF5-1C152D4DA92A-290-000000926A43594A.png";
        }
        if (value == "5555 5555") {
            document.getElementById("img").src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/1599px-Visa_Inc._logo.svg.png";
        }
    }
</script>
<style>

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

    .right-column{

    }

</style>
</html>
