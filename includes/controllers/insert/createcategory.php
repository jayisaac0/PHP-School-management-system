<?php
    if(isset($_POST['postcategory']))
    {
        $bookcategory = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['bookcategory'])))));

        if($bookcategory == "") {
            $error[] = "provide your bookcategory!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `bookcategory` FROM `book_category` WHERE bookcategory=:bookcategory ");
        $stmt->execute(array(':bookcategory'=>$bookcategory));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['bookcategory']) == strtolower($bookcategory)) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertbookcategory($bookcategory, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Country Created';
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
bookcategory
