<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/

class fbDispositionDatabase extends fbFieldBase {

	var $approvedBy;
		
	function fbDispositionDatabase(&$form_ptr, &$params)
	{
        $this->fbFieldBase($form_ptr, $params);
        $mod = $form_ptr->module_ptr;
		$this->Type = 'DispositionDatabase';
		$this->IsDisposition = true;
		$this->NonRequirableField = true;
		$this->DisplayInForm = true;
		$this->DisplayInSubmission = false;
		$this->HideLabel = 1;
		$this->approvedBy = '';
	}

	function GetFieldInput($id, &$params, $returnid)
	{
		$mod = $this->form_ptr->module_ptr;
		if ($this->Value === false)
			{
			return '';
			}
		return $mod->CreateInputHidden($id, '_'.$this->Id,	
			$this->EncodeReqId($this->Value));
	}

	function SetApprovalName($name)
	{
		$this->approvedBy = $name;
	}

	function StatusInfo()
	{
		 return '';
	}
	
	function DecodeReqId($theVal)
	{
		$tmp = base64_decode($theVal);
		$tmp2 = str_replace(session_id(),'',$tmp);
		if (substr($tmp2,0,1) == '_')
			{
			return substr($tmp2,1);
			}
		else
			{
			return -1;
			}
	}
	
	function EncodeReqId($req_id)
	{
		return base64_encode(session_id().'_'.$req_id);
	}
	
	
	function SetValue($val)
	{

		$decval = base64_decode($val);
   
		if ($val === false)
			{
			// no value set, so we'll leave value as false
			}
		elseif (strpos($decval,'_') === false)
			{
			// unencrypted value, coming in from previous response
			$this->Value = $val;
			}
		else
			{
			// encrypted value coming in from a form, so we'll update.
			$this->Value = $this->DecodeReqId($val);
			}
	}
	
	function PrePopulateAdminForm($formDescriptor)
	{
		return array();
	}

	function PostPopulateAdminForm(&$mainArray, &$advArray)
	{
		$this->HiddenDispositionFields($mainArray, $advArray);
	}

    // Write To the Database
	function DisposeForm($returnid)
	{
		$form = $this->form_ptr;
		$form->StoreResponse(($this->Value?$this->Value:-1),$this->approvedBy);
		return array(true,'');	   
	}

	function Validate()
	{
		return array(true, '');
	}

}

?>
