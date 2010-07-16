<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/
if (!isset($gCms)) exit;
if (! $this->CheckAccess()) exit;

		if (isset($params['fbrp_set_field_level']))
			{
			$this->SetPreference('show_field_level',$params['fbrp_set_field_level']);
			}
			if (FALSE == empty($params['active_tab']))
			  {
			    $tab = $params['active_tab'];
			  } else {
			  $tab = 'maintab';
			 }
		$aeform = new fbForm($this, $params, true);
		
		echo $aeform->AddEditForm($id, $returnid, $tab, isset($params['fbrp_message'])?$this->ShowMessage($params['fbrp_message']):'');

?>