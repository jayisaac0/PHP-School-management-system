<?php
    if(isset($_POST['poststate']))
    {
        $country_name = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['country_name'])))));
        $state = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['state'])))));

        if($country_name == "") {
            $error[] = "provide country!";
        }
        else if($state == "") {
            $error[] = "provide state or town!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT * FROM `state` ");
        $stmt->execute(array(':country_name'=>$country_name, ':state'=>$state));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['country_name']) == strtolower($country_name) AND strtolower($row['state']) == strtolower($state) ) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertstate($country_name, $state, $user_id))
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
