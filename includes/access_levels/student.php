<?php

if(!isset($_GET['ref'])) {
    require_once 'includes/body/student/index.php';
}

if(isset($_GET['ref'])) {
$ref = $_GET['ref'];

if($ref == "index") { require_once 'includes/body/student/index.php'; }
else if($ref == "studentname") { require_once 'includes/body/student/studentname.php'; }
else if($ref == "dashboard") { require_once 'includes/body/student/dashboard.php'; }
else if($ref == "results") { require_once 'includes/body/student/results.php'; }
else if($ref == "editaccount") { require_once 'includes/body/student/editaccount.php'; } 
else if($ref == "assignments") { require_once 'includes/body/student/assignments.php'; } 
else if($ref == "workout") { require_once 'includes/body/student/workout.php'; } 
else if($ref == "savedpeformance") { require_once 'includes/body/student/savedpeformance.php'; } 
else if($ref == "library") { require_once 'includes/body/student/library.php'; } 
else if($ref == "fee") { require_once 'includes/body/student/fee.php'; } 





else{     echo '<script type="text/javascript"> window.location = "page_403" </script>' ; }

}
?>