<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/

class fbFieldsetStart extends fbFieldBase {

  function fbFieldsetStart(&$form_ptr, &$params)
  {
    $this->fbFieldBase($form_ptr, $params);
    $mod = &$form_ptr->module_ptr;
    $this->Type = 'FieldsetStart';
    $this->DisplayInForm = true;
    $this->DisplayInSubmission = false;
    $this->NonRequirableField = true;
    $this->ValidationTypes = array();    
    $this->HasLabel = 0;
  }

  function GetFieldInput($id, &$params, $returnid)
  {
    $str = '<fieldset';
    $class = $this->GetOption('css_class');
    $legend = $this->GetOption('legend');
    if( $class != '' )
      {
	$str .= " class=\"$class\"";
      }
    $str .= '>';
    if( $legend != '' )
      {
	$str .= '<legend>'.$legend.'</legend>';
      }
    return $str;
  }

  function StatusInfo()
  {
    return '';
  }

  function GetHumanReadableValue()
  {
    // there's nothing human readable about a fieldset.
    return '[Begin Fieldset: '.$this->Value.']';
  }
	
  function PrePopulateAdminForm($formDescriptor)
  {
    $mod = &$this->form_ptr->module_ptr;
    $main = array(
		  array($mod->Lang('title_legend'),
            		$mod->CreateInputText($formDescriptor,'opt_legend',
					      $this->GetOption('legend',''), 50)));
    $adv = array();
    return array('main'=>$main,'adv'=>$adv);
  }

}

?>
