<?php 
    if ($_GET['page']=="user_data") {
        include "pages/users/users.php";
    } else if($_GET['page']=="add_user") {
        include "pages/users/add_users.php";
    } else if($_GET['page']=="attendance") {
        include "pages/users/attendance.php";
    } else if($_GET['page']=="mail") {
        include "pages/users/mail/inbox.php";
    } else if($_GET['page']=="compose") {
        include "pages/users/mail/compose.php";
    }else if($_GET['page']=="log_attendance") {
        include "pages/users/log_attendance.php";
    }
    

?>