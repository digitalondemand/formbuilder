<?php
// English_US Localization File
$lang['friendlyname'] = 'Form Builder';

// field types
$lang['field_type_']='Field Type Not Set';
$lang['field_type_TextField']='Text Input Field';
$lang['field_type_TextAreaField']='Text Area';
$lang['field_type_CheckboxField']='Check Box';
$lang['field_type_CheckboxGroupField']='Check Box Group';
$lang['field_type_PulldownField']='Pulldown';
$lang['field_type_StateField']='U.S. State';
$lang['field_type_CountryField']='Country';
$lang['field_type_DateField']='Date Picker';
$lang['field_type_FunctionCallField']='Function Callback "Field"';
$lang['field_type_RadioGroupField']='Radio Button Group';
$lang['field_type_DispositionDirector']='*Email Results Based on Pulldown';
$lang['field_type_DispositionEmail']='*Email Results to set Address(es)';
$lang['field_type_DispositionEmailSiteUser']='*Email Results to User-Selected Site User';
$lang['field_type_DispositionFile']='*Write Results to Flat File';
$lang['field_type_PageBreakStatic']='Page Break';
$lang['field_type_FileUploadField']='File Upload';
$lang['field_type_EmailFromField']='Email "From" Field';
$lang['field_type_StaticTextField']='Static Text';


// validation types
$lang['validation_none']='No Validation';
$lang['validation_numeric']='Numeric';
$lang['validation_integer']='Integer';
$lang['validation_email_address']='Email Address';
$lang['validation_at_least_one']='At Least One Checked';
$lang['validation_must_check']='Must Be Checked';
$lang['validation_option_selected']='Option Must be Selected';
$lang['validation_regex_match']='Match Regular Expression';
$lang['validation_regex_nomatch']='Doesn\'t match Regular Expression';

// validation error messages and other alerts
$lang['please_enter_a_value']='Please enter a value for ';
$lang['please_enter_a_number']='Please enter a number for ';
$lang['please_enter_an_integer']='Please enter an integer value for ';
$lang['please_enter_an_email']='Please enter a valid email address for ';
$lang['not_valid_email']='does not appear to be a valid email address!';
$lang['please_enter_no_longer']='Please enter a value that is no longer than ';
$lang['please_check_something']='Please check something for ';
$lang['please_select_something']='Please select something for ';
$lang['field_name_in_use1']='The field name';
$lang['field_name_in_use2']='is already in use in the form! Please change it to something unique.';
$lang['you_need_permission1']='You need the "';
$lang['you_need_permission2']='" permission to perform that operation.';
$lang['lackpermission']='Sorry! You don\'t have adequate privileges to access this section.';
$lang['field_order_updated']='Field order updated.';
$lang['form_deleted']='Form deleted.';
$lang['field_deleted']='Field deleted.';
$lang['configuration_updated']='Configuration Updated.';
$lang['you_must_check1']='You must check "';
$lang['you_must_check2']='" in order to continue.';
$lang['must_specify_one_destination']='You need to specify at least one destination address!';
$lang['are_you_sure_delete_form']='Are you sure you want to delete the form %s?';
$lang['are_you_sure_delete_field']='Are you sure you want to delete the field %s?';
$lang['notice_select_type']='Advanced options are not available until the field type has been set.';

// abbreviations, verbs, and other general terms
$lang['abbreviation_length']='Len: %s';
$lang['characters']='characters';
$lang['boxes']='boxes';
$lang['field']='Field';
$lang['order']='Order';
$lang['unspecified']='(unspecified)';
$lang['added']='added';
$lang['updated']='updated';
$lang['deleted']='deleted';
$lang['choices']='choices';
$lang['select_one']='Select One';
$lang['select_a_user']='Select A User';
$lang['select_type']='Select Type';
$lang['to']='To';
$lang['recipients']='recipients';
$lang['note']='Note';
$lang['any_user']='Any User';
$lang['list']='list';
$lang['not_configured']='Not Configured';
$lang['save']='Save';
$lang['add']='Add';
$lang['update']='Update';
$lang['save_and_continue']='Save and Continue Editing';
$lang['information']='Information';
$lang['automatic']='Automatic';
$lang['forms']='Forms';
$lang['form']='Form';
$lang['configuration']='Configuration';
$lang['tab_main']='Main';
$lang['tab_additional']='Form Messages';
$lang['tab_advanced']='Advanced Settings';
$lang['tab_tablelayout']='Table-based Layout Options';
$lang['tab_csslayout']='CSS Layout Options';
$lang['tab_templatelayout'] = 'Template Layout Options';
$lang['nofields']='No retrieval fields defined. ';
$lang['nomethod']='No method/module set.';
$lang['field_requirement_updated'] = 'Field required state updated.';
$lang['maximum_size']='Max. Size';
$lang['permitted_extensions']='Extensions';
$lang['permitted_filetypes']='Allowed file types';
$lang['file_too_large']='Uploaded file is too large! Maximum size is:';
$lang['illegal_file_type']='This type of file may not be uploaded. Please check that the extension is correct.';

$lang['uninstalled'] = 'Module uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';


// Field Attribute Titles
$lang['title_maximum_length']='Maximum Length';
$lang['title_checkbox_name']='Checkbox Name';
$lang['title_submitted_value']='Submitted Value';
$lang['title_checkbox_details']='Checkbox Group Details';
$lang['title_select_one_message']='"Select One" Text';
$lang['title_selection_subject']='Selection Subject';
$lang['title_select_default_country']='Default Selection';
$lang['title_selection_name']='Selection Name';
$lang['title_destination_email']='Destination Email Address';
$lang['title_director_details']='Pulldown-based Emailer Details';
$lang['title_email_addresses']='Email Address(es) to Send Form Results';
$lang['title_file_format']='File Format';
$lang['title_file_format_tab']='Tab-Delimited Values';
$lang['title_file_format_tab_header']='Tab-Delimited Values with Header';
$lang['title_file_format_page']='Page Format';
$lang['title_file_name']='File Name';
$lang['title_erase_filelock']='Erase File Lock';
$lang['title_erase_usage']='(use this to clear the file lock if file writes are failing due to a crashed process)';
$lang['title_file_note']='Files will be saved in the modules/FeedbackForm/output directory, under your install root.';
$lang['title_username']='Site Username';
$lang['title_real_name']='Full (Real) Name';
$lang['title_both_names']='Site Username + Real Name';
$lang['title_no_group_restriction']='No Group Restriction';
$lang['title_email_subject']='Email Subject Line';
$lang['title_restrict_to_group']='Restrict to users in group';
$lang['title_names_in_pulldown']='Names to use in Pulldown';
$lang['title_select_a_user_message']='"Select a User" message';
$lang['title_pulldown_contents']='Pulldown Contents';
$lang['title_radio_name']='Radio Button Name';
$lang['title_radio_group_details']='Radio Button Group Details';
$lang['title_form_name']='Form Name';
$lang['title_form_status']='Form Status';
$lang['title_ready_for_deployment']='Ready for Deployment';
$lang['title_not_ready1']='Not Ready';
$lang['title_not_ready2']='Please add a field to the form so that the user\'s input gets handled. You can';
$lang['title_not_ready_link']='use this shortcut';
$lang['title_form_alias']='Form Alias';
$lang['title_form_fields']='Form Fields';
$lang['title_field_name']='Field Name';
$lang['title_field_type']='Field Type';
$lang['title_not_ready3']='to create a form handling field.';
$lang['title_form_alias']='Form Alias';
$lang['title_add_new_form']='Add New Form';
$lang['title_edit_configuration']='Edit Form Builder Configuration';
$lang['title_show_version']='Show Form Builder Version?';
$lang['title_show_version_long']='This will embed your installed version number of Form Builder module in a comment, to aid in debugging';
$lang['title_add_new_field']='Add New Field';
$lang['title_form_submit_button']='Form Submit Button Text';
$lang['title_form_next_button']='Form "Next" Button Text (used for multipage forms)';
$lang['title_form_thanks_text']='Form Thanks Message Text';
$lang['title_field_validation']='Field Validation';
$lang['title_default_user']='Default User';
$lang['title_no_default_user']='No Default User';
$lang['title_form_css_class']='CSS Class for this form';
$lang['title_field_css_class']='CSS Class for this field';
$lang['title_form_required_symbol']='Symbol to mark required Fields';
$lang['title_field_required']='Required';
$lang['title_field_required_long']='Require a response for this Field';
$lang['title_hide_label']='Hide Label';
$lang['title_hide_label_long']='Hide this field\'s name on Form';
$lang['title_field_regex']='Validation Regex';
$lang['title_regex_help']='This regular expression will only be used if "validation type" is set to a regex-related option. Include a full Perl-style regex, including the start/stop slashes and flags (e.g., "/image\.(\d+)/i")';
$lang['title_field_required_abbrev']='Req\'d';
$lang['title_title_position']='Field Title Position (non-CSS Layout only)';
$lang['title_table_layout_left']='Title on Left';
$lang['title_table_layout_above']='Title Above';
$lang['title_hide_errors']='Hide Errors';
$lang['title_form_displaytype'] = 'Form Display Type';
$lang['title_hide_errors_long']='Prevent debug / error messages from being seen by users.';
$lang['title_email_template']='Email Template';
$lang['title_email_template_vars']='Variables Available for Use in Email Template';
$lang['title_sample_template']='Create a sample template'; 
$lang['title_maximum_size']='Maximum upload file size (kilobytes)';
$lang['title_permitted_extensions']='Permitted Extensions';
$lang['title_permitted_extensions_long']='Enter a comma-separated list, excluding the dot (e.g., "jpg,gif,jpeg"). Spaces will be ignored. Leaving this blank means there will be no restrictions.';
$lang['title_show_limitations']='Display restrictions?';
$lang['title_show_limitations_long']='Display any size and extension restrictions with the upload field?';
$lang['title_callback_module']='Callback Module';
$lang['title_callback_method']='Callback Method';
$lang['title_callback_fields']='Result Fields to Include';
$lang['title_callback_help']='Help';
$lang['title_form_template']='Template to use to Display Form';
$lang['title_css_id_and_name'] = 'Use ID and Name for CSS inputs';
$lang['title_date_format']='Date Format (standard <a href="http://www.php.net/manual/en/function.date.php">PHP Date Formats</a>)';
$lang['title_callback_helplong']='<p>You specify a module and method. This method signature should be:</p><br />
function whatever($id, &$params, $returnid, &$cms)<br /><br />
<p>This function should output something that makes sense in a form, <i>e.g.</i> probably hidden fields containing
useful information.</p>
<p>The "fields" field should contain a comma-delimited list of the fields generated by that method.</p>
<p>Example: I have a module "UserID" which has a method "LoggedInUser". This method creates two hidden fields
called "first_name" and "last_name" which I want included in my form submission. I would then enter the following:</p>
module: UserID<br />
method: LoggedInUser<br />
fields: first_name,last_name</br>
';

$lang['disptype_table']='Table/CSS';
$lang['disptype_css']='Pure CSS';
$lang['disptype_template']='Custom Template';

$lang['admindesc']='Add, edit and manage interactive Forms';

$lang['date_a_jan']='JAN';
$lang['date_a_feb']='FEB';
$lang['date_a_mar']='MAR';
$lang['date_a_apr']='APR';
$lang['date_a_may']='MAY';
$lang['date_a_jun']='JUN';
$lang['date_a_jul']='JUL';
$lang['date_a_aug']='AUG';
$lang['date_a_sep']='SEP';
$lang['date_a_oct']='OCT';
$lang['date_a_nov']='NOV';
$lang['date_a_dec']='DEC';
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
$lang['month'] = 'Month';
$lang['day'] = 'Day';
$lang['year'] = 'Year';

// Form Submission Headers
$lang['submission_title']='Form Submission';
$lang['submission_host']='Host';
$lang['submission_form_name']='Form';
$lang['submission_date']='Date';
$lang['submission_source']='Source';
$lang['submission_subject']='Form Submission';
$lang['submission_error']='There has been an error in the form submission<br>Please try again later.';
$lang['submission_error_file']='Error. Unable to write to file.';

// post-install message
$lang['post_install']="
<p>Make sure to set the \"Modify Forms\" permissions
on users who will be administering feedback forms. Also, if you'll be emailing form
results, be sure to update the Configuration appropriately.</p>
<p>Please be aware that a feedback form should not be active (e.g., usable by the public) while
you are still editing the form. You should create the form, and place the tag into an active
content page only when you have finished editing. Otherwise, erroneous results could be returned.</p>
<p>Additionally, this version does not support parallel editing of forms. Please take care that
only one admin is editing a given form at a given time.</p>";

$lang['help'] = "<h3>What Does This Do?</h3>
<p>The Form Builder Module allows you to create forms for use by other modules such as the FeedbackForm module. These forms may be inserted
into templates and/or content pages. Feedback forms may contain many kinds of inputs, and may have
validation applied to these inputs. The results of these forms may be handled in a variety of ways.</p>

<h3>How Do I Use it?</h3>
<P>Install it, and poke around the menus. Play with it. Try creating forms, and adding them to your content.
If you get stuck, chat with me on the #cms IRC channel, post to the forum, send me email, or, if you're
really desperate, read the rest of this page.</P>

<h3>How Do I Create a Form</h3>
<p>In the CMS Admin Menu, you should get a new menu item called FeedbackForm. Click on this. On the page
that gets shown, there are options (at the bottom of the list of Forms) to Add a New Form or Modify
Configuration.</p>

<h3>Adding a Form to a Page</h3>
<p>In the main FeedbackForm admin page, you can see an example of the tag used to display each form. It looks
something like {cms_module module=\"FeedbackForm\" form=\"feedback_form_example\"}</p>
<p>By copying this tag into the content of a page, or into a template, will cause that form to be displayed.
In theory, you can have multiple forms on a page if you really want to. Be careful when pasting the tag
into a page's content if you use a WYSIWYG editor such as TinyMCE or HTMLArea. These editors may stealthily
change the quote marks (\") into HTML entities (&amp;quot;), and the forms will not show up. Try using
single quotes (') or editing the HTML directly.

<h3>Adding Fields to a Form</h3>
<p>By clicking on a Form's name, you enter the Form Edit page. You will see a number of options for the form
(like what you want the text of the submit button to say, what message should be displayed to the user when
they submit the form, etc). There is also a list of fields that make up the form. The types of fields that
are currently supported fit into four groups: standard input fields, display control fields, email-only input
fields, and form result handling fields (also
called Form Dispositions in places):</p>
<ul>
<li>Standard Input Fields - these are inputs that allow entry of typical form elements.</li>
<li>Display Control Fields - these input control how the user will see the display of the form.</li>
<li>Email-only Input Fields - these are inputs that allow entry of typical form elements, but apply only
for form dispositions that send the results via email.</li>
<li>Special Purpose Fields - these inputs are used for interfacing programmatically with other modules.</li>
<li>Form Dispositions - These determine what happens when the user
submits the form; for each result handling field, some method of transmitting, saving, or emailing the
form contents takes place. A form may have multiple form dispositions.</li>
</ul>
<p>Form fields are assigned names. These names identify the field, not only on the screen as labels for the user,
but in the data when it's submitted so you know what the user is responding to. Phrasing the name like a question
is a handy way of making it clear to the user what is expected. Similarly, some fields have both Names and Values.
The Names are what gets shown to the user; the Value is what gets saved or transmitted when the user submits
the form. The Values are never seen by the user, nor are they visible in the HTML, so it's safe to use for
email addresses and such.</p>
<p>Some fields can have multiple values, or multiple name/value pairs. When you first create such a field,
there may not be sufficient inputs for you to specify all the values you want. To get more space for inputting
these values, simply save the field, and then click on its name to edit it again. Every time you edit such a
field, you will receive more inputs.</p>
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
<li>Checkbox. This is a standard check box. If you turn on validation, you can require that the user checks
the box. This is useful for forms where the user is obligated to agree to something in order to submit
the form.</li>
<li>Checkbox Group. This is a collection of checkboxes. The only difference between this input and a
collection of Checkbox inputs is that they are presented as a group, with one name, and can have a validation
function requiring that you check one or more of the boxes in the group.</li>
<li>Radio Group. This is a collection of radio buttons. Only one of the group may be selected by the user.</li>
<li>Pulldown. This is a standard pulldown menu. It's really conceptually the same thing as a radio button
group, but is better when there are a large number of options.</li>
<li>State. This is a pulldown listing the States of the U.S.</li>
<li>Countries. This is a pulldown listing the Countries of the world (as of July 2005).</li>
<li>Date Picker. This is a triple pulldown allowing the user to select a date.</li>
</ul></li>

<li>Email-only Inputs
<ul><li>File Upload. This allows a user to upload a file, which will be included as an attachment to any email
disposition. File uploads do not currently work with the Flat File disposition method.</li>
<li>Email From Field. This allows users to provide their name and email address. The email generated when the
form gets handled will use this name and address in the \"From\" field.</li>
</ul></li>

<li>Display Control Fields<ul>
<li>Page Break. This allows you to split your feedback form into multiple pages. Each page is
independently validated. This is good for applications like online surveys.</li></ul></li>

<li>Special Purpose Fields<ul>
<li>Function Callback \"Input\". This allows programmers to access information from other modules (such as getting user name data from a user authentication module).</li></ul></li>

<li>Form Handling Inputs (Dispositions)
<ul><li>Email Results Based on Pulldown. This is useful for web sites where comments get routed based on
their subject matter, e.g., bugs get sent to one person, marketing questions to another person, sales requests
to someone else, etc. The pulldown is populated with the subjects, and each gets directed to a specific email
address. You set up these mappings in the when you create or edit a field of this type. If you use one of
these \"Director\" pulldowns, the user must make a selection in order to submit the
form. This input is part of the form the user sees, although the email addresses are not made visible nor
are they embedded in the HTML.</li>
<li>Email Results to set Address(es). This simply sends the form results to one or more email addresses that
you enter when you create or edit this type of field. This field and its name are not visible in the
form that the user sees. The email addresses are not made visible nor
are they embedded in the HTML.</li>
<li>Email Results to User-Selected Site User. This input is our first end-user suggestion! It creates a 
pulldown of usernames in the form. The usernames are other users who are registered with the site.
When the form is submitted, the data is sent to the user whose name was selected. When you create
a field of this type, you may select specific groups from which the userlist is created. This input is
part of the form the user sees, although the email addresses are not made visible nor are they embedded
in the HTML.</li>
<li>Write Results to Flat File. This takes the form results and writes them into a text file. You may
select the name of the file, and its format. You can choose from \"page\" format, which looks like the
emails that get sent by the other handlers, or you can choose a tab-delimited format useful for reading
into Excel or similar programs. If you choose tab-delimited, you can opt to have the file start with
a header row, which names the columns. These files are written to the \"output\" directory under the
module's installation directory.
</ul></li></li></ul>

<h3>Known Issues</h3>
<ul>
<li>File Upload Inputs may be used on multi-page feedback forms, <strong>but they must be on the last page</strong> of
the form.</li>
<li>File Upload \"maximum size\" cannot be larger than the value set in your php.ini file. This is not a bug -- this is a feature.</li>
<li>File Upload \"maximum size\" uses units called \"kilobytes\" that are 1000 bytes, not 1024 bytes.</li>
<li>File Uploads do not currently work with the Flat File disposition method.</li>
<li>File Uploads could allow users to submit offensive, obscene, or illegal material. It could also be used to transmit
dangerous files such as trojan-horses, viruses, or other security threats. Use File Uploads with caution and common sense.</li>
</ul>

<h3>Troubleshooting</h3>
<ol><li> First step is to check you're running CMS 0.10.x or later.</li>
<li> Second step is to read and understand the caveat about WYSIWYG editors up in the
section <em>Adding a Form to a Page</em>.</li>
<li> Just mess around and try clicking on links and icons and stuff. See what happens.</li>
<li> Last resport is to email me or catch me on IRC and we can go from there.</li>
</ol> 
<p>This may no longer be such an early version, but it is probably still buggy. While I've done all I can
to make sure no egregious bugs have crept in, I have to admit that during testing, this program
revealed seven cockroaches, two earwigs, a small family of aphids, and a walking-stick insect. It also
ate the neighbor's nasty little yap dog, for which I was inappropriately grateful.</p>
<p>The final release will include bug fixes, documentation, and unconditional love.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit SjG's
module homepage at <a href=\"http://www.cmsmodules.com\">CMSModules.com</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=\"http://forum.cmsmadesimple.org\">CMS Made Simple Forums</a>.</li>
<li>The author, SjG, can often be found in the <a href=\"irc://irc.freenode.net/#cms\">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href=\"mailto:sjg@cmsmodules.com\">&lt;sjg@cmsmodules.com&gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=\"http://www.gnu.org/licenses/licenses.html#GPL\">GNU Public License</a>. You must agree to this license before using the module.</p>
		
";

$lang['changelog'] = 		"
		    <ul>
		    <li>Version 0.9 -  2 October 2005. Migrated to proper Module API (lang, smarty templates, etc.).
            <li>Version 0.8 - 31 July 2005. Bug fixes, added Date and Callback Function input types.</li>
            <li>Version 0.7.3 - 21 July 2005. Bug fixes, added State and Country input types.</li>
            <li>Version 0.7.2 - 18 July 2005. Validation bug fixes, fixed PHPMailer localization.</li>
            <li>Version 0.7.1 - 1 June 2005. Minor bug fixes.</li>
            <li>Version 0.7 - 24 May 2005. More and better support for CSS and pure CSS layouts.
            Support for multi-page forms.
            Many new form options. New field types: file upload, email \"from\" address. Improved
            error handling. Email disposal types now templated.</li>
			<li>Version 0.6 - 16 Apr 2005. Updated for new Admin, simplified permissions.</li>
		    <li>Version 0.5 - 4 Mar 2005. Minor bug fixes for deleting forms/fields.</li>
		    <li>Version 0.4 - 2 Mar 2005. Localization and numerous bug fixes.</li>
		    <li>Version 0.3 - 28 Feb 2005. Primitive localization and bug fixes.</li>
		    <li>Version 0.2 - 24 Feb 2005. Converted to use Objects. Many improvements and bug fixes.</li>
			<li>Version 0.1 - 11 Feb 2005. Initial Release</li></ul>
		";


?>
