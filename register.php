<?php
//scripts links
 require "inc/header.php"; 
 //footer content
 ?>
<div class="container">
 <?php
 require "./pages/header-home.php";
 ?>

<div class="d-flex aligns-items-center justify-content-center ">
    <form action="inc/process.php" method="post">
    <h1  class=" text-center">Resgister</h1>

        <div class="form-group py-3">
            <label for="">Name</label>
            <input  type="text" name="name" id="" placeholder="Enter your name" class="form-control">
        </div>
        <div class="form-group  pb-2">
            <label for="">Email</label>
            <input  type="email" name="email" id="" placeholder="Enter your email" class="form-control">
        </div>
        <div class="form-group  pb-3">
            <label for="">Password</label>
            <input  type="Password" name="Password" id="" placeholder="Enter your Password" class="form-control">
        </div>
        <button class=" mb-3 btn-primary" type="submit"  name="register">Register</button>
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