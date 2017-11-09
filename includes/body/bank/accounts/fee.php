<?php

/**
* FEE PAYMENT ALGORITHM
* Take amount paid, subtract it from the term fee amount to get new fee amount
* Take new fee and subtract amount currently paid to get balance 
* (IF less than required fee post a balance if more post overpayment)
* Following; take overpayment and add to expected fee Obtain new fee required to be paid
* Subtract new fee and paid fee to obtain balance or overpayment
* //RECURE//
**/


    $stmt = $auth_user->runQuery("SELECT * FROM `studentfeepayment` WHERE `studentid`='$student' ");
    $stmt->execute(array());
    $studentfeepayment=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($studentfeepayment as $studentfeepayment) {
      //@$msg_d = $studentfeepayment->amountpaid;  @$fee_e += $msg_d; 
    }
?> 



<?php
    $stmt = $auth_user->runQuery("SELECT * FROM `feeref` WHERE `classname`='$students->class' ");
    $stmt->execute(array());
    $feeref=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($feeref as $feeref) {
        if($schoolsession->term == "Term one"){
            echo '<h1> Ksh: '.number_format($feeref->termone, 2).'</h1>';
        }
        if($schoolsession->term == "Term two"){
            echo '<h1> Ksh: '.number_format($feeref->termtwo, 2).'</h1>';
        }
        if($schoolsession->term == "Term three"){
            echo '<h1> Ksh: '.number_format($feeref->termthree, 2).'</h1>';
        }
        
    }
?>    