<?php 
$mode = "dark";
$greeting = "Hello";
$name = "Luna";
$num = 42;
$dub = 42.02;
$boo = true;
$arr = array('a', 'b', 'c');
define('DAYS_IN_YEAR', 365);
$days = 1;
$counter = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body <?php if ($mode === 'dark'): ?>class="dark"<?php endif ?>>
    <h1>
       <?php     
       echo $greeting . " " . $name . "😄" ?>
    </h1>
    <p>
        <?php echo $arr[2]
        ?>
        <br />
        <h2>
        <?php echo DAYS_IN_YEAR + 1
        ?>
        </h2>
        <br />
        <h2>
        <?php 
        for ($counter = 0; $counter < 11; $counter++) {
            echo $counter . " ";
        }
     

        ?>
        </h2>

       
    </p>
</body>
</html>