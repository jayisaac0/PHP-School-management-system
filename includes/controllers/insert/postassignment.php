<?php
if(isset($_POST['postassignment']))
{
    $assignmetntref = strip_tags(trim(stripslashes(htmlspecialchars($_POST['assignmetntref']))));
    $employeeid = strip_tags(trim(stripslashes(htmlspecialchars($_POST['employeeid']))));
    $classname = strip_tags(trim(stripslashes(htmlspecialchars($_POST['classname']))));
    $classdetails = strip_tags(trim(stripslashes(htmlspecialchars($_POST['classdetails']))));
    $assignmenttite = strip_tags(trim(stripslashes(htmlspecialchars($_POST['assignmenttite']))));
    $typedassignment = strip_tags(trim(stripslashes(htmlspecialchars($_POST['typedassignment']))));
    $marks = strip_tags(trim(stripslashes(htmlspecialchars($_POST['marks']))));
    $duedate = strip_tags(trim(stripslashes(htmlspecialchars($_POST['duedate']))));
    $assignmentfile = strip_tags(trim(stripslashes(htmlspecialchars($_POST['assignmentfile']))));  
    $year = date('Y');  



    if($assignmetntref == "") {
        $error[] = "Provide assignmetntref";
    }
    else if($employeeid == "") {
        $error[] = "Provide employeeid";
    }
    else if($classname == "") {
        $error[] = "Provide classname";
    }
    else if($classdetails == "") {
        $error[] = "Provide classdetails";
    }
    else if($assignmenttite == "") {
        $error[] = "Provide assignmenttite";
    }
    else if($typedassignment == "") {
        $error[] = "Provide typedassignment";
    }
    else if($marks == "") {
        $error[] = "Provide marks";
    }
    else if($duedate == "") {
        $error[] = "Provide duedate";
    }
    else if($year == "") {
        $error[] = "Provide year";
    }
    else
    {

            try
            {
                if($auth_user->postit($assignmetntref, $employeeid, $classname, $classdetails, $assignmenttite, $typedassignment, $marks, $duedate, $assignmentfile, $year, $user_id))
                {
                    ?>
                        <div class="alert alert-success">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo 'Product posted!'; ?>
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

