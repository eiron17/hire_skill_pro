<?php
include_once '../Class/User.php';
$u = new User();
$data = $u->displayall();
while ($row = $data->fetch_assoc()) {
    echo '
        <h2>'.$row['total_users'].'</h2>
    ';
}
?>