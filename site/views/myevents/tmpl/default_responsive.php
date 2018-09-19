<?php
/**
 * @version 2.1.5
 * @package JEM
 * @copyright (C) 2013-2015 joomlaeventmanager.net
 * @copyright (C) 2005-2009 Christoph Lukes
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
defined('_JEXEC') or die;

function jem_myevents_string_contains($masterstring, $string) {
  if (strpos($masterstring, $string) !== false) {
    return true;
  } else {
    return false;
  }
}

?>
<div id="jem" class="jem_myevents<?php echo $this->pageclass_sfx;?>">
	<div class="buttons">
		<?php
		$btn_params = array('task' => $this->task, 'print_link' => $this->print_link);
		echo JemOutput::createButtonBar($this->getName(), $this->permissions, $btn_params);
		?>
	</div>

	<?php if ($this->params->get('show_page_heading', 1)) : ?>
	<h1 class="componentheading">
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>

	<div class="clr"></div>

	<!--table-->
	<?php echo $this->loadTemplate('events_responsive');?>

	<!--footer-->
	<div class="copyright">
		<?php echo JemOutput::footer( ); ?>
	</div>
</div>