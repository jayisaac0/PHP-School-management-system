<?php

if(!isset($_GET['ref'])) {
    require_once 'includes/body/library/index.php';
}

if(isset($_GET['ref'])) {
$ref = $_GET['ref'];

if($ref == "index") { require_once 'includes/body/library/index.php'; }
else if($ref == "createcategory") { require_once 'includes/body/library/createcategory.php'; }
else if($ref == "dashboard") { require_once 'includes/body/library/dashboard.php'; }

else if($ref == "borrow") { require_once 'includes/body/library/borrow.php'; }
else if($ref == "return") { require_once 'includes/body/library/return.php'; }

else if($ref == "books") { require_once 'includes/body/library/books.php'; }
else if($ref == "success") { require_once 'includes/body/library/success.php'; } 


else{     echo '<script type="text/javascript"> window.location = "page_403" </script>' ; }

}
?>