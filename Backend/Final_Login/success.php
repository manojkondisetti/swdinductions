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
          <form action="success.php" method="POST" class="col-md-offset-4">
             <form class="form-horizontal">
                 <form class="form-group" >
                      <div class="col-md-5">
                        <h3> Welcome
                            <?php echo $_SESSION['username']?> </h3>
                            <a href="login.php"><input type="btn" class="btn btn-primary" id="btn" value="Logout" name="logout"/></a>
                      </div>
                 </form>
             </form>
         </form>
        </form>
        <script src='script/jquery-3.1.1.slim.min.js'></script>
        <script src='script/bootstrap.min.js'></script>
   </body>
   </html>