<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/

class fbStaticTextField extends fbFieldBase {

	function fbStaticTextField(&$form_ptr, &$params)
	{
        $this->fbFieldBase($form_ptr, $params);
        $mod = &$form_ptr->module_ptr;
		$this->Type = 'StaticTextField';
		$this->DisplayInForm = true;
		$this->DisplayInSubmission = false;
		$this->NonRequirableField = true;
		$this->ValidationTypes = array(
            );

	}

	function GetFieldInput($id, &$params, $returnid)
	{
		return '</td></tr></table>'.$this->GetOption('text','').'<table class="formbuilderform">';
	}

	function StatusInfo()
	{
		 return $this->form_ptr->module_ptr->Lang('text_length',strlen($this->GetOption('text','')));
	}

	function GetHumanReadableValue()
	{
		return '[static text field]';
	}
	
	function PrePopulateAdminForm($formDescriptor)
	{
		$mod = &$this->form_ptr->module_ptr;
		$main = array(
			array($mod->CreateTextArea(true, $formDescriptor,  html_entity_decode($this->GetOption('text','')), 'opt_text','pageheadtags'),'')
		);
		$adv = array(
		);
		return array('main'=>$main,'adv'=>$adv);
	}

}

?>
