<?php
/***************************************************************************************
 * The contents of this file are subject to the DANZI.TN VTIGER License Agreement
 * ("licenza.txt"); You may not use this file except in compliance with the License
 * The Original Code is:  DANZI.TN VTIGER
 * The Initial Developer of the Original Code is CRMVILLAGE.BIZ.
 * Portions created by CRMVILLAGE.BIZ are Copyright (C) CRMVILLAGE.BIZ.
 * All Rights Reserved.
 ***************************************************************************************/
require_once 'modules/Vtiger/EditView.php';	//crmv@30447

if ($focus->mode == 'edit')
	$smarty->display('salesEditView.tpl');
else
	$smarty->display('CreateView.tpl');
?>