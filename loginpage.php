<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script type="text/javascript">
        function passupd(img)
        {
            document.getElementById("pass").value+=img;
            //document.getElementById("image").style.backgroundColor = 'Pink';
            //setTimeout("ChangeColor2()",2000); 
        }
    </script>
    <style>
        #image{
        padding: 5px;        
    }
    </style>

    <link rel="stylesheet" href="/sih/Css/loginpage.css">
</head>
<body>
    <section>
        <h3>
        <div id="left">Login</div>
        <div id="right"><a href="/sih/signup.php" id="one">Signup</a></div>
        </h3>
        <p>
            <form action="" method="post">
                <div class="centre" >
                    <input class="form" type="email" name="email" id="name"  placeholder="&#9993; Email id">
                </div>
                <div class="centre">
                    <input class="form" type="password" name="password" id="pass"  placeholder="&#128274; Create Password" required readonly>
                </div>
                <?php 
                $arr=array('138373.jpg','484737.jpg','746474.jpg','847748.jpg','537373.jpg','683726.jpg','763527.jpg','884784.jpg','973673.jpg','107364.jpg');
                shuffle($arr);
                echo '<center>';
                for ($x = 0; $x <= 4; $x++)
                {
                    $va=substr($arr[$x],0,6);
                    echo '<button type="button" onClick="passupd('.$va.');"><img src="'.$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '<br><br>';
                for ($x = 5; $x <= 9; $x++)
                {
                    $va=substr($arr[$x],0,6);
                    echo '<button type="button" onClick="passupd('.$va.');"><img src="'.$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '</center>';
                ?><br><br>
                <div id="rem">
                    <input type="checkbox" name="remember" id="rem">
                    <label for="rem"> Remember me</label> 
                    <a href="forgot.html" id="forgot" target="_blank">Forgot password</a>
                </div>
                <div>
                    <input type="submit" name="submit" id="submit" value="Login">
                </div>
            </form>

<?php  
    if(!empty($_POST))
    {
        $con=new mysqli('localhost','root','','sih') or die("Error".mysqli_error($con));
        $emaili=$_POST['email'];
        $passwordi=$_POST['password'];
        $sql=mysqli_query($con,"Select * from user where email='$emaili'");
        $row=mysqli_fetch_array($sql);

        if ($row)
        {
            $email=$row['email'];
            $password=$row['password'];            

            if ($emaili==$email and $passwordi==$password)
            {
                header('location:/sih/dashboard.php');
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
        </p>
    </section>
</body>
</html>