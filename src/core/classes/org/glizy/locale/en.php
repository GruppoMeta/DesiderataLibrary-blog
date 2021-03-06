<?php
/**
 * This file is part of the GLIZY framework.
 * Copyright (c) 2005-2012 Daniele Ugoletti <daniele.ugoletti@glizy.com>
 *
 * For the full copyright and license information, please view the COPYRIGHT.txt
 * file that was distributed with this source code.
 */

$strings = array (
	'GLZ_DATE_FORMAT' 			=>	"Y-m-d",
	'GLZ_DATETIME_FORMAT' 		=>	"Y-m-d h:i:s A",
	'GLZ_DATE_TOISO_REGEXP' 		=>	array("|^(\d{4})-(\d{1,2})-(\d{1,2})$|", "$1-$2-$3"),
	'GLZ_DATE_TOTIME_REGEXP' 		=>	array("|^(\d{4})-(\d{1,2})-(\d{1,2})$|", "$1-$2-$3 00:00:00"),
	'GLZ_DATETIME_TOTIME_REGEXP' 	=>	array("|^(\d{4})-(\d{1,2})-(\d{1,2})\s*(\d{1,2}):(\d{1,2}):(\d{1,2})$|", "$1-$2-$3 $4:$5:$6"),
	'GLZ_TIME_TO_DATE_REGEXP' 		=>	array("|^(\d{4})-(\d{1,2})-(\d{1,2})$|", "$1-$2-$3 00:00:00"),
	'GLZ_TIME_TO_DATETIME_REGEXP' 	=>	array("|^(\d{4})-(\d{1,2})-(\d{1,2})\s*(\d{1,2}):(\d{1,2}):(\d{1,2})$|", "$1-$2-$3 $4:$5:$6"),
	"GLZ_MONTHS" 					=>	array( "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ),
	"GLZ_WARNING" => "Warning",
	"GLZ_ERROR" => "Error",
	"GLZ_NEW_PAGE" => "New page",
	"GLZ_CREATINING_NEW_PAGE" => "Create new page",
	"GLZ_INSERT_NEW_PAGE" => "Insert new page",
	"GLZ_PAGE_TITLE" => "Title",
	"GLZ_PAGE_TITLE_LINK" => "Page title for navigation bar",
	"GLZ_PAGE_TITLE_ALT" => "Alt text for navigation bar",
	"GLZ_PAGE_SELECT" => "Select page",
	"GLZ_PAGE_SELECT_PARENT" => "Select parent page",
	"GLZ_PAGE_SELECT_TYPE" => "Select page type",
	"GLZ_PAGE_PAGEID" => "Page ID",
	"GLZ_PAGE_LINKED_URL" => "Connected URL",
	"GLZ_PAGE_KEYWORDS" => "Keywords",
	"GLZ_PAGE_DESCRIPTION" => "Short description",
	"GLZ_CONFIRM" => "Confirm",
	"GLZ_CANCEL" => "Cancel",
	"GLZ_UPLOAD" => "Upload",
	"GLZ_RESET" => "Reset form",
	"GLZ_PREVIEW" => "Page view",
	"GLZ_SEARCH" => "Search",
	"GLZ_NEW_SEARCH" => "New search",
	"GLZ_PUBLISHED" => "Published, click-on for change",
	"GLZ_UNPUBLISHED" => "Unpublished, click-on for change",
	"GLZ_SEARCH_FILTERS" => "Search filters",
	"GLZ_SEARCH_MEDIA" => "",
	"GLZ_SITEMAP_TITLE" => "Site structure",
	"GLZ_SITEMAP_MSG_DELETE" => "Do you really want to cancel the page?",
	"GLZ_SITEMAP_NEW" => "Add a new page at lower level",
	"GLZ_SITEMAP_UP" => "Move the page up",
	"GLZ_SITEMAP_DOWN" => "Move the page down",
	"GLZ_SITEMAP_EDIT" => "Edit the page contents",
	"GLZ_SITEMAP_EDITDRAFT" => "Edit the page draft",
	"GLZ_SITEMAP_DELETE" => "Delete the page and its sub-pages",
	"GLZ_SITEMAP_PUBLISH" => "Publish the page",
	"GLZ_SITEMAP_VISIBLE" => "It makes the page invisible",
	"GLZ_SITEMAP_INVISIBLE" => "It makes the page visible",
	"GLZ_SITEMAP_PREVIEW" => "Page view",
	"GLZ_SITEMAP_LOCK" => "Edit the page status: protected/not protected",
	"GLZ_MODIFY_PAGE_CONTENT" => "Edit the page content",
	"GLZ_MODIFY_PAGE_DETAILS" => "Edit page details",
	"GLZ_RECORD_ADD_BEFORE" => "Add a record before",
	"GLZ_RECORD_ADD" => "Add ",
	"GLZ_RECORD_MOVE_UP" => "Move up",
	"GLZ_RECORD_MOVE_DOWN" => "Move down",
	"GLZ_RECORD_DELETE" => "Delete",
	"GLZ_RECORD_DELETE_VERSION" => "Delete version",
	"GLZ_RECORD_EDIT" => "Edit ",
	"GLZ_RECORD_PUBLISH" => "Publish",
	"GLZ_RECORD_PREVIEW" => "Preview ",
	"GLZ_RECORD_MSG_DELETE" => "Are you sure to delete the selected record?",
	"GLZ_RECORDS_MSG_DELETE" => "Are you sure to delete the selected records?",
	"GLZ_RECORD_NEW_TITLE" => "Insert record in '%s'",
	"GLZ_RECORD_EDIT_TITLE" => "Edit record in '%s'",
	"GLZ_RECORD_EDITDEF_TITLE" => "Edit record",
	"GLZ_SAVE" => "Save",
	"GLZ_SAVE_DRAFT" => "Save draft",
	"GLZ_SAVE_DRAFT_CLOSE" => "Save as draft and close",
	"GLZ_SAVE_CLOSE" => "Save and close",
	"GLZ_CLOSE" => 'Close',
	"GLZ_PAGE_SUBTITLE" => "Subtitle",
	"GLZ_JUMP_TO" => "Jump to page:",
	"GLZ_CLOSE_PICKER" => "Close",
	"GLZ_ADD_MEDIA" => "Add media",
	"GLZ_PAGE_NUM" => "Page",
	"GLZ_MEDIAM_IMAGELIST" => "Available images",
	"GLZ_MEDIAM_MEDIALIST" => "Available media",
	"GLZ_MEDIAM_EDIT" => "Edit media",
	"GLZ_MEDIAM_PREVIEW" => "Preview",
	"GLZ_MEDIAM_TITLE" => "Title",
	"GLZ_MEDIAM_SHORTTITLE" => "Short title",
	"GLZ_MEDIAM_NULL" => "Null",
	"GLZ_MEDIAM_CHOICE" => "Select media",
	"GLZ_MEDIAM_NO_IMG" => "No image selected, please click on to select one.",
	"GLZ_MEDIAM_CURRENT_IMG" => "Current image:",
	"GLZ_MEDIAM_IMG_CHANGED" => "Changed image",
	"GLZ_MEDIAM_CUSTOM_PATH" => "Upload path",
	"GLZ_MEDIAM_FILE_TYPE" => "File type",
	"GLZ_MEDIAM_SELECT_FILE" => "Select file",
	"GLZ_MEDIAM_UPLOAD_GENERIC_TITLE" => "Media upload",
	"GLZ_MEDIAM_UPLOAD_TITLE" => "File Upload:",
	"GLZ_MEDIAM_UPLOAD_DONE" => "Upload done",
	"GLZ_MEDIAM_DELETE_DONE" => "File deleted",
	"GLZ_MEDIAM_NO_FILE" => "No file selected, please click on to select.",
	"GLZ_MEDIAM_EDITING" => "Edit media details",
	"GLZ_MEDIAM_MSG_DELETE" => "Are you sure to delete the selected media?",
	"GLZ_MEDIAM_ERR_NO_FILE" => "No file selected",
	"GLZ_MEDIAM_ERR_INI_SIZE" => "File too big",
	"GLZ_MEDIAM_ERR_PARTIAL" => "Upload error",
	"GLZ_MEDIAM_ERR_FORM_SIZE" => "File too big",
	"GLZ_MEDIAM_ERR_CREATE_DIR" => "Error during directory creation: '%s'",
	"GLZ_MEDIAM_ERR_COPYING" => "Error during file copyng, perhaps disk full.",
	"GLZ_MEDIAM_ERR_IMAGE_SIZE" => "Error: image size exceeds the granted maximum dimensions (%s)",
	"GLZ_MEDIAM_ERR_NOGDLOADED" => "PHP gd libraries plugin not enabled",
	"GLZ_MEDIA_TITLE" => "Title",
	"GLZ_MEDIA_FILENAME" => "File name",
	"GLZ_MEDIA_CATEGORY" => "Category",
	"GLZ_MEDIA_SIZE" => "Dimension",
	"GLZ_ADD_NEW_RECORD" => "Add a new record",
	"GLZ_SAVE_REVISION" => "Save as new revision",
	"GLZ_MODIFY_LIST" => "List of changes to be approved",
	"GLZ_CHANGE_LANGUAGE" => "Change language",
	"GLZ_PAGE_CONTENT" => "Page content",
	"GLZ_PAGE_PROP" => "Page property",
	"GLZ_MODIFY1" => "Edit the published version",
	"GLZ_MODIFY2" => "Edit the last revision",
	"GLZ_LAST_REVSION" => "Last revision",
	"GLZ_LOGIN_ERROR" => "User and/or password unknown. Try again",
	"GLZ_LOGIN_NOACCESS" => "Access not allowed, login is requested",
	"LOGGER_INSUFFICIENT_GROUP_LEVEL" => "The page requires higher access level.",
	"LOGGER_INSUFFICIENT_USER_LEVEL" => "Page not available with current access. Please contact the system administrator",
	"GLZ_LOGIN_DISABLED" => "Your account has been disabled. Please contact the system administrator. ",
	"GLZ_LANGUAGE_LIST" => "Languages list",
	"GLZ_LANGUAGE_EDIT" => "Edit language",
	"GLZ_LANGUAGE" => "Language",
	"GLZ_LANGUAGE_CODE" => "Code",
	"GLZ_LANGUAGE_DEFAULT" => "Default language",
	"GLZ_LANGUAGE_ORDER" => "Order",
	"GLZ_LABEL" => "Label",
	"GLZ_EDIT_LANGUAGE" => "Edit language",
	"GLZ_SEARCH_LABEL" => "Word to search:",
	"GLZ_SEARCH_BUTTON" => "Go",
	"GLZ_SEARCH_COMMENT" => "Please insert more than 3 characters",
	"GLZ_SEARCH_RESULT" => "Search result",
	"GLZ_SEARCH_RESULT_TOTAL" => "Pages found:",
	"LOGGED_MESSAGE" => "Welcome %s",
	"GLZ_ERR_EMPTY_APP_PATH" => "The application path can't be empty",
	"GLZ_ERR_NO_PAGETYPE_FOLDER" => "Can't open pageType application folder.",
	"GLZ_ERR_404" => "Page not found",
	"GLZ_USER_LIST_TITLE" => "User list",
	"GLZ_USER_EDIT_TITLE" => "Edit user",
	"GLZ_USER_EDIT" => "Edit user",
	"GLZ_USER_FIRST" => "First name",
	"GLZ_USER_LAST" => "Last name",
	"GLZ_USER_EMAIL" => "Email",
	"GLZ_USER_ACTIVE" => "Active",
	"GLZ_USER_IS_ACTIVE" => "Active user",
	"GLZ_USER_LOGINID" => "User name",
	"GLZ_USER_PASSWORD" => "Password",
	"GLZ_USER_GROUP" => "Group",
	"GLZ_USER_ADD_NEW_RECORD" => "Add a new user",
	"GLZ_USERGROUP_ADD_NEW_RECORD" => "Add a new group",
	"GLZ_LOGIN_REMEMBER" => "Remember login",
	"GLZ_ENABLED" => "Enabled",
	"GLZ_ENABLE" => "Enable",
	"GLZ_DISABLED" => "Disabled",
	"GLZ_DISABLE" => "Disable",
	"GLZ_USERGROUP_LIST_TITLE" => "Group list",
	"GLZ_USERGROUP_EDIT_TITLE" => "Edit group",
	"GLZ_USERGROUP_EDIT" => "Edit group",
	"GLZ_USERGROUP_NAME" => "Group name",
	"GLZ_USERGROUP_INTERNAL" => "Internal users",
	"GLZ_MODULE_SHOW_TITLE" => "",
	"GLZ_MODULE_LINKED" => "Form to be linked",
	"GLZ_TOTAL_RECORDS" => "Record total",
	"GLZ_PROTECTED_PAGE" => "Reserved page",
	"GLZ_LINKED_URL" => "Linked URL",
	"GLZ_CREATION_DATE" => "Creation Date",
	"GLZ_DOWNLOAD_FILE" => "Download file",
	"GLZ_DOWNLOAD_FILE_LINK" => "Download file: #title#, #size#",
	"GLZ_ADDMEDIA" => "Add media",
	"GLZ_NOIMAGE" => "No image",
	"GLZ_NOMEDIA" => "No media",
	"GLZ_URL_LINK" => "URL Link",
	"GLZ_PRINT_PDF" => "Print PDF",
	"GLZ_ENABLE_PAGE_COMMENTS" => "Enable comments",
	"GLZ_MESSAGE_DELETE_SUCCESS" => "Record deleted",
	"GLZ_PREVIOUS" => "previous",
  	"GLZ_NEXT" => "next",
  	"GLZ_COLSE"=> "close",
  	"GLZ_SLIDESHOW_START" => "slideshow start",
  	"GLZ_SLIDESHOW_STOP" => "slideshow stop",
);
org_glizy_locale_Locale::append($strings);