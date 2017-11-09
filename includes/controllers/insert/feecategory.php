<?php
    if(isset($_POST['postfeeref']))
    {
		$classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
		$termone = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['termone'])))));
		$termtwo = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['termtwo'])))));
		$termthree = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['termthree'])))));
		$totalyearfee = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['totalyearfee'])))));


		if($classname == "")
		{
			$error[] = "Provide classname"; 
		}
		else if($termone == "")
		{
			$error[] = "Provide termone"; 
		}
		else if($termtwo == "")
		{
			$error[] = "Provide termtwo"; 
		}
		else if($termthree == "")
		{
			$error[] = "Provide termthree"; 
		}
		else if($totalyearfee == "")
		{
			$error[] = "Provide totalyearfee"; 
		}
        else
        {


            $stmt = $auth_user->runQuery("SELECT `classname` FROM `feeref` WHERE `classname`='$classname'  ");
            $stmt->execute(array());
            $row=$stmt->fetchAll(PDO::FETCH_OBJ);
            if($stmt->rowCount() == 1){
                echo "found";
                ?>
                    <div class="alert alert-warning" >
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                        <?php echo "FOUND";  ?>
                    </div>
                <?php                
            }else{
                echo "None"; 

                        try
                        {
                            if($auth_user->fees($classname, $termone, $termtwo, $termthree, $totalyearfee, $user_id))
                            {
                                ?>
                                    <div class="alert alert-success" >
                                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                                        <?php echo 'Level updated'; ?>
                                    </div>
                                <?php
                            }
                        }catch(PDOException $e)
                            {
                                echo $e->getMessage();
                            }

            }

        }

    }

?>
