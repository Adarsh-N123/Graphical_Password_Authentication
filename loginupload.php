<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="loginshapes.js">
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
                $passwordi=$_POST['passwordo'];
                $sql=mysqli_query($con,"Select * from user where email='$emaili'");
                $row=mysqli_fetch_array($sql);

                if ($row)
                {
                    $email=$row['email'];
                    $password=$row['password'];
                    $name=$row['name'];
                    $remark=$row['remark'];

                    if ($emaili==$email and password_verify($passwordi, $password))
                    {
                        //header('location: http://zeitx.ml/dashboard.php');
                        echo"<script> location.href='http://zeitx.ml/dashboard.php';</script>";
                        
                        
                        //echo '<center><div style="background-color: green; color: white; font-size: 130%; width: 180px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">Login successful</div></center>';
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
            <form action="loginupload.php" method="post">
                <div>
                    <input class="form" type="email" name="email" id="name"  placeholder="&#9993; Email id" required>
                </div>
                <div>
                    <input class="form" type="password" name="password" id="pass"  placeholder="&#128274; Enter Password" readonly>
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction()"></i>
                </div>
                <input class="form" type="hidden" name="passwordo" id="passo">
                
                
               <!-- <div class="centre">
                    
                    <input class="form" type="password" name="confirmpassword" id="pass1"  placeholder="&#128274; Confirm Password" style="margin-left: 95px;">
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction1()"></i>
                </div> -->
                <br>
                
            <center><input type="hidden" id="result"></center><br>
            <?php 
                $arr=array('9521.jpg','6308.png','1095.jpg','1209.webp','1287.png','1563.png','2376.png','2840.png','3987.png','4554.png','5002.webp','6194.webp','6349.png','6670.png','6879.png','6935.png','7745.png','8026.jpg','9823.webp','9987.webp');
                shuffle($arr);
                echo '<center>';
                for ($x = 0; $x <= 4; $x++)
                {
                    $va=substr($arr[$x],0,4);

                    echo '<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="'.$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '<br><br>';
                for ($x = 5; $x <= 9; $x++)
                {
                    $va=substr($arr[$x],0,4);
                    echo '<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="'.$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '<br><br>';
                for ($x = 10; $x <= 14; $x++)
                {
                    $va=substr($arr[$x],0,4);
                    echo '<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="'.$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '<br><br>';
                for ($x = 15; $x <= 19; $x++)
                {
                    $va=substr($arr[$x],0,4);
                    echo '<button id="butt" class="btn" type="button" onClick="passupd('.$va.');"><img src="'.$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '</center>';
            ?>
            <br><br>
            <div id="rem">
                    <input type="checkbox" name="remember" id="rem" required style="margin-left: 50px;"> Remember me
                </div>
                <div>
                    <p href="http://zeitx.ml/forgot.php" id = "forgot" style="color:white;margin-top: -18px; margin-left: 300px;cursor: pointer;" onclick="forgot()">forgot password</p>
                </div>
                <div>
                    <input type="submit" name="submit" id="submit" value="Login" onclick="validate()">
                </div>
            </form>
            <br>
                


               
        </p>
    </section>
</body>
</html>