<?php
    if(isset($_POST['postresponsibility']))
    {
        $classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
		$employeeid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['employeeid'])))));
		$classdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classdetails'])))));
		$responsibility = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['responsibility'])))));



		if($classname == "") {
			$error[] = "Provide classname";
		}
		else if($employeeid == "") {
			$error[] = "Provide employeeid";
		}
		else if($classdetails == "") {
			$error[] = "Provide classdetails";
		}
		else if($responsibility == "") {
			$error[] = "Provide responsibility";
		}
        else
        {

            $stmt = $auth_user->runQuery("SELECT * FROM employeeresponsibility WHERE `employeeid` = '$employeeid'  ");
            $stmt->execute(array());
            $row=$stmt->fetchAll(PDO::FETCH_OBJ);
            if($stmt->rowCount() == 1){
                echo "found";
                ?>
                    <div class="alert alert-warning" >
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                        <?php echo "Employee is already a ".$responsibility;  ?>
                    </div>
                <?php
            }else{
                //echo "None";

                $stmt = $auth_user->runQuery("SELECT * FROM employeeresponsibility WHERE  `classdetails`='$classdetails' AND `classname`='$classname' ");
                $stmt->execute(array());
                $row=$stmt->fetchAll(PDO::FETCH_OBJ);
                if($stmt->rowCount() == 1){
                    //echo "found";
                    ?>
                        <div class="alert alert-danger" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo "Class already taken ";  ?>
                        </div>
                    <?php
                }else{
                   // echo "None";
                        try
                        {
                            if($auth_user->insertresponsibility($employeeid, $classname, $classdetails, $responsibility, $user_id))
                            {
                                ?>
                                    <div class="alert alert-success" >
                                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                                        <?php echo 'Employee assignedd responsibility'; ?>
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

    }

?>

