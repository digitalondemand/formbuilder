<?php
/* 
   FormBuilder. Copyright (c) 2005-2007 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2007 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/
if (!isset($gCms)) exit;

//debug_display($params);

if (! isset($params['form_id']) && isset($params['form']))
  {
    // get the form by name, not ID
    $params['form_id'] = $this->GetFormIDFromAlias($params['form']);
  }

$inline = false;
if( (isset($params['inline'])) && preg_match('/t(rue)*|y(yes)*|1/i',$params['inline']))
	{
	$inline = true;
	}

//debug_display($params);
$fbrp_callcount = 0;
$aeform = new fbForm($this,$params,true);

if( !($inline || ($aeform->GetAttr('inline','0')== '1'))) $id = 'cntnt01';


$this->smarty->assign('fb_form_header', $aeform->RenderFormHeader());
$this->smarty->assign('fb_form_footer',$aeform->RenderFormFooter());

$finished = false;
$fieldExpandOp = false;

if( isset($params['fbrp_callcount']) )
  {
    $fbrp_callcount = (int)$params['fbrp_callcount'];
  }

foreach($params as $pKey=>$pVal)
   {
   if (substr($pKey,0,9) == 'fbrp_FeX_' || substr($pKey,0,9) == 'fbrp_FeD_')
      {
      // expanding or shrinking a field
      $fieldExpandOp = true;
      }
   }

if ( !$fieldExpandOp &&
    (($aeform->GetPageCount() > 1 && $aeform->GetPageNumber() > 0) ||
     (isset($params['fbrp_done'])&& $params['fbrp_done']==1)))
    {
    $res = $aeform->Validate();
    
	// handle uploads
    $res2 = $aeform->manageFileUploads();

    if ($res[0] === false || $res2[0] === false)
      {
	  if (isset($res2[1]) && !empty($res2[1]))
		{
		array_push($res[1],$res2[1]);
		}
	  $this->smarty->assign('fb_form_validation_errors',$res[1]);
	  $this->smarty->assign('fb_form_has_validation_errors',1);
	  
	  $aeform->PageBack();
      }
    else if (isset($params['fbrp_done']) && $params['fbrp_done']==1)
      {
      $ok = true;
      $captcha = &$this->getModuleInstance('Captcha');
      if ($aeform->GetAttr('use_captcha','0')== '1' && $captcha != null)
         {
  	      if (! $captcha->CheckCaptcha($params['fbrp_captcha_phrase']))
  	         {
  	         $this->smarty->assign('captcha_error',$aeform->GetAttr('captcha_wrong',$this->Lang('wrong_captcha')));
  	         
  	         $aeform->PageBack();
            $ok = false;
            }
         }
      if ($ok)
         {
         $finished = true;
	      $results = $aeform->Dispose($returnid);
	      }
      }
  }

if (! $finished)
   {
     $parms = array();
     $parms['form_name'] = $aeform->GetName();
     $parms['form_id'] = $aeform->GetId();
     $this->SendEvent('OnFormBuilderFormDisplay',$parms);

     $this->smarty->assign('fb_form_start',
			   $this->CreateFormStart($id, 'default', $returnid, 'post', 
						  'multipart/form-data', 
						  ($aeform->GetAttr('inline','0')== '1'), '',
						  array('fbrp_callcount'=>$fbrp_callcount+1)));

			   $this->smarty->assign('fb_form_end',$this->CreateFormEnd());
			   $this->smarty->assign('fb_form_done',0);
   }
else
   {
   $this->smarty->assign('fb_form_done',1);
   if ($results[0] == true)
      {
      $parms = array();
      $parms['form_name'] = $aeform->GetName();
      $parms['form_id'] = $aeform->GetId();
      $this->SendEvent('OnFormBuilderFormSubmit',$parms);

      $act = $aeform->GetAttr('submit_action','text');
      if ($act == 'text')
         {
         $message = $aeform->GetAttr('submit_response','');

		 $aeform->setFinishedFormSmarty();
         echo $this->ProcessTemplateFromData( $message );
         }
      else if ($act == 'redir')
         {
         $ret = $aeform->GetAttr('redirect_page','-1');
         if ($ret != -1)
            {
            $this->RedirectContent($ret);
	   		}
         }
      }
   else
      {
      $parms = array();
      $params['fbrp_error']='';
      $this->smarty->assign('fb_submission_error',
	 	$this->Lang('submission_error'));

      $show = $this->GetPreference('hide_errors',0);
      $this->smarty->assign('fb_submission_error_list',$results[1]);
      $this->smarty->assign('fb_show_submission_errors',$show);

      $parms['form_name'] = $aeform->GetName();
      $parms['form_id'] = $aeform->GetId();
      $this->SendEvent('OnFormBuilderFormSubmitError',$parms);
      }
   }

if( isset($fbrp_callcount) && $fbrp_callcount == 0 )
  {
    $usertagops =& $gCms->GetUserTagOperations();
    $udt = $aeform->GetAttr('predisplay_udt','');
    if( !empty($udt) && "-1" != $udt )
    {
      $parms = $params;
	  $parms['FORM'] =& $aeform;
	  $tmp = $usertagops->CallUserTag($udt,$parms);
    }
  }
echo $aeform->RenderForm($id, $params, $returnid);
?>