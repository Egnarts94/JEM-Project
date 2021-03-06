<?php
/**
 * @version 2.3.0
 * @package JEM
 * @copyright (C) 2013-2018 joomlaeventmanager.net
 * @copyright (C) 2005-2009 Christoph Lukes
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
defined('_JEXEC') or die;

?>
<div id="jem" class="jem_eventslist<?php echo $this->pageclass_sfx;?>">
	<div class="buttons">
		<?php
		//$btn_params = array('task' => $this->task, 'print_link' => $this->print_link);
		$btn_params = array('task' => $this->task, 'print_link' => JRoute::_('index.php?option=com_jem&view=eventslist&layout=print&task=print&tmpl=component&print=1'));
		
		echo JemOutput::createButtonBar($this->getName(), $this->permissions, $btn_params);
		?>
	</div>

	<?php if ($this->params->get('show_page_heading', 1)) : ?>
		<h1 class="componentheading">
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	<?php endif; ?>

	<div class="clr"></div>

	<?php if ($this->params->get('showintrotext')) : ?>
		<div class="description no_space floattext">
			<?php echo $this->params->get('introtext'); ?>
		</div>
	<?php endif; ?>

	<!--table-->
  <hr class="jem-hr" style="display: none;"/>

	<form action="<?php echo htmlspecialchars($this->action); ?>" method="post" name="adminForm" id="adminForm">
		<?php echo $this->loadTemplate('events_table'); ?>

		<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
		<input type="hidden" name="task" value="<?php echo $this->task; ?>" />
		<input type="hidden" name="view" value="eventslist" />
	</form>

	<div class="pagination">
		<?php echo $this->pagination->getPagesLinks(); ?>
	</div>

  <hr class="jem-hr" style="display: none;"/>
  
	<?php if ($this->params->get('showfootertext')) : ?>
		<div class="description no_space floattext">
			<?php echo $this->params->get('footertext'); ?>
		</div>
	<?php endif; ?>

	<!--footer-->
	<div id="iCal" class="iCal">
		<?php echo JemOutput::icalbutton('', 'eventslist'); ?>
	</div>
	<div class="copyright">
		<?php echo JemOutput::footer( ); ?>
	</div>
</div>