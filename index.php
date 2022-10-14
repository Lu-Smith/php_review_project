<?php 
$mode = "dark";
$greeting = "Hello";
$name = "Luna";
$num = 42;
$dub = 42.02;
$boo = true;
$arr = array('a', 'b', 'c');
define('DAYS_IN_YEAR', 365);
define('MUGS', 'blue');
$days = 1;


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
       <?php  
       $counter = 0;
       $arr = array("Robert", "Jimmy", "Alice", "Dorothy", "Maggie");
       while($counter < count($arr)) {
        echo $arr[$counter] . "<br />";
        $counter++;
       }
       ?>
    </h1>   
</body>
</html>