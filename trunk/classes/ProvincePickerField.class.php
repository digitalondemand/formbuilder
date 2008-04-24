<?php
// Feedback Form. 02/2005 SjG <feedbackform_cmsmodule@fogbound.net>
// A Module for CMS Made Simple, (c)2005 by Ted Kulp (wishy@cmsmadesimple.org)
// This project's homepage is: http://www.cmsmadesimple.org

class fbProvincePickerField extends fbFieldBase {

	var $Provinces;
	
	function fbProvincePickerField(&$form_ptr, &$params)
	{
        $this->fbFieldBase($form_ptr, $params);
        $mod = &$form_ptr->module_ptr;
		$this->Type = 'ProvincePickerField';
		$this->DisplayInForm = true;
		$this->ValidationTypes = array(
            );

        $this->Provinces = array(
        "No Default"=>'',"Alberta"=>"AB", "British Columbia"=>"BC", "Manitoba"=>"MB", "New Brunswick"=>"NB", 
        "Newfoundland and Labrador"=>"NL", "Northwest Territories"=>"NT", "Nova Scotia"=>"NS", "Nunavut"=>"NU", 
        "Ontario"=>"ON", "Prince Edward Island"=>"PE", "Quebec"=>"QC", "Saskatchewan"=>"SK", "Yukon"=>"YT");

	}


    function StatusInfo()
	{
		return '';
	}

	function GetHumanReadableValue()
	{
		return array_search($this->Value,$this->Provinces);
	}


	function GetFieldInput($id, &$params, $returnid)
	{
		$mod = &$this->form_ptr->module_ptr;

		unset($this->Provinces[$mod->Lang('no_default')]);
		if ($this->GetOption('select_one','') != '')
			{
			$this->Provinces = array_merge(array($this->GetOption('select_one','')=>''),$this->Provinces);
			}
		else
			{
			$this->Provinces = array_merge(array($mod->Lang('select_one')=>''),$this->Provinces);
			}


		if (! $this->HasValue() && $this->GetOption('default','') != '')
		  {
		  $this->SetValue($this->GetOption('default',''));
		  }

		return $mod->CreateInputDropdown($id, 'fbrp__'.$this->Id, $this->Provinces, -1, $this->Value,'id="'.$id. '_'.$this->Id.'"');
	}

	function PrePopulateAdminForm($formDescriptor)
	{
		$mod = &$this->form_ptr->module_ptr;
		ksort($this->Provinces);

		$main = array(
			array($mod->Lang('title_select_default_province'),
            		$mod->CreateInputDropdown($formDescriptor, 'fbrp_opt_default',
            		$this->Provinces, -1, $this->GetOption('default',''))),
			array($mod->Lang('title_select_one_message'),
            		$mod->CreateInputText($formDescriptor, 'fbrp_opt_select_one',
            		$this->GetOption('select_one',$mod->Lang('select_one'))))
		);
		return array('main'=>$main,array());
	}


}

?>