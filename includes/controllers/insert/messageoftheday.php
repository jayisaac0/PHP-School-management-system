<?php
    if(isset($_POST['postmessageoftheday']))
    {
        $messageoftheday = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['messageoftheday'])))));
        $target = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['target'])))));
        $messagestatus = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['messagestatus'])))));

        if($messageoftheday == "") {
            $error[] = "provide message of the day!";
        }
        else if($target == "") {
            $error[] = "provide target!";
        }
        else if($messagestatus == "") {
            $error[] = "provide messagestatus!";
        }
        else
        {


            try
            {
                if($auth_user->insertmessageoftheday($messageoftheday, $target, $messagestatus, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Message posted';
                            echo '<script type="text/javascript">
                                window.location = "index/messageoftheday"
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