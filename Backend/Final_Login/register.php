<?php
$connection=mysqli_connect('localhost','root','','samplelogindb') or die("Unable to connect");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SWD </title>
        <link rel="stylesheet" href='./styles/bootstrap.min.css'/>
    </head>
    <body>
         <form action="register.php" method="POST" class="col-md-offset-4">
             <form class="form-horizontal">
                 <form class="form-group" >
                     <label for="address" class="control-label"><h2>Registration</h2></label><br/>
                      <div class="col-md-5">
                           <input type="text" class="form-control" id="user" name="username" required placeholder="username"/></br>
                           <input type="password" class="form-control" id="pass" name="password" required placeholder="password"/></br>
                           <input type="password" class="form-control" id="pass" name="cppassword" required placeholder="confirm password" /></br>
                           <input type="submit" class="btn btn-primary" id="btn" value="Submit" name="submit"/>
                           <a href="login.php"> <input type="button"  class="btn btn-default" id="btn" value="Back" name="back"/></br></a>
                      </div>
                 </form>
             </form>
         </form>
            <?php
            if(isset($_POST['submit'])){
                 $username=$_POST['username'];
                 $password=md5($_POST['password']);
                 $cppassword=md5($_POST['cppassword']);

                 if($password==$cppassword){
                     $query="select * from user WHERE username='$username'";
                     $query_run= mysqli_query($connection,$query);

                     if(mysqli_num_rows($query_run)>0)
                     {
                         echo 'username aleardy exist';
                     }
                     else
                     {
                         $query="insert into user1 values('$username','$password')";
                         $query_run=mysqli_query($connection,$query);
                         if($query_run){
                             echo "user registration done";
                         }
                         else{
                             echo "username already exists!!";
                         }
                     }
                 }else{
                     echo "password doesnot match";
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