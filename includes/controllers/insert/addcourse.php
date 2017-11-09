<?php
    if(isset($_POST['postnewcourse']))
    {
        $subject = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['subject'])))));
        $subjectcode = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['subjectcode'])))));
        $subjectaliase = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['subjectaliase'])))));

        if($subject == "") {
            $error[] = "provide subject!";
        }
        else if($subjectcode == "") {
            $error[] = "provide subject code!";
        }
        else if($subjectaliase == "") {
            $error[] = "provide subject aliase!";
        }
        else
        {


        $stmt = $auth_user->runQuery("SELECT `subject` FROM `subjects` WHERE subject=:subject ");
        $stmt->execute(array(':subject'=>$subject));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if(strtolower($row['subject']) == strtolower($subject)) {
            echo "Found"; 
        }else{

            try
            {
                if($auth_user->insertnewsubject($subject, $subjectcode, $subjectaliase, $user_id))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Subject Created';
                            echo '<script type="text/javascript">
                                window.location = "index/course"
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

    }

?>

 
