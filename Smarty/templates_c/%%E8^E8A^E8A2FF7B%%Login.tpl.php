<?php /* Smarty version 2.6.18, created on 2013-08-05 12:42:54
         compiled from Login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "LoginHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="danziLoginWrapper" width="100%" height="100%" cellpadding="10" cellspacing="0" border="0">
	<tr valign="bottom">
		<td valign="bottom" align="center" colspan="2">
			<a target="_blank" href="http://<?php echo $this->_tpl_vars['COMPANY_DETAILS']['website']; ?>
"><img align="absmiddle" src="test/logo/<?php echo $this->_tpl_vars['COMPANY_DETAILS']['logo']; ?>
" alt="logo_<?php echo $this->_tpl_vars['COMPANY_DETAILS']['name']; ?>
"/></a>
		</td>
	</tr>

	<tr>		
		<td valign="top" align="center" width="50%">
			<div class="danziLoginForm">
				<div class="poweredBy"></div>
				<form action="index.php" method="post" name="DetailView" id="form">
					<input type="hidden" name="module" value="Users" />
					<input type="hidden" name="action" value="Authenticate" />
					<input type="hidden" name="return_module" value="Users" />
					<input type="hidden" name="return_action" value="Login" />
					<div class="inputs">
						<div class="input"><input type="text" name="user_name"/></div>
						<br />
						<div class="input"><input type="password" name="user_password"/></div>
						<?php if ($this->_tpl_vars['LOGIN_ERROR'] != ''): ?>
						<div class="errorMessage">
							<?php echo $this->_tpl_vars['LOGIN_ERROR']; ?>

						</div>
						<?php endif; ?>
						<br />
						<div class="button">
							<input type="submit" id="submitButton" value="Login" />
						</div>
					</div>
				</form>
			</div>
			<div class="importantLinks">
			Powered by vtiger CRM - <?php echo $this->_tpl_vars['VTIGER_VERSION']; ?>

			|
			&copy; 2004- <?php  echo date('Y');  ?>
			</div>
		</td>
	</tr>	
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "LoginFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>