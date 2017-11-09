<?php
    if(isset($_POST['postnewbook']))
    {
		$bookref = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bookref'])))));
		$booktitle = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['booktitle'])))));
		$bookauthor = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bookauthor'])))));
		$publishingyear = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['publishingyear'])))));
		$bookpages = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bookpages'])))));
		$bookcategory = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bookcategory'])))));
		$booksubcategory = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['booksubcategory'])))));


		if($bookref == "") { $error[] = "Provide bookref"; }
		else if($booktitle == "") { $error[] = "Provide booktitle"; }
		else if($bookauthor == "") { $error[] = "Provide bookauthor"; }
		else if($publishingyear == "") { $error[] = "Provide publishingyear"; }
		else if($bookpages == "") { $error[] = "Provide bookpages"; }
		else if($bookcategory == "") { $error[] = "Provide bookcategory"; }
		else if($booksubcategory == "") { $error[] = "Provide booksubcategory"; }
        else
        {

        $stmt = $auth_user->runQuery("SELECT `booktitle` FROM `books` WHERE booktitle=:booktitle ");
        $stmt->execute(array(':booktitle'=>$booktitle));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['booktitle']) == strtolower($booktitle)) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertnewbook($bookref, $booktitle, $bookauthor, $publishingyear, $bookpages, $bookcategory, $booksubcategory, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Subject Created'; ?>
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

 
