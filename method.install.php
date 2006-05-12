<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/
if (!isset($gCms)) exit;
if (! $this->CheckAccess()) exit;

		$db =& $gCms->GetDb();
		$dict = NewDataDictionary($db);
		$flds = "
			form_id I KEY,
			name C(255),
			alias C(255)
		";
		$taboptarray = array('mysql' => 'TYPE=MyISAM');
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_form', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix().'module_fb_form_seq');
//		$db->CreateIndexSQL(cms_db_prefix().'module_fb_form_idx', cms_db_prefix().'module_fb_form', 'alias');
		
		$flds = "
			form_attr_id I KEY,
			form_id I,
			name C(35),
			value X
		";
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_form_attr', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix().'module_fb_form_attr_seq');
//		$db->CreateIndexSQL(cms_db_prefix().'module_fb_form_attr_idx', cms_db_prefix().'module_fb_form_attr', 'form_id');

		$flds = "
			field_id I KEY,
			form_id I,
			name C(255),
			type C(50),
			validation_type C(50),
			required I1,
			hide_label I1,
			order_by I
		";
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_field', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix().'module_fb_field_seq');

		$flds = "
			option_id I KEY,
			field_id I,
			form_id I,
			name C(255),
			value X
		";
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_field_opt', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix().'module_fb_field_opt_seq');

		$flds = "
			flock_id I KEY,
			flock T
		";

		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_flock', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$flds = "
			resp_id I KEY,
			form_id I,
			user_approved T,
			secret_code C(35),
			admin_approved T,
			submitted T
		";
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_resp', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$flds = "
			resp_attr_id I KEY,
			resp_id I,
			name C(35),
			value X
		";
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_resp_attr', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix().'module_fb_resp_attr_seq');


		$db->CreateSequence(cms_db_prefix().'module_fb_resp_seq');

		$flds = "
			resp_val_id I KEY,
			resp_id I,
			field_id I,
			value X
		";
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_fb_resp_val', $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix().'module_fb_resp_val_seq');


		$this->CreatePermission('Modify Forms', 'Modify Forms');
//        include 'includes/SampleData.inc';
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));
?>