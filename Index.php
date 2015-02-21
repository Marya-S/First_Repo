<?php
require __DIR__ .'./model.php';

$artic = DBQuery('SELECT * FROM News ORDER BY DateT DESC  ');

include __DIR__ .'./view/view.php';
?>