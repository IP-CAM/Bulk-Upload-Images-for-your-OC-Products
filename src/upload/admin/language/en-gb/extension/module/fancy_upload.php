<?php
// Heading
$_['heading_title']             = 'Fancy upload';

$_['text_edit']                 = 'Edit settings';
$_['text_extension']            = 'Extensions';
$_['button_save']               = 'Save';
$_['button_cancel']             = 'Cancel';

$_['tab_upload']                = 'Upload';
$_['tab_interface']             = 'Interface';

$_['entry_path']                = 'Images upload path';
$_['entry_path_help']           = 'You can create static and/or dynamic path using shortcodes. Dynamic path can be unique for each product';

$_['text_show_description']     = 'Show description';
$_['entry_path_description']    = "
<h4><b>Examples</b></h4>
<ul>
<li>products/[product_name]-[product_id] = <b>products/mac-book-pro-28</b></li>
<li>products/[manufacturer_name]/[product_name] = <b>products/apple/mac-book-pro</b></li>
<li>products/[manufacturer_id]/[product_name] = <b>products/2/mac-book-pro</b></li>
<li>products/[category_name]/[product_name] = <b>products/laptops/mac/mac-book-pro</b></li>
<li>products/[category_id]/[product_id] = <b>products/21/26/28</b></li>
</ul>
<hr>
<h4><b>Available shortcodes</b></h4>
<div class='col-sm-6'>
<p>Product - [product_*]</p>
<ul>
    <li>[product_id]</li>
    <li>[product_name]</li>
    <li>[product_model]</li>
    <li>[product_sku]</li>
    <li>[product_upc]</li>
    <li>[product_ean]</li>
    <li>[product_jan]</li>
    <li>[product_isbn]</li>
    <li>[product_mpn]</li>
    <li>[product_location]</li>
    <li>[product_image]</li>
    <li>[product_length]</li>
    <li>[product_width]</li>
    <li>[product_height]</li>
    <li>[product_tag]</li>
    <li>[product_meta_title]</li>
    <li>[product_meta_h1]</li>
    <li>[product_meta_keyword]</li>
    <li>[product_keyword]</li>
</ul>
</div>
<div class='col-sm-6'>
<p>Manufacturer - [manufacturer_*]</p>
<ul>
    <li>[manufacturer_id]</li>
    <li>[manufacturer_name]</li>
    <li>[manufacturer_meta_title]</li>
    <li>[manufacturer_meta_h1]</li>
    <li>[manufacturer_meta_keyword]</li>
</ul>
<p>Categories - [category_*]</p>
<ul>
    <li>[category_id]</li>
    <li>[category_name]</li>
    <li>[category_image]</li>
    <li>[category_parent_id]</li>
    <li>[category_meta_title]</li>
    <li>[category_meta_h1]</li>
    <li>[category_meta_keyword]</li>
    <li>[category_path]</li>
    <li>[category_keyword]</li>
</ul>
If the main category is assigned to the product (this is in some builds of Opencart), then it will be selected. If no main category is assigned, then the longest path will be chosen. For example, a product is in two categories. \"Laptops\" and \"Laptops>Macs\", \"Laptops>Macs\" will be selected.
</div>
<div class=\"col-sm-12\">
<hr>
<h4><b>Sanitize file names and shortcode value rules</b></h4>
<p>All chars used in file names and paths will be automatically removed or replaced using rules below. For example, \"Apple Cinema '30\" = \"apple-cinema-30\"</p>
<ul>
<li>File system reserved <a href=\"https://en.wikipedia.org/wiki/Filename#Reserved_characters_and_words\">https://en.wikipedia.org/wiki/Filename#Reserved_characters_and_words</a></li>
<li>Control characters <a href=\"\">http://msdn.microsoft.com/en-us/library/windows/desktop/aa365247%28v=vs.85%29.aspx</a></li>
<li>Non-printing characters DEL, NO-BREAK SPACE, SOFT HYPHEN</li>
<li>URI reserved <a href=\"https://www.rfc-editor.org/rfc/rfc3986#section-2.2\">https://www.rfc-editor.org/rfc/rfc3986#section-2.2</a></li>
<li>URL unsafe characters <a href=\"https://www.ietf.org/rfc/rfc1738.txt\">https://www.ietf.org/rfc/rfc1738.txt</a></li>
<li>All cyrilic chars will be transliterated into latin</li>
<li>All spaces will be replaced by - char</li>
</ul>
</div>
";

$_['entry_exec']                = 'Exec command after upload';
$_['entry_exec_help']           = 'Used shell_exec command. Use ${image} for absolute image path. Left empty if not used.';

$_['entry_change_image_size']   = 'Change original image size after upload';
$_['entry_change_image_size_help'] = 'This is an optional item for those who upload large original photos, but want to reduce them to save space. This option increases image loading time.';
$_['entry_image_size']          = 'Original image size';

$_['text_height']               = 'Height';
$_['text_width']                = 'Width';

$_['entry_disable_confirm']     = 'Disable confirm dialogs';
$_['text_current_values']       = 'Current values of php.ini';

// Modal
$_['button_save']               = 'Save';
$_['button_apply']              = 'Apply';
$_['button_close']              = 'Close';
// Grid
$_['button_select_all']         = 'Select all';
$_['button_unselect_all']       = 'Unselect all';
$_['button_delete']             = 'Delete';
$_['button_remove']             = 'Remove';
$_['button_rotate_left']        = 'Rotate left';
$_['button_rotate_right']       = 'Rotate right';
$_['button_reload']             = 'Reload';
$_['button_move']               = 'Move external files';
$_['button_upload']             = 'Upload';
$_['button_settings']           = 'Settings';

// Messages
$_['text_success']              = 'Settings successfully changed!';
$_['text_success_set']          = 'Images updated successfully!';
$_['text_success_deleted']      = 'Image successfully deleted!';
$_['text_success_moved']        = 'Image successfully moved!';

$_['text_uploading_files']      = 'Uploading files $%';
$_['text_uploaded']             = 'Uploading complete. Awaiting response.';
$_['text_upload_message_d']     = 'Uploaded $ files of $ into $';
$_['text_upload_message']       = 'Uploaded $ files of $';
$_['text_moved_message_d']      = 'Moved $ of $ files into $';
$_['text_moved_message']        = 'Moved $ of $ files';
$_['text_saving']               = 'Saving...';
$_['text_upload_errors']        = 'Some errors occured';
$_['text_confirm_relocate']     = 'Be careful with this feature. This feature moves all images to a new folder. If one image is associated with several products, then after moving it will not be available for other products. Are you sure you want to do this?';

$_['error_empty_images']        = 'Images is empty';
$_['error_permission']          = 'Warning: Permission Denied!';
$_['error_exists']              = 'Warning: A file or directory with the same name already exists!';
$_['error_filesize']            = 'Warning: Incorrect file size!';
$_['error_filetype']            = 'Warning: Incorrect file type!';
$_['error_upload']              = 'Warning: File could not be uploaded for an unknown reason!';
