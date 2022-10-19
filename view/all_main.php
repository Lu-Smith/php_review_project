<?php
      if (isset($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
        if (!empty($firstName)) {
            include('./view/main/user_main.php');
        } else {
           include('./view/main/form_main.php');
        } 
    } else {
        include('./view/main/form_main.php');
    }
?>
