<?php
    require_once("session.php");
    require_once("class.user.php");
    $auth_user = new USER();
    
    
    $user_id = $_SESSION['user_session'];
    
    $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
    $stmt->execute(array(":user_id"=>$user_id));
    
    $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php require_once 'includes/head/header.php'; ?>
<?php require_once 'includes/nav/sidepanelnav.php'; ?>
<?php require_once 'includes/nav/toppanelnav.php'; ?>



<div class="right_col" role="main">
    <div class="">
        <?php
        if($userRow['access_level'] == "master_admin"){
            //echo "Administrator";
            require_once 'includes/access_levels/master_admin.php';
        }
        else if($userRow['access_level'] == "student"){
            //echo "Student accound";
            require_once 'includes/access_levels/student.php';
        }
        else if($userRow['access_level'] == "employee"){
            //echo "Employee panel";
            require_once 'includes/access_levels/employee.php';
        }
        else if($userRow['access_level'] == "library"){
            //echo "Employee panel";
            require_once 'includes/access_levels/library.php';
        }
        else{
            echo '<script type="text/javascript"> window.location = "page_403" </script>';
        }
        ?>
    </div>
</div>
<center style="font-size:16px;"><b>Copyright &copy <?php echo date('Y'); ?> </b><a href="">sp</a> All rights reserved</center>


<?php require_once 'includes/footer/footer.php'; ?>