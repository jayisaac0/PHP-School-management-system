<?php
    if(isset($_POST['addstudent']))
    {
		$studentid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['studentid'])))));
		$studenttitle = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['studenttitle'])))));
		$firstname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['firstname'])))));
		$middlename = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['middlename'])))));
		$lastname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['lastname'])))));
		$gender = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['gender'])))));
		$studentemail = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['studentemail'])))));
		$mobilenumber = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mobilenumber'])))));
		$dateofbirth = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['dateofbirth'])))));
		$nationality = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['nationality'])))));
		$class = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['class'])))));
		$classdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classdetails'])))));
		$level = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['level'])))));
		$upass = "student";
		$access_level = "student";

		if($studentid == "") {
			$error[] = "Provide studentid";
		}
		else if($studenttitle == "") {
			$error[] = "Provide studenttitle";
		}
		else if($firstname == "") {
			$error[] = "Provide firstname";
		}
		else if($middlename == "") {
			$error[] = "Provide middlename";
		}
		else if($lastname == "") {
			$error[] = "Provide lastname";
		}
		else if($gender == "") {
			$error[] = "Provide gender";
		}
		else if($studentemail == "") {
			$error[] = "Provide studentemail";
		}
		else if($mobilenumber == "") {
			$error[] = "Provide mobilenumber";
		}
		else if($dateofbirth == "") {
			$error[] = "Provide dateofbirth";
		}
		else if($nationality == "") {
			$error[] = "Provide nationality";
		}
		else if($class == "") {
			$error[] = "Provide class admited to";
		}
		else if($classdetails == "") {
			$error[] = "Provide class details";
		}
        else
        {

//check users. Create student id
//post
//checkstudent details and share student id and post


        $stmt = $auth_user->runQuery("SELECT * FROM `users`  ");
        $stmt->execute(array(':user_name'=>$studentid ));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['user_name']) == strtolower($studentid) ) {
            echo "Found"; 
        }else{
        	echo "NOTHING";
            try
            {	
                if($auth_user->insertnewuser($studentid, $studentemail, $upass, $access_level))
                {
                    
			        $stmt = $auth_user->runQuery("SELECT * FROM `students`  ");
			        $stmt->execute(array(':studentid'=>$studentid, ':firstname'=>$firstname, ':middlename'=>$middlename, ':lastname'=>$lastname, ));
			        $row=$stmt->fetch(PDO::FETCH_ASSOC);

			        if(strtolower($row['studentid']) == strtolower($studentid) AND strtolower($row['firstname']) == strtolower($firstname) AND strtolower($row['middlename']) == strtolower($middlename) AND strtolower($row['lastname']) == strtolower($lastname)  ) {
			            echo "Found"; 
			        }else{

			            try
			            {
			                if($auth_user->insertnewstudent($studentid, $studenttitle, $firstname, $middlename, $lastname, $gender, $studentemail, $mobilenumber, $dateofbirth, $nationality, $class, $classdetails, $level, $user_id))
			                {
			                    ?>
			                        <div class="alert alert-success" >
			                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
			                            <?php echo 'Student Admitted';
			                            /*echo '<script type="text/javascript">
			                                window.location = "index/course"
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
            }catch(PDOException $e)
                {
                    echo $e->getMessage();
                }

        }


/*
        $stmt = $auth_user->runQuery("SELECT * FROM `students`  ");
        $stmt->execute(array(':studentid'=>$studentid, ':firstname'=>$firstname, ':middlename'=>$middlename, ':lastname'=>$lastname, ));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['studentid']) == strtolower($studentid) AND strtolower($row['firstname']) == strtolower($firstname) AND strtolower($row['middlename']) == strtolower($middlename) AND strtolower($row['lastname']) == strtolower($lastname)  ) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertnewstudent($studentid, $studenttitle, $firstname, $middlename, $lastname, $gender, $studentemail, $mobilenumber, $dateofbirth, $nationality, $class, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Student Admitted';
                            /*echo '<script type="text/javascript">
                                window.location = "index/course"
                                </script>';*/
                     /*       ?>
                        </div>
                    <?php
                }
            }catch(PDOException $e)
                {
                    echo $e->getMessage();
                }


        }
*/


        }

    }

?>

 

 
