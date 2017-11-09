<?php
error_reporting (0);
require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($uname,$umail,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass) 
		                                               VALUES(:uname, :umail, :upass)");
												  
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}


	public function updatepassword($newpassword)
	{
		try
		{
			$newpassword = password_hash($newpassword, PASSWORD_DEFAULT);

			$user_id = $_SESSION['user_session'];

			$stmt = $this->conn->prepare("UPDATE `users` SET `user_pass`=:newpassword  WHERE `user_id`= '$user_id'");

			$stmt->bindparam(":newpassword", $newpassword);

			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


















	public function insertcountry($country_name, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO country(country_name, created_by)
			 VALUES(:country_name, :user_id) ");

			$stmt->bindparam(":country_name", $country_name);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertstate($country_name, $state, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO state(country_name, state, created_by)
			 VALUES(:country_name, :state, :user_id) ");

			$stmt->bindparam(":country_name", $country_name);
			$stmt->bindparam(":state", $state);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function inserttown($country_name, $state, $town, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO town(country_name, state, town, created_by)
			 VALUES(:country_name, :state, :town, :user_id) ");

			$stmt->bindparam(":country_name", $country_name);
			$stmt->bindparam(":state", $state);
			$stmt->bindparam(":town", $town);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertnationality($nationality, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO nationality(nationality, created_by)
			 VALUES(:nationality, :user_id) ");

			$stmt->bindparam(":nationality", $nationality);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertmessageoftheday($messageoftheday, $target, $messagestatus, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO messageoftheday(messageoftheday, target, messagestatus, created_by)
			 VALUES(:messageoftheday, :target, :messagestatus, :user_id) ");

			$stmt->bindparam(":messageoftheday", $messageoftheday);
			$stmt->bindparam(":target", $target);
			$stmt->bindparam(":messagestatus", $messagestatus);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertnotice($noticetitle, $noticedescription, $target, $messagestatus, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO notice(noticetitle, noticedescription, target, messagestatus, created_by)
			 VALUES(:noticetitle, :noticedescription, :target, :messagestatus, :user_id) ");

			$stmt->bindparam(":noticetitle", $noticetitle);
			$stmt->bindparam(":noticedescription", $noticedescription);
			$stmt->bindparam(":target", $target);
			$stmt->bindparam(":messagestatus", $messagestatus);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertnewsubject($subject, $subjectcode, $subjectaliase, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO subjects(subject, subjectcode, subjectaliase, created_by)
			 VALUES(:subject, :subjectcode, :subjectaliase, :user_id) ");

			$stmt->bindparam(":subject", $subject);
			$stmt->bindparam(":subjectcode", $subjectcode);
			$stmt->bindparam(":subjectaliase", $subjectaliase);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }



    public function insertnewuser($studentid, $studentemail, $upass, $access_level)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(user_name, user_email, user_pass, access_level) 
		                                               VALUES(:studentid, :studentemail, :upass, :access_level)");
												  
			$stmt->bindparam(":studentid", $studentid);
			$stmt->bindparam(":studentemail", $studentemail);
			$stmt->bindparam(":upass", $new_password);
			$stmt->bindparam(":access_level", $access_level);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}

    public function insertnewstudent($studentid, $studenttitle, $firstname, $middlename, $lastname, $gender, $studentemail, $mobilenumber, $dateofbirth, $nationality, $class, $classdetails, $level, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO students(studentid, studenttitle, firstname, middlename, lastname, gender, studentemail, mobilenumber, dateofbirth, nationality, class, classdetails, level, created_by)
			 VALUES(:studentid, :studenttitle, :firstname, :middlename, :lastname, :gender, :studentemail, :mobilenumber, :dateofbirth, :nationality, :class, :classdetails, :level, :user_id) ");

			$stmt->bindparam(":studentid", $studentid);
			$stmt->bindparam(":studenttitle", $studenttitle);
			$stmt->bindparam(":firstname", $firstname);
			$stmt->bindparam(":middlename", $middlename);
			$stmt->bindparam(":lastname", $lastname);
			$stmt->bindparam(":gender", $gender);
			$stmt->bindparam(":studentemail", $studentemail);
			$stmt->bindparam(":mobilenumber", $mobilenumber);
			$stmt->bindparam(":dateofbirth", $dateofbirth);
			$stmt->bindparam(":nationality", $nationality);
			$stmt->bindparam(":class", $class);
			$stmt->bindparam(":classdetails", $classdetails);
			$stmt->bindparam(":level", $level);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

	public function insertallocatedcourse($subject, $studentid, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO subjectallocation(subject, studentid, created_by)
			 VALUES(:subject, :studentid, :user_id) ");

			$stmt->bindparam(":subject", $subject);
			$stmt->bindparam(":studentid", $studentid);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertadmisioncategory($category, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO admisioncategory(category, created_by)
			 VALUES(:category, :user_id) ");

			$stmt->bindparam(":category", $category);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertclass($classname, $classdetails, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO classes(classname, classdetails, created_by)
			 VALUES(:classname, :classdetails, :user_id) ");

			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":classdetails", $classdetails);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertnewemployeeuser($employeeid, $email, $upass, $access_level)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass, access_level) 
		                                               VALUES(:employeeid, :email, :upass, :access_level)");
												  
			$stmt->bindparam(":employeeid", $employeeid);
			$stmt->bindparam(":email", $email);
			$stmt->bindparam(":upass", $new_password);
			$stmt->bindparam(":access_level", $access_level);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}

	public function insertnewemployee($employeeid, $title, $firstname, $middlename, $lastname, $gender, $email, $mobilenumber, $dateofbirth, $nationality, $classname, $classdetails, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO employees(employeeid, title, firstname, middlename, lastname, gender, email, mobilenumber, dateofbirth, nationality, classname, classdetails, created_by)
			 VALUES(:employeeid, :title, :firstname, :middlename, :lastname, :gender, :email, :mobilenumber, :dateofbirth, :nationality, :classname, :classdetails, :user_id) ");

			$stmt->bindparam(":employeeid", $employeeid);
			$stmt->bindparam(":title", $title);
			$stmt->bindparam(":firstname", $firstname);
			$stmt->bindparam(":middlename", $middlename);
			$stmt->bindparam(":lastname", $lastname);
			$stmt->bindparam(":gender", $gender);
			$stmt->bindparam(":email", $email);
			$stmt->bindparam(":mobilenumber", $mobilenumber);
			$stmt->bindparam(":dateofbirth", $dateofbirth);
			$stmt->bindparam(":nationality", $nationality);
			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":classdetails", $classdetails);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function inserttachingsubjectallocation($classname, $employeeid, $classdetails, $subjectname, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO teachingsubjectallocation(classname, employeeid, classdetails, subjectname, created_by)
			 VALUES(:classname, :employeeid, :classdetails, :subjectname, :user_id) ");

			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":employeeid", $employeeid);
			$stmt->bindparam(":classdetails", $classdetails);
			$stmt->bindparam(":subjectname", $subjectname);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertpostass($assignmetntref, $classname, $classdetails, $assignmenttite, $duedate, $assignmentfile, $year, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO assignments(assignmetntref, classname, classdetails, assignmenttite, duedate, assignmentfile, year, created_by)
			 VALUES(:assignmetntref, :classname, :classdetails, :assignmenttite, :duedate, :assignmentfile, :year, :user_id) ");


			$stmt->bindparam(":assignmetntref", $assignmetntref);
			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":classdetails", $classdetails);
			$stmt->bindparam(":assignmenttite", $assignmenttite);
			$stmt->bindparam(":duedate", $duedate);
			$stmt->bindparam(":assignmentfile", $assignmentfile);
			$stmt->bindparam(":year", $year);
			$stmt->bindparam(":user_id", $user_id);

			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }



    public function insertsession($term, $year)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO schoolsession(term, year)
			 VALUES(:term, :year) ");

			$stmt->bindparam(":term", $term);
			$stmt->bindparam(":year", $year);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }


	public function insertresponsibility($employeeid, $classname, $classdetails, $responsibility, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO employeeresponsibility(employeeid, classname, classdetails, responsibility, created_by)
			 VALUES(:employeeid, :classname, :classdetails, :responsibility, :user_id) ");

			$stmt->bindparam(":employeeid", $employeeid);
			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":classdetails", $classdetails);
			$stmt->bindparam(":responsibility", $responsibility);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }


    public function postit($assignmetntref, $employeeid, $classname, $classdetails, $assignmenttite, $typedassignment, $marks, $duedate, $assignmentfile, $year, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO assignments(assignmetntref, employeeid, classname, classdetails, assignmenttite, typedassignment, marks, duedate, assignmentfile, year, created_by)
			 VALUES(:assignmetntref, :employeeid, :classname, :classdetails, :assignmenttite, :typedassignment, :marks, :duedate, :assignmentfile, :year, :user_id) ");

			$stmt->bindparam(":assignmetntref", $assignmetntref);
			$stmt->bindparam(":employeeid", $employeeid);
			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":classdetails", $classdetails);
			$stmt->bindparam(":assignmenttite", $assignmenttite);
			$stmt->bindparam(":typedassignment", $typedassignment);
			$stmt->bindparam(":marks", $marks);
			$stmt->bindparam(":duedate", $duedate);
			$stmt->bindparam(":assignmentfile", $assignmentfile);
			$stmt->bindparam(":year", $year);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }


    public function repltassignment($typedassignmentreply, $assignmetntref, $title, $studentid)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO assignmentreplies(typedassignmentreply, assignmetntref, title, studentid)
			 VALUES(:typedassignmentreply, :assignmetntref, :title, :studentid) ");

			$stmt->bindparam(":typedassignmentreply", $typedassignmentreply);
			$stmt->bindparam(":assignmetntref", $assignmetntref);
			$stmt->bindparam(":title", $title);
			$stmt->bindparam(":studentid", $studentid);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function fees($classname, $termone, $termtwo, $termthree, $totalyearfee, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO feeref(classname, termone, termtwo, termthree, totalyearfee, created_by)
			 VALUES(:classname, :termone, :termtwo, :termthree, :totalyearfee, :user_id) ");

			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":termone", $termone);
			$stmt->bindparam(":termtwo", $termtwo);
			$stmt->bindparam(":termthree", $termthree);
			$stmt->bindparam(":totalyearfee", $totalyearfee);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function updatestudentfee($studentid, $classname, $term, $year, $amountpaid, $receiptnumber, $bank, $paymentmethod, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO studentfeepayment(studentid, classname, term, year, amountpaid, receiptnumber, bank, paymentmethod, created_by)
			 VALUES(:studentid, :classname, :term, :year, :amountpaid, :receiptnumber, :bank, :paymentmethod, :user_id) ");

			$stmt->bindparam(":studentid", $studentid);
			$stmt->bindparam(":classname", $classname);
			$stmt->bindparam(":term", $term);
			$stmt->bindparam(":year", $year);
			$stmt->bindparam(":amountpaid", $amountpaid);
			$stmt->bindparam(":receiptnumber", $receiptnumber);
			$stmt->bindparam(":bank", $bank);
			$stmt->bindparam(":paymentmethod", $paymentmethod);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }




    public function insertnewlibraryuser($librarianid, $email, $upass, $access_level)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass, access_level) 
		                                               VALUES(:librarianid, :email, :upass, :access_level)");
												  
			$stmt->bindparam(":librarianid", $librarianid);
			$stmt->bindparam(":email", $email);
			$stmt->bindparam(":upass", $new_password);
			$stmt->bindparam(":access_level", $access_level);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}





	public function insertnewlibrary($librarianid, $title, $firstname, $middlename, $lastname, $gender, $email, $mobilenumber, $dateofbirth, $nationality, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO librarian(librarianid, title, firstname, middlename, lastname, gender, email, mobilenumber, dateofbirth, nationality, created_by)
			 VALUES(:librarianid, :title, :firstname, :middlename, :lastname, :gender, :email, :mobilenumber, :dateofbirth, :nationality, :user_id) ");

			$stmt->bindparam(":librarianid", $librarianid);
			$stmt->bindparam(":title", $title);
			$stmt->bindparam(":firstname", $firstname);
			$stmt->bindparam(":middlename", $middlename);
			$stmt->bindparam(":lastname", $lastname);
			$stmt->bindparam(":gender", $gender);
			$stmt->bindparam(":email", $email);
			$stmt->bindparam(":mobilenumber", $mobilenumber);
			$stmt->bindparam(":dateofbirth", $dateofbirth);
			$stmt->bindparam(":nationality", $nationality);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }


	public function insertbookcategory($bookcategory, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO book_category(bookcategory, created_by)
			 VALUES(:bookcategory, :user_id) ");

			$stmt->bindparam(":bookcategory", $bookcategory);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function insertbooksubcategory($booksubcategory, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO book_sub_category(booksubcategory, created_by)
			 VALUES(:booksubcategory, :user_id) ");

			$stmt->bindparam(":booksubcategory", $booksubcategory);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }


    public function insertnewbook($bookref, $booktitle, $bookauthor, $publishingyear, $bookpages, $bookcategory, $booksubcategory, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO books(bookref, booktitle, bookauthor, publishingyear, bookpages, bookcategory, booksubcategory, created_by)
			 VALUES(:bookref, :booktitle, :bookauthor, :publishingyear, :bookpages, :bookcategory, :booksubcategory, :user_id) ");

			$stmt->bindparam(":bookref", $bookref);
			$stmt->bindparam(":booktitle", $booktitle);
			$stmt->bindparam(":bookauthor", $bookauthor);
			$stmt->bindparam(":publishingyear", $publishingyear);
			$stmt->bindparam(":bookpages", $bookpages);
			$stmt->bindparam(":bookcategory", $bookcategory);
			$stmt->bindparam(":booksubcategory", $booksubcategory);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }



    public function bookborrowed($student, $book, $user_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO borrowed(student, book, created_by)
			 VALUES(:student, :book, :user_id) ");

			$stmt->bindparam(":student", $student);
			$stmt->bindparam(":book", $book);
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }
















































	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>