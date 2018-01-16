<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */
if (!defined('e107_INIT')) { exit; }

/*
$FORUM_MAIN_START	= "<br />MAIN START";
$FORUM_MAIN_PARENT 	= "<br />MAIN PARENT";
$FORUM_MAIN_FORUM		= "<br />MAIN FORUM";
$FORUM_MAIN_END		= "<br />MAIN END";
$FORUM_NEWPOSTS_START	= "<br />NEWPOSTS-START";
$FORUM_NEWPOSTS_MAIN 	= "<br />NEWPOSTS-MAIN";
$FORUM_NEWPOSTS_END 	= "<br />NEWPOSTS END";
$FORUM_TRACK_START	= "<br />TRACK-START";
$FORUM_TRACK_MAIN	= "<br />TRACK-MAIN";
$FORUM_TRACK_END	= "<br />TRACK-END";
*/

// New in v2.x - requires a bootstrap theme be loaded.  
// Modifiey by fizi ************************************************************

$FORUM_TEMPLATE['main']['start'] = "
{SETIMAGE: w=1200&h=1000&crop=1}
<div class='forum-view-forum-caption-image' style='background: url(".THEME_ABS."images/forum-caption-bg.jpg) no-repeat center center; background-size: cover;'>
  <div class='forum-view-forum-caption-image-inner'><h2>{FORUMTITLE}</h2></div>
</div>
<div class='col-md-offset-1 col-md-10'>
  {FORUM_BREADCRUMB}
  <div class='forum-search'>
    <div class='form-group text-right'>{SEARCH}</div>
  </div>
  <div id='forum' class='forum'>
";

$FORUM_TEMPLATE['main']['parent']	= "
    <div class='forum-parent'>
      <div class='row'>
        <div class='col-xs-8 col-sm-6 forum-parent-title text-left'>{PARENTNAME} {PARENTSTATUS}</div>
        <div class='col-xs-2 forum-parent-replies text-center'>".LAN_FORUM_0003."</div>
			  <div class='col-xs-2 forum-parent-topics text-center'>".LAN_FORUM_0002."</div>
			  <div class='hidden-xs col-sm-2 forum-parent-lastpost text-center'>".LAN_FORUM_0004."</div>
		  </div>
    </div>
";

$FORUM_TEMPLATE['main']['forum'] = "
    <div class='forum-child'>
      <div class='row'>
        <div class='hidden-xs col-sm-1 forum-newflag text-center'>{NEWFLAG}</div>
        <div class='col-xs-8 col-sm-5 forum-forumname text-left'>
          {FORUMNAME}
          <div class='forum-description'>{FORUMDESCRIPTION}</div>
          <div class='forum-subforum'>{FORUMSUBFORUMS}</div>
        </div>
        <div class='col-xs-2 forum-replies text-center'>{REPLIESX}</div>
        <div class='col-xs-2 forum-threads text-center'>{THREADSX}</div>
        <div class='hidden-xs col-sm-2 forum-lastpost-user text-center'>
          <div class='smalltext'>{LASTPOST:type=username} {LASTPOST:type=datelink}</div>
        </div>
      </div>
    </div>
";

//{LASTPOST:type=username} + {LASTPOST:type=datelink} can also be replaced by the legacy shortcodes {LASTPOST} or {LASTPOSTUSER} + {LASTPOSTDATE}

$FORUM_TEMPLATE['main']['end'] = "
    <div class='forum-footer text-center'><small>{USERINFOX}</small></div>
  </div>
</div>
";

// $FORUM_WRAPPER['main']['forum']['USERINFOX'] = "{FORUM_BREADCRUMB}(html before){---}(html after)";

// Tracking
$FORUM_TEMPLATE['track']['start'] = "
{SETIMAGE: w=1200&h=1000&crop=1}
<div class='forum-view-forum-caption-image' style='background: url(".THEME_ABS."images/forum-caption-bg.jpg) no-repeat center center; background-size: cover;'>
  <div class='forum-view-forum-caption-image-inner'><h2>".LAN_FORUM_0030."</h2></div>
</div>
<div class='col-md-offset-1 col-md-10'>
  {FORUM_BREADCRUMB}
  <div id='forum-track'>
    <div class='forum-track-caption'>
      <div class='row'>
        <div class='col-xs-10 col-sm-8 forum-track-topic text-left'>".LAN_FORUM_1003."</div>
        <div class='hidden-xs col-sm-2 forum-track-lastpost text-center'>".LAN_FORUM_0004."</div>
        <div class='col-xs-2 forum-track-modify text-center'>".LAN_FORUM_1020."</div>
      </div>
    </div>
";

$FORUM_TEMPLATE['track']['item'] = "
    <div class='forum-track-item'>
      <div class='row'>
        <div class='hidden-xs col-sm-1 forum-track-item-newflag text-center'>{NEWIMAGE}</div>
        <div class='col-xs-10 col-sm-7 forum-track-item-topic text-left'>{TRACKPOSTNAME}</div>
        <div class='hidden-xs col-sm-2 forum-track-item-lastpost text-center'>
          <div class='smalltext'>{LASTPOSTUSER} {LASTPOSTDATE}</div>
        </div>
        <div class='col-xs-2 forum-track-item-modify text-center'>{UNTRACK}</div>
      </div>
    </div>
";

$FORUM_TEMPLATE['track']['end'] = "
  </div>
</div>
<div class='clearfix'></div>";




/*
$FORUM_TEMPLATE['main-end']				.= "

<div class='center'>
	<small class='muted'>{PERMS}</small>
	</div>
<table style='".USER_WIDTH."' class='fborder table'>\n<tr>
<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>
<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>
<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>
";
*/
?>
