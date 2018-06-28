<?php /* Smarty version 2.6.29, created on 2018-06-11 09:35:29
         compiled from modules/VLI_Approval/Dashlets/VLI_MyApprovalDashlet/VLI_MyApprovalDashlet.tpl */ ?>

<div style="width:100%;vertical-align:middle;">
<table width="100%" border="0" align="center" class="list view" cellspacing="0" cellpadding="0">
	<tr style="background-color: cadetblue;">
		<th  align="center"><?php echo $this->_tpl_vars['lblUserName']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblTotalQuatationApproval']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblApproval']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblNotApproval']; ?>
</td>
	</tr>
	<tr class="oddListRowS1">
		<td valign="top"><?php echo $this->_tpl_vars['user_name']; ?>
</td>
		<td valign="top"><b><?php echo $this->_tpl_vars['total_quatation_approval']; ?>
</b></td>
		<td valign="top"><b><?php echo $this->_tpl_vars['approval']; ?>
</b></td>
		<td valign="top"><b><?php echo $this->_tpl_vars['not_approval']; ?>
</b></td>
	</tr>
</table>
</div>