<style>
.container{
  position: centre;
  left: 0;
  bottom: 0;
  width: 100%;
 }
</style>
<?php require_once('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">
                    <h3 class="text-center py-2">-------Login-------</h3>
                    
 
                    <?php
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message= " Please Fill in the Blanks";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>
 
 
                      <?php
                    
                        if(isset($_GET['U_Invalid']))
                        {
                            $Message=$_GET['U_Invalid'];
                            $Message= " Invalid User";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>
 
 
                        <?php
                    
                        if(isset($_GET['P_Invalid']))
                        {
                            $Message=$_GET['P_Invalid'];
                            $Message= " Invalid Password";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>
 
                    <div class="card-body">
                        <form action="includes/login.php" method="POST" >
                            <input type="text" name="UserName" placeholder="Enter Your Email Address" class="form-control my-2">
                            <input type="password" name="password" placeholder=" Enter Your Password" class="form-control mb-3">
							<button type="button" class="g-opacity-transition signupModule__signupCta sc-button sc-button-large signupButton sc-button-cta" tabindex="0" title="Create a SoundCloud account">Continue</button>
                        </form>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php require_once('footer.php'); ?>