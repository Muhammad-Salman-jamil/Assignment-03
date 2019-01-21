
<?php require_once('header.php'); ?>
 
     <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">
                    <h3 class="text-center py-2">----------Signup----------</h3>
                   
				    <!--Display Empty Fiels-->
                    <?php 
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message=" Please Fill in the Blanks ";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>
 
 
                     <!--Invalid Character-->
                    <?php 
                    
                        if(isset($_GET['Invalid']))
                        {
                            $Message=$_GET['Invalid'];
                            $Message=" Invalid Characters ";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>
 
 
                      <!--Invalid Email-->
                    <?php 
                    
                        if(isset($_GET['VEmail']))
                        {
                            $Message=$_GET['VEmail'];
                            $Message=" Invalid Email ";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>
 
 
                      <!--User Invalid-->
                    <?php 
                    
                        if(isset($_GET['User']))
                        {
                            $Message=$_GET['User'];
                            $Message=" User Already Taken ";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>
 
 
                       <!--User Invalid-->
                    <?php 
                    
                        if(isset($_GET['Email']))
                        {
                            $Message=$_GET['Email'];
                            $Message=" Email Already Taken ";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>
 
 
                      <?php 
                    
                        if(isset($_GET['success']))
                        {
                            $Message=$_GET['success'];
                            $Message="  You Have Successfully Signed Up ";
                    ?>
                         <div class="alert alert-success text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>
 
 
                    <div class="card-body">
 
                        <form action="includes/signup.php" method="POST">
                            <input type="text" name="FName" placeholder=" Your Name" class="form-control my-2">
                            <input type="text" name="Email" placeholder="Your Email" class="form-control my-2">
                            <input type="text" name="UserName" placeholder="Your password" class="form-control my-2">
                            <input type="password" name="password" placeholder="Confirm password " class="form-control mb-3">
                            <button type="button" class="g-opacity-transition signupModule__signupCta sc-button sc-button-large signupButton sc-button-cta" tabindex="0" title="Create a SoundCloud account">Continue</button>
					     </form>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php require_once('footer.php'); ?>