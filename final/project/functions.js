 function homeFunction(){
            location.replace("main.php")
        }
        function validate(){

            var a = document.getElementById("pass1").value;
            var b = document.getElementById("pass2").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
 function check(){
     var number = document.getElementById("number").value
     var b = parseInt(document.getElementById("balance").value)
     if(number[0]=="+" && number[1]=="7"){
         if(number.length == 12){
             var c = number[2]+number[3]+number[4]
             next(c, b, number)
         }
         else{
             alert('Length of phone number must be equal to 12 with format +7')
         }
     }
     if(number[0]=="8"){
         if(number.length == 11){
             var c = number[1]+number[2]+number[3]
             next(c, b, number)
         }
         else{
             alert('Length of phone number must be equal to 11 with format 8')
         }
     }
 };
