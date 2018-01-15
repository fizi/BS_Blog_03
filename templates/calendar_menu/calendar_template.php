<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Templates for event calendar displays
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/calendar_menu/calendar_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

/**
 *	e107 Event calendar plugin
 *
 * Templates for event calendar displays
 *
 *	@package	e107_plugins
 *	@subpackage	event_calendar
 *	@version 	$Id$;
 *
 */


if (!defined('e107_INIT')) { exit; }
if (!defined('USER_WIDTH')){ define('USER_WIDTH','width:auto'); }

//global $sc_style;

  $ec_images_path = e_IMAGE;
  $ec_images_path_abs = e_IMAGE_ABS;
  if (!defined('EC_RECENT_ICON')) 
  {
	define('EC_RECENT_ICON',e_IMAGE.'generic/new.png');
	define('EC_RECENT_ICON_ABS',e_IMAGE_ABS.'generic/new.png');
  }		// Filename of icon used to flag recent events


// Main Calendar page - calendar.php
$CALENDAR_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>'.EC_LAN_79.'</h2></div>
</div>
';

// Calendar News Event page - event.php
$CALENDAR_NEW_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>'.EC_LAN_28.'</h2></div>
</div>
';

// Calendar Edit Events page - event.php
$CALENDAR_EDIT_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>'.EC_LAN_66.'</h2></div>
</div>
';

// Calendar Default page - event.php
$CALENDAR_DEFAULT_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>'.EC_LAN_83.'</h2></div>
</div>
';

// Calendar Events List page - event.php
$CALENDAR_EVENT_PAGE_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>{EC_EVENT_PAGE_TITLE}</h2></div>
</div>
';

// Calendar Subscribe page - subscribe.php
$CALENDAR_SUBSCRIBE_CAPTION['caption'] = '
{SETIMAGE: w=1200&h=1000&crop=1}
<div class="event-calendar-caption-image" style="background: url('.THEME_ABS.'images/calendar-bg.jpg) no-repeat center center; background-size: cover;">
  <div class="event-calendar-caption-image-inner"><h2>'.EC_LAN_124.'</h2></div>
</div>
';


// TIME SWITCH BUTTONS ------------------------------------------------------------
$sc_style['EC_PREV_MONTH']['pre'] = "<span>";
$sc_style['EC_PREV_MONTH']['post'] = "</span>";

$sc_style['EC_CURRENT_MONTH']['pre'] = "<b>";
$sc_style['EC_CURRENT_MONTH']['post'] = "</b>";

$sc_style['EC_NEXT_MONTH']['pre'] = "<span>";
$sc_style['EC_NEXT_MONTH']['post'] = "</span>";

$sc_style['EC_PREV_YEAR']['pre'] = '<span>';
$sc_style['EC_PREV_YEAR']['post'] = '</span>';

$sc_style['EC_MONTH_LIST']['pre'] = '<span>';
$sc_style['EC_MONTH_LIST']['post'] = '</span>';

$sc_style['EC_NEXT_YEAR']['pre'] = '<span>';
$sc_style['EC_NEXT_YEAR']['post'] = '</span>';


$CALENDAR_TIME_TABLE = "
<div id='event-calendar'>
  <div class='event-calendat-month'>
    <div class='row vertical-align'>
	    <div class='col-xs-3'>{EC_PREV_MONTH}</div>
	    <div class='col-xs-6 text-center'>{EC_CURRENT_MONTH}</div>
	    <div class='col-xs-3 text-right'>{EC_NEXT_MONTH}</div>
    </div>
  </div>
  <div class='event-calendar-year-month'>
    <div class='row vertical-align'>
	    <div class='col-xs-3'>{EC_PREV_YEAR}</div>
	    <div class='col-xs-6 text-center'>{EC_MONTH_LIST}</div>
	    <div class='col-xs-3 text-right'>{EC_NEXT_YEAR}</div>
    </div>
  </div>";


// NAVIGATION BUTTONS
//$sc_style['NAV_LINKCURRENTMONTH']['pre'] = "<span class='btn button' style='width:120px; '>";
//$sc_style['NAV_LINKCURRENTMONTH']['post'] = "</span>";
$sc_style['EC_NAV_LINKCURRENTMONTH']['pre'] = "";
$sc_style['EC_NAV_LINKCURRENTMONTH']['post'] = "";

$CALENDAR_NAVIGATION_TABLE = "
  <div class='calendar-nav text-center'>
    <form method='post' action='" . e_SELF . "?" . e_QUERY . "' id='calform'>
      <div class='row'>
        <div class='col-xs-12 text-center'>{EC_NAV_CATEGORIES} {EC_NAV_BUT_ALLEVENTS} {EC_NAV_BUT_VIEWCAT} {EC_NAV_BUT_ENTEREVENT} {EC_NAV_BUT_SUBSCRIPTION} {EC_NAV_BUT_PRINTLISTS} {EC_NAV_LINKCURRENTMONTH}</div>
      </div>
    </form>
  </div>";


//------------------------------------------
// CALENDAR CALENDAR - 'Big' calendar
//------------------------------------------
$CALENDAR_CALENDAR_START = "
  <div class='calendar-big text-center'>
";

//header row ***********************************************
$CALENDAR_CALENDAR_HEADER_START = "
    <div class='row seven-cols calendar-big-header'>
";

$CALENDAR_CALENDAR_HEADER = "
      <div class='col-xs-1'>{EC_CALENDAR_CALENDAR_HEADER_DAY}</div>
";

$CALENDAR_CALENDAR_HEADER_END = "
    </div>
    <div class='row seven-cols week'>";

$CALENDAR_CALENDAR_WEEKSWITCH = "
    </div>
    <div class='row seven-cols week'>
";

// 'Empty' cells where there's not a day at all ************
$CALENDAR_CALENDAR_DAY_NON = "
      <div class='col-xs-1 day-none' style='height:90px;'></div>
";

//today ****************************************************
$CALENDAR_CALENDAR_DAY_TODAY = "
      <div class='col-xs-1 day day-today' style='height:90px;'>
        <span style='position:relative; top:0;'>{EC_CALENDAR_CALENDAR_DAY_TODAY_HEADING}</span>
";

//day has events *********************************************
$CALENDAR_CALENDAR_DAY_EVENT = "
      <div class='col-xs-1 day day-event' style='height:90px;'>
        <span style='position:relative; top:0;'>{EC_CALENDAR_CALENDAR_DAY_EVENT_HEADING}</span>
";

// no events and not today *************************************
$CALENDAR_CALENDAR_DAY_EMPTY = "
      <div class='col-xs-1 day day-empty' style='height:90px;'>
        <span style='position:relative; top:0;'>{EC_CALENDAR_CALENDAR_DAY_EMPTY_HEADING}</span>
";

$CALENDAR_CALENDAR_DAY_END = "
      </div>
";

// CALENDAR SHOW EVENT *************************************
$sc_style['EC_CALENDAR_CALENDAR_RECENT_ICON']['pre'] = "";
$sc_style['EC_CALENDAR_CALENDAR_RECENT_ICON']['post'] = "";

$CALENDAR_SHOWEVENT = "
        <table cellspacing='0' cellpadding='0' style='width:100%;'>
          <tr>
            <td style='vertical-align:center; width:10px;'>{EC_CALENDAR_CALENDAR_RECENT_ICON}</td>
            <td style='vertical-align:top; width:10px;'>{EC_SHOWEVENT_IMAGE}</td>
            <td style='vertical-align:top; width:2%;'>{EC_SHOWEVENT_INDICAT}</td>
            <td style='vertical-align:top;'>{EC_SHOWEVENT_HEADING}</td>
          </tr>
        </table>
";

$CALENDAR_CALENDAR_END = "
    </div>
  </div>
</div>
";


// EVENT LIST ------------------------------------------------------------
$sc_style['EC_EVENTLIST_CAPTION']['pre'] = "";
$sc_style['EC_EVENTLIST_CAPTION']['post'] = "";

$EVENT_EVENTLIST_TABLE_START = "
  <div class='event-list'>
    <div class='event-list-caption'>{EC_EVENTLIST_CAPTION}</div>
";

$EVENT_EVENTLIST_TABLE_END = "
  </div>";



// EVENT ARCHIVE ------------------------------------------------------------
$sc_style['EC_EVENTARCHIVE_CAPTION']['pre'] = "";
$sc_style['EC_EVENTARCHIVE_CAPTION']['post'] = "";

$EVENT_ARCHIVE_TABLE_START = "
  <br />
  <div class='coming-event'>
    <div class='coming-event-caption'>{EC_EVENTARCHIVE_CAPTION}</div>
";

$EVENT_ARCHIVE_TABLE = "
    <div class='coming-event-body'>
      <div class='row'>
	      <div class='col-md-3 coming-event-date'>{EC_EVENT_RECENT_ICON}{EC_EVENTARCHIVE_DATE}</div>
	      <div class='col-md-9 coming-event-heading'>{EC_EVENTARCHIVE_HEADING}</div>
      </div>
    </div>
";

//<br />{EVENTARCHIVE_DETAILS}
$EVENT_ARCHIVE_TABLE_EMPTY = " 
    <div class='coming-event-empty'>{EC_EVENTARCHIVE_EMPTY}</div>
";

$EVENT_ARCHIVE_TABLE_END = "
  </div>
</div>";



// EVENT SHOW EVENT ------------------------------------------------------------
$sc_style['EC_EVENT_HEADING_DATE']['pre'] = "";
$sc_style['EC_EVENT_HEADING_DATE']['post'] = "";

$sc_style['EC_EVENT_DETAILS']['pre'] = "";
$sc_style['EC_EVENT_DETAILS']['post'] = "";

$sc_style['EC_EVENT_LOCATION']['pre'] = "";
$sc_style['EC_EVENT_LOCATION']['post'] = "";

$sc_style['EC_EVENT_AUTHOR']['pre'] = "<b>".EC_LAN_31."</b> ";
$sc_style['EC_EVENT_AUTHOR']['post'] = "&nbsp;";

$sc_style['EC_EVENT_CONTACT']['pre'] = "<b>".EC_LAN_33."</b> ";
$sc_style['EC_EVENT_CONTACT']['post'] = "&nbsp;";

$sc_style['EC_EVENT_THREAD']['pre'] = "";
$sc_style['EC_EVENT_THREAD']['post'] = "";

$sc_style['EC_EVENT_CATEGORY']['pre'] = "<b>".EC_LAN_30."</b> ";
$sc_style['EC_EVENT_CATEGORY']['post'] = "&nbsp;";

$sc_style['EC_EVENT_DATE_START']['pre'] = '';
$sc_style['EC_EVENT_DATE_START']['post'] = '';

$sc_style['EC_EVENT_TIME_START']['pre'] = '';
$sc_style['EC_EVENT_TIME_START']['post'] = '';

$sc_style['EC_EVENT_DATE_END']['pre'] = '';
$sc_style['EC_EVENT_DATE_END']['post'] = '';

$sc_style['EC_EVENT_TIME_END']['pre'] = '';
$sc_style['EC_EVENT_TIME_END']['post'] = '';

$sc_style['EC_EVENT_EVENT_DATE_TIME']['pre'] =  "<b>".EC_LAN_29."</b> ";
$sc_style['EC_EVENT_EVENT_DATE_TIME']['post'] = '';

$sc_style['EC_IFNOT_ALLDAY']['pre'] = EC_LAN_144;
$sc_style['EC_IFNOT_ALLDAY']['post'] = "";

// The $EVENT_EVENT_DATETIME strings are used with the EC_EVENT_EVENT_DATE_TIME shortcode.
// There are four cases, each with a corresponding index into $EVENT_EVENT_DATETIME:
// 	0 - Normal event, starting and finishing on different dates (the 'original' default)
//	1 - Normal event, starting and finishing on the same day
//	2 - All-day event, starting and finishing on different days
//	3 - All-day event, starting and finishing on the same day
$EVENT_EVENT_DATETIME[0]  = "{EC_EVENT_DATE_START}".EC_LAN_144."{EC_EVENT_TIME_START}<b>  ".EC_LAN_69."</b> {EC_EVENT_DATE_END}{EC_IFNOT_ALLDAY=EC_EVENT_TIME_END}";
$EVENT_EVENT_DATETIME[1]  = "{EC_EVENT_DATE_START} ".EC_LAN_84." {EC_EVENT_TIME_START}".EC_LAN_85."{EC_EVENT_TIME_END}";
$EVENT_EVENT_DATETIME[2]  = "{EC_EVENT_DATE_START} <b>".EC_LAN_69."</b> {EC_EVENT_DATE_END}";
$EVENT_EVENT_DATETIME[3]  = "{EC_EVENT_DATE_START}";

$EVENT_EVENT_TABLE_START = "
  <div class='event-items'>
";

$EVENT_EVENT_TABLE = "
    <div class='event-item'>
	    <a href='#{EC_EVENT_ID}' class='e-show-if-js e-expandit' title='".EC_LAN_132."'>{EC_EVENT_RECENT_ICON}{EC_EVENT_CAT_ICON}{EC_EVENT_HEADING_DATE}{EC_IFNOT_ALLDAY=EC_EVENT_TIME_START}&nbsp;-&nbsp;{EC_EVENT_TITLE}</a>
	    <div id='{EC_EVENT_ID}' {EC_EVENT_DISPLAYCLASS} style='padding-top: 10px; padding-bottom: 10px;'>
	      <div class='event-item-body'>
          <div class='event-item-meta'>{EC_EVENT_AUTHOR} {EC_EVENT_CAT_ICON} {EC_EVENT_CATEGORY} {EC_EVENT_CONTACT} {EC_EVENT_OPTIONS}</div>
          <div class='event-item-date'>{EC_EVENT_EVENT_DATE_TIME}</div>
          <div class='event-item-location'><b>".EC_LAN_32."</b> {EC_EVENT_LOCATION}</div>
          <div class='event-item-details'>{EC_EVENT_DETAILS}</div>
          <div class='event-item-moreinfo'><span class='smalltext'>{EC_EVENT_THREAD}</span></div>
	      </div>
	    </div>
    </div>
";

$EVENT_EVENT_TABLE_END = "
  </div>
";


//------------------------------------------
// Calendar menu - 'Small' calendar
//------------------------------------------
$CALENDAR_MENU_HDG_LINK_CLASS = "class='forumlink'";			// Class, and optional style, for menu heading if its a clickable link
$CALENDAR_MENU_START = "
<div class='text-center'>
";

$CALENDAR_MENU_TABLE_START =  "
  <div id='event-calendar-menu' class='event-calendar-menu'>
";	// colgroup doesn't work!

//header row
$CALENDAR_MENU_HEADER_START = "
    <div class='row seven-cols'>
";

$CALENDAR_MENU_HEADER_FRONT = "
      <div class='col-xs-1 text-center event-calendar-menu-header'>
        <span class='smalltext'>
";

$CALENDAR_MENU_HEADER_BACK = "
        </span>
      </div>
";

$CALENDAR_MENU_HEADER_END = "
    </div>
    <div class='row seven-cols'>
";

$CALENDAR_MENU_WEEKSWITCH = "
    </div>
    <div class='row seven-cols'>";

// Blank cells at beginning and end
$CALENDAR_MENU_DAY_NON = "
      <div class='col-xs-1 text-center day-none'><span class='smalltext'>&nbsp;</small></div>
";

// Start and end CSS for date cells - six cases to decode, determined by array index:
//     	1 - Today, no events
//		2 - Some other day, no events
//		3 - Today with events
//		4 - Some other day with events
//		5 - today with events, one or more of which has recently been added/updated
//		6 - Some other day with events, one or more of which has recently been added/updated

 
//today, no events
$CALENDAR_MENU_DAY_START['1'] = "
      <div class='col-xs-1 text-center indent'>
        <span class='smalltext'>
";

// no events and not today
$CALENDAR_MENU_DAY_START['2'] = "
      <div class='col-xs-1 text-center day'>
        <span class='smalltext'>
";

//day has events - same whether its today or not
$CALENDAR_MENU_DAY_START['3'] = "
      <div class='col-xs-1 text-center indent'>
        <span class='smalltext'>
";

$CALENDAR_MENU_DAY_START['4'] = "
      <div class='col-xs-1 text-center indent'>
        <span class='smalltext'>
";

// day has events, one which is recently added/updated
$CALENDAR_MENU_DAY_START['5'] = "
      <div class='col-xs-1 text-center indent'>
        <span class='smalltext'>
";

$CALENDAR_MENU_DAY_START['6'] = "
      <div class='col-xs-1 text-center indent'>
        <span class='smalltext'>
";
// Example highlight using background colour:
//$CALENDAR_MENU_DAY_START['5'] = "<td class='indent' style='width:14.28%; padding:1px; text-align:center; background-color: #FF8000;'>";
//$CALENDAR_MENU_DAY_START['6'] = "<td class='indent' style='width:14.28%; padding:1px; text-align:center; background-color: #FF0000; '>";
 
 
$CALENDAR_MENU_DAY_END['1'] = "</small></div>";
$CALENDAR_MENU_DAY_END['2'] = "</small></div>";
$CALENDAR_MENU_DAY_END['3'] = "</small></div>";
$CALENDAR_MENU_DAY_END['4'] = "</small></div>";
$CALENDAR_MENU_DAY_END['5'] = "</small></div>";
$CALENDAR_MENU_DAY_END['6'] = "</small></div>";

$CALENDAR_MENU_END = "
    </div>
  </div>
</div>";




//============================================================================
// Next event menu template
$sc_style['EC_NEXT_EVENT_TIME']['pre'] = EC_LAN_144;
$sc_style['EC_NEXT_EVENT_TIME']['post'] = "";
// Following are original styles
//$sc_style['NEXT_EVENT_ICON']['pre'] = "<img style='border:0px' src='";
//$sc_style['NEXT_EVENT_ICON']['post'] = "' alt='' />&nbsp;";
// Following to 'float right' on a larger icon
$sc_style['EC_NEXT_EVENT_ICON']['pre'] = "<img style='clear: right; float: left; margin: 0px 3px 0px 0px; padding:1px; border: 0px;' src='";
$sc_style['EC_NEXT_EVENT_ICON']['post'] = "' alt='' />";


if (!isset($EVENT_CAL_FE_LINE))
{  
  $EVENT_CAL_FE_LINE = "{EC_NEXT_EVENT_RECENT_ICON}{EC_NEXT_EVENT_ICON}{EC_NEXT_EVENT_DATE}{EC_NEXT_EVENT_TIME}<br /><strong>{EC_NEXT_EVENT_TITLE}</strong>{EC_NEXT_EVENT_GAP}";
}


?>