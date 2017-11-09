<?php
    if(isset($_POST['replyassignment']))
    {
        $typedassignmentreply = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['typedassignmentreply'])))));
        $assignmetntref = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['assignmetntref'])))));
        $title = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['title'])))));
        $studentid = $userRow['user_name'];

        if($typedassignmentreply == "") {
            $error[] = "provide typedassignmentreply!";
        }
        else if($assignmetntref == "") {
            $error[] = "provide assignmetntref!";
        }
        else if($title == "") {
            $error[] = "provide title!";
        }
        else
        {


            try
            {
                if($auth_user->repltassignment($typedassignmentreply, $assignmetntref, $title, $studentid))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Assignment submitted';
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