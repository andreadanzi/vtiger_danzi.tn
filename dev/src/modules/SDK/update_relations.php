<?php
include_once('../../config.inc.php');
chdir($root_directory);

require_once 'modules/ModComments/ModComments.php';
$detailviewblock_nc = ModComments::addWidgetTo('Relations');


?>
