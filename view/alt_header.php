<header>
    <?php
          if (isset($_POST['firstName'])) {
              $firstName = $_POST['firstName'];
              if (!empty($firstName)) {
                  include('./view/greetings/user_header.php');
              } else {
                 include('./view/greetings/main_header.php');
              } 
          } else {
              echo "Not set!";
          }

    ?>
</header>
