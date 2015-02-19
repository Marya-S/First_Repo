<?php
require '../model.php';
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
 <ul>
    <?php foreach ($artic as $news){ ?>
     <li><a href="<?php echo $news['pass'];} ?>">Новость экономики</a> </li>
 </ul>
</body>
</html>