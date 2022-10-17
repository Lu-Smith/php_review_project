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
    <h1>
      Web Form
    </h1> 
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
       <label for="firstName">First Name</label>
       <input type="text" id="first-name" name="firstName" autocomplete="off">
       <label for="lastName">Last Name</label>
       <input type="text" id="last-name" name="lastName" autocomplete="off">
    </form>  
</body>
</html>