<?php /* Smarty version 2.6.29, created on 2018-06-11 09:35:29
         compiled from modules/Tasks/Dashlets/MyClosedTasksDashlet/MyClosedTasksDashlet.tpl */ ?>

<div style="width:100%;vertical-align:middle;color:red;">
<table width="100%" border="0" align="center" class="list view" cellspacing="0" cellpadding="0">
	<tr style="background-color: cadetblue;">
		<th  align="center"><?php echo $this->_tpl_vars['lblUserName']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblTotalTask']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblPendingTasks']; ?>
</td>
		<th  align="center"><?php echo $this->_tpl_vars['lblCompleteTasks']; ?>
</td>
	</tr>
	<tr class="oddListRowS1">
		<td valign="top"><?php echo $this->_tpl_vars['user_name']; ?>
</td>
		<td valign="top"><?php echo $this->_tpl_vars['total_task']; ?>
</b></td>
		<td valign="top"><b><?php echo $this->_tpl_vars['pending_task']; ?>
</b></td>
		<td valign="top"><b><?php echo $this->_tpl_vars['complete_task']; ?>
</b></td>
	</tr>
</table>
</div>