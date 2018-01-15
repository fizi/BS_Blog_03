<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * List Template
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/list_new/list_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 *
*/

/**
 *	Templates for list_new plugin 
 *
 *	@package e107_plugins
 *	@subpackage list_new
 */

if (!defined('e107_INIT')) { exit; }

global $sc_style, $list_shortcodes;

$sc_style['LIST_DATE']['pre'] = "";
$sc_style['LIST_DATE']['post'] = " ";

$sc_style['LIST_ICON']['pre'] = "";
$sc_style['LIST_ICON']['post'] = " ";

$sc_style['LIST_HEADING']['pre'] = "";
$sc_style['LIST_HEADING']['post'] = " ";

$sc_style['LIST_AUTHOR']['pre'] = LIST_MENU_2.": ";
$sc_style['LIST_AUTHOR']['post'] = " ";

$sc_style['LIST_CATEGORY']['pre'] = LIST_MENU_4.": ";
$sc_style['LIST_CATEGORY']['post'] = " ";

$sc_style['LIST_INFO']['pre'] = "";
$sc_style['LIST_INFO']['post'] = " ";

//LIST_MENU_NEW TEMPLATE -------------------------------------------------------------------------
$TEMPLATE_LIST_NEW['MENU_NEW_START'] = "
<div class='fcaption' style='cursor:pointer;' onclick='expandit(this);'>{LIST_CAPTION}</div>
<div class='forumheader3' style='margin-bottom:5px; display:{LIST_DISPLAYSTYLE};'>";

$TEMPLATE_LIST_NEW['MENU_NEW'] = "
  <div class='list-new-item' style='padding: 5px;'>
    <i class='fa fa-plus-square-o'></i>{LIST_ICON} {LIST_DATE} {LIST_HEADING} {LIST_AUTHOR} {LIST_CATEGORY}
  </div>";
$TEMPLATE_LIST_NEW['MENU_NEW_END'] = "
</div>";

//LIST_MENU_RECENT TEMPLATE -------------------------------------------------------------------------
$TEMPLATE_LIST_NEW['MENU_RECENT_START'] = "
<div class='{LIST_CSS_ID} fcaption' style='cursor:pointer;' onclick='expandit(this);'>{LIST_CAPTION}</div>
<div class='{LIST_CSS_ID} forumheader3' style='margin-bottom:5px; display:{LIST_DISPLAYSTYLE};'>";

$TEMPLATE_LIST_NEW['MENU_RECENT'] = "
  <div class='list-new-item' style='padding: 5px;'>
    <i class='fa-plus-square-o'></i>{LIST_ICON} {LIST_DATE} {LIST_HEADING} {LIST_AUTHOR} {LIST_CATEGORY}
  </div>";
$TEMPLATE_LIST_NEW['MENU_RECENT_END'] = "
</div>";



// Modified by FIZI ---------------------------------------------------------------------
//PAGE TEMPLATE -------------------------------------------------------------------------
$TEMPLATE_LIST_NEW['PAGE_RECENT_START'] = "
<div class='panel-heading'>
  <h4 class='panel-title'><a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#{LIST_CAPTION}'>{LIST_CAPTION}</a></h4>
</div>
<div id='{LIST_CAPTION}' class='panel-collapse collapse in'>
  <div class='panel-body'>
";

$TEMPLATE_LIST_NEW['PAGE_RECENT'] = "
  <div class='list-new-item' style='padding: 5px;'>
    <small>{GLYPH=fa-caret-right}&nbsp;&nbsp;{LIST_ICON} {LIST_DATE} {LIST_HEADING} {LIST_AUTHOR} {LIST_CATEGORY} {LIST_INFO}</small>
  </div>";
$TEMPLATE_LIST_NEW['PAGE_RECENT_END'] = "
  </div>
</div>";


//NEW TEMPLATE -------------------------------------------------------------------------
$TEMPLATE_LIST_NEW['PAGE_NEW_START'] = "
<div class='panel-heading'>
  <h4 class='panel-title'><a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#{LIST_CAPTION}'>{LIST_CAPTION}</a></h4>
</div>
<div id='{LIST_CAPTION}' class='panel-collapse collapse in'>
  <div class='panel-body'>
";

$TEMPLATE_LIST_NEW['PAGE_NEW'] = "
  <div class='list-new-item' style='padding: 5px;'>
    <small>{GLYPH=fa-caret-right}&nbsp;&nbsp;{LIST_ICON} {LIST_DATE} {LIST_HEADING} {LIST_AUTHOR} {LIST_CATEGORY} {LIST_INFO}</small>
  </div>";
$TEMPLATE_LIST_NEW['PAGE_NEW_END'] = "
  </div>
</div>";

//MULTI COLOMNS LAYOUT MASTER -----------------------------------------------------------
$TEMPLATE_LIST_NEW['COL_START'] = "
<div id='list-new' class='list-new'>
  <h5 class='welcome-text'>{LIST_COL_WELCOMETEXT}</h5>
  <div class='text-right'> 
    <button class='btn btn-default openall'>open all</button> 
    <button class='btn btn-default closeall'>close all</button>
  </div>
  <div class='row'>
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      <div class='panel-group' id='accordion'>";
    
$TEMPLATE_LIST_NEW['COL_WELCOME'] = "";
      
$TEMPLATE_LIST_NEW['COL_ROWSWITCH'] = "";
    
$TEMPLATE_LIST_NEW['COL_CELL_START'] = "
        <div class='panel panel-default'>";
      
$TEMPLATE_LIST_NEW['COL_CELL_END'] = "
        </div>";
      
$TEMPLATE_LIST_NEW['COL_END'] = "
      </div>
    </div>      
  </div>
</div>";

// End by FIZI ---------------------------------------------------------------

//TIMELAPSE SELECT -----------------------------------------------------------
$TEMPLATE_LIST_NEW['TIMELAPSE_TABLE'] = "<div class='forumheader3' style='margin-bottom:20px;'>{LIST_TIMELAPSE}</div>";



//##### ADMIN
$TEMPLATE_LIST_NEW['ADMIN_MESSAGE'] = "
<div style='text-align:center'><b>{MESSAGE}</b></div>";

$TEMPLATE_LIST_NEW['ADMIN_START'] = "
<div>
  <form action='".e_SELF."' method='post' name='menu_conf_form' id='menu_conf_form' class='admin-menu' enctype='multipart/form-data'>";

$TEMPLATE_LIST_NEW['ADMIN_END'] = "
  </form>
</div>";

//define some variables
//$stylespacer = "style='border:0; height:20px;'";

//template for non expanding row
$TEMPLATE_LIST_NEW['TOPIC_ROW_NOEXPAND'] = "
  <tr>
	  <td class='forumheader3' style='width:20%; white-space:nowrap; vertical-align:top;'>{TOPIC}</td>
	  <td class='forumheader3'>{FIELD}</td>
  </tr>";

//template for expanding row
$TEMPLATE_LIST_NEW['TOPIC_ROW'] = "
  <tr>
	  <td class='forumheader3' style='width:20%; white-space:nowrap; vertical-align:top;'>{TOPIC}</td>
	  <td class='forumheader3'>
		  <a href='#{CONTID}' class='e-pointer e-expandit'>{HEADING}</a>
		  <div class='e-hideme' id='{CONTID}'>
			  <div class='smalltext'>{HELP}</div><br />
			  {FIELD}
		  </div>
	  </td>
  </tr>";

//field containing a table
$TEMPLATE_LIST_NEW['FIELD_TABLE_START'] = "
<table class='table adminlist'>";

$TEMPLATE_LIST_NEW['FIELD_TABLE'] = "
  <tr>
	  <td style='width:10%; white-space:nowrap; vertical-align:top;'>{FIELD_TITLE}</td>
	  <td>{FIELD_ITEM}</td>
  </tr>";

$TEMPLATE_LIST_NEW['FIELD_TABLE_END'] = "
</table>";

//header for options page
$TEMPLATE_LIST_NEW['OPTIONS_HEADER'] = "
<div id='{ID}' class='e-hideme'>
  <table class='table adminlist'>
    <tr>
      <td colspan='4' class='forumheader'><h4>{TITLE}</h4></td>
    </tr>";

//template for spacer row
$TEMPLATE_LIST_NEW['TOPIC_ROW_SPACER'] = "
    <tr>
      <td style='border:0; height:20px;' colspan='2'></td>
    </tr>";

$TEMPLATE_LIST_NEW['TOPIC_TABLE_START'] = "
<div style='text-align:center;'>
  <form method='post' action='".e_SELF."' name='menu_conf_form' id='menu_conf_form' enctype='multipart/form-data'>
  <table class='table adminlist'>";

$TEMPLATE_LIST_NEW['TOPIC_TABLE_END'] = "
    {SUBMIT}
  </table>
</div>";

?>