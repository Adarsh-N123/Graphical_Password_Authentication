<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script type="text/javascript">
        function passupd(img)
        {
            var strength = document.getElementById('strength');
            var pwd = document.getElementById("pass");
            document.getElementById("passo").value+=img;
            document.getElementById("pass").value+='*';
            if (pwd.value.length == 0) {
    
            } else if (pwd.value.length >= 5) {
                strength.innerHTML = '<span style="color:green">Strong!</span>';
            } else if (pwd.value.length >= 3) {
                strength.innerHTML = '<span style="color:orange">Medium!</span>';
            } else {
                strength.innerHTML = '<span style="color:red">Weak!</span>';
            }

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
        $a=5;
        $b=21;
        
        if(!empty($_POST))
        {
            
            $con=new mysqli('localhost','root','','sih') or die("Error".mysqli_error($con));

            $email=$_POST['email'];
            $name=$_POST['name'];
            $password=$_POST['passwordo'];
            $letcount12=strlen($password);
            //$confirmpassword=$_POST['confirmpassword'];

            $sql1=mysqli_query($con,"Select * from user");
            $check=0;
            while ($row=mysqli_fetch_array($sql1))
            {
                $emaile=$row['email'];
                if ($emaile == $email)
                {
                    $check++;
                }
            }
            if ($check == 0)
            {
                //if ($password!="" && $password==$confirmpassword)
                {
                    //if($a<$letcount12 && $letcount12<$b)
                    {
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $sql="insert into user set email='$email', name='$name', password='$hashed_password'";
                        if(mysqli_query($con,$sql))
                        {
                            echo "<script>alert('you have successfully singup');</script>";
                        }
                    }
                }
                
            }
            else
            {
                echo "<script>alert('This email id is already exist please try with other');</script>";
            }
        }
        ?>
    <section>
        <h3>
        <div id="left"><a href="index.php" id="one">Login</a></div>
        <div id="right">Signup</div>
        </h3>
        <p>
            <br>
            <script src="signup.js"></script>
            <form action="/sih/signup.php" method="post">
                <div>
                    <input class="form" type="email" name="email" id="name"  placeholder="&#9993; Email id" required>
                </div>
                <div>
                    <input class="form" type="text" name="name" id="name"  placeholder="&#9993; Name" required><br>
                </div>
                <div>
                    
                    <input class="form" type="password" name="password" id="pass"  placeholder="&#128274; Create Password">
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction()"></i>
                </div>
                <input class="form" type="hidden" name="passwordo" id="passo" onkeyup="return passwordChanged();">
                
                
               <!-- <div class="centre">
                    
                    <input class="form" type="password" name="confirmpassword" id="pass1"  placeholder="&#128274; Confirm Password" style="margin-left: 95px;">
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction1()"></i>
                </div> -->

                <div>
                    <p style="color: white; margin-left: 150px; margin-top: 20px;">PASSWORD STRENGTH:</p>
                    <span id="strength" class="badge displayBadge" style="color:red; margin-left: 200px;">Select Image</span>
        
                </div>
                <br>
                
            <center><input type="hidden" id="result"></center><br>
            <?php 
                $arr=array('138373.jpg','484737.jpg','746474.jpg','847748.jpg','537373.jpg','683726.jpg','763527.jpg','884784.jpg','973673.jpg','107364.jpg');
                shuffle($arr);
                echo '<center>';
                for ($x = 0; $x <= 4; $x++)
                {
                    $va=substr($arr[$x],0,6);
                    echo '<button class="btn" type="button" onClick="passupd('.$va.');"><img src="'$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '<br><br>';
                for ($x = 5; $x <= 9; $x++)
                {
                    $va=substr($arr[$x],0,6);
                    echo '<button class="btn" type="button" onClick="passupd('.$va.');"><img src="/sih/images/'.$arr[$x].'" height="60px" width="60px" id="image" ></button>&nbsp&nbsp&nbsp';
                }
                echo '</center>';
            ?>
                <div>
                    <input type="submit" name="submit" id="submit" value="Signup" onclick="validate()">
                </div>
            </form>
            <br>
               
        </p>
    </section>
</body>
</html>