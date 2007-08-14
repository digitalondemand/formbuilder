<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/

require_once('DispositionEmailBase.class.php');

class fbDispositionEmailConfirmation extends fbDispositionEmailBase {

	var $validated;

	function fbDispositionEmailConfirmation(&$form_ptr, &$params)
	{
        $this->fbDispositionEmailBase($form_ptr, $params);
        $mod = &$form_ptr->module_ptr;
		$this->Type = 'DispositionEmailConfirmation';
		$this->DisplayInForm = true;
		$this->NonRequirableField = false;
		$this->DisplayInSubmission = true;
		$this->IsDisposition = true;
		$this->ValidationTypes = array(
       		);
       	$this->ValidationType = 'email';
       	$this->modifiesOtherFields = true;
       	$this->form_ptr->AddTemplateVariable('confirm_url',
       		$mod->Lang('title_confirmation_url'));
       	$this->approvedToGo = false;
    }

    function StatusInfo()
	{
        return $this->TemplateStatus();
	}

	function ApproveToGo($response_id)
	{
	$this->approvedToGo = true;
	}

	function ModifyOtherFields()
	{
		$mod = &$this->form_ptr->module_ptr;

		if ($this->form_ptr->GetFormState() == 'update')
			{
			$this->approvedToGo = true;
			return;
			}
		// If we haven't been approved, inhibit all other dispositions!
		$others = &$this->form_ptr->GetFields();

		for($i=0;$i<count($others);$i++)
			{
			if ($this->approvedToGo && $others[$i]->GetFieldType() == 'DispositionDatabase')
				{
				$others[$i]->SetApprovalName($this->GetValue());
				}
			elseif (! $this->approvedToGo && $others[$i]->IsDisposition())
				{
				$others[$i]->SetDispositionPermission(false);
				}
			}
		$this->SetDispositionPermission(true);		
	}

	function GetFieldInput($id, &$params, $returnid)
	{
		$mod = &$this->form_ptr->module_ptr;
		return $mod->CreateInputText($id, 'fbrp__'.$this->Id,
			htmlspecialchars($this->Value, ENT_QUOTES),25,80);
	}


    // Send off those emails
	function DisposeForm($returnid)
	{
		$mod = &$this->form_ptr->module_ptr;
		if (! $this->approvedToGo)
			{
			// create response URL
			list($rid,$code) = $this->form_ptr->StoreResponse();
					
			$mod->smarty->assign('confirm_url',$mod->CreateFrontendLink('', $returnid,
				'validate', '', array('fbrp_f'=>$this->form_ptr->GetId(),'fbrp_r'=>$rid,'fbrp_c'=>$code), '',
				true,false,'',true));
			return $this->SendForm($this->GetValue(),$this->GetOption('email_subject'));
			}
		else
			{
			return array(true,'');
			}
	}

	function PrePopulateAdminForm($formDescriptor)
	{
	  $mod = &$this->form_ptr->module_ptr;
	  
	  global $gCms;
	  $contentops =& $gCms->GetContentOperations();

	  list($main,$adv) = $this->PrePopulateAdminFormBase($formDescriptor);
	  array_push($main,array($mod->Lang('redirect_after_approval'),
				 @$contentops->CreateHierarchyDropdown('',$this->GetOption('redirect_page','0'), $formDescriptor.'fbrp_opt_redirect_page')));
	  return array('main'=>$main,'adv'=>$adv);
	}

	function PostPopulateAdminForm(&$mainArray, &$advArray)
	{
		$this->HiddenDispositionFields($mainArray, $advArray);
		
	}

	function Validate()
	{
  		$this->validated = true;
  		$this->validationErrorText = '';
		$mod = &$this->form_ptr->module_ptr;
		switch ($this->ValidationType)
		  {
		  	   case 'email':
                  if ($this->Value !== false &&
                      ! preg_match(($mod->GetPreference('relaxed_email_regex','0')==0?$mod->email_regex:$mod->email_regex_relaxed), $this->Value))
                    {
                    $this->validated = false;
                    $this->validationErrorText = $mod->Lang('please_enter_an_email',$this->Name);
                    }
		  	       break;
		  }
		return array($this->validated, $this->validationErrorText);
	}


}

?>
