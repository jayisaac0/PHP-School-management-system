<?php
    if(isset($_POST['studentfee']))
    {
		$studentid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['studentid'])))));
		$classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
		$term = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['term'])))));
		$year = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['year'])))));
		$amountpaid = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['amountpaid'])))));
        $receiptnumber = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['receiptnumber'])))));
        $bank = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bank'])))));
        $paymentmethod = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['paymentmethod'])))));


		if($studentid == "") { $error[] = "Provide studentid"; }
		else if($classname == "") { $error[] = "Provide classname"; }
		else if($term == "") { $error[] = "Provide term"; }
		else if($year == "") { $error[] = "Provide year"; }
		else if($amountpaid == "") { $error[] = "Provide amountpaid"; }
        else if($receiptnumber == "") { $error[] = "Provide receiptnumber"; }
        else if($bank == "") { $error[] = "Provide bank"; }
        else if($paymentmethod == "") { $error[] = "Provide paymentmethod"; }

        else
        {

            try
            {
                if($auth_user->updatestudentfee($studentid, $classname, $term, $year, $amountpaid, $receiptnumber, $bank, $paymentmethod, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Notice Created';
                            echo '<script type="text/javascript">
                                window.location = "index/feeupdate/'.$student.'"
                                </script>';
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

?>

 