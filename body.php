<div class="container">
  <?php   require "./pages/header-home.php"; ?>
<div class="container-fluid my-3">
        <div class="row">

        <div class="col-8">
          <div class="row">
              <?php  
              for($i = 0 ; $i < 6 ; $i++ ){
                      ?>
                    <div class="col-4 mt-2">
                          <div class="card "   >
                            <img src="https://images.unsplash.com/photo-1718115535371-22e6db1dfee8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyMHx8fGVufDB8fHx8fA%3D%3D" style=" width: 100%; height: 300px;    object-fit: cover;" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                      <?php
              }
              ?>
      
                
              
       
          </div>
        </div>
          <!-- sidebar -->
        <div  class="col-4"> 
                  <div  class=" ">
                    <form action="" method="POST">
                      <div class="form-group">
                        <label style="font-size:20px; text-transform:capitalize;" for="">serach</label>
                        <input type="text" type="text" name="search" class="form-control mt-2" placeholder="Search here">
                      </div>
                      <button type="submit" class="btn btn-dark mt-2">Search</button>
                    </form>
                  </div>

                  <div  class=" mt-3 border p-3 ">
                             <h3 class="">Categories</h3>

                             <ul>
                              <?php
                                   for($i = 0 ; $i < 3 ; $i++ ){
                                     ?>
                                     <li>
                                       <a href="#">Links <?php echo $i?></a>
                                     </li>
                                     <?php
                                   }
                              ?>
                             </ul>
                  </div>
        </div>
        <!-- sidebar -->
        </div>
</div>
<?php   require "./pages/footer-home.php"; ?>
</div>




