<?php
    $stmt = $auth_user->runQuery("SELECT * FROM `employeeresponsibility` WHERE `employeeid`='".$userRow['user_name']."' ");
    $stmt->execute(array());
    $employeeresponsibility=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($employeeresponsibility as $employeeresponsibility) {

    $stmt = $auth_user->runQuery("SELECT * FROM `schoolsession` ORDER BY `time_created` DESC LIMIT 1   ");
    $stmt->execute(array());
    $schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($schoolsession as $schoolsession) {

    $stmt = $auth_user->runQuery("SELECT * FROM `admisioncategory` ");
    $stmt->execute(array());
    $admisioncategory=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($admisioncategory as $admisioncategory) {
        if(strtolower($admisioncategory->category) == "primary")
        {
            //echo "FOUND";
            require_once 'level/primary.php';
        }else
        {
            //echo "Nothing";
            require_once 'level/highschool.php';

        }
    }

    }
}
?> 