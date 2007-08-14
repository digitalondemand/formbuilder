<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/

class fbTextField extends fbFieldBase {

	function fbTextField(&$form_ptr, &$params)
	{
        $this->fbFieldBase($form_ptr, $params);
        $mod = &$form_ptr->module_ptr;
		$this->Type = 'TextField';
		$this->DisplayInForm = true;
		$this->ValidationTypes = array(
            $mod->Lang('validation_none')=>'none',
            $mod->Lang('validation_numeric')=>'numeric',
            $mod->Lang('validation_integer')=>'integer',
            $mod->Lang('validation_email_address')=>'email',
            $mod->Lang('validation_regex_match')=>'regex_match',
            $mod->Lang('validation_regex_nomatch')=>'regex_nomatch'
            );

	}


	function GetFieldInput($id, &$params, $returnid)
	{
	  $mod = &$this->form_ptr->module_ptr;
	  return $mod->CreateInputText($id, 'fbrp__'.$this->Id,
				       $this->Value,
            $this->GetOption('length')<25?$this->GetOption('length'):25,
            $this->GetOption('length'));
	}

	function StatusInfo()
	{
	  $mod = &$this->form_ptr->module_ptr;
	  $ret = $mod->Lang('abbreviation_length',$this->GetOption('length','80'));
		if (strlen($this->ValidationType)>0)
		  {
		  	$ret .= ", ".array_search($this->ValidationType,$this->ValidationTypes);
		  }
		 return $ret;
	}


	function PrePopulateAdminForm($formDescriptor)
	{
		$mod = &$this->form_ptr->module_ptr;
		$main = array(
			array($mod->Lang('title_maximum_length'),
			      $mod->CreateInputText($formDescriptor, 
						    'fbrp_opt_length',
			         $this->GetOption('length','80'),25,25))
		);
		$adv = array(
			array($mod->Lang('title_field_regex'),
			      array($mod->CreateInputText($formDescriptor, 
							  'fbrp_opt_regex',
							  $this->GetOption('regex'),25,255),$mod->Lang('title_regex_help')))	
		);
		return array('main'=>$main,'adv'=>$adv);
	}


	function Validate()
	{
		$this->validated = true;
		$this->validtionErrorText = '';
		$mod = &$this->form_ptr->module_ptr;
		switch ($this->ValidationType)
		  {
		  	   case 'none':
		  	       break;
		  	   case 'numeric':
                  if ($this->Value !== false &&
                      ! preg_match("/^([\d\.\,])+$/i", $this->Value))
                      {
                      $this->validated = false;
                      $this->validtionErrorText = $mod->Lang('please_enter_a_number',$this->Name);
                      }
		  	       break;
		  	   case 'integer':
                  if ($this->Value !== false &&
                  	! preg_match("/^([\d])+$/i", $this->Value) ||
                      intval($this->Value) != $this->Value)
                    {
                    $this->validated = false;
                    $this->validtionErrorText = $mod->Lang('please_enter_an_integer',$this->Name);
                    }
		  	       break;
		  	   case 'email':
                  if ($this->Value !== false &&
                      ! preg_match(($mod->GetPreference('relaxed_email_regex','0')==0?$mod->email_regex:$mod->email_regex_relaxed), $this->Value))
                    {
                    $this->validated = false;
                    $this->validtionErrorText = $mod->Lang('please_enter_an_email',$this->Name);
                    }
		  	       break;
		  	   case 'regex_match':
                  if ($this->Value !== false &&
                      ! preg_match($this->GetOption('regex','/.*/'), $this->Value))
                    {
                    $this->validated = false;
                    $this->validtionErrorText = $mod->Lang('please_enter_valid',$this->Name);
                    }
		  	   	   break;
		  	   case 'regex_nomatch':
                  if ($this->Value !== false &&
                       preg_match($this->GetOption('regex','/.*/'), $this->Value))
                    {
                    $this->validated = false;
                    $this->validtionErrorText = $mod->Lang('please_enter_valid',$this->Name);
                    }
		  	   	   break;
		  }
		if ($this->GetOption('length',0) > 0 && strlen($this->Value) > $this->GetOption('length',0))
			{
			$this->validated = false;
			$this->validtionErrorText = $mod->Lang('please_enter_no_longer',$this->GetOption('length',0));
			}
		return array($this->validated, $this->validtionErrorText);
	}
}

?>
