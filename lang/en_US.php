<?php
// English_US Localization File
$lang['friendlyname'] = 'Form Builder';

// field types
$lang['field_type_']='Field Type Not Set';
$lang['field_type_CatalogerItemsField'] = 'Select one (or more) cataloger items';
$lang['field_type_FieldsetEnd'] = '-Fieldset End';
$lang['field_type_FieldsetStart']='-Fieldset Start';
$lang['field_type_TextField']='Text Input';
$lang['field_type_PasswordField']='Password';
$lang['field_type_PasswordAgainField']='Password Again (verify)';
$lang['field_type_TextFieldExpandable']='Text Input (Multiple)';
$lang['field_type_TextAreaField']='Text Area';
$lang['field_type_ButtonField']='Button';
$lang['field_type_CheckboxField']='Check Box';
$lang['field_type_CheckboxGroupField']='Check Box Group';
$lang['field_type_PulldownField']='Pulldown';
$lang['field_type_MultiselectField']='Multiselect';
$lang['field_type_StatePickerField']='U.S. State Picker';
$lang['field_type_ProvincePickerField']='Canadian Province Picker';
$lang['field_type_CountryPickerField']='Country Picker';
$lang['field_type_DatePickerField']='Date Picker';
$lang['field_type_TimePickerField']='Time Picker';
$lang['field_type_RadioGroupField']='Radio Button Group';
$lang['field_type_DispositionDirector']='*Email Results Based on Pulldown';
$lang['field_type_DispositionFileDirector'] = '*Save Results to File Based on Pulldown';
$lang['field_type_DispositionMultiselectFileDirector'] = '*Save Results to File(s) Based on Multiple Selections';
$lang['field_type_DispositionPageRedirector']='*Redirect to Page Based on Pulldown';
$lang['field_type_DispositionEmail']='*Email Results to set Address(es)';
$lang['field_type_DispositionEmailConfirmation']='*Validate-via-Email Address';
$lang['field_type_DispositionFromEmailAddressField']='*Email "From Address" Field, and send copy';
$lang['field_type_DispositionFile']='*Write Results to Flat File';
$lang['field_type_DispositionDatabase']='*Store Results in Database';
$lang['field_type_DispositionFormBrowser']='*Store Results for FormBrowser Module v.0.3';
$lang['field_type_DispositionUserTag']='*Call A User Defined Tag With the Form Results';
$lang['field_type_DispositionForm'] = '*Submit to an arbitrary form action';
$lang['field_type_DispositionDeliverToEmailAddressField']='*Email to User-Supplied Email Address';
$lang['field_type_DispositionEmailSiteAdmin']='*Email to CMS Admin User';
$lang['field_type_PageBreakField']='-Page Break';
$lang['field_type_FileUploadField']='File Upload';
$lang['field_type_FromEmailAddressField']='Email "From Address" Field';
$lang['field_type_FromEmailAddressAgainField'] = 'Email "From Address" Again Field';
$lang['field_type_FromEmailNameField']='Email "From Name" Field';
$lang['field_type_FromEmailSubjectField']='Email "Subject" Field';
$lang['field_type_StaticTextField']='-Static Text';
$lang['field_type_SystemLinkField']='-Static Link';
$lang['field_type_LinkField']='Link (User-entered)';
$lang['field_type_HiddenField'] = '-Hidden Field';
$lang['field_type_ComputedField'] = '-Computed Field';
$lang['field_type_UniqueIntegerField']='-Unique Integer (Serial)';

// validation types
$lang['validation_none']='No Validation';
$lang['validation_numeric']='Numeric';
$lang['validation_integer']='Integer';
$lang['validation_email_address']='Email Address';
$lang['validation_usphone']='Phone Number (US)';
$lang['validation_must_check']='Must Be Checked';
$lang['validation_regex_match']='Match Regular Expression';
$lang['validation_regex_nomatch']='Doesn\'t match Regular Expression';

// validation error messages and other alerts
$lang['required_field_missing'] = 'A value was not supplied for a required field';
$lang['please_enter_a_value']='Please enter a value for "%s"';
$lang['please_enter_a_number']='Please enter a number for "%s"';
$lang['please_enter_valid'] = 'Please enter a valid entry for "%s"';
$lang['please_enter_an_integer']='Please enter an integer value for "%s"';
$lang['please_enter_an_email']='Please enter a valid email address for "%s"';
$lang['email_address_does_not_match']='Email address does not match value in "%s"';
$lang['please_enter_a_phone']='Please enter a valid phone number for "%s"';
$lang['please_login'] = 'Please log in to use this form';
$lang['not_valid_email']='"%s" does not appear to be a valid email address!';
$lang['please_enter_no_longer']='Please enter a value that is no longer than %s characters';
$lang['please_enter_at_least'] = 'Please enter a value that is at least %s characters';
$lang['title_list_delimiter'] = 'Character to use as delimiter in results that return more than one value';
$lang['you_need_permission']='You need the "%s" permission to perform that operation.';
$lang['lackpermission']='Sorry! You don\'t have adequate privileges to access this section.';
$lang['field_order_updated']='Field order updated.';
$lang['form_deleted']='Form deleted.';
$lang['field_deleted']='Field deleted.';
$lang['configuration_updated']='Configuration Updated.';
$lang['you_must_check']='You must check "%s" in order to continue.';
$lang['must_specify_one_destination']='You need to specify at least one destination address!';
$lang['are_you_sure_delete_form']='Are you sure you want to delete the form %s?';
$lang['are_you_sure_delete_field']='Are you sure you want to delete the field %s?';
$lang['notice_select_type']='Advanced options are not available until the field type has been set.';
$lang['field_name_in_use']='The field name "%s" is already in use. Please use unique field names, or disable unique field names in the Form Builder configuration.';
$lang['field_no_name'] = 'Fields must be named, unless you disable this in the Form Builder configuration.';

// abbreviations, verbs, and other general terms
$lang['anonymous'] = 'Anonymous';
$lang['abbreviation_length']='Len: %s';
$lang['boxes']='%s boxes';
$lang['options']='%s options';
$lang['text_length']='%s chars.';
$lang['order']='Order';
$lang['unspecified']='[unspecified]';
$lang['added']='added';
$lang['updated']='updated';
$lang['sort_options'] = 'Sort options on output';
$lang['select_one']='Select One';
$lang['select_type']='Select Type';
$lang['to']='To';
$lang['yes']='Yes';
$lang['no']='No';
$lang['recipients']='recipients';
$lang['file_count'] = '%s possible files';
$lang['destination_count'] = '%s destinations';
$lang['save']='Save';
$lang['add']='Add';
$lang['update']='Update';
$lang['save_and_continue']='Save and Continue Editing';
$lang['information']='Information';
$lang['automatic']='Automatic';
$lang['forms']='Forms';
$lang['form']='Form %s';
$lang['configuration']='Configuration';
$lang['field_requirement_updated'] = 'Field required state updated.';
$lang['maximum_size']='Max. Size';
$lang['permitted_extensions']='Extensions';
$lang['permitted_filetypes']='Allowed file types';
$lang['file_too_large']='Uploaded file is too large! Maximum size is:';
$lang['illegal_file_type']='This type of file may not be uploaded. Please check that the extension is correct.';
$lang['upload'] = 'Upload';
$lang['form_imported'] = 'Form Imported.';
$lang['form_import_failed'] = 'Form import failed! There was a problem with the format of the XML file.';
$lang['rows'] = '%s rows';
$lang['cols'] = '%s cols';
$lang['12_hour'] = '12 Hour Clock';
$lang['24_hour'] = '24 Hour Clock';
$lang['hour'] = 'Hour';
$lang['min'] = 'Minute';
$lang['merid'] = 'Meridian';
$lang['date_range'] = 'Range: %s - %s';
$lang['thanks'] = 'Thanks! Your submissions have been received.';
$lang['edit'] = 'Edit';
$lang['delete'] = 'Delete';
$lang['day'] = 'Day';
$lang['mon'] = 'Month';
$lang['year'] = 'Year';
$lang['none'] = '(none)';
$lang['css'] = 'CSS';

$lang['uninstalled'] = 'Module uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';

$lang['button_previous'] = 'Back...';
$lang['button_submit'] = 'Submit Form';
$lang['button_continue'] = 'Continue...';

$lang['value_checked'] = 'Checked';
$lang['value_unchecked'] = 'Unchecked';

$lang['tab_main']='Main';
$lang['tab_symbol']='Form Display Settings';
$lang['tab_submit']='Form Submission';
$lang['tab_captcha']='Captcha Settings';
$lang['tab_advanced']='Advanced Settings';
$lang['tab_templatelayout'] = 'Form Template';
$lang['tab_submissiontemplate'] = 'Submission Template';


$lang['canuse_smarty'] = '<em>Smarty variables are valid in this field.</em>';
$lang['add_options'] = 'Add More Options';
$lang['delete_options'] = 'Delete Marked Options';
$lang['add_checkboxes'] = 'Add More Checkboxes';
$lang['delete_checkboxes'] = 'Delete Marked Checkboxes';
$lang['add_address'] = 'Add Another Address';
$lang['delete_address'] = 'Delete Marked Addresses';
$lang['add_destination'] = 'Add Another Destination';
$lang['delete_destination'] = 'Delete Marked Destinations';
$lang['suspected_spam'] = 'Too many emails generated from your IP address. Anti-Spam code has prevented delivery.';
$lang['suspected_spam_log'] = 'Suspected spam from IP %s stopped.';
$lang['reorder'] = 'Reorder Fields';
$lang['cancel'] = 'Cancel';
$lang['value_set'] = 'Value set: %s';

// Field Attribute Titles
$lang['help_cataloger_attribute_fields'] = <<<EOT
Below is a list of the attributes available from the Cataloger module.<br/>You can optionally specify valid ranges, values, or numerous values to be used in filtering the list of items that is displayed to the user.<br/>
<br/>
<strong>Ranges:</strong><br/>
Ranges can be specified by signifying a minimum and maximum value using this syntax: &quot;range: minvalue to maxvalue&quot;<br/>
<br/>
<strong>Multiple Values:</strong><br/>
To specify multiple values for an attribute use the syntax &quot;multi: value1|value2|value3&quot;<br/>
<br/>
<strong>Values from hidden fields</strong><br/>
To specify a value from a hidden field use the syntax {\$fld_id}<br/>
<br/>
EOT;
$lang['help_name_regex'] = 'A regular expression to allow filtering cataloger items by name';
$lang['help_field_height'] = 'The height of the multiselect field';
$lang['title_name_regex'] = 'Cataloger Item Name Regular Expression';
$lang['title_field_height'] = 'Field Height';
$lang['title_file_path'] = 'Destination Directory for output files';
$lang['title_udt_name'] = 'User Defined Tag';
$lang['title_uploads_destpage'] = 'Page to return to with uploads link';
$lang['title_uploadmodule_summary'] = 'Submitted with formbuilder';
$lang['title_uploads_category'] = 'Uploads category';
$lang['title_sendto_uploads'] = 'Send this file to the uploads module';
$lang['title_legend'] = 'Legend';
$lang['title_maximum_length']='Maximum Length';
$lang['title_checkbox_label']='Checkbox label';
$lang['title_radio_label']='Radio Button label';
$lang['title_checked_value']='Value when checked';
$lang['title_unchecked_value']='Value when not checked.';
$lang['title_checkbox_details']='Checkbox Group Details';
$lang['title_delete'] = 'Delete?';
$lang['title_select_one_message']='"Select One" Text';
$lang['title_selection_value'] = 'Selection Value';
$lang['title_selection_displayname'] = 'Selection Display Name';
$lang['title_selection_subject']='Selection Subject';
$lang['title_select_default_country']='Default Selection';
$lang['title_select_default_state']='Default Selection';
$lang['title_select_default_province']='Default Selection';
$lang['title_option_name']="Option Name";
$lang['title_option_value']="Value Submitted";
$lang['title_pulldown_details']='Pulldown Options';
$lang['title_multiselect_details']='Multiselect Options';
$lang['title_destination_address']='Destination Email Address';
$lang['title_destination_filename'] = 'Destination File Name';
$lang['title_email_from_name']='"From name" for email';
$lang['title_relaxed_email_regex']='Use relaxed email validation';
$lang['title_relaxed_regex_long']='Use relaxed email address validation (e.g., allow "x@y" instead of requiring "x@y.tld")';
$lang['title_email_from_address']='"From address" for email';
$lang['title_email_encoding']='Email character set encoding';
$lang['title_director_details']='Pulldown-based Emailer Details';
$lang['title_file_name']='File Name';
$lang['title_email_subject']='Email Subject Line';
$lang['title_form_name']='Form Name';
$lang['title_form_status']='Form Status';
$lang['title_ready_for_deployment']='Ready for Deployment';
$lang['title_not_ready1']='Not Ready';
$lang['title_redirect_page']='Page to redirect to after form submission';
$lang['title_not_ready2']='Please add a field to the form so that the user\'s input gets handled. You can';
$lang['title_not_ready_link']='use this shortcut';
$lang['title_form_alias']='Form Alias';
$lang['title_field_alias_short']='Alias';
$lang['title_form_fields']='Form Fields';
$lang['title_field_id']='Field Id';
$lang['title_show_fieldaliases']='Show Field Aliases';
$lang['title_show_fieldaliases_long']='Clicking this will display field aliases when adding or editing a form';
$lang['title_field_name']='Field Name';
$lang['title_field_alias']='Field Alias and DOM id (CSS id) attribute';
$lang['title_radiogroup_details']='Radio Button Group Details';
$lang['title_field_type']='Field Type';
$lang['title_not_ready3']='to create a form handling field.';
$lang['title_form_alias']='Form Alias';
$lang['title_add_new_form']='Add New Form';
$lang['title_show_version']='Show Form Builder Version?';
$lang['title_show_version_long']='This will embed your installed version number of Form Builder module in a comment, to aid in debugging';
$lang['title_add_new_field']='Add New Field';
$lang['title_form_submit_button']='Form Submit Button Text';
$lang['title_button_text']='Button text';
$lang['title_submit_button_safety']='Add Javascript to final Submit Button that will help prevent multiple submissions?';
$lang['title_submit_button_safety_help']='Add safety script';
$lang['title_form_next_button']='Form "Next" Button Text (used for multipage forms)';
$lang['title_form_prev_button'] = 'Form "Previous" Button Text (used for multipage forms)';
$lang['title_field_validation']='Field Validation';
$lang['title_field_to_validate'] = 'Field to Validate';
$lang['title_field_css_id']='CSS id for this field';
$lang['title_form_css_class']='CSS Class for this form';
$lang['title_field_css_class']='CSS Class for this field';
$lang['title_form_predisplay_udt'] = 'User defined tag to call before form is displayed';
$lang['title_form_required_symbol']='Symbol to mark required Fields';
$lang['title_field_required']='Required';
$lang['title_field_required_long']='Require a response for this Field';
$lang['title_hide_label']='Hide Label';
$lang['title_hide_label_long']='Hide this field\'s name on Form';
$lang['title_text']='Static text to display';
$lang['title_field_regex']='Validation Regex';
$lang['title_lines_to_show'] = 'Number of Lines to display';
$lang['title_read_only'] = 'Read Only';
$lang['no_default']='No Default';
$lang['redirect_after_approval']='Page to redirect after approval';
$lang['title_regex_help']='This regular expression will only be used if "validation type" is set to a regex-related option. Include a full Perl-style regex, including the start/stop slashes and flags (e.g., "/image\.(\d+)/i")';
$lang['title_field_required_abbrev']='Req\'d';
$lang['title_hide_errors']='Hide Errors';
$lang['title_form_displaytype'] = 'Form Display Type';
$lang['title_hide_errors_long']='Prevent debug / error messages from being seen by users.';
$lang['title_email_template']='Email Template';
$lang['title_maximum_size']='Maximum upload file size (kilobytes)';
$lang['title_maximum_size_long'] = 'This limitation is in addition to any limits set by the php or web server configuration';
$lang['title_permitted_extensions']='Permitted Extensions';
$lang['title_permitted_extensions_long']='Enter a comma-separated list, excluding the dot (e.g., "jpg,gif,jpeg"). Spaces will be ignored. Leaving this blank means there will be no restrictions.';
$lang['title_show_limitations']='Display restrictions?';
$lang['title_show_limitations_long']='Display any size and extension restrictions with the upload field?';
$lang['title_form_template']='Template to use to Display Form';
$lang['title_page_x_of_y'] = 'Page %s of %s';
$lang['title_no_advanced_options']='Field has no advanced options.';
$lang['title_form_unspecified']='Text to return for unspecified field values';
$lang['title_enable_fastadd_long']='Enable fast field adding pulldown for forms?';
$lang['title_enable_fastadd']='Enable fast field add pulldown?';
$lang['title_fastadd']='Fast field adder';
$lang['title_enable_antispam_long']='Clicking this will only allow 10 emails to be triggered from a given IP address (per hour).';
$lang['title_enable_antispam']='Enable primitive anti-spam features?';
$lang['title_show_fieldids'] = 'Show Field IDs';
$lang['title_show_fieldids_long'] = 'Clicking this will allow displaying field ids when adding or editing a form';
$lang['title_xml_to_upload']='Upload form from XML file';
$lang['title_xml_upload_formname'] = 'Use this form name';
$lang['title_import_legend'] = 'XML Form Import';
$lang['title_xml_upload_formalias'] = 'Use this form alias';
$lang['title_html_email']='Generate HTML email?';
$lang['title_link_autopopulate']='Automatically populate?';
$lang['title_link_autopopulate_help']='Automatically populate with the URL of the page containing the form? (this overrides site page link option below)';
$lang['title_default_link']='Default link URL';
$lang['title_default_link_title']='Default link text';
$lang['title_link_to_sitepage']='Link to site page';
$lang['title_captcha_not_installed'] = 'You can use <a href="http://www.wikipedia.org/wiki/Captcha" target="_new">"Captcha"</a> to protect form submissions if you install the Captcha module. For more information, <a href="http://dev.cmsmadesimple.org/projects/captcha/">check the Captcha project</a>.';
$lang['title_use_captcha'] = 'Use Captcha to protect form submissions?';
$lang['title_use_captcha_help'] = 'Check here to protect your form with a <a href="http://www.wikipedia.org/wiki/Captcha" target="_new">"Captcha"</a>.';
$lang['title_user_captcha'] = 'Please confirm that you are not a script by entering the letters from the image.';
$lang['title_user_captcha_error'] = 'Failed text for Captcha';
$lang['wrong_captcha']='Captcha was not correct.';
$lang['title_title_user_captcha'] = 'Help text for Captcha';
$lang['title_dont_submit_unchecked'] = 'Don\'t submit values for unchecked boxes';
$lang['title_dont_submit_unchecked_help'] = 'Check this if you only want checked boxes to return values.';
$lang['link_label']='Link Label';
$lang['link_destination']='Link Destination URL';
$lang['title_default_set']='Checked by Default?';
$lang['title_24_hour']='Use 24-hour clock?';
$lang['title_before_noon'] = 'AM';
$lang['title_after_noon'] = 'PM';
$lang['title_smarty_eval'] = 'Process smarty tags within field?';
$lang['title_textarea_rows'] = 'Rows (note: this may be overridden by CSS)';
$lang['title_textarea_cols'] = 'Columns (note: this may be overridden by CSS)';
$lang['title_form_main']= 'Main Form Details';
$lang['title_default_blank']='Default to blank';
$lang['title_default_blank_help']='Default to blank (uncheck to default to today\'s date)';
$lang['title_show_username']='Display User\'s login name?';
$lang['title_show_userfirstname']='Display User\'s first name?';
$lang['title_show_userlastname']='Display User\'s last name?';
$lang['title_restrict_to_group']='Restrict user list to users in specified group';
$lang['title_encrypt_database_data'] = 'Encrypt data stored in database';
$lang['title_crypt_cert'] = 'Certificate for encrypting data';
$lang['title_encryption_keyfile'] = 'Passphrase or path to file containing passphrase. (If using OpenSSL, this is the passphrase for the private key)';
$lang['title_encrypt_sortfields'] = 'Hash sort fields?';
$lang['title_private_key'] = 'Private Key to use for encrypting data';
$lang['title_encrypt_sortfields_help'] = 'This hashes the sort fields, but leaves the first few letters unencrypted. Cryptographically, this creates a vulnerability, but for most users it is an acceptable tradeoff between security and the ability to sort records. Sorting becomes approximate, but will remain pretty good. If you do not use this option, sort fields are stored in plaintext.';
$lang['title_encryption_functions'] = 'Storage Encryption Unavailable';
$lang['title_install_crypto'] = 'Please install the OpenSSL module or mcrypt support if you would like to enable database encryption.';
$lang['title_install_curl'] = 'Please make sure you have CURL support active in your PHP install. See http://www.php.net/manual/en/book.curl.php';
$lang['title_mle_version'] = 'Run in MLE Mode';
$lang['title_mle_version_long'] = 'Changes/support for CMSMS Multi-Language Edition fork. Do not check this if you are not running the MLE version.';
$lang['title_ensure_cert_key_match'] = 'Ensure that you select the private key that is appropriate for the certificate you are using for encryption!';
$lang['choose_crypt'] = 'Encryption Library';
$lang['title_encrypt_database_long'] = 'Check this to encrypt the stored data. This makes it more difficult (but not impossible) for hackers to view the information.';
$lang['choose_crypt_long'] = 'The options below only apply if you are using the OpenSSL Encryption library';
$lang['title_crypt_lib']='Encryption Library';
$lang['openssl'] = 'OpenSSL Library';
$lang['mcrypt'] = 'PHP mcrypt Library';
$lang['title_feu_binding'] = 'Frontend User binding';
$lang['title_install_feu'] = 'Please install the Frontend User module to connect a form and its data to a specific user';
$lang['title_feu_bind_help'] = 'Check this to lock front-end access to this form\'s data to the logged-in front-end user.';
$lang['title_encryption'] = 'Encryption';
$lang['title_export_form_to_udt'] = 'Export form reference to UDT as $params[\'FORM\']?';
$lang['title_url_help'] = 'Entire URL, including protocol and path (e.g., http://myhost.com/form_handler.cgi)';
$lang['title_url'] = 'Form submission URL';
$lang['title_method'] = 'Form method';
$lang['title_maps_to'] = 'Map field "%s" to form submission variable';
$lang['title_additional'] = 'Additional submission';
$lang['title_additional_help'] = 'Anything to be appended to the submission payload, in URL-encoded form (.e.g, "user=steve+jobs&employee_number=1)';
$lang['title_include_in_submission'] = 'Include field in Submission';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';
$lang[''] = '';




$lang['restricted_to_group'] = 'Only in group %s';
$lang['title_show_to_user'] = 'Display to user?';
$lang['help_leaveempty'] = 'This field may be left empty';
$lang['help_variables_for_template']='Variables For Template';
$lang['help_variables_for_computation']='Variables Available';
$lang['help_php_variable_name'] = 'PHP variable';
$lang['help_submission_date']='Date of Submission';
$lang['help_server_name']='Your server';
$lang['help_sub_source_ip']='IP address of person using form';
$lang['help_sub_url']='URL of page containing form';
$lang['help_fb_version']='FormBuilder version';
$lang['help_tab']='Tab Character';
$lang['help_other_fields']='Alternate field names can be used interchangeably (especially useful if Smarty is choking on characters outside of ASCII 32-126). <br />Other fields will be available as you add them to the form.';
$lang['help_array_fields']='Yet another way of accessing field values is via $fieldname_obj, $alias_obj, or $fld_#_obj, where each field is an object containging:<br /><table>
<tr><td class="odd">name</td><td class="odd">Field Name</td></tr>
<tr><td>type</td><td>Field Type</td></tr>
<tr><td class="odd">id</td><td class="odd">Internal Field ID</td></tr>
<tr><td>value</td><td>Human-readable Value</td></tr>
<tr><td class="odd">valueArray</td><td class="odd">Array of field value(s)</td></tr></table><em>e.g.</em>, you could use "{$fld_1_obj->name} = {$fld_1_obj->value}';
$lang['help_date_format']='See <a href="http://www.php.net/manual/en/function.date.php" target=_NEW>the PHP Manual</a> for formatting help.';
$lang['help_variable_name']='Variable';
$lang['help_form_field']='Field Represented';
$lang['link_back_to_form']='&#171; Back to Form';
$lang['title_create_sample_template']='Create Sample Template';
$lang['title_create_sample_html_template']='Create Sample HTML Template';
$lang['title_create_sample_header_template']='Create Sample Header Template';
$lang['title_create_sample_header']='Create Sample Header';
$lang['help_tab_symbol']='a tab character';
$lang['title_file_template']='Template for one line of output file';
$lang['title_file_header']='Template for the header of output file';
$lang['title_confirmation_url']='URL to click for form confirmation';
$lang['title_value'] = 'Value (see Advanced Tab if you use Smarty tags)';
$lang['title_date_format']='Date Format (standard <a href="http://www.php.net/manual/en/function.date.php">PHP Date Formats</a>)';
$lang['title_use_wysiwyg']='Use WYSIWYG editor for text Area (Admin side only)?';
$lang['title_submit_actions'] = 'Form Submission Behavior';
$lang['title_submit_labels'] = 'Submission Button Labels';
$lang['title_sortable_field'] = 'Sortable Field #%s';
$lang['title_submit_help'] = 'This page lets you customize Form Submission. It doesn\'t determine what the Form Builder does with the submitted data. You can set that up by adding "Disposition" fields to your form.';
$lang['title_start_year'] = 'Year range start';
$lang['title_end_year'] = 'Year range end';
$lang['title_default_year'] = 'Default Year';
$lang['title_default_year_help'] = '(Set to -1 for default year to be the current year)';
$lang['title_submit_action'] = 'After form is submitted';
$lang['title_submit_response'] = 'Response to display';
$lang['display_text'] = 'Display "Submission Template"';
$lang['redirect_to_page'] = 'Redirect to site page';
$lang['title_submit_response_help'] = 'This template is for display to the user after the form is submitted. This template does not effect emails generated or other form dispositions -- you set those templates (where appropriate) in the "advanced" tab for those disposition fields.';
$lang['title_destination_page'] = 'Destination Page';
$lang['title_require_fieldnames'] = 'Require Fieldnames';
$lang['title_require_fieldnames_long'] = 'Require fields to have a name?';
$lang['title_unique_fieldnames'] = 'Require Unique Fieldnames';
$lang['title_unique_fieldnames_long'] = 'Require fields to have unique names?';
$lang['title_reorder_form'] = 'Reorder Fields';
$lang['title_load_template'] = 'Load template';
$lang['title_add_button_text'] = 'Add Button text';
$lang['title_del_button_text'] = 'Delete Button text';
$lang['title_field_helptext'] = 'Help-text to display with this field';
$lang['title_string_or_number_eval'] = 'Interpret variables as being numbers or strings';
$lang['title_order']='Interpretation Order';
$lang['title_order_help']='If more than one Computed Field exists, they will be computed from lowest order number to highest order number';
$lang['title_compute_value'] = 'Value to compute';
$lang['title_string'] = 'String';
$lang['title_numeric'] = 'Numeric';
$lang['title_inline_form'] = 'Display form inline?';
$lang['title_inline_form_help'] = 'Inline means any form followup replaces the {FormBuilder} tag, non-inline replaces the {content} tag.';
$lang['title_field_default_value'] = 'Default value for field';
$lang['title_clear_default'] = 'Clear default on click?';
$lang['title_clear_default_help'] = 'Check this to clear the default value when the user clicks this field. Since this uses a javascript string compare, it will fail if you put single quotes in your default text. Other un-javascript-friendly characters may also cause it to fail.';
$lang['title_remove_file_from_server'] = 'Delete uploaded file from server after processing (email dispositions)';
$lang['title_field_javascript'] = 'Javascript for field';
$lang['title_field_javascript_long'] = 'Make this the complete Javascript call, including the event you want to trap, e.g., onclick="yourfn()"';
$lang['title_submit_javascript'] = 'Form Submission Javascript';
$lang['title_submit_javascript_long'] = 'Make this the complete Javascript call, including the event you want to trap, e.g., onclick="yourfn()".<br />This will probably not work well if you use the "safety script" option above.';
$lang['email_from_addr_help']='Do not just pick a random address here -- many ISPs will<br />not deliver the mail if you are using a different domain name than your actual<br />host name (i.e., use something like name@%s)';
$lang['title_switch_advanced']='Need more field types? ';
$lang['title_switch_basic']='Too many confusing field types? ';
$lang['title_switch_advanced_link']='Switch to Advanced Mode';
$lang['title_switch_basic_link']='Switch to Simple Mode';
$lang['title_file_root']='Directory to save file in';
$lang['title_file_root_help'] = 'This needs to be a directory that your web server has permissions to write in.<br />Chmod it 777 if you have problems/doubts.<br />Also, check to see that you do not have PHP directory restrictions.';
$lang['title_newline_replacement']='Newline/Carriage Return replacement character';
$lang['title_newline_replacement_help']='Leave blank to allow newlines and carriage returns in output';
$lang['title_send_usercopy'] = 'Send User a Copy of Submission?';
$lang['title_send_usercopy_label'] = 'Label for Checkbox (if user choice)';
$lang['title_send_me_a_copy'] = 'Send me a copy of form';
$lang['title_allow_subject_override'] = 'Allow subject to be overridden?';
$lang['title_allow_subject_override_long'] = 'Allow \'Email "Subject" Fields\' to override the subject specified in the pulldown.';
$lang['title_display_length'] = 'Display length';
$lang['title_minimum_length'] = 'Minimum response length';
$lang['title_hide'] = 'Hide input';
$lang['title_hide_help'] = 'Show symbols rather plain text when user enters password?';
$lang['password_does_not_match'] = 'Password does not match %s';
$lang['back_top'] = 'Back to FormBuilder Main Page';
$lang[''] = '';

$lang['option_never'] = 'Never';
$lang['option_user_choice'] = 'Give user a choice (checkbox)';
$lang['option_always'] = 'Always';


$lang['error_usertag_disposition'] = 'User defined tag returned an error';
$lang['error_cataloger_module_not_available']='<strong>Cataloger module does not seem to be installed/active.</strong>';
$lang['warning'] = 'WARNING!';
$lang['default_template'] = 'Default Template';
$lang['table_left_template'] = 'Table Template, Titles on left';
$lang['table_top_template'] = 'Table Template, Title on top';
$lang['form_template_name'] = 'Template from %s';
$lang['template_are_you_sure']='Are you sure you want to overwrite your template with the selected template? (Even if you say OK, you will still need to save the change)';
$lang['title_bad_function'] = 'Error when computing "%s".';
$lang['no_referrer_info']='No HTTP_REFERER info available (probably due to use of User Email Validation)';
$lang['validation_param_error']='Validation Parameter Error. Please make sure you copy the URL from your email correctly!';
$lang['validation_response_error']='Validation Repsonse Error. Please make sure you copy the URL from your email correctly!';
$lang['validation_no_field_error']='Validation Repsonse Error. No email validation field in this form!';
$lang['upgrade03to04'] = 'Form Template was updated automatically as part of the version 0.3 to version 0.4 upgrade. You may need to make some fixes. If you\'re using the default form, simply replace this template with "default" using the pulldown above.';
$lang['admindesc']='Add, edit and manage interactive Forms';

$lang['operators_help'] = 'If you use String evaluation, the only operation available is concatenation (+), while if you use Number evaluation you have basic, very simple math (, +, -, *, /, ).'; 

$lang['date_january']='January';
$lang['date_february']='February';
$lang['date_march']='March';
$lang['date_april']='April';
$lang['date_may']='May';
$lang['date_june']='June';
$lang['date_july']='July';
$lang['date_august']='August';
$lang['date_september']='September';
$lang['date_october']='October';
$lang['date_november']='November';
$lang['date_december']='December';

$lang['submission_error'] = 'Sorry! There was an error handling your form submission.';
$lang['submit_error']='FormBuilder submit error: %s';
$lang['uploads_error'] = 'Error committing file to the uploads module: %s';
$lang['nouploads_error'] = 'Could not find the uploads module';
$lang['upload_attach_error'] = 'Upload/Attachment error on file %s (tmp_name: %s, of type %s)';
$lang['submission_error_file_lock'] = 'Error. Unable to obtain lock for file.';
$lang['unchecked_by_default']='Default: unchecked';
$lang['checked_by_default']='Default: checked';

$lang['email_default_template'] = "FormBuilder Submission";
$lang['email_template_not_set'] = '<br/>Email Template not yet set!';      
$lang['missing_cms_mailer'] = 'FormBuilder: Cannot find required module CMSMailer!';  		
$lang['user_approved_submission']='User approved submission %s from %s';

$lang['event_info_OnFormBuilderFormSubmit']='Event triggered when a FormBuilder form is submitted';
$lang['event_info_OnFormBuilderFormSubmitError']='Event triggered if there is an error when a FormBuilder form is submitted';
$lang['event_info_OnFormBuilderFormDisplay']='Event triggered when a FormBuilder form is displayed';

$lang['event_help_OnFormBuilderFormSubmit']='<p>Event triggered when a FormBuilder form is submitted.</p>
<h4>Parameters</h4>
<ul>
<li><em>form_name</em> - The form name (string)</li>
<li><em>form_id</em> - The internal form id (int)</li>
<li><em>value_&lt;name&gt;</em> - Supply a default value to a field with the specified name.</li>
</ul> ';
$lang['event_help_OnFormBuilderFormSubmitError']='<p>Event triggered if there is an error when a FormBuilder form is submitted</p>
<h4>Parameters</h4>
<ul>
<li><em>form_name</em> - The form name (string)</li>
<li><em>form_id</em> - The internal form id (int)</li>
<li><em>error</em> - A list of all known errors (string)</li>
</ul> ';
$lang['event_help_OnFormBuilderFormDisplay']='<p>Event triggered when a FormBuilder form is displayed</p>
<h4>Parameters</h4>
<ul>
<li><em>form_name</em> - The form name (string)</li>
<li><em>form_id</em> - The internal form id (int)</li>
</ul> ';

$lang['formbuilder_params_response_id'] = 'Response ID. Used by FormBrowser';
$lang['formbuilder_params_passed_from_tag'] = 'Default field values; see module help';
$lang['formbuilder_params_field_id'] = 'Field ID for internal operations';
$lang['formbuilder_params_form_name'] = 'Form Name';
$lang['formbuilder_params_form_id'] = 'Form ID for internal operations';
$lang['formbuilder_params_general'] = 'General parameters for internal operations';

$lang['template_variable_help'] = "
<h3>Form Template Variables</h3>
<p>You can edit it to make your form layout look any way you'd like.
   To make the form work, you'll need to always include the &#123;\$fb_hidden} and &#123;\$submit}
   tags.</p>

<p>You can access your form fields either using the \$fields array or by directly accessing fields by their names (e.g., &#123;\$myfield->input} )</p>


<p>Each field has the following attributes:</p>
<table>
<tr><th>Field</th><th>Value</th></tr>
<tr><td>field->display</td><td>1 if the field should be displayed, 0 otherwise</td></tr>
<tr><td>field->required</td><td>1 if the field is required, 0 otherwise</td></tr>
<tr><td>field->required_symbol</td><td>the symbol for required fields</td></tr>
<tr><td>field->css_class</td><td>the CSS class specified for this field</td></tr>
<tr><td>field->valid</td><td>1 if this field has passed validation, 0 otherwise</td></tr>
<tr><td>field->error</td><td>Text of the validation problem, in the event that this field did not validate</td></tr>
<tr><td>field->hide_name</td><td>1 if the field name should be hidden, 0 otherwise</td></tr>
<tr><td>field->has_label</td><td>1 if the field type has a label</td></tr>
<tr><td>field->needs_div</td><td>1 if the field needs to be wrapped in a DIV (or table row, if that's the way you swing)</td></tr>
<tr><td>field->name</td><td>the field's name</td></tr>
<tr><td>field->helptext</td><td>the field's help text</td></tr>
<tr><td>field->input</td><td>the field's input control (e.g., the input field itself)</td></tr>
<tr><td>field->op</td><td>a control button associated with the field if applicable (e.g., the delete button for expandable text input)</td></tr>
<tr><td>field->input_id</td><td>the ID of the field's input (useful for label for=\"foo\")</td></tr>
<tr><td>field->type</td><td>the field's data type</td></tr>
                                
<tr><td>field->multiple_parts</td><td>1 if the field->input is actually a collection of controls</td></tr>
<tr><td>field->label_parts</td><td>1 if the collection of controls has separate labels for each control</td></tr>
</table>

<p>In the case of a multipage form, you will also have access to the value of previous fields. They
are in the \$previous array, or accessible by their names (e.g., &#123;\$myfield->value} ).
You can use this in Static Text fields as well, which is a nice way to personalize forms!</p>

<p>In certain cases, field->input is actually an array of objects rather than an input. This happens, for example, in CheckBoxGroups or RadioButtonGroups. For them, you can iterate through field->input->name and field->input->inputs.</p>
    
<p>Additional smarty variables that you can use include:</p>
<table>
<tr><th>Variable</th><th>Value</th></tr>
<tr><td>total_pages</td><td>number of pages for multi-page forms</td></tr>
<tr><td>this_page</td><td>number fo the current page for multi-page forms</td></tr>
<tr><td>title_page_x_of_y</td><td>displays \"page x of y\" for multi-page forms</td></tr>
<tr><td>css_class</td><td>CSS Class for the form</td></tr>
<tr><td>form_name</td><td>Form name</td></tr>
<tr><td>form_id</td><td>Form database ID</td></tr>
<tr><td>prev</td><td>\"Back\" button for multipart forms</td></tr>
<tr><td>submit</td><td>\"Continue\" or \"Submit\" button for multipart forms, adjusts automatically</td></tr>
</table>
<p>Dunno why you'd want some of those, but there you go...</p>
";

// post-install message
$lang['post_install']="FormBuilder installed. Please consult the module's Help page for documentation.";

$lang['help'] = "<h3>What Does This Do?</h3>
<p>The Form Builder Module allows you to create forms (in fact, it's a replacement of the original Feedback Form module), with
the added power of database storage. With its companion module Form Browser, you can use it to create simple database applications.</p>
<p>The forms created using the Form Builder may be inserted
into templates and/or content pages. Forms may contain many kinds of inputs, and may have
validation applied to these inputs. The results of these forms may be handled in a variety of ways.</p>

<h3>How Do I Use it?</h3>
<P>Install it, and poke around the menus. Play with it. Try creating forms, and adding them to your content.
If you get stuck, chat with me on the #cms IRC channel, post to the forum, send me email, or, if you're
really desperate, try reading the instructions on the rest of this page.</P>

<h3>How Do I Create a Form</h3>
<p>In the CMS Admin Menu, you should get a new menu item called FormBuilder. Click on this. On the page
that gets shown, there are options (at the bottom of the list of Forms) to Add a New Form or Modify
Configuration.</p>

<h3>Adding a Form to a Page</h3>
<p>In the main FormBuilder admin page, you can see an example of the tag used to display each form. It looks
something like {FormBuilder form='sample_form'}</p>
<p>By copying this tag into the content of a page, or into a template, will cause that form to be displayed.
In theory, you can have multiple forms on a page if you really want to. Be careful when pasting the tag
into a page's content if you use a WYSIWYG editor such as TinyMCE, FCKEdit, or HTMLArea. These editors may stealthily
change the quote marks (\") into HTML entities (&amp;quot;), and the forms will not show up. Try using
single quotes (') or editing the HTML directly.</p>

<h3>Working with Forms</h3>
<p>By clicking on a Form's name, you enter the Form Edit page. There are several tabs, which are described below:</p>
<h4>Main</h4>
<p>This is the main place you'll work on your form. Here, you give it a name, an alias (which is used to identify it for placing it in a page or template), and, optionally, a CSS class with which to wrap the whole thing.</p>
<p>Below this, if you have it enabled, is the \"fast field adder\" pulldown, that lets you quickly add a field to the end of your form by selecting the field type.</p>
<p>Below this is the list of fields that make up your form. More detail on this is described below.</p>
<h4>Form Submission</h4>
<p>When the form is submitted, you can either redirect the user to another page of your site, or you can present the user some message (which can contain any of the user's form entries, or just static text). In this tab, you select which of these approaches you wish to use, and, if you chose redirection, it allows you to pick the page to redirect users to after a successful form submission.</p>
<p>Also on this page, you can specify the labels of various submission buttons (\"Previous\", \"next\", \"submit\"). You can also opt to have some Javascript added to the last page of a form that will prevent multiple submissions (useful on slow servers).</p>
<h4>Form Display Options</h4>
<p>This tab allows for other form customizations, like the symbol to show for required fields.</p>
<h4>Captcha Settings</h4>
<p>If you have installed the Captcha module, this tab lets you configure the Captcha settings for your form.</p>
<h4>Form Template</h4>
<p>This is where you do your customization work of your form's Smarty Template. See the section called Form Template Variables below.</p>
<p>The form should default to a Custom template that documents the Smarty tags available to you.</p>
<p>Unless you're a Smarty expert, you probably don't want to mess around with this. If you are a Smarty expert, this is where you can unleash your magic.</p>
<h4>Submission Template</h4>
<p>If, in the Form Submission tab, you selected 'Display \"Submission Template\", this is where you can create that template. There is a display of which smarty variables are available to you, and a button to generate a sample template.</p>
<p>If you're a Smarty expert, you can do all manner of creative and powerful things here. If you're not a Smarty expert, you might just want to use the default.
</p>

<h3>Adding Fields to your Form</h3>
<p>The types of fields that are currently supported fit into four groups: standard input fields, display control fields, email-specific fields, and form result handling fields (also called Form Dispositions in places):</p>
<ul>
<li>Standard Input Fields - these are inputs that allow entry of typical form elements; text inputs, radio buttons, etc.</li>
<li>Display Control Fields - these input control how the user will see the display of the form; page breaks, static text, etc.</li>
<li>Email-specific Fields - some forms generate email, and email-specific fields can alter attributes of the emails sent.</li>
<li>Form Dispositions - These determine what happens when the user
submits the form; for each result handling field, some method of transmitting, saving, or emailing the
form contents takes place. A form may have multiple form dispositions.</li>
</ul>
<p>Form fields are assigned names. These names identify the field, not only on the screen as labels for the user,
but in the data when it's submitted so you know what the user is responding to. Phrasing the name like a question
is a handy way of making it clear to the user what is expected. Similarly, many fields have both Names and Values.
The Names are what gets shown to the user; the Value is what gets saved or transmitted when the user submits
the form. The Values are never seen by the user, nor are they visible in the HTML, so it's safe to use for
email addresses and such.</p>
<p>Some fields can have multiple values, or multiple name/value pairs. When you first create such a field,
there may not be sufficient inputs for you to specify all the values you want. To get more space for inputting
these values, use the buttons at the bottom of the page for adding options.</p>
<p>Fields can be assigned validation rules, which vary according to the type of the field. These rules help
ensure that the user enters valid data. They may also be
separately marked \"Required\", which will force the user to enter a response.</p>
<p>Fields also may be assigned a CSS class. This simply wraps the input in a div with that class, so as to allow
customized layouts. To use this effectively, you may need to \"view source\" on the generated form, and then
write your CSS.</p>
<ul>
<li>Standard Inputs
<ul><li>Text Input. This is a standard text field. You can limit the length, and apply various validation
functions to the field.</li>
<li>Text Area. This is a big, free-form text input field.</li>
<li>Checkbox. This is a standard check box.</li>
<li>Button. This doens't do anything, but you can hook it into some Javascript.</li>
<li>Checkbox Group. This is a collection of checkboxes. The only difference between this input and a
collection of Checkbox inputs is that they are presented as a group, with one name, and can have a validation function requiring that you check one or more of the boxes in the group.</li>
<li>Radio Group. This is a collection of radio buttons. Only one of the group may be selected by the user.</li>
<li>Pulldown. This is a standard pulldown menu. It's really conceptually the same thing as a radio button
group, but is better when there are a large number of options.</li>
<li>Multiselect. This is a multi-select field. It's really conceptually the same thing as a checkbox button
group, but is better when there are a large number of options, as you can limit the number displayed on the screen at any one time.</li>
<li>Password. This is an asterisked-out text field, useful for passwords.</li>
<li>Password Again (verify). This is a field that must match a Password field for submission
to succeed.</li>
<li>State. This is a pulldown listing the States of the U.S.</li>
<li>Canadian Province. This is a pulldown listing the Canadian Provinces (Contributed by Noel McGran. Thanks!)</li>
<li>Countries. This is a pulldown listing the Countries of the world (as of July 2005).</li>
<li>Date Picker. This is a triple pulldown allowing the user to select a date.</li>
<li>Time Picker. This is a set of pulldowns allowing the user to select a time (using 12 or 24 hour clock).</li>
<li>File Upload. This is a file upload field.</li>
<li>Link (User Entered). This creates a double input field for getting a link URL and link title.</li>
<li>Text Field (Multiple). This field creates one or more text inputs with add and delete buttons, effectively giving the end user a way of creating variable-length lists.</li>
</ul></li>

<li>Email-specific Inputs
<ul><li>Email \"From Address\" Field. This allows users to provide their email address. The email generated when the form gets handled will use this address in the \"From\" field.</li>
<li>Email \"From Name\" Field. This allows users to provide their name. The email generated when the form gets handled will use this name in the \"From\" field.</li>
<li>Email Subject Field. This allows users to provide a subject for their email. The email generated when the form gets handled will use this in the \"Subject\" field. This may cause trouble with certain dispositions that want to control the Email Subject, so use it with caution.</li>
</ul></li>

<li>Display Control Fields<ul>
<li>-Page Break. This allows you to split your feedback form into multiple pages. Each page is
independently validated. This is good for applications like online surveys.</li>
<li>-Fieldset Start. Combined with Fieldset End, this allows you to group various fields within your form. Use this to start a given grouping.</li>
<li>-Fieldset End. Combined with Fieldset Start, this allows you to group various fields within your form. Use this to end a given grouping.</li>
<li>-Hidden Field. This allows you to embed a hidden field in your form.</li>
<li>-Static Text. This allows you to put text or a label in the middle of your form. This is useful for giving additional help text, especially if you're not using a Custom Template to render your form.</li>
<li>-Static Link. This allows you to put a link to a given page into your form. Optionally, you can have it autopopulate with the page where the form is embedded (useful if you're sending results via email).</li>
<li>-Computed Field. This allows you to embed a computed field in your form. It is not visible to the user until after the form is submitted. It allows you to do simple arithmetic or string concatenation.</li>
<li>-Unique Integer (Serial). This is an integer that increases every time someone hits your form. Your results may not be sequential, but they will increase monotonically.</li>
</ul></li>

<li>Form Handling Inputs (Dispositions)
<ul><li>*Call a User Defined Tag With the Form Results. This submits all the form results to the User-Defined Tag you specify. The UDT can handle the results however it wants. Values are passed as \$params['field_name'], and as \$params['field_alias'] (if defined).</li>
<li>*Email Results Based on Pulldown. This is useful for web sites where comments get routed based on their subject matter, e.g., bugs get sent to one person, marketing questions to another person, sales requests to someone else, etc. The pulldown is populated with the subjects, and each gets directed to a specific email address. You set up these mappings in the when you create or edit a field of this type. If you use one of these \"Director\" pulldowns, the user must make a selection in order to submit the
form. This input is part of the form the user sees, although the email addresses are not made visible nor
are they embedded in the HTML.</li>
<li>*Email \"From Address\" Field, and send copy. This works like the Email \"From Address\" Field described above, but it provides options for sending a copy of the results to the user.</li>
<li>*Email Results to set Address(es). This simply sends the form results to one or more email addresses that you enter when you create or edit this type of field. This field and its name are not visible in the
form that the user sees. The email addresses are not made visible nor
are they embedded in the HTML.</li>
<li>*Email to User-Supplied Address. This puts an input field in the form for the user to populate with an email address. The form results get sent to that address. Beware of Spam abuse! Active the primitive anti-spam features in the FormBuilder configuration screen.</li>
<li>*Store Results in Database. <strong>Deprecated.</strong> Use Store Results for FormBrowser Module instead! This will store the form contents in an internal database. You will always use this disposition if you use the form with FormBrowser.</li>
<li>*Redirect to Page Based on Pulldown. This allows you to redirect the form to a different site page depending on its value. If you have multiple dispositions, make sure this is used last.</li>
<li>*Validate via Email. This is a strange and powerful field. It provides the user a mandatory input for their email address. Once they submit their form, the standard form dispositions are not performed -- rather, it send the user an email with a special coded link. If they click on the link, the other form is considered \"approved,\" and the other dispositions are all performed.</li>
<li>*Write Results to Flat File. This takes the form results and writes them into a text file. You may
select the name of the file, and set its format. These files are written to the \"output\" directory under the
module's installation directory, assuming the web server has permission to write there.</li>
<li>*Save Results to File Based on Pulldown. Like the Flat File disposition, except the value of a pull-down determines which file results get written to.</li>
<li>*Save Results to File(s) Based on Multiple Selections. Like the Flat File disposition, except the value(s) of checkboxes  determines which file(s) results get written to.</li>
<li>*Email to CMS Admin User. Provides a pull-down of CMS Admin users, and directs the results as an email to the selected admin.</li>
<li>*Store Results for FormBrowser Module v.0.3. Stores the form results in an XML structure as a single database record. This is the only interface to Form Browser. See section below.</li>
<ul><li>*Submit to an arbitrary form action. Craft an HTTP GET or POST, and transmit it using cURL to the specified URL. This lets you use FormBuilder as a front-end to any CGI or Form Handling script out there.</li>

</ul></li></li></ul>

<h3>Passing Default Values to Forms</h3>
<p>Calguy added a nice feature, which is that you can pass default field values to your form via the module tag. This allows you to have
the same form in multiple places, but with different default values. It may not work for more exotic field types, but for fields that have
a single value, you can specify like:</p>
<p>{FormBuilder form='my_form' value_<i>FIELDNAME</i>='default_value'}</p>
<p>This will set the field with <i>FIELDNAME</i> to 'default_value'.</p>
<p>This can be problematic, as sometimes field names are unwieldy or contain characters that don't work well with Smarty. So there is an
alternative like this:</p>
<p>{FormBuilder form='my_form' value_fld<i>NUMBER</i>='default_value'}</p>
<p>That uses field <i>NUMBER</i>, where <i>NUMBER</i> is the internal FormBuilder field id. You might wonder how you know what that id is. Simply go into the FormBuilder configuration tab,
and check \"Show Field IDs\"</p>

<h3>Email and Flat File Templates</h3>
<p>Many disposition types allow you to create a template for the email that is generated, or for the way the results are written to a file. If you opt not to create a template, the FormBuilder will use it's own best guess, which may or may not work out to your liking. You can always click on the \"Create Sample Template\" and then customize the results.</p>
<p>To the right, you'll find a legend which lists all of the variables that are available to you to use in your template. As of version 0.3, variables have two names, one based on the field name, the other based on the field ID. If you use field names that have characters outside of the ASCII 32-126 range, it will be safer to use the ID-based variables.</p>
<p><strong>Note that once you've changed a template, it will no longer automatically add new fields.</strong> For this reason, it's usually best to create your templates as the last step of creating your form.</p>
<p>As of version 0.2.4, you can opt to send any of these emails as HTML email. There should be a checkbox at the top of the template page for this. There is also a \"Create Sample HTML Template\" button over in the legend area. For HTML email, the email body will also provide the default text-only values.</p>

<h3>Use with FormBrowser v3</h3>
<p>There are some special features when using FormBuilder with FormBrowser. The new approach stores the form results in XML, so that far fewer
queries are needed to retrieve records. This means you can use FormBrowser with hundreds or even thousands of records. It also means you
will have to choose up front which fields you will want to be able to sort by. You can choose up to five.</p>
<p>In advanced options, you can tie a form to Frontend Users. That means each user gets one record for the form; they can create it
a single time, subsequent times they will be editing their record. The record will not be visible to any other users (excluding admins).
This form should be added to your page using the syntax {FormBuilder action='feuserform' form='form_name'}.</p>
<p>For greater data safety, you can encrypt the stored forms in the database. You can use the built-in mycrypt library or the OpenSSL module.
In either case, for the passphrase, you can either enter text in the field or a file name. If you specify a file name, the contents of that
file will be used as the passphrase for encrypting.</p>
<p>If you encrypt, be aware that the fields you use for sorting are <strong>not</strong> encrypted. You can choose to hash them; the cheat here
is that the first four letters are left intact to allow for sorting. The sorting may not be perfect, and this weakens the security since it
exposes some cleartext, but it is better than nothing.</p>
<p><strong>DISCLAIMER</strong>. The encryption offered here should be considered just one more hurdle for a hacker, not as a guarantee that
your information will be secure. A smart hacker who has found some exploit to view database records may well be smart enough to get at
the module source code, and find their way to the passphrase. This will not protect you against an enemy who has full access to your
server, some familiarity with PHP, and the time to poke around. <em><strong>Do not</strong> use this to protect high-value information such as financial data,
sensitive political information, human rights data, or anything else that might be of value to a repressive government or organized crime
cartel.</em></p>

<h3>Configuration</h3>
<p>There are some global configuration options for FormBuilder:</p>
<ul>
<li>Enable fast field add pulldown. This enables the pulldown on the Form Edit page which saves a step in the creation of new fields.</li>
<li>Run in MLE Mode. This changes some queries against the content table to try to prevent ugly crashes under the MLE fork. Checking this will cause ugly crashes if you are NOT running the MLE fork.</li>
<li>Hide Errors. This is no longer set by default. Checking it will hide the more detailed errors that would be displayed if there are problems when you submit your form.</li>
<li>Require Field Names. Typically, you will want form fields to be named so you can tell which is which. However, in some cases, you might want to have nameless fields. Uncheck this if you want to allow nameless fields.</li>
<li>Unique Field Names. Typically, you will want form fields to have unique names so you can tell which is which. Uncheck this if you want to allow fields to share names.</li>
<li>Use relaxed email validation. This uses a less restrictive regular expression for validating email; e.g., x@y will be allowed, where typically x@y.tld is required.</li>
<li>Show Form Builder Version. Displays the version of FormBuilder you're using in a comment when the form is generated. Typically only useful when debugging.</li>
<li>Enable primitive anti-spam features. When turned on, this allows any given IP address to only generate 10 emails per hour.</li>
<li>Show Field IDs. When turned on, FormBuilder will display field ids when adding or editing a form.</li>
</ul>
<h3>Styling and CSS</h3>
<p>After a bit of nagging on the part of people who actually respect standards, FormBuilder no longer encourages tricks like embedding CSS in 
static text fields. Instead, it creates a stylesheet called \"FormBuilder Default\" that you are encouraged to attach to the page template
that you use for pages that contain your form.</p>  
<p>This default CSS was graciously provided by Paul Noone.</p>

".$lang['template_variable_help']."

<h3>Miscellaneous Notes</h3>
<ul>
<li>Any fields that sends email to a specified email addresses will accept a comma-separated list of email addresses.</li>
</ul>
<h3>Known Issues</h3>
<ul>
<li>FormBuilder does not yet support pretty URLs, although that shouldn't matter since the user side is pretty simple.</li>
<li>FileUpload Fields may not work correctly with multipage forms.</li>
</ul>

<h3>Troubleshooting</h3>
<ol>
<li>FormBuilder/FormBrowser <strong>requires</strong> PHP 5 or later to function correctly.</li>
<li>First step is to check you're running CMS 1.6 or later.</li>
<li>Second step is to read and understand the caveat about WYSIWYG editors up in the
section <em>Adding a Form to a Page</em>.</li>
<li> If you're missing fields in an email that gets generated, check the disposition field's template, and make sure you're specifying the missing fields. Seems obvious, but it's an easy mistake to make.</li>
<li>Uncheck the \"Hide Errors\" checkbox in the global options, and see what message gets displayed when you submit your form.</li>
<li> Just mess around and try clicking on links and icons and stuff. See what happens.</li>
<li> Make sure you can successfully send email via the test in the CMSMailer Module. It's simply amazing how many problems boil down to a misconfigured CMSMailer.</li>
<li> Last resport is to email me or catch me on IRC and we can go from there.</li>
</ol> 
<p>This is no longer a particularly early version, but it is probably still buggy. While I've done all I can
to make sure no egregious bugs have crept in, I have to admit that during early testing, this program
revealed seven cockroaches, two earwigs, a small family of aphids, and a walking-stick insect. It also
ate the neighbor's nasty little yap dog, for which I was inappropriately grateful.</p>
<p>The final release will include bug fixes, documentation, and unconditional love.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report, please visit the CMS Made Simple  <a href=\"http://dev.cmsmadesimple.org\">Developer Forge</a>.</li>
<li>To obtain commercial support, please send an email to the author at <a href=\"mailto:sjg@cmsmodules.com\">&lt;sjg@cmsmodules.com&gt;</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=\"http://forum.cmsmadesimple.org\">CMS Made Simple Forums</a>.</li>
<li>The author can often be found in the <a href=\"irc://irc.freenode.net/#cms\">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly and grovelling for free support.</li>
<li>Donations are good motivators, too. Keep in mind that the dollar is weak, and if you are not in the US, your donation gets magnified.</li>
</ul>
<p>Keep in mind that the author has put <em>hundreds and hundreds of hours</em> into the development of this module.
Please take the time to read the documentation before sending questions. Either that, or send your questions written on
financially negotiable instruments (i.e., checks or cash). Am I sounding like a broken record? Do you kids these days
even know what a broken record is? I would say skipping CD, but you might not know what that is either. Like a
sample that got stuck on loop? Damn, I am getting old. So is this paragraph. Time to move on, here.</p>".
'<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHTwYJKoZIhvcNAQcEoIIHQDCCBzwCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYAINnBWb/XM4lmvLGHl9Rd1cvL5trqRhc7+FoGH5LtofQiVrgFSvh7h1ojg5SzTxbgti32ZF0/ucuq/OQSD+VzuuAF1v6wVrtyOeCPEAw8j81DJOXVjJHsIY2mviorPjolLQkFnv12yRTpuFWFn4ZXe5+vnCjXqBy0EE/ahzEMMnzELMAkGBSsOAwIaBQAwgcwGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIcKNNwOPFowuAgaivS7v0j2XFyQ9dr8ni9G95eE7YqogGlK9wuSpllOg9lnruvnEQqsmRmQnthQqWCTbZzG2+IEteM4IUsxEuGTrw8pZCU24TNDcknKUx9Uz3vSxOh3gu95yJyDwoeMvaEA24bs14QEbJbhNjY6WxHz9+i/lVADBjyAODYMuzalDkvduvweGNZk9lYLRRCoPPNilG1Pf6w87BHpkSM8WQ1LC9+RWdXfZcm+egggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0wODA3MDEwMzU5MzlaMCMGCSqGSIb3DQEJBDEWBBQM0LV30fLXcH9M5dMmuTBLnsFQ4jANBgkqhkiG9w0BAQEFAASBgBEz2XqMMqFbuUhj+L128Cw2u8ShOKQttrKr/hi0WReenHDYBiHOStl63Rv76Q2mpd453RvCj5mq7dRtuRB6pfHGRDkUX6N1+OOIoIfroBZIATNhz9CEHwEFkNjYg0EGMAG+jcbAj1DJjR73cxbaNrXWPxA+hiQhHlArrZA7rFV5-----END PKCS7-----
">
</form>'.
"<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2008, Samuel Goldstein <a href=\"mailto:sjg@cmsmodules.com\">&lt;sjg@cmsmodules.com&gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=\"http://www.gnu.org/licenses/licenses.html#GPL\">GNU Public License</a>. You must agree to this license before using the module.</p>";



?>
