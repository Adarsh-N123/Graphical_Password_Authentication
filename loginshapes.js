function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  } 

  function passupd(img)
        {
            document.getElementById("passo").value+=img;
            document.getElementById("pass").value+='*';
            //document.getElementById("image").style.backgroundColor = 'Pink';
            //setTimeout("ChangeColor2()",2000);  
        }
        function shiftthree(){
          window.location.href="http://zeitx.ml/login.php";
      }
      
 function forgot() {
    window.location.href="http://zeitx.ml/forgot.php";
  }