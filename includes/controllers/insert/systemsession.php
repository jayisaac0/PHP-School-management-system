<?php
    if(isset($_POST['postschoolsession']))
    {
        $term = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['term'])))));
        $year = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['year'])))));

        if($term == "") {
            $error[] = "provide term!";
        }
        else if($year == "") {
            $error[] = "provide year!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `schoolsession_id` FROM `schoolsession` ");
        $stmt->execute(array());
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() == 1){
            echo "Found"; 


            try
            {
                //$user_id = $_SESSION['user_session'];
                $stmt = $auth_user->runQuery("UPDATE `schoolsession` SET `term`=:term, `year`=:year WHERE `schoolsession_id`= '$schoolsession->schoolsession_id' ");
                $stmt->bindparam(":term", $term);
                $stmt->bindparam(":year", $year);
                $stmt->execute();
                ?>
                    <div class="alert alert-success" >
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                        <?php echo 'SESSION UPDATED';
                        ?>
                    </div>
                <?php
                
                return $stmt;
            }
            catch(PDOException $e)
            {
                //echo $e->getMessage();
            }


        }else {
            echo "NONE"; 
            try
            {
                if($auth_user->insertsession($term, $year))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'SESSION UPDATED';
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
