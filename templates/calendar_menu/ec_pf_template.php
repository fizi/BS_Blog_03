<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *	Event calendar - template file for list generator
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/calendar_menu/ec_pf_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

/**
 *	e107 Event calendar plugin
 *
 *	Event calendar - template file for list generator
 *
 *	@package	e107_plugins
 *	@subpackage	event_calendar
 *	@version 	$Id$;
 */

/*
  Templates file for the event calendar listings (display/print/pdf).
  There can be more than one template defined, in which case they are selectable.
  There are four strings to define:
$EVENT_CAL_PDF_NAMES[] - a 'user-friendly' name/description (shown in selection box)
$EVENT_CAL_PDF_HEADER[] - the template for the header - displayed once at the top pf the list
$EVENT_CAL_PDF_BODY[]	- template for each individual entry
$EVENT_CAL_PDF_FOOTER[]	- template for a footer (to close off the list)

The array index defines the name of the template - if there is an entry in the $EVENT_CAL_PDF_NAMES[]
array, there must be a corresponding entry in each of the other three arrays.

There are two ways of managing the styling of the various shortcodes:
	a) The $sc_style array works in the usual way, and should be used where the styling is the same 
	for all templates, or where you can set a 'default' styling which applies to most uses of the shortcode
	b) An $ec_template_styles array sets styles for an individual template. This need only contain the
	styles which override a default $sc_style entry.
*/

if (!defined('e107_INIT')) { exit; }
if (!defined('USER_WIDTH')){ define('USER_WIDTH','width:auto'); } 

// - Default Caption
$EVENT_CAL_PDF_DEFAULT_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>'.EC_LAN_80.'</h2></div>
</div>
';  

// - Caption for Main PDF page
$EVENT_CAL_PDF_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>'.EC_LAN_150.'</h2></div>
</div>
';  

$sc_style['EC_PR_CHANGE_YEAR']['pre'] = '';
$sc_style['EC_PR_CHANGE_YEAR']['post'] = '';
$sc_style['EC_PR_CHANGE_MONTH']['pre'] = '';
$sc_style['EC_PR_CHANGE_MONTH']['post'] = '';
$sc_style['EC_PRINT_BUTTON']['pre'] = "<br /><div style='text-align:center'>";
$sc_style['EC_PRINT_BUTTON']['post'] = "</div>";
$sc_style['EC_NOW_DATE']['pre'] = EC_LAN_170;
$sc_style['EC_NOW_DATE']['post'] = "";
$sc_style['EC_NOW_TIME']['pre'] = EC_LAN_144;
$sc_style['EC_NOW_TIME']['post'] = "";
$sc_style['EC_PR_CAT_LIST']['pre'] = "";
$sc_style['EC_PR_CAT_LIST']['post'] = "";
$sc_style['EC_PR_LIST_TITLE']['pre'] = "";
$sc_style['EC_PR_LIST_TITLE']['post'] = "";

// - Default style - very basic
$EVENT_CAL_PDF_NAMES['default'] = "<h2>".EC_LAN_165."</h2>";
$EVENT_CAL_PDF_HEADER['default'] = "
<div class='event-cal-pdf-header'>
  <ul class='list-group'>
    <li class='list-group-item list-group-item-info'><strong>{EC_PR_LIST_TITLE}</strong></li>
    <li class='list-group-item event-cal-pdf-list'><strong>".EC_LAN_172."</strong>&nbsp;&nbsp;{EC_PR_CAT_LIST}</li>
    <li class='list-group-item event-cal-pdf-list-from'><strong>".EC_LAN_168."</strong>&nbsp;&nbsp;{EC_PR_LIST_START=%d-%m-%Y}</li>
    <li class='list-group-item event-cal-pdf-list-to'><strong>".EC_LAN_169."</strong>&nbsp;&nbsp;{EC_PR_LIST_END=%d-%m-%Y}</li>
";

$EVENT_CAL_PDF_BODY['default'] = "
    <li class='list-group-item event-cal-pdf-body'>
      <div class='row'>
        <div class='col-sm-2'><strong>{EC_PR_CHANGE_YEAR}</strong></div>
        <div class='col-sm-10'><strong>{EC_MAIL_SHORT_DATE}</strong>&nbsp;&nbsp;{EC_MAIL_TIME_START}&nbsp;-&nbsp;{EC_MAIL_TITLE}</div>
      </div>
    </li>
";

$EVENT_CAL_PDF_FOOTER['default'] = "
  </ul>
</div>
<div class='text-center'>".EC_LAN_138."</div>
<br />
{EC_IFNOT_DISPLAY=EC_NOW_DATE}{EC_IFNOT_DISPLAY=EC_NOW_TIME}
<br />
{EC_PRINT_BUTTON}
";


// - A simple tabular style
$ec_template_styles['simple']['EC_PR_CHANGE_YEAR']['pre'] = "";
$ec_template_styles['simple']['EC_PR_CHANGE_YEAR']['post'] = '';
$ec_template_styles['simple']['EC_PR_CHANGE_MONTH']['pre'] = '';
$ec_template_styles['simple']['EC_PR_CHANGE_MONTH']['post'] = '';

$EVENT_CAL_PDF_NAMES['simple'] = "<h2>".EC_LAN_166."</h2>";
$EVENT_CAL_PDF_HEADER['simple'] = "
{EC_IF_PRINT=LOGO}
<div class='tlist-widthout-lines'>
  <ul class='list-group'>
    <li class='list-group-item list-group-item-info'>
      <strong>".EC_LAN_163."</strong><br />
      <strong>".EC_LAN_168."</strong>{EC_PR_LIST_START=%d-%m-%Y}<br />
      <strong>".EC_LAN_169."</strong>{EC_PR_LIST_END=%d-%m-%Y}
    </li>
";

$EVENT_CAL_PDF_BODY['simple'] = "
    <li class='list-group-item'>
      <div class='row'>   
        <div class='col-xs-1'><strong>{EC_PR_CHANGE_YEAR}</strong></div>
        <div class='col-xs-2'>{EC_PR_CHANGE_MONTH}</div>
        <div class='col-xs-2'>{EC_MAIL_DATE_START=%A %d.}</div>
        <div class='col-xs-1'>{EC_MAIL_TIME_START}</div>
        <div class='col-xs-5'>{EC_MAIL_TITLE}</div>
      </div>
    </li>
";

$EVENT_CAL_PDF_FOOTER['simple'] = "
  </ul>
</div>
<br />
<br />
{EC_IFNOT_DISPLAY=EC_NOW_DATE}{EC_IFNOT_DISPLAY=EC_NOW_TIME} 
<br />
{EC_PRINT_BUTTON}
";


// - A tabular style with lines round the cells
$ec_template_styles['tlinclines']['EC_PR_CHANGE_YEAR']['pre'] = "";
$ec_template_styles['tlinclines']['EC_PR_CHANGE_YEAR']['post'] = '';

$EVENT_CAL_PDF_NAMES['tlinclines'] = "<h2>".EC_LAN_167."</h2>";
$EVENT_CAL_PDF_HEADER['tlinclines'] = " 
<div class='tlist-width-lines'>
  <ul class='list-group'>
    <li class='list-group-item list-group-item-info'>
      <strong>".EC_LAN_163."</strong><br />
      <strong>".EC_LAN_168."</strong>{EC_PR_LIST_START=%d-%m-%Y}<br />
      <strong>".EC_LAN_169."</strong>{EC_PR_LIST_END=%d-%m-%Y}
    </li>
";

$EVENT_CAL_PDF_BODY['tlinclines'] = "
    <li class='list-group-item'>
      <div class='row'>   
        <div class='col-xs-1'><strong>{EC_PR_CHANGE_YEAR}</strong></div>
        <div class='col-xs-2'>{EC_MAIL_DATE_START}</div>
        <div class='col-xs-1'>{EC_MAIL_TIME_START}</div>
        <div class='col-xs-8'>{EC_MAIL_TITLE}</div>
      </div>              
    </li>
";

$EVENT_CAL_PDF_FOOTER['tlinclines'] = "
  </ul>
</div>
<br />
<br />
{EC_IFNOT_DISPLAY=EC_NOW_DATE=%d-%m-%y}{EC_IFNOT_DISPLAY=EC_NOW_TIME}{EC_PRINT_BUTTON}
";

// - A tabular style with lines round the cells and categories
$ec_template_styles['tlinccatlines']['EC_PR_CHANGE_YEAR']['pre'] = "";
$ec_template_styles['tlinccatlines']['EC_PR_CHANGE_YEAR']['post'] = '';

$EVENT_CAL_PDF_NAMES['tlinccatlines'] = "<h2>".EC_LAN_171."</h2>";
$EVENT_CAL_PDF_HEADER['tlinccatlines'] = " 
<div class='list-width-categories'>
  <ul class='list-group'>
    <li class='list-group-item list-group-item-info'>
      <strong>".EC_LAN_163."</strong><br />
      <strong>".EC_LAN_168."</strong>{EC_PR_LIST_START=%d-%m-%Y}<br />
      <strong>".EC_LAN_169."</strong>{EC_PR_LIST_END=%d-%m-%Y}
    </li>
";

$EVENT_CAL_PDF_BODY['tlinccatlines'] = "
    <li class='list-group-item'>
      <div class='row'>   
        <div class='col-xs-1'><strong>{EC_PR_CHANGE_YEAR}</strong></div>
        <div class='col-xs-2'>{EC_MAIL_DATE_START=%D. %d. %b.}</div>
        <div class='col-xs-1'>{EC_MAIL_TIME_START}</div>
        <div class='col-xs-2'>{EC_MAIL_CATEGORY}</div>
        <div class='col-xs-6'>{EC_MAIL_TITLE}</div>
      </div>              
    </li>
";

$EVENT_CAL_PDF_FOOTER['tlinccatlines'] = "
  </ul>
</div>
<br />
<br />
{EC_IFNOT_DISPLAY=EC_NOW_DATE=%d-%m-%y}{EC_IFNOT_DISPLAY=EC_NOW_TIME}{EC_PRINT_BUTTON}
";

?>