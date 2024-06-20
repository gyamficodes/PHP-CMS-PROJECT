<?php
//scripts links
 require "inc/header.php"; 
 //footer content
 ?>
<div class="container">
 <?php
 require "./pages/header-home.php";
 require  "inc/process.php";
 ?>

<div class="d-flex aligns-items-center justify-content-center ">
    <form action="" method="post">
    <h1  class=" text-center">Login</h1>
           
            <?php
                  if(isset( $error)){
                    ?>
            <div class="alert alert-danger">
                <strong> <?php  echo  $error; ?> </strong>
            </div>
                    <?php
                  }elseif(isset( $success )){
                    ?>
                    <div class="alert alert-success">
                        <strong> <?php  echo $success; ?> </strong>
                    </div>
                            <?php
                  }
            ?>
       
        <div class="form-group  pb-2">
            <label for="">Email</label>
            <input  type="email" name="email" id="" placeholder="Enter your email" class="form-control">
        </div>
        <div class="form-group  pb-3">
            <label for="">Password</label>
            <input  type="password" name="password" id="" placeholder="Enter your Password" class="form-control">
        </div>
        <hr>
        <p>
        If you don't have an account
        <a style="text-decoration: none;" href="register.php">Register</a>
        </p>
        <button class=" mb-3 btn-primary" type="submit"  name="login">Login</button>
    </form>
</div>

<?php
 require "./pages/footer-home.php"; 
  //footer content
  ?>
</div>
   <?php
  //scripts
 require "inc/footer.php"; 
 ?>