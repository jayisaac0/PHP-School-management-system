<?php
    if(isset($_POST['postnationality']))
    {
        $nationality = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['nationality'])))));

        if($nationality == "") {
            $error[] = "provide your first name!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `nationality` FROM `nationality` WHERE nationality=:nationality ");
        $stmt->execute(array(':nationality'=>$nationality));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['nationality']) == strtolower($nationality)) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertnationality($nationality, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Nationality Created';
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
