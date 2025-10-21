<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Php Project</title>
    <?php include('./clinet/commonFiles.php') ?>
</head>
<?php include('./clinet/header.php');
if (isset($_GET['signup'])) {
    include('./clinet/signup.php');
} elseif (isset($_GET['loginup'])) {
    include('./clinet/login.php');
} else {
    //
}
?>

<body>

</body>

</html>