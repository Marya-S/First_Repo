<?php
require './model.php';
$artic = dbQuery('SELECT head,pass from News');

require './view/index.php';