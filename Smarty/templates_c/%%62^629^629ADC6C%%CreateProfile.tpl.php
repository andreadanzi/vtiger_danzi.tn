<?php /* Smarty version 2.6.18, created on 2013-08-03 17:05:47
         compiled from CreateProfile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'CreateProfile.tpl', 18, false),)), $this); ?>

<script language="JAVASCRIPT" type="text/javascript" src="include/js/smoothscroll.js"></script>

<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
        <td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
        <td class="showPanelBg" style="padding: 10px;" valign="top" width="100%">
	<br>
	<div align=center>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'SetMenu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>				
				<?php echo '
				<form action="index.php" method="post" name="profileform" id="form" onSubmit="if(rolevalidate()) { VtigerJS_DialogBox.block();return true;}else{return false;}">
				'; ?>

                                <input type="hidden" name="module" value="Settings">
                                <input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['MODE']; ?>
">
                                <input type="hidden" name="action" value="profilePrivileges">
                                <input type="hidden" name="parenttab" value="Settings">
                                <input type="hidden" name="parent_profile" value="<?php echo $this->_tpl_vars['PARENT_PROFILE']; ?>
">
                                <input type="hidden" name="radio_button" value="<?php echo $this->_tpl_vars['RADIO_BUTTON']; ?>
">
	
				<!-- DISPLAY -->
				<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
				<tr>
					<td width=50 rowspan=2 valign=top><img src="<?php echo vtiger_imageurl('ico-profile.gif', $this->_tpl_vars['THEME']); ?>
" alt="<?php echo $this->_tpl_vars['MOD']['LBL_PROFILES']; ?>
" width="48" height="48" border=0 title="<?php echo $this->_tpl_vars['MOD']['LBL_PROFILES']; ?>
"></td>
					<td class=heading2 valign=bottom><b> <a href="index.php?module=Settings&action=index&parenttab=Settings"><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS']; ?>
</a> > <a href="index.php?module=Settings&action=ListProfiles&parenttab=Settings"><?php echo $this->_tpl_vars['CMOD']['LBL_PROFILE_PRIVILEGES']; ?>
</a></b></td>
				</tr>
				<tr>
					<td valign=top class="small"><?php echo $this->_tpl_vars['MOD']['LBL_PROFILE_DESCRIPTION']; ?>
</td>
				</tr>
				</table>
				
				
				<table border=0 cellspacing=0 cellpadding=10 width=100% >
				<tr>
					<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
		                      	<tbody><tr>
                			     <td>
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
			                        <tbody><tr class="small">
		                              <td><img src="<?php echo vtiger_imageurl('prvPrfTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
               			               <td class="prvPrfTopBg" width="100%"></td>
		                              <td><img src="<?php echo vtiger_imageurl('prvPrfTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>

                	            </tr>
                          </tbody></table>
                            <table class="prvPrfOutline" border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody>
				<tr>
                                              <td><!-- Module name heading -->
                                                  <table class="small" border="0" cellpadding="2" cellspacing="0">
                                                    <tbody><tr>
                                                      <td valign="top"><img src="<?php echo vtiger_imageurl('prvPrfHdrArrow.gif', $this->_tpl_vars['THEME']); ?>
"> </td>
                                                      <td class="prvPrfBigText"><b> <?php echo $this->_tpl_vars['CMOD']['LBL_STEP_1_2']; ?>
 : <?php echo $this->_tpl_vars['CMOD']['LBL_WELCOME_PROFILE_CREATE']; ?>
 </b><br>
                                                          <font class="small"> <?php echo $this->_tpl_vars['CMOD']['LBL_SELECT_CHOICE_NEW_PROFILE']; ?>
 </font> </td>

                                                      <td class="small" style="padding-left: 10px;" align="right"></td>
                                                    </tr>
                                                </tbody></table></td>
                                              <td align="right" valign="bottom">&nbsp;											  </td>
                                            </tr>
				<tr>
                                <td><!-- tabs -->
					<table width="95%" border="0" cellpadding="5" cellspacing="0" align="center">
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr>
						<td align="right" width="25%" style="padding-right:10px;">
						<b style="color:#FF0000;font-size:16px;"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</b>&nbsp;<b><?php echo $this->_tpl_vars['CMOD']['LBL_NEW_PROFILE_NAME']; ?>
 : </b></td>
						<td width="75%" align="left" style="padding-left:10px;">
						<input type="text" name="profile_name" id="pobox" value="<?php echo $this->_tpl_vars['PROFILENAME']; ?>
" class="txtBox" /></td>
					</tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr>
						<td align="right" style="padding-right:10px;" valign="top"><b><?php echo $this->_tpl_vars['CMOD']['LBL_DESCRIPTION']; ?>
 : </b></td>
						<td align="left" style="padding-left:10px;"><textarea name="profile_description" class="txtBox"><?php echo $this->_tpl_vars['PROFILEDESC']; ?>
</textarea></td>
					</tr>
					<tr><td colspan="2" style="border-bottom:1px dashed #CCCCCC;" height="75">&nbsp;</td></tr>
					<tr>
						<td align="right" width="10%" style="padding-right:10px;">
						<?php if ($this->_tpl_vars['RADIO_BUTTON'] != 'newprofile'): ?>
						<input name="radiobutton" checked type="radio" value="baseprofile" />
						<?php else: ?>
						<input name="radiobutton" type="radio"  value="baseprofile" />
						<?php endif; ?>
						</td>
						<td width="90%" align="left" style="padding-left:10px;"><?php echo $this->_tpl_vars['CMOD']['LBL_BASE_PROFILE_MESG']; ?>
</td>
					</tr>
					<tr>
						<td align="right"  style="padding-right:10px;">&nbsp;</td>
						<td align="left" style="padding-left:10px;"><?php echo $this->_tpl_vars['CMOD']['LBL_BASE_PROFILE']; ?>

						<select name="parentprofile" class="importBox">
							<?php $_from = $this->_tpl_vars['PROFILE_LISTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['combo']):
?>
							<?php if ($this->_tpl_vars['PARENT_PROFILE'] == $this->_tpl_vars['combo']['1']): ?>
								<option  selected value="<?php echo $this->_tpl_vars['combo']['1']; ?>
"><?php echo $this->_tpl_vars['combo']['0']; ?>
</option>
							<?php else: ?>
								<option value="<?php echo $this->_tpl_vars['combo']['1']; ?>
"><?php echo $this->_tpl_vars['combo']['0']; ?>
</option>	
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</select>
						</td>
					</tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td align="center" colspan="2"><b>(&nbsp;<?php echo $this->_tpl_vars['CMOD']['LBL_OR']; ?>
&nbsp;)</b></td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr>
						<td align="right" style="padding-right:10px;">
						<?php if ($this->_tpl_vars['RADIO_BUTTON'] == 'newprofile'): ?>
						<input name="radiobutton" checked type="radio" value="newprofile" />
						<?php else: ?>
						<input name="radiobutton" type="radio" value="newprofile" />
						<?php endif; ?>
						</td>
						<td  align="left" style="padding-left:10px;"><?php echo $this->_tpl_vars['CMOD']['LBL_BASE_PROFILE_MESG_ADV']; ?>
</td>
					</tr>
					<tr><td colspan="2" style="border-bottom:1px dashed #CCCCCC;" height="75">&nbsp;</td></tr>
					<tr>
						<td colspan="2" align="right">
						<input type="button" value=" <?php echo $this->_tpl_vars['APP']['LNK_LIST_NEXT']; ?>
 &rsaquo; " title="<?php echo $this->_tpl_vars['APP']['LNK_LIST_NEXT']; ?>
" name="Next" class="crmButton small create" onClick="return rolevalidate();"/>&nbsp;&nbsp;
						<input type="button" value=" <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" name="Cancel" onClick="window.history.back();" class="crmButton small cancel"/>
						</td>
					</tr>
					</table>

                                </td></tr>  	  
                            	<table class="small" border="0" cellpadding="0" cellspacing="0" width="100%">
                              	<tbody><tr>
                                <td><img src="<?php echo vtiger_imageurl('prvPrfBottomLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
                                <td class="prvPrfBottomBg" width="100%"></td>
                                <td><img src="<?php echo vtiger_imageurl('prvPrfBottomRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
                              </tr>
                          </tbody></table></td>
                      </tr>
                    </tbody></table>

					<p>&nbsp;</p>
					<table border="0" cellpadding="5" cellspacing="0" width="100%">
					<tbody><tr><td class="small" align="right" nowrap="nowrap"><a href="#top"><?php echo $this->_tpl_vars['APP']['LBL_SCROLL']; ?>
</a></td></tr>
					</tbody></table>
				
				
					
					
					
					
					
				</td>
				</table>



				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>

				</div>
				</td>
				<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
"></td>
				</form>
   </tr>
</tbody>
</table>
<script>
var profile_err_msg='<?php echo $this->_tpl_vars['MOD']['LBL_ENTER_PROFILE']; ?>
';
function rolevalidate()
{
    var profilename = document.getElementById('pobox').value;
    profilename = trim(profilename);
    if(profilename != '')
	dup_validation(profilename);
    else
    {
        alert(profile_err_msg);
        document.getElementById('pobox').focus();
	return false
    }
    return false
}


function dup_validation(profilename)
{
	//var status = CharValidation(profilename,'namespace');
	//if(status)
	//{
	new Ajax.Request(
		'index.php',
		{queue: {position: 'end', scope: 'command'},
			method: 'post',
			postBody: 'module=Users&action=UsersAjax&file=CreateProfile&ajax=true&dup_check=true&profile_name='+profilename,
			onComplete: function(response) {
					if(response.responseText.indexOf('SUCCESS') > -1)
						document.profileform.submit();
					else
						alert(response.responseText);
				}
		}
	);
	//}
	//else
	//	alert(alert_arr.NO_SPECIAL+alert_arr.IN_PROFILENAME)
}
</script>