function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  } 

function myFunction1() {
    var x = document.getElementById("pass1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  } 

function validate(){
    var z = document.getElementById('pass').value;
    var t = document.getElementById('name').value;
    var u = document.getElementsByName('question')[0].value;
    var v = document.getElementsByName('answer')[0].value;
    function confirmtab()
        {
            var pwd = document.getElementById("passo").value;
            document.getElementsByName('passwordco')[0].value = pwd;
            document.getElementsByName('passwordo')[0].value = "";
            document.getElementsByName('password')[0].value = "";
            document.getElementsByName('password')[0].placeholder = "Confirm Password";
            document.getElementsByName('email')[0].type = "hidden";
            document.getElementsByName('name')[0].type = "hidden";
            document.getElementsByName('question')[0].type="hidden";
            document.getElementsByName('answer')[0].type="hidden";
            
            document.getElementsByName('submit')[0].value = "Create Account";
            
            document.getElementById("submit").onclick = function() {submittab();};
        }
    
    if (t==""){
        alert('email id cannot be empty');
    }
    
    else if (z==""){
        alert('Password cannot be empty');
    }
    else if (u=="" || v==""){
        alert("Please enter security question and answer");
    }
    
    if (z!=""&&t!=""&&u!=""&&v!=""){
      
         let a = 0;
         for (let i=0;i<t.length;i++)
         {
           if (i!=t.length-1){
               if (t.charAt(i)=="@"){
                 confirmtab();
                 break;
               }
           }
           else{
               if(t.charAt(i)=="@"){
                   confirmtab();
               }
               else{
                   alert('please enter an email in the email box');
               }
           }
           
         }
        
    }
    
    
}


function passupd(img)
        {
            var strength = document.getElementById('strength');
            var pwd = document.getElementById("pass");
            document.getElementById("passo").value+=img;
            document.getElementById("pass").value+='*';
            if (pwd.value.length == 0) {

            }else if (pwd.value.length>=8){
                strength.innerHTML = '<span style="color:green">Very Strong!</span>';
            }else if (pwd.value.length >= 5) {
                strength.innerHTML = '<span style="color:green">Strong!</span>';
            } else if (pwd.value.length >= 3) {
                strength.innerHTML = '<span style="color:orange">Medium!</span>';
            } else {
                strength.innerHTML = '<span style="color:red">Weak!</span>';
            }
        }
        function submittab()
        {
          var h = document.getElementById('pass').value;
          if (h==""){
            alert('Confirm password cannot be empty. Try again!!')
          }
          else{
            document.getElementsByName('submit')[0].value = "Submit Account";
            document.getElementsByName('submit')[0].type = "submit";

          }
          
          
        }
function shift(){
  window.location.href = "http://zeitx.ml/signupshapes.php";
}
function shiftpuzzle(){
    window.location.href = "http://zeitx.ml/signupupload.php";
}
        
        
        


 