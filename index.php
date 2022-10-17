<?php 
$mode = "dark";

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
     include('./view/alt_header.php');
    ?> 
    <?php
     include('./view/main.php');
    ?> 
    <?php
     include('./view/footer.php');
    ?> 
  
</body>
</html>