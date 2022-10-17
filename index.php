<?php 
$mode = "dark";
print_r($_GET);
print_r($_POST);
$firstName = $_GET["firstName"];
$lastName = $_GET['lastName'];
echo $firstName;
echo $lastName;
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
       <input type="text" id="firstName" name="firstName" autocomplete="off">
       <label for="lastName">Last Name</label>
       <input type="text" id="lastName" name="lastName" autocomplete="off">
       <div class="buttons">
        <button type="submit">Submit</button>
        <button type="submit" formmethod="post">Submit using POST</button>
        <button type="reset">Reset</button>
       </div>
    </form>  
</body>
</html>