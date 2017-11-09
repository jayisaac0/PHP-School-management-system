<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = $_GET['student'];

    $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='".$userRow['user_name']."' ");
    $stmt->execute(array());
    $students=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($students as $students) {

        $stmt = $auth_user->runQuery("SELECT * FROM `primaryschoolmarks` WHERE `primaryschoolmarks_id`='$student'  ");
        $stmt->execute(array());
        $primaryschoolmarks=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($primaryschoolmarks as $primaryschoolmarks) {

            $stmt = $auth_user->runQuery("SELECT * FROM `admisioncategory` ");
            $stmt->execute(array());
            $admisioncategory=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($admisioncategory as $admisioncategory) {
                if(strtolower($admisioncategory->category) == "primary")
                {
                    //echo "FOUND";
                    require_once 'level/savedprimary.php';
                }else
                {
                    //echo "Nothing";
                    require_once 'level/savedhighschool.php';

                }
            }

        }
    }
}
?>