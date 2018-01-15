<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Comment menu default template
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/comment_menu/comment_menu_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
*/

$sc_style['CM_TYPE']['pre'] = "[";
$sc_style['CM_TYPE']['post'] = "]";

$sc_style['CM_AUTHOR']['pre'] = CM_L13." ";
$sc_style['CM_AUTHOR']['post'] = "";

$sc_style['CM_DATESTAMP']['pre'] = " ";
$sc_style['CM_DATESTAMP']['post'] = "";

$sc_style['CM_COMMENT']['pre'] = "";
$sc_style['CM_COMMENT']['post'] = "";

// $SC_WRAPPER['CM_AUTHOR'] = CM_L13."{---}"; //XXX Not working as template is loaded the old way.

if (!isset($COMMENT_MENU_TEMPLATE))
{
	$COMMENT_MENU_TEMPLATE['start'] = "
  <div class='comment-menu'>
  ";
	
	$COMMENT_MENU_TEMPLATE['item'] = "      
    <div class='media comment-menu-item'>
      <div class='media-left'>
        {SETIMAGE: w=70&h=70&crop=1}
        {CM_AUTHOR_AVATAR}
      </div>
      <div class='media-body'>
        <div class='text-muted'>{CM_AUTHOR}&nbsp;&nbsp;{CM_DATESTAMP}</div>        
	      <h4 class='media-heading'>{CM_URL_PRE}{CM_TYPE} {CM_HEADING}{CM_URL_POST}</h4>
        {CM_COMMENT}	        
      </div>
	  </div>
    ";
	
	$COMMENT_MENU_TEMPLATE['end'] = "
  </div>";

	// {CM_AUTHOR_AVATAR: shape=circle}


}
?>