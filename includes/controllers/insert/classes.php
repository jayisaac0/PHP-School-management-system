<?php
    if(isset($_POST['postclass']))
    {
        $classname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classname'])))));
        $classdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['classdetails'])))));

        if($classname == "") {
            $error[] = "provide country!";
        }
        else if($classdetails == "") {
            $error[] = "provide classdetails or town!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT * FROM `classes` ");
        $stmt->execute(array(':classname'=>$classname, ':classdetails'=>$classdetails));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['classname']) == strtolower($classname) AND strtolower($row['classdetails']) == strtolower($classdetails) ) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertclass($classname, $classdetails, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Class Created';
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
