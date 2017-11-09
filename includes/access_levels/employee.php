<?php

if(!isset($_GET['ref'])) {
    require_once 'includes/body/menu/index.php';
}

if(isset($_GET['ref'])) {
$ref = $_GET['ref'];

if($ref == "employee") { require_once 'includes/body/employee/employee.php'; }
else if($ref == "assignments") { require_once 'includes/body/employee/assignments.php'; }
else if($ref == "classlist") { require_once 'includes/body/employee/classlist.php'; }
else if($ref == "studentmarks") { require_once 'includes/body/employee/studentmarks.php'; }
else if($ref == "profileupdate") { require_once 'includes/body/employee/profileupdate.php'; }
else if($ref == "sendassignment") { require_once 'includes/body/employee/sendassignment.php'; }
else if($ref == "submissions") { require_once 'includes/body/employee/submissions.php'; }
else if($ref == "classpeformance") { require_once 'includes/body/employee/classpeformance.php'; }
else if($ref == "view") { require_once 'includes/body/employee/view.php'; }

else{     echo '<script type="text/javascript"> window.location = "page_403" </script>' ; }

}
?>