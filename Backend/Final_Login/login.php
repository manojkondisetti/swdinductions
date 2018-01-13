<?php
session_start();
$connection=mysqli_connect('localhost','root','','samplelogindb') or die("Unable to connect");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SWD </title>
        <link rel="stylesheet" href='./styles/bootstrap.min.css'/>
    </head>
      <body>
         <form action="login.php" method="POST" class="active col-md-offset-4">
             <form class="form-horizontal">
                 <form class="form-group" >
                     <label for="address" class="control-label"><h2>Login</h2></label><br/>
                      <div class="col-md-5">
                           <input type="text" class="form-control" id="user" name="username" required placeholder="username"/></br>
                           <input type="password" class="form-control" id="pass" name="password" required placeholder="password"/></br>
                            <input type="submit" class="btn btn-primary" id="btn" value="Submit" name="submit"/>
                            <a href="register.php"><input type="button"  class="btn btn-default" id="btn" value="Register" name="register"/></br></a>
                      </div>
                 </form>
             </form>
         </form>
            </form>
            <?php
            
             if(isset($_POST['submit'])){
                 $username=$_POST['username'];
                 $password=md5($_POST['password']);
                
               
                
                 $query="select * from user1 WHERE username='$username' AND password='$password'";
                 
                 $query_run=mysqli_query($connection,$query);
                 if(mysqli_num_rows($query_run)>0){
                     $_SESSION['username']=$username;
                    header('location:success.php');
                   
                 }else{
                     echo "invalid credentials";
                 }


             }
            ?>
            </div>
            </div>
        </div>
         <script src='script/jquery-3.1.1.slim.min.js'></script>
        <script src='script/bootstrap.min.js'></script>
    </body>
</html>