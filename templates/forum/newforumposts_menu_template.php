<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */

$NEWFORUMPOSTS_MENU_TEMPLATE['default']['start'] = "
<div class='newforumposts-menu'>
";

$NEWFORUMPOSTS_MENU_TEMPLATE['default']['item'] = "
  <div class='media newforumposts-menu-item'>
    <div class='media-left'>
      {SETIMAGE: w=70&h=70&crop=1}
      {POST_AUTHOR_AVATAR}
    </div>
    <div class='media-body'>
      <div class='text-muted'>".LAN_FORUM_MENU_001." {POST_AUTHOR_NAME}&nbsp;&nbsp;{POST_DATESTAMP}</div>
      <h4 class='media-heading'><a href='{POST_URL}'>{POST_TOPIC}</a></h4>
	    {POST_CONTENT}	    
    </div>
	</div>
";

$NEWFORUMPOSTS_MENU_TEMPLATE['default']['end'] = "
</div>";


// NEWFORUMPOSTS MENU MINIMAL **************************************************
$NEWFORUMPOSTS_MENU_TEMPLATE['minimal']['start'] = "
<div class='newforumposts-menu'>
";
	 
$NEWFORUMPOSTS_MENU_TEMPLATE['minimal']['item'] = "
  <div class='newforumposts-menu-item'>
    {SETIMAGE: w=50&h=50&crop=1}
    <a href='{POST_URL}'>{POST_AUTHOR_AVATAR: shape=circle}</a>
    <div class='newforumposts-menu-item-block'>
	    <a href='{POST_URL}'>".LAN_FORUM_MENU_001."</a>
      {POST_AUTHOR_NAME}
      <div class='smalltext text-muted'>{POST_DATESTAMP}</div>
	    <div class='newforumposts-menu-item-comment'>{POST_CONTENT}</div>
    </div>
	</div>
";

$NEWFORUMPOSTS_MENU_TEMPLATE['minimal']['end'] = "
</div>";


// NEWFORUMPOST MAIN ***********************************************************
$NEWFORUMPOSTS_MENU_TEMPLATE['main']['start'] = "
<!-- newforumposts -->
<div id='newforumposts-main' class='newforumposts-main'>
  <div class='newforumposts-main-caption'>
    <div class='row'>
      <div class='col-xs-11 col-sm-7 newforumposts-main-topic text-left'>".LAN_FORUM_1003."</div>
      <div class='col-xs-1 newforumposts-main-user text-center'>".LAN_USER."</div>
			<div class='hidden-xs col-sm-1 newforumposts-main-views text-center'>".LAN_FORUM_1005."</div>
			<div class='hidden-xs col-sm-1 newforumposts-main-replies text-center'>".LAN_FORUM_0003."</div>
      <div class='hidden-xs col-sm-2 newforumposts-main-lastpost text-center'>".LAN_FORUM_0004."</div>
		</div>
  </div>
";

$NEWFORUMPOSTS_MENU_TEMPLATE['main']['item'] = "
  <div class='newforumposts-main-item'>
    <div class='row'>
      <div class='col-xs-1 newforumposts-main-item-icon text-center'>{TOPIC_ICON}</div>
      <div class='col-xs-10 col-sm-6 newforumposts-main-item-topic text-left'>
        <a href='{POST_URL}'>{TOPIC_NAME}</a> 
        <div class='smalltext'>(<a href='{FORUM_URL}'>{FORUM_NAME}</a>)</div>
      </div>
      <div class='col-xs-1 newforumposts-main-item-user text-center'>{TOPIC_AUTHOR_NAME}</div>
			<div class='hidden-xs col-sm-1 newforumposts-main-item-views text-center'>{TOPIC_VIEWS}</div>
			<div class='hidden-xs col-sm-1 newforumposts-main-item-replies text-center'>{TOPIC_REPLIES}</div>
      <div class='hidden-xs col-sm-2 newforumposts-main-lastpost text-center'>
        {TOPIC_LASTPOST_AUTHOR}
        <div class='smalltext'>{TOPIC_LASTPOST_DATE}</div>
      </div>
    </div>
  </div>  
";

$NEWFORUMPOSTS_MENU_TEMPLATE['main']['end'] = "
  <div class='newforumposts-main-bottom'>
    <div class='row'>
      <div class='col-xs-12 newforumposts-main-info text-center'> 
        <div class='smalltext'>".LAN_FORUM_0002.": <b>{TOTAL_TOPICS}</b> | ".LAN_FORUM_0003.": <b>{TOTAL_REPLIES}</b> | ".LAN_FORUM_1005.": <b>{TOTAL_VIEWS}</b></div> 
      </div>
    </div>
  </div>
</div>
";

