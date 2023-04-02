<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="login.js">
        function passupd(img)
        {
            document.getElementById("passo").value+=img;
            document.getElementById("pass").value+='*';
            //document.getElementById("image").style.backgroundColor = 'Pink';
            //setTimeout("ChangeColor2()",2000);  
        }
    </script>
    <style>
        #image{
        padding: 5px;        
    }
    .btn {
          background-color: #ddd;
          border: none;
          color: black;
          text-align: center;
          font-size: 16px;
          margin: 4px 2px;
          transition: 0.3s;
        }

        .btn:hover {
          background-color: #59FF33;
          color: white;
        }
    </style>
    
</head>
<body>
    <?php  
            if(!empty($_POST))
            {
                $con=new mysqli('localhost','id18630204_signup','BxUZqxy7%)x>kfhk','id18630204_sih') or die("Error".mysqli_error($con));
                $emaili=$_POST['email'];
               
                $sql=mysqli_query($con,"Select * from user where email='$emaili'");
                $row=mysqli_fetch_array($sql);

                if ($row)
                {
                    $email=$row['email'];
                    
                    $name=$row['name'];
                    $remark=$row['remark'];

                    if ($emaili==$email and $remark=="shapes")
                    {
                        //header('location: http://zeitx.ml/dashboard.php');
                        echo"<script> location.href='http://zeitx.ml/loginshapes.php';</script>";
                        
                        
                        //echo '<center><div style="background-color: green; color: white; font-size: 130%; width: 180px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">Login successful</div></center>';
                    }
                    else if ($emaili==$email and $remark=="photos"){
                        echo"<script> location.href='http://zeitx.ml/login.php';</script>";
                    }
                    else if ($emaili==$email and $remark=="puzzles"){
                        echo"<script> location.href='http://zeitx.ml/loginupload.php';</script>";
                    }
                    else
                    {
                        echo '<center><div style="background-color: red; color: white; font-size: 130%; width: 180px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">Invalid Details</div></center>';
                    }
                }
                else
                {
                    echo '<center><div style="background-color: red; color: white; font-size: 130%; width: 180px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">Invalid Details</div></center>';
                }
            }
        ?>
        
    <section>
        <h3>
        <div id="left">Login</div>
        <div id="right"><a href="signup.php" id="one">Signup</a></div>
        </h3>
        <p>
            <br>
            <script src="signup.js"></script>
            <form action="initial.php" method="post">
                <div>
                    <input class="form" type="email" name="email" id="name"  placeholder="&#9993; Email id" required>
                </div>
                
            <br><br>
            <div id="rem">
                    <input type="checkbox" name="remember" id="rem" required style="margin-left: 50px;"> Remember me &nbsp&nbsp&nbsp&nbsp
                    <a href="http://zeitx.ml/forgot/" ><font color="white">Forgot Password</font></a>
                </div>
                <div>
                    <input type="submit" name="submit" id="submit" value="Continue" onclick="validate()">
                </div>
            </form>
            <br>
                


               
        </p>
    </section>
</body>
</html>