<?php
    if(isset($_POST['postcountry']))
    {
        $country_name = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['country_name'])))));

        if($country_name == "") {
            $error[] = "provide your first name!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `country_name` FROM `country` WHERE country_name=:country_name ");
        $stmt->execute(array(':country_name'=>$country_name));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['country_name']) == strtolower($country_name)) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertcountry($country_name, $user_id))
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
