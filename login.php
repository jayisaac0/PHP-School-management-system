<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('index');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('index');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}
?>
<?php require_once 'includes/head/header.php'; ?>


<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css"  />
<style type="text/css">
    html, body{
        background:#000000;
    }
    .right_col{
        background:blue;
    }
    .grey{
        background:grey;
    }
</style>


<div class="signin-form">


     
        
       <form class="form-signin grey"  data-parsley-validate method="post" id="login-form">
      
        <h3 class="form-signin-heading ">SP Systems<sup class="blackfont">TM.</sup></h3><hr />
        <p><center>Please fill the forms to Login below</center></p>
        
        <div id="error">
        <?php
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                </div>
                <?php
			}
		?>
        </div>

        <div class="form-group">
        <input type="text" class="form-control" name="txt_uname_email" required="required" placeholder="Username or E mail ID" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" name="txt_password" required="required" placeholder="Your Password" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" name="btn-login" class="btn btn-default">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN IN
            </button>
        </div>  
      	<br />
      </form>


    
</div>



<?php require_once 'includes/footer/footer.php'; ?>