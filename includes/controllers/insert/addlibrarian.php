<?php
    if(isset($_POST['postnewemployee']))
    {
		$librarianid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['librarianid'])))));
		$title = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['title'])))));
		$firstname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['firstname'])))));
		$middlename = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['middlename'])))));
		$lastname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['lastname'])))));
		$gender = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['gender'])))));
		$email = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['email'])))));
		$mobilenumber = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['mobilenumber'])))));
		$dateofbirth = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['dateofbirth'])))));
		$nationality = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['nationality'])))));
		$upass = "library";
		$access_level = "library";

		if($librarianid == "") {
			$error[] = "Provide librarianid";
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
        else
        {

//check users. Create student id
//post
//checkstudent details and share student id and post


        $stmt = $auth_user->runQuery("SELECT * FROM `users`  ");
        $stmt->execute(array(':user_name'=>$librarianid ));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['user_name']) == strtolower($librarianid) ) {
            echo "Found"; 
        }else{
        	echo "NOTHING";
            try
            {	
                if($auth_user->insertnewlibraryuser($librarianid, $email, $upass, $access_level))
                {
                    
			        $stmt = $auth_user->runQuery("SELECT * FROM `librarian`  ");
			        $stmt->execute(array(':librarianid'=>$librarianid, ':firstname'=>$firstname, ':middlename'=>$middlename, ':lastname'=>$lastname, ));
			        $row=$stmt->fetch(PDO::FETCH_ASSOC);

			        if(strtolower($row['librarianid']) == strtolower($librarianid) AND strtolower($row['firstname']) == strtolower($firstname) AND strtolower($row['middlename']) == strtolower($middlename) AND strtolower($row['lastname']) == strtolower($lastname)  ) {
			            echo "Found"; 
			        }else{

			            try
			            {
			                if($auth_user->insertnewlibrary($librarianid, $title, $firstname, $middlename, $lastname, $gender, $email, $mobilenumber, $dateofbirth, $nationality, $user_id))
			                {
			                    ?>
			                        <div class="alert alert-success" >
			                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
			                            <?php echo 'Librarian Added';
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

 

 
