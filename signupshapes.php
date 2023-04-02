<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="signupshapes.js">
        
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
    <style>
		@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap");
		:root {
		  --primary-color: #185ee0;
		  --secondary-color: #e6eef9;
		}

		*,
		*:after,
		*:before {
		  box-sizing: border-box;
		}

		body {
		  font-family: "Inter", sans-serif;
		  background-color: #ffffff;
		}

		.container {
            position: absolute;
            
            width: 31rem;
            margin-top: -500px;
            
		  display: flex;
		  align-items: center;
		  justify-content: center;
		}

		.tabs {
		  display: flex;
		  position: relative;
		  background-color: #000000;
		  box-shadow: 0px 0px 7px rgba(0, 0, 0, 0.1), 0 0 1px 0 rgba(24, 94, 224, 0.15), 0 6px 12px 0 rgba(24, 94, 224, 0.15);
		  padding: 0.75rem;
		  border-radius: 99px;
		}
		.tabs * {
		  z-index: 2;
		}

		input[type=radio] {
		  display: none;
		}

		.tab {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  height: 40px;
		  width: 120px;
		  font-size: 1.25rem;
		  font-weight: 500;
		  border-radius: 99px;
		  cursor: pointer;
		  transition: color 0.15s ease-in;
		}

		.notification {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  width: 2rem;
		  height: 2rem;
		  margin-left: 0.75rem;
		  border-radius: 50%;
		  background-color: var(--secondary-color);
		  transition: 0.15s ease-in;
		}

		input[type=radio]:checked + label {
		  color: var(--primary-color);
		}
		input[type=radio]:checked + label > .notification {
		  background-color: var(--primary-color);
		  color: #fff;
		}

		input[id=radio-1]:checked ~ .glider {
		  transform: translateX(0);
		}

		input[id=radio-2]:checked ~ .glider {
		  transform: translateX(100%);
		}

		input[id=radio-3]:checked ~ .glider {
		  transform: translateX(200%);
		}

		.glider {
		  position: absolute;
		  display: flex;
		  height: 40px;
		  width: 120px;
		  background-color: var(--secondary-color);
		  z-index: 1;
		  border-radius: 99px;
		  transition: 0.25s ease-out;
		}

		@media (max-width: 700px) {
		  .tabs {
		    transform: scale(0.6);
		  }
		}
	</style>
</head>
<body>
    <?php
        $a=2;
        $b=10;
        
        if(!empty($_POST))
        {
            
            $con=new mysqli('localhost','id18630204_signup','BxUZqxy7%)x>kfhk','id18630204_sih') or die("Error".mysqli_error($con));

            $email=$_POST['email'];
            $name=$_POST['name'];
            $password=$_POST['passwordo'];
            $passwordi=$_POST['password'];
            $letcount12=strlen($passwordi);
            $passwordco=$_POST['passwordco'];
            $question=$_POST['question'];
            $answer=$_POST['answer'];

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
                if ($password != '' and $passwordco != '' and $name != '' and $email != '' and $question!="" and $answer!=""){
                if ($password!="" && $password==$passwordco)
                {
                    if($a<=$letcount12 && $letcount12<=$b)
                    {
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $sql="insert into user set email='$email', name='$name', password='$hashed_password', remark='shapes', question='$question', answer='$answer'";
                        if(mysqli_query($con,$sql))
                        {
                            echo "<script>alert('You Have Successfully Singup');</script>";
                        }
                    }
                    else
                {
                    echo '<center><div style="background-color: red; color: white; font-size: 130%; width: 220px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">You Can Choose Max 10 and Min 2 Images</div></center>';
                }
                }

                
                else
                {
                    echo "<script>alert('Confirm Password is not same as Entered Password!! Try Again!');</script>";
                }
            }
            else{
                echo '<center><div style="background-color: red; color: white; font-size: 130%; width: 220px; box-shadow: 0px 2px 5px black; margin-bottom: 30px;">Please Fill All Details</div></center>';
            }
                
            }
            else
            {
                echo "<script>alert('This Email ID is Already Exist');</script>";
            }
        }
        ?>
        
    <section>
        <h3>
        <div id="left"><a href="initial.php" id="one">Login</a></div>
        <div id="right">Signup</div>
        </h3>
        <p>
            <br>
            <script src="signupshapes.js"></script>
            <form action="signupshapes.php" method="post">
                <div>
                    <input class="form" type="email" name="email" id="name"  placeholder="&#9993; Email id" required>
                </div>
                <div>
                    <input class="form" type="text" name="name" id="name"  placeholder="&#9993; Name" required><br>
                </div>
                <div>
                    <input class="form" type="text" name="question" id="name" placeholder="Security Question" required>
                </div>
                <div>
                    <input class="form" type="text" name="answer" id="name" placeholder="Answer" required>
                </div>
                <div>
                    
                    <input class="form" type="password" name="password" id="pass"  placeholder="&#128274; Create Password" readonly>
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction()"></i>
                </div>
                <input class="form" type="hidden" name="passwordo" id="passo">
                <input class="form" type="hidden" name="passwordco" id="passco">
                
                
               <!-- <input class="form" type="hidden" name="passwordco" id="passco" onkeyup="return passwordChanged();">
               <div class="centre">
                    <input class="form" type="password" name="confirmpassword" id="pass1"  placeholder="&#128274; Confirm Password" style="margin-left: 95px;">
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: white;" onclick="myFunction1()"></i>
                </div> -->
                <br></br>
                <br></br>
                <div>
                    <p id="pwdstrength" style="color: white; margin-left: 150px; margin-top: 20px;">PASSWORD STRENGTH:</p>
                    <span id="strength" class="badge displayBadge" style="color:red; margin-left: 200px;">Select Image</span>
        
                </div>
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
                <div class="container">
                    <div class="tabs">
                        <input type="radio" id="radio-1" name="tabs" onclick="shiftone()" />
                        <label class="tab" for="radio-1">PHOTOS</label>
                        <input type="radio" id="radio-2" name="tabs" checked />
                        <label class="tab" for="radio-2">SYMBOLS</label>
                        <input type="radio" id="radio-3" name="tabs" onclick="shiftpuzzle()" />
                        <label class="tab" for="radio-3">PUZZLE</label>
                        <span class="glider"></span>
                    </div>
                </div>
                <div>
                    <input type="button" name="submit" id="submit" value="Next" onClick="validate()">
                </div>
            </form>
            <br>
               
        </p>
    </section>
</body>
</html>