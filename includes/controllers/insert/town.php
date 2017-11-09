<?php
    if(isset($_POST['posttown']))
    {
        $country_name = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['country_name'])))));
        $state = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['state'])))));
        $town = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['town'])))));

        if($country_name == "") {
            $error[] = "provide country!";
        }
        else if($state == "") {
            $error[] = "provide state or state/province!";
        }
        else if($town == "") {
            $error[] = "provide state or town!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT * FROM `town` ");
        $stmt->execute(array(':country_name'=>$country_name, ':state'=>$state, ':town'=>$town));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['country_name']) == strtolower($country_name) AND strtolower($row['state']) == strtolower($state) AND strtolower($row['town']) == strtolower($town) ) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->inserttown($country_name, $state, $town, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Town Created';
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
