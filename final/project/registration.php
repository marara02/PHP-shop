<?php

require_once('database/config.php');
include_once ('header.php')
?>


<div xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" type="text/css" href="CSS/registration.css">



</div>

<body>


<div class="main">

    <form class="form" method="post" action="reg.php">

        <div class="f">

            <h1>User information form</h1>

            <input class="input" type="name" id="full_name" name="full_name" placeholder="Full Name" required>
            <input class="input"  type="Email" id="email" name="email" placeholder="Email" required>
            <input class="input" type="tel" name="telnum" id="telnum" placeholder="8(XXX)-XXX-XX-XX" minlength="11" maxlength="11" required>
            <input class="input" type="text" name="address" id="address" placeholder="Address" required></br>
            <input class="inputsub" type="submit" name="register" id="register" value="Submit">
        </div>
    </form>
</div>

<?php
include_once 'footer.php';
?>

</body>

</html>
