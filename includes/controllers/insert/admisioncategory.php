<?php
    if(isset($_POST['postCategory']))
    {
        $category = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['category'])))));

        if($category == "") {
            $error[] = "provide category!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `category` FROM `admisioncategory` WHERE category=:category ");
        $stmt->execute(array(':category'=>$category));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['category']) == strtolower($category)) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertadmisioncategory($category, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Created';
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
