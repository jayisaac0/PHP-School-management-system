<?php

if(!isset($_GET['ref'])) {
    require_once 'includes/body/menu/index.php';
}

if(isset($_GET['ref'])) {
$ref = $_GET['ref'];

if($ref == "dashboard") { require_once 'includes/body/menu/index.php'; }
else if($ref == "conf") { require_once 'includes/body/configuration/index.php'; }
else if($ref == "country") { require_once 'includes/body/configuration/country.php'; }
else if($ref == "state") { require_once 'includes/body/configuration/state.php'; }
else if($ref == "town") { require_once 'includes/body/configuration/town.php'; }
else if($ref == "classes") { require_once 'includes/body/configuration/classes.php'; }
else if($ref == "nationality") { require_once 'includes/body/configuration/nationality.php'; }
else if($ref == "institute") { require_once 'includes/body/configuration/institute.php'; }
else if($ref == "document") { require_once 'includes/body/configuration/document.php'; }
else if($ref == "holiday") { require_once 'includes/body/configuration/holiday.php'; }
else if($ref == "systemsession") { require_once 'includes/body/configuration/systemsession.php'; }


else if($ref == "messageoftheday") { require_once 'includes/body/dashboard/messageoftheday.php'; }
else if($ref == "createmessageoftheday") { require_once 'includes/body/dashboard/createmessageoftheday.php'; }    
else if($ref == "events") { require_once 'includes/body/dashboard/events.php'; }
else if($ref == "notice") { require_once 'includes/body/dashboard/notice.php'; }
else if($ref == "createnotice") { require_once 'includes/body/dashboard/createnotice.php'; }    
else if($ref == "dashboardmodule") { require_once 'includes/body/dashboard/dashboardmodule.php'; }
else if($ref == "coursemodule") { require_once 'includes/body/coursemanagement/coursemodule.php'; }
else if($ref == "course") { require_once 'includes/body/coursemanagement/course.php'; }

else if($ref == "view") { require_once 'includes/body/coursemanagement/view.php'; }
else if($ref == "update") { require_once 'includes/body/coursemanagement/update.php'; } 
else if($ref == "addcourse") { require_once 'includes/body/coursemanagement/addcourse.php'; } 
else if($ref == "studentmodule") { require_once 'includes/body/student/studentmodule.php'; }
else if($ref == "addstudent") { require_once 'includes/body/student/addstudent.php'; }
else if($ref == "admissioncategory") { require_once 'includes/body/student/admissioncategory.php'; }
else if($ref == "managestudents") { require_once 'includes/body/student/managestudents.php'; }    
else if($ref == "reset") { require_once 'includes/body/student/reset.php'; } 
else if($ref == "studentstatus") { require_once 'includes/body/student/studentstatus.php'; } 
else if($ref == "studentname") { require_once 'includes/body/student/studentname.php'; } 
else if($ref == "results") { require_once 'includes/body/student/results.php'; } 
else if($ref == "bankmodule") { require_once 'includes/body/bank/bankmodule.php'; }
else if($ref == "bank") { require_once 'includes/body/bank/bank.php'; }    
else if($ref == "feecategory") { require_once 'includes/body/bank/feecategory.php'; } 
else if($ref == "feecollection") { require_once 'includes/body/bank/feecollection.php'; }
else if($ref == "feeupdate") { require_once 'includes/body/bank/feeupdate.php'; }
else if($ref == "class") { require_once 'includes/body/bank/class.php'; }

else if($ref == "addemployee") { require_once 'includes/body/employee/addemployee.php'; }
else if($ref == "employeemodule") { require_once 'includes/body/employee/employeemodule.php'; }
else if($ref == "employee") { require_once 'includes/body/employee/employee.php'; }
else if($ref == "responsibility") { require_once 'includes/body/employee/responsibility.php'; }
else if($ref == "assign") { require_once 'includes/body/employee/assign.php'; }


else if($ref == "addlibrarian") { require_once 'includes/body/library/addlibrarian.php'; }


else{     echo '<script type="text/javascript"> window.location = "page_403" </script>' ; }

}
?>
