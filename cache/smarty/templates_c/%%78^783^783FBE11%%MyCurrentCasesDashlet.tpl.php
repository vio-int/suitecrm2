<?php /* Smarty version 2.6.29, created on 2018-06-11 09:35:29
         compiled from modules/Cases/Dashlets/MyCurrentCasesDashlet/MyCurrentCasesDashlet.tpl */ ?>

<div style="width:100%;vertical-align:middle;color:red;">
<table width="100%" border="0" align="center" class="list view" cellspacing="0" cellpadding="0">
	<tr style="background-color: cadetblue;">
		<th  align="center"><?php echo $this->_tpl_vars['lblUser_Name']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblTotal_Cases']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblPending_Cases']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblComplete_Cases']; ?>
</td>
		 
	</tr>
	<tr class="oddListRowS1">
		<td valign="top"><?php echo $this->_tpl_vars['user_name']; ?>
</td>
		<td valign="top"><?php echo $this->_tpl_vars['total_case']; ?>
</b></td>
		<td valign="top"><b><?php echo $this->_tpl_vars['pending_case']; ?>
</b></td>
		<td valign="top"><b><?php echo $this->_tpl_vars['complete_case']; ?>
</b></td> 
	</tr>
</table>
</div>