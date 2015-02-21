<?php
require __DIR__ .'./model.php';

$artic = DBQuery('SELECT * FROM News');

include __DIR__ .'./view/view.php';
?>