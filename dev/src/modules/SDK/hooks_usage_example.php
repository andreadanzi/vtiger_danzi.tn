<?php
include_once('../../config.inc.php');
chdir($root_directory);

//init plugins system
require_once "modules/SDK/hooks.php";

//your application code
echo "<p>some hardcoded stuff, 'test' hook following</p>";

//place this where you want to execute hooks for "test"
execute_action ( 'test' );


//your application code
echo "<p>some hardcoded stuff, 'test1' hook following</p>";

//place this where you want to execute hooks for "test"
if ( exist_action( 'test1' )) {
	execute_action ( 'test1',array('buonasera','sono andrea' ) );
} else {
	echo ('<p><p>no any plugin hooks into TEST1!!!</p></p>');
}



$urls[] = "ericbess";
$urls[] = "google";
$urls[] = "pluto";
$urls[] = "pape";

if (exist_action ( 'filter' )) {
	echo 'Before filter:</br>' . $urls [0] . '</br>' . $urls [1] . '</br></br>';
	$result = filter_action ( 'filter', array($urls ));
	echo 'After filter:</br>' . $result [0] . '</br>' . $result [1] . '</br>';
} else {
	echo ('<p><p>no any plugin hooks on filter!!!</p></p>');
}

//print the the plugins header
echo "<p>Terminated</p>";
?>