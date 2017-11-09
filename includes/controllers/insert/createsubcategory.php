booksubcategory

<?php
    if(isset($_POST['postsubcategory']))
    {
        $booksubcategory = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['booksubcategory'])))));

        if($booksubcategory == "") {
            $error[] = "provide your booksubcategory!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `booksubcategory` FROM `book_sub_category` WHERE booksubcategory=:booksubcategory ");
        $stmt->execute(array(':booksubcategory'=>$booksubcategory));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['booksubcategory']) == strtolower($booksubcategory)) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertbooksubcategory($booksubcategory, $user_id))
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
