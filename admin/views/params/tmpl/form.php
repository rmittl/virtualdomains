<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');

// Set toolbar items for the page
$edit		= JRequest::getVar('edit', true);
$text = !$edit ? JText::_( 'New' ) : JText::_( 'Edit' );
JToolBarHelper::title(   JText::_( 'Params' ).': <small><small>[ ' . $text.' ]</small></small>' );
JToolBarHelper::apply();
JToolBarHelper::save();
if (!$edit) {
	JToolBarHelper::cancel();
} else {
	// for existing items the button is renamed `close`
	JToolBarHelper::cancel( 'cancel', 'Close' );
}

?>

<script language="javascript" type="text/javascript">


	
function submitbutton(task)
{
    var form = document.adminForm;
    if (task == 'cancel' || document.formvalidator.isValid(form)) {
		submitform(task);
	}
}
</script>

	 	<form method="post" action="index.php" id="adminForm" name="adminForm">
	 	<div class="col width-70 fltlft">
		  <fieldset class="adminform">
			<legend><?php echo JText::_( 'Details' ); ?></legend>
							
				<?php echo $this->form->getLabel('name'); ?>
				
				<?php echo $this->form->getInput('name');  ?>
					
				<?php echo $this->form->getLabel('action'); ?>
				
				<?php echo $this->form->getInput('action');  ?>
												
				<?php echo $this->form->getLabel('home'); ?>
				
				<?php echo $this->form->getInput('home');  ?>					
			
						
          </fieldset>                      
        </div>
        <div class="col width-30 fltrt">
			        

        </div>                   
		<input type="hidden" name="option" value="com_virtualdomains" />
	    <input type="hidden" name="cid[]" value="<?php echo $this->item->id ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="view" value="params" />
		<?php echo JHTML::_( 'form.token' ); ?>
	</form>