<?php
/**
 * Created by PhpStorm.
 * User: SJB
 * Date: 22/8/17
 * Time: 15:38
 */
$USRNAME = trim($_POST['username']);
$EMAIL = trim($_POST['email']);
$PSW = trim($_POST['password']);
$REPSW = trim($_POST['passwordConfirm']);
//$types = array(0 => 'Customer', 1 => 'Offeror', 2 => 'Landlord', 3 => 'Organization');
//$TYPE = array_search($_POST['role'],$types);
if ($_POST['role'] == 'Customer') {
    $TYPE = 0;
} else {
    $TYPE = 1;
}
$array = array(1 => $USRNAME, 2 => $EMAIL, 3 => $PSW, 4 => $REPSW, 5 => $TYPE);

return $array;

?>