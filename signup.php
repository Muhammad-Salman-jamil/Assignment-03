
<?php 
 
    require_once('connection.php');
 
    if(isset($_POST['signup']))
    {
 
        if(empty($_POST['Name'])|| empty($_POST['Email'])|| empty($_POST['password']))
        {
            header("location: ../signupdesign.php?empty");
        }
        else
        {
            $FName=mysqli_real_escape_string($con,$_POST['Name']);
            $Email=mysqli_real_escape_string($con,$_POST['Email']);
            $Password=mysqli_real_escape_string($con,$_POST['password']);
 
            if(!preg_match("/^[a-zA-Z]*$/",$FName) || !preg_match("/^[a-zA-Z]*$/",$LName))
            {
                header("location: ../signupdesign.php?Invalid");
                exit();
            }
            else
            {
                if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
                {
                    header("location: ../signupdesign.php?VEmail");
                    exit();
                }
                else
                {
                    $query = " select * from userlogin where Name='".$Name."'";
                    $result = mysqli_query($con,$query);
 
                    if(mysqli_fetch_assoc($result))
                    {
                        header("location: ../signupdesign.php?User");
                        exit();
                    }
                    else
                    {
                        $query = " select * from userlogin where Email='".$Email."'";
                        $result = mysqli_query($con,$query);
 
                        if(mysqli_fetch_assoc($result))
                        {
                            header("location: ../signupdesign.php?Email");
                            exit();
                        }
                        else
                        {
                            $Hash = password_hash($Password, PASSWORD_DEFAULT);
                            $query = " insert into userlogin (Name,Email,Password) values ('$Name','$Email','$Hash')";
                            $result = mysqli_query($con,$query);
                            header("location: ../signupdesign.php?success");
                            exit();                                
                            
                        }
                    }
                }
            }
        }
 
    }
    else
    {
        header("location: ../index.php");
        exit();
    }
 
?>