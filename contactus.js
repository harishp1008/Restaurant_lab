
// Defining a function to validate form 

function validateform1(){

 var name = document.getElementById("form104").value;
         if(name == "") {
        document.getElementById("nameErr").innerHTML = "Enter your name";
    }
     else {
             document.getElementById("nameErr").innerHTML = "";
         }
     }
function validateForm() {
    var x = document.getElementById("form105").value;
         var atpos = x.indexOf("@");
         var dotpos = x.lastIndexOf(".");
         if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {


             document.getElementById("emailErr").innerHTML = "Enter valid email Address";
         }
         else {
             document.getElementById("emailErr").innerHTML = "";
         }

}
