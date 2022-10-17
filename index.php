<?php 
$mode = "dark";
if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    if (!empty($firstName) && !empty($lastName)) {
        echo htmlspecialchars($firstName);
        echo htmlspecialchars($lastName);
    } else {
        echo "Missing required data.";
    } 
} else {
    echo "Not set!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Review</title>
</head>
<body <?php if ($mode === 'dark'): ?>class="dark"<?php endif ?>>
    <?php
     include('./view/header.php');
    ?> 
    <?php
     include('./view/main.php');
    ?> 
    <?php
     include('./view/footer.php');
    ?> 
  
</body>
</html>