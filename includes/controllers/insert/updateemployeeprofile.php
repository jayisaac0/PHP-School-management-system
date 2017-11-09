
<?php
if(isset($_POST['postemployeeupdate']))
{
	$title =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['title']))));
	$firstname =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['firstname']))));
	$middlename =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['middlename']))));
	$lastname =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['lastname']))));
	$gender =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['gender']))));
	$email =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['email']))));
	$mobilenumber =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['mobilenumber']))));
	$dateofbirth =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['dateofbirth']))));
	$nationality =  strip_tags(trim(stripslashes(htmlspecialchars($_POST['nationality']))));
	$profileimage =  strip_tags(trim($_POST['profileimage']));


	if($title == "") { $error[] = "Provide title"; }
	else if($firstname == "") { $error[] = "Provide firstname"; }
	else if($middlename == "") { $error[] = "Provide middlename"; }
	else if($lastname == "") { $error[] = "Provide lastname"; }
	else if($gender == "") { $error[] = "Provide gender"; }
	else if($email == "") { $error[] = "Provide email"; }
	else if($mobilenumber == "") { $error[] = "Provide mobilenumber"; }
	else if($dateofbirth == "") { $error[] = "Provide dateofbirth"; }
	else if($nationality == "") { $error[] = "Provide nationality"; }
	//else if(empty($_FILES['profileimage']['name']) === true) { $error[] = "Provide profileimage"; }
    else
    {

		try
		{
			$stmt = $auth_user->runQuery("UPDATE `employees` SET `title`=:title, `firstname`=:firstname, `middlename`=:middlename, `lastname`=:lastname, `gender`=:gender, `email`=:email, `mobilenumber`=:mobilenumber, `dateofbirth`=:dateofbirth, `nationality`=:nationality, `profileimage`=:profileimage  WHERE `employeeid`= '$employees->employeeid'");
			
			$stmt->bindparam(":title", $title);
			$stmt->bindparam(":firstname", $firstname);
			$stmt->bindparam(":middlename", $middlename);
			$stmt->bindparam(":lastname", $lastname);
			$stmt->bindparam(":gender", $gender);
			$stmt->bindparam(":email", $email);
			$stmt->bindparam(":mobilenumber", $mobilenumber);
			$stmt->bindparam(":dateofbirth", $dateofbirth);
			$stmt->bindparam(":nationality", $nationality);
			$stmt->bindparam(":profileimage", $profileimage);
			$stmt->execute();
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon bg-success"></i> &nbsp; <?php echo 'Profile Updated!'; ?>
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
