<?php
include_once("header.php");
?>
      <style>
           .wrapper1 {
            text-align: center;
            margin-left:15%;
               margin-right: 15%;
            margin-top: 4%;
            padding: 0;
            display:grid;
            grid-template-columns: 300px 300px 300px;
            grid-gap: 17px;
            background-color: white;
            color: #444;
        }

        .box {
            display: flex;
            flex-direction:column;
            background-color: #239B56;
            color: #fff;
            border-radius: 5px;
            padding: 20px;
            font-size: 100%;
        }
        div.img{
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
        }
          #t{
              font-style: italic;
              font-family: Apple Chancery, cursive;
          }
      </style>
<body>
    <div class="wrapper1">
        <div class="box"><img src ="image/r.jpg" alt ="beef" width= 100% ><a href = "cake.php"><p id = "t">Red Velvet<br>2000tg</p></a></div>
        <div class="box"><img src ="https://www.kingarthurflour.com/sites/default/files/recipe_legacy/1058-3-large.jpg" alt ="chicken" width="100%" height="80%"><a href = "vopi.php"><p id ="t">Voopie<br>3000tg</p></a></div>
        <div class="box"><img src ="https://i.ytimg.com/vi/v9nI6pdw-HQ/maxresdefault.jpg" alt ="Japan cake" width="100%" height="80%"><a href = "honey.php"><p id ="t">Japanese Cake<br>2000tg</br></p></a></div>
        <div class="box"><img src ="image/cook.jpg" alt ="Cookies" width="100%" height="90%"><a href = "Cookie.php"><p id ="t">Cookies<br>500tg</br></p></a></div>
        <div class="box"><img src ="image/cap.jpg" alt ="Capcakes" width="100%" height="90%"><a href = "Cupi.php"><p id ="t">Cupcakes<br>150tg</br></p></a></div>
        <div class="box"><img src ="https://www.biggerbolderbaking.com/wp-content/uploads/2020/04/Hearty-Yeast-Free-Bread-WS-Thumbnail.jpg" alt ="Bread" width="100%" height="90%"><a href = "Bread.php"><p id = "t">Bread<br>100tg</br></p></a></div>
</div>
</body>
</body>
</body>
</html>