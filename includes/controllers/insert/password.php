<?php
if(isset($_POST['resetpass']))
{
	$user_pass =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['user_pass']))));
	$ver_user_pass =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['ver_user_pass']))));

	if($user_pass == "") { $error[] = "Provide user_pass"; }
	else if($ver_user_pass != $user_pass) { $error[] = "Password does not match";?><script type="text/javascript">alert("Password does not match");</script><?php }
    else
    {

		try
		{
			$user_pass = password_hash($user_pass, PASSWORD_DEFAULT);

			$stmt = $auth_user->runQuery("UPDATE `users` SET `user_pass`=:user_pass  WHERE `user_id`= '".$userRow['user_id']."' ");
			
			$stmt->bindparam(":user_pass", $user_pass);
			$stmt->execute();
                    ?>
                    	<script type="text/javascript">alert("Password reset");</script>
                        <div class="alert alert-success" >
                            <i class="glyphicon bg-success"></i> &nbsp; <?php echo 'Updated!'; ?>
                        </div>
                    <?php
			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}




    }

}

?>
