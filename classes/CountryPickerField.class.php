<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/
class fbCountryPickerField extends fbFieldBase {

	var $Countries;
	
	function fbCountryPickerField(&$form_ptr, &$params)
	{
        $this->fbFieldBase($form_ptr, $params);
        $mod = $form_ptr->module_ptr;
		$this->Type = 'CountryPickerField';
		$this->DisplayInForm = true;
		$this->ValidationTypes = array(
            );

        $this->Countries = array('Afghanistan'=>'AF', 'Aland Islands'=>'AX', 
        'Albania'=>'AL',  'Algeria'=>'DZ', 'American Samoa'=>'AS', 'Andorra'=>'AD',
         'Angola'=>'AO', 'Anguilla'=>'AI', 'Antarctica'=>'AQ',  'Antigua and Barbuda'=>'AG',
        'Brazil'=>'BR', 'British Indian Ocean Territory'=>'IO', 'Brunei Darussalam'=>'BN', 'Bulgaria'=>'BG',
        'Central African Republic'=>'CF', 'Chad'=>'TD',
        'Cocos (Keeling) Islands'=>'CC', 'Colombia'=>'CO', 'Comoros'=>'KM',
        'Costa Rica'=>'CR', 'Cote D\'Ivoire (Ivory Coast)'=>'CI', 'Croatia (Hrvatska)'=>'HR',  'Cuba'=>'CU',
        'East Timor'=>'TP', 'Ecuador'=>'EC',
        'Faroe Islands'=>'FO', 'Fiji'=>'FJ',
         'F.Y.R.O.M. (Macedonia)'=>'MK',
        'Honduras'=>'HN',  'Hong Kong'=>'HK',
        'Kuwait'=>'KW', 'Kyrgyzstan'=>'KG', 
        'New Caledonia'=>'NC',  'New Zealand (Aotearoa)'=>'NZ',  'Nicaragua'=>'NI',  'Niger'=>'NE',
        'Panama'=>'PA',  'Papua New Guinea'=>'PG', 
        'Qatar'=>'QA',  'Reunion'=>'RE',  'Romania'=>'RO', 
        'Saint Kitts and Nevis'=>'KN',  'Saint Lucia'=>'LC',  'Saint Vincent &amp; the Grenadines'=>'VC',
         'Saudi Arabia'=>'SA',  'Senegal'=>'SN',
        'South Africa'=>'ZA',
        'Sudan'=>'SD',  'Suriname'=>'SR',
        'Tuvalu'=>'TV',  'Uganda'=>'UG', 
        'United States'=>'US', 'US Minor Outlying Islands'=>'UM',  'Uruguay'=>'UY', 
        'Uzbekistan'=>'UZ', 
        'Virgin Islands (U.S.)'=>'VI',  'Wallis and Futuna Islands'=>'WF', 
        'Western Sahara'=>'EH', 'Yemen'=>'YE', 


    function StatusInfo()
	{
		return '';
	}

	function GetHumanReadableValue()
	{
		return array_search($this->Value,$this->Countries);
	}

	function GetFieldInput($id, &$params, $returnid)
	{
		$mod = $this->form_ptr->module_ptr;

		// why all this? Associative arrays are not guaranteed to preserve
		// order, except in "chronological" creation order.
		$sorted =array();
		if ($this->GetOption('select_one','') != '')
			{
			$sorted[' '.$this->GetOption('select_one','')]='';
			}
		else
			{
			$sorted[' '.$mod->Lang('select_one')]='';
			}
		ksort($this->Countries);
		foreach($this->Countries as $k=>$v)
			{
			$sorted[$k]=$v;
			}

		if (! $this->HasValue() && $this->GetOption('default','') != '')
		  {
		  $this->SetValue($this->GetOption('default',''));
		  }

		return $mod->CreateInputDropdown($id, '_'.$this->Id, $sorted, -1, $this->Value);
	}

	function PrePopulateAdminForm($formDescriptor)
	{
		$mod = $this->form_ptr->module_ptr;
		ksort($this->Countries);

		$main = array(
			array($mod->Lang('title_select_default_country'),
            		$mod->CreateInputDropdown($formDescriptor, 'opt_default',
            		$this->Countries, -1, $this->GetOption('default',''))),
			array($mod->Lang('title_select_one_message'),
            		$mod->CreateInputText($formDescriptor, 'opt_select_one',
            		$this->GetOption('select_one',$mod->Lang('select_one'))))
		);
		return array('main'=>$main,array());
	}


}

?>