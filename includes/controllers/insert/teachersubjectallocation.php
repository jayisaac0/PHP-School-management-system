<?php
    if(isset($_POST['allocatesubject']))
    {
		$classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
		$employeeid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['employeeid'])))));
		$classdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classdetails'])))));
		$subjectname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['subjectname'])))));


		if($classname == "") {
			$error[] = "Provide classname";
		}
		else if($employeeid == "") {
			$error[] = "Provide employeeid";
		}
		else if($classdetails == "") {
			$error[] = "Provide classdetails";
		}
		else if($subjectname == "") {
			$error[] = "Provide subjectname";
		}
        else
        {


        $stmt = $auth_user->runQuery("SELECT * FROM `teachingsubjectallocation` ");
        $stmt->execute(array(':classname'=>$classname, ':employeeid'=>$employeeid, ':classdetails'=>$classdetails, ':subjectname'=>$subjectname ));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if( strtolower($row['classname']) == strtolower($classname) AND strtolower($row['employeeid']) == strtolower($employeeid) AND strtolower($row['classdetails']) == strtolower($classdetails) AND strtolower($row['subjectname']) == strtolower($subjectname) ) {
            echo "Found"; 
        }else{
            echo "NONE"; 
            try
            {
                if($auth_user->inserttachingsubjectallocation($classname, $employeeid, $classdetails, $subjectname, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Subject Created';
                            /*echo '<script type="text/javascript">
                                window.location = "forumInvites"
                                </script>';*/
                            ?>
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
