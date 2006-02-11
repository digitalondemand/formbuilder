<?php
// Feedback Form. 02/2005 SjG <feedbackform_cmsmodule@fogbound.net>
// A Module for CMS Made Simple, (c)2005 by Ted Kulp (wishy@cmsmadesimple.org)
// This project's homepage is: http://www.cmsmadesimple.org

class fbTextAreaInput extends fbFieldBase {

	function fbTextAreaInput(&$form_ptr, &$params)
	{
        $this->fbFieldBase($form_ptr, $params);
		$mod = $form_ptr->module_ptr;
		$this->Type = 'TextAreaInput';
		$this->DisplayType = $mod->Lang('field_type_text_area');
		$this->DisplayInForm = true;
		$this->ValidationTypes = array(
            $mod->Lang('validation_none')=>'none',
            $mod->Lang('validation_not_empty')=>'nonempty'
            );

	}

	function GetFieldInput($id, &$params, $returnid)
	{            
	   $mod = $form_ptr->module_ptr;
       echo $mod->CreateTextArea(false, $id, htmlspecialchars($this->Value, ENT_QUOTES),
       		'_'.$this->Id, 'user');            
	}


	function StatusInfo()
	{
		$ret = '';
		if (strlen($this->ValidationType)>0)
		  {
		  	$ret = ", ".array_search($this->ValidationType,$this->ValidationTypes);
		  }
		 return $ret;
	}


	function RenderAdminForm($formDescriptor)
	{
		return array();
	}


	function Validate()
	{
		$result = true;
		$message = '';
		$mod = $this->form_ptr->module_ptr;
		switch ($this->ValidationType)
		  {
		  	   case 'none':
		  	       break;
		  	   case 'nonempty':
		  	       if ($this->Value === false || strlen($this->Value) == 0)
		  	           {
		  	           $result = false;
		  	           $message = $mod>Lang('please_enter_a_value').' "'.$this->Name.'"';
		  	           }
		  	       break;
		  }
		return array($result, $message);
	}

}

?>
