<?php
    if(isset($_POST['postnotice']))
    {
        $noticetitle = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['noticetitle'])))));
        $noticedescription = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['noticedescription'])))));
        $target = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['target'])))));
        $messagestatus = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['messagestatus'])))));

        if($noticetitle == "") {
            $error[] = "provide notice title!";
        }
        else if($noticedescription == "") {
            $error[] = "provide notice description!";
        }
        else if($target == "") {
            $error[] = "provide target!";
        }
        else if($messagestatus == "") {
            $error[] = "provide message status!";
        }
        else
        {



            try
            {
                if($auth_user->insertnotice($noticetitle, $noticedescription, $target, $messagestatus, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Notice Created';
                            echo '<script type="text/javascript">
                                window.location = "index/notice"
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

 
