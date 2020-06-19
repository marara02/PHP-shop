<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        h1{
            text-align: center;
            font-family: Verdana;
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
            text-align: center;
            margin-left: 35%;
            margin-right: 20%;
        }

        input[type='text']{
            padding: 10px;
            font-size: 1em;
            font-family: 'Bebas Neue', sans-serif;
            width: 80%;
            height: 50px;
            margin-bottom: 10px;
            border: 0.6px solid #1D8348;
            transition: all 0.3s;
            text-align: center;
        }
        input[type='text']:hover{
            box-shadow: 0 0 15px 10px #ABEBC6;
            transition: all 0.3s;
        }
        .left-column{
            background-color: #f9f9f9;
        }
        #input-button{
            background-color: #4CAF50;
            color: white;
            width:150px;
            height:40px;
            border: none;
            border-radius: 15px;
            margin-left: 15%;
            align-self: center;
            justify-content: center;
            font-size: 17px;
            cursor: pointer;
            text-align: center;
            outline: none;
            transition: all 0.5s ease;
        }

    </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
         <script>
             $(document).ready(function(){
                 $('#input-button').click(function(){
                     Swal .fire('Delivering......');
                 })
             })
         </script>
</head>
<body>
<div class="body-text">Write your name in the right fields. Also write your imaginary card number. By clicking CCV field card will turn.</div>
<form action="pay-func.php" method="post">
    <div class="personal-information">
        <h1>Payment Information</h1>
    </div>
    <div class="form-container">
        <div class="left-column">
            <input id="input-field" type="text" name="number" placeholder="Card Number" maxlength="19" oninput="operator(this.value)"/><br>
            <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/><br>
            <input id="column-right" type="text" name="cvc" placeholder="CCV" maxlength="3" />
            <input id="input-button" type="submit" value="Submit" name="submit" />
        </div>
    </div>
</form>
</body>
</html>