<?php require_once 'includes/nav/sidepanelnav.php'; ?>
<?php require_once 'includes/nav/toppanelnav.php'; ?>



      <div class="right_col" role="main">
            <div class="">
<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
?>


<?php

    if($ref == "dashboard") {

        require_once 'includes/body/menu/index.php';

    }
    else if($ref == "conf") {

        require_once 'includes/body/configuration/index.php';

    }
    else if($ref == "country") {
        //echo 'country';
        require_once 'includes/body/configuration/country.php';
    }
    else if($ref == "state") {
        //echo 'state';
        require_once 'includes/body/configuration/state.php';
    }
    else if($ref == "town") {
        //echo 'town';
        require_once 'includes/body/configuration/town.php';
    }
    else if($ref == "nationality") {
        //echo 'nationality';
        require_once 'includes/body/configuration/nationality.php';
    }
    else if($ref == "institute") {
        //echo 'institute';
        require_once 'includes/body/configuration/institute.php';
    }
    else if($ref == "document") {
        //echo 'institute';
        require_once 'includes/body/configuration/document.php';
    }
    else if($ref == "holiday") {
        //echo 'institute';
        require_once 'includes/body/configuration/holiday.php';
    }

    else if($ref == "messageoftheday") {
        //echo 'institute';
        require_once 'includes/body/dashboard/messageoftheday.php';
    }
    else if($ref == "createmessageoftheday") {
        //echo 'institute';
        require_once 'includes/body/dashboard/createmessageoftheday.php';
    }    
    else if($ref == "events") {
        //echo 'institute';
        require_once 'includes/body/dashboard/events.php';
    }
    else if($ref == "notice") {
        //echo 'institute';
        require_once 'includes/body/dashboard/notice.php';
    }
    else if($ref == "createnotice") {
        //echo 'institute';
        require_once 'includes/body/dashboard/createnotice.php';
    }    
    else if($ref == "dashboardmodule") {
        //echo 'institute';
        require_once 'includes/body/dashboard/dashboardmodule.php';
    }

    else if($ref == "coursemodule") {
        //echo 'institute';
        require_once 'includes/body/coursemanagement/coursemodule.php';
    }
    else if($ref == "course") {
        //echo 'institute';
        require_once 'includes/body/coursemanagement/course.php';
    }
  
    else if($ref == "section") {
        //echo 'institute';
        require_once 'includes/body/coursemanagement/section.php';
    }
    else if($ref == "view") {
        //echo 'institute';
        require_once 'includes/body/coursemanagement/view.php';
    }
    else if($ref == "update") {
        //echo 'institute';
        require_once 'includes/body/coursemanagement/update.php';
    } 
    else if($ref == "addcourse") {
        //echo 'institute';
        require_once 'includes/body/coursemanagement/addcourse.php';
    } 

    else if($ref == "studentmodule") {
        //echo 'institute';
        require_once 'includes/body/student/studentmodule.php';
    }
  
    else if($ref == "addstudent") {
        //echo 'institute';
        require_once 'includes/body/student/addstudent.php';
    }
    else if($ref == "admissioncategory") {
        //echo 'institute';
        require_once 'includes/body/student/admissioncategory.php';
    }
    else if($ref == "managestudents") {
        //echo 'institute';
        require_once 'includes/body/student/managestudents.php';
    }    
    else if($ref == "reset") {
        //echo 'institute';
        require_once 'includes/body/student/reset.php';
    } 
    else if($ref == "studentstatus") {
        //echo 'institute';
        require_once 'includes/body/student/studentstatus.php';
    } 
    else if($ref == "studentname") {
        //echo 'institute';
        require_once 'includes/body/student/studentname.php';
    } 
    else if($ref == "results") {
        //echo 'institute';
        require_once 'includes/body/student/results.php';
    } 

    else if($ref == "bankmodule") {
        //echo 'institute';
        require_once 'includes/body/bank/bankmodule.php';
    }
    else if($ref == "bank") {
        //echo 'institute';
        require_once 'includes/body/bank/bank.php';
    }    
    else if($ref == "feecategory") {
        //echo 'institute';
        require_once 'includes/body/bank/feecategory.php';
    } 
    else if($ref == "feecollection") {
        //echo 'institute';
        require_once 'includes/body/bank/feecollection.php';
    }

    else{
        echo "ERROR";
    }

?>













<?php
}
?>

          </div>
        </div>
