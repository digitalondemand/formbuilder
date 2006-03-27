<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/
if (!isset($gCms)) exit;
if (! $this->CheckAccess()) exit;

		$this->initialize();
		$this->mod_globals->ModuleInputPrefix = $id;
		
		$aeform = new fbForm($this, $params);
		$aefield = $aeform->NewField($params);
		echo $aeform->AddEditField($id, $aefield, $returnid, isset($params['message'])?$params['message']:'');
?>