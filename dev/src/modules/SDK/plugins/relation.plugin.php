<?php


add_action('relations_link_to_and_from','relations_link_to');
function relations_link_to($smarty,$srcmodule,$forfield) {
	if($srcmodule == 'Relations' && $forfield=='link_to')
	{	
		$smarty->assign("CUSTOM_JS","modules/Relations/CategoryToRelations.js");
	}
	if($srcmodule == 'Relations' && $forfield=='link_from')
	{
		$smarty->assign("CUSTOM_JS","modules/Relations/CategoryFromRelations.js");
	}
	if($srcmodule == 'Nonconformities' && $forfield=='product_id')
	{
		$smarty->assign("CUSTOM_JS","modules/Nonconformities/CategoryToNonconformities.js");
	}
}


?>