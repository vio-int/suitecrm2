<?php /* Smarty version 2.6.29, created on 2018-06-11 09:35:29
         compiled from modules/VLI_Target/Dashlets/MyTargetDashlet/MyTargetDashlet.tpl */ ?>

<div style="width:100%;vertical-align:middle;color:red;">
<table width="100%" border="0" align="center" class="list view" cellspacing="0" cellpadding="0">
	
	<tr style="background-color: cadetblue;">
	
		<th  align="center"><?php echo $this->_tpl_vars['lblusername']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lbltargetamount']; ?>
</td>
		 
	</tr>
	<?php $_from = $this->_tpl_vars['user_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rows']):
?>
	<tr class="oddListRowS1">
		<td valign="top"><?php echo $this->_tpl_vars['rows']['name']; ?>
</td>
		<td valign="top"><b><?php echo $this->_tpl_vars['rows']['target_amount']; ?>
</b></td>
	 
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
</div>