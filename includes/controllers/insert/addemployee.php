<?php
    if(isset($_POST['postnewemployee']))
    {
		$employeeid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['employeeid'])))));
		$title = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['title'])))));
		$firstname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['firstname'])))));
		$middlename = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['middlename'])))));
		$lastname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['lastname'])))));
		$gender = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['gender'])))));
		$email = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['email'])))));
		$mobilenumber = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mobilenumber'])))));
		$dateofbirth = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['dateofbirth'])))));
		$nationality = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['nationality'])))));
		$classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
		$classdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classdetails'])))));
		$upass = "employee";
		$access_level = "employee";

		if($employeeid == "") {
			$error[] = "Provide employeeid";
		}
		else if($title == "") {
			$error[] = "Provide title";
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
		else if($email == "") {
			$error[] = "Provide email";
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
		else if($classname == "") {
			$error[] = "Provide classname";
		}
		else if($classdetails == "") {
			$error[] = "Provide classdetails";
		}
        else
        {

//check users. Create student id
//post
//checkstudent details and share student id and post


        $stmt = $auth_user->runQuery("SELECT * FROM `users`  ");
        $stmt->execute(array(':user_name'=>$employeeid ));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['user_name']) == strtolower($employeeid) ) {
            echo "Found"; 
        }else{
        	echo "NOTHING";
            try
            {	
                if($auth_user->insertnewemployeeuser($employeeid, $email, $upass, $access_level))
                {
                    
			        $stmt = $auth_user->runQuery("SELECT * FROM `employees`  ");
			        $stmt->execute(array(':employeeid'=>$employeeid, ':firstname'=>$firstname, ':middlename'=>$middlename, ':lastname'=>$lastname, ));
			        $row=$stmt->fetch(PDO::FETCH_ASSOC);

			        if(strtolower($row['employeeid']) == strtolower($employeeid) AND strtolower($row['firstname']) == strtolower($firstname) AND strtolower($row['middlename']) == strtolower($middlename) AND strtolower($row['lastname']) == strtolower($lastname)  ) {
			            echo "Found"; 
			        }else{

			            try
			            {
			                if($auth_user->insertnewemployee($employeeid, $title, $firstname, $middlename, $lastname, $gender, $email, $mobilenumber, $dateofbirth, $nationality, $classname, $classdetails, $user_id))
			                {
			                    ?>
			                        <div class="alert alert-success" >
			                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
			                            <?php echo 'Employee Added';
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



        }

    }

?>

 

 
