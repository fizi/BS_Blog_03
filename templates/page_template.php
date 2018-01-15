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
$PAGE_WRAPPER = array();

global $sc_style;

$sc_style['CPAGEAUTHOR|default']['pre'] = '';
$sc_style['CPAGEAUTHOR|default']['post'] = ", ";

$sc_style['CPAGESUBTITLE|default']['pre'] = '<h2>';
$sc_style['CPAGESUBTITLE|default']['post'] = '</h2>';

$sc_style['CPAGEMESSAGE|default']['pre'] = '';
$sc_style['CPAGEMESSAGE|default']['post'] = '';

$sc_style['CPAGENAV|default']['pre'] = '';
$sc_style['CPAGENAV|default']['post'] = '';

#### default template - BC ####
	// used only for parsing comment outside of the page tablerender-ed content
	// leave empty if you integrate page comments inside the main page template
	
	
$PAGE_TEMPLATE['default']['page'] = '
{PAGE}
'; 
	
// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['default']['start'] = '
<div id="{CPAGESEF}" class="cpage_body cpage-body">   
  <div class="default-cpage-mainimage">
    {SETIMAGE: w=2000}
    {CPAGEFIELD: name=image1}
  </div> 
  <div class="default-cpage-caption">
    {CHAPTER_BREADCRUMB}
    <div class="default-cpage-caption-cpagetitle">{CPAGETITLE}</div>
    <div class="default-cpage-meta">{CPAGEDATE}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;'.LAN_THEME_8.'&nbsp;{CPAGEAUTHOR}</div>
  </div> 
'; 
	
// page body
$PAGE_TEMPLATE['default']['body'] = '
  {CPAGEMESSAGE|default}		
	{CPAGESUBTITLE|default}		
  <div class="col-md-offset-1 col-md-10">           
    <div class="default-cpage-nav pull-right">{CPAGENAV}</div>
    <div class="clearfix"></div>
	  <div class="default-cpage-content">      
      {SETIMAGE: w=1000&h=750&crop=1}
      {CPAGEBODY}
      <div class="default-cpage-nav pull-right">{CPAGENAV}</div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-6 default-cpage-share">{GLYPH=fa-share-alt}&nbsp;&nbsp;{PRINTICON: class=social-icon}{PDFICON: class=social-icon}{CPAGEEDIT: class=social-icon}{SOCIALSHARE: type=basic&btnClass=social-icon}</div>
        <div class="col-md-6 default-cpage-rating">{CPAGERATING|default}</div>        
      </div>
    </div>
  </div>	
  <div class="clearfix"></div>
  {CPAGERELATED:limit=5&types=page}
  <div class="col-md-offset-1 col-md-10 default-cpage-comments">
    <div class="default-cpage-comments-title"><h2>'.LAN_THEME_80.'</h2></div>
    <div class="default-cpage-comments-body">{PAGECOMMENTS}</div>
  </div>  
';     


// {CPAGEFIELD: name=image}
// $PAGE_WRAPPER['default']['CPAGEEDIT'] = "<div class='text-right'>{---}</div>";


// used only when password authorization is required
$PAGE_TEMPLATE['default']['authorize'] = '
<div class="cpage-restrict">
	{message}
	{form_open}
	<div class="panel panel-default">
		<div class="panel-heading">{caption}</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label">{label}</label>
				<div class="col-sm-9">
					{password} {submit} 
				</div>
			</div>
		</div>
  </div>
	{form_close}
</div>
';
	

// used when access is denied (restriction by class)
$PAGE_TEMPLATE['default']['restricted'] = '
  {text}
';
	
// used when page is not found
$PAGE_TEMPLATE['default']['notfound'] = '
  {text}
';
	
// always used
$PAGE_TEMPLATE['default']['end'] = '
</div>'; 
	


 
// options per template - disable table render
//	$PAGE_TEMPLATE['default']['noTableRender'] = false; //XXX Deprecated
	
// define different tablerender mode here
$PAGE_TEMPLATE['default']['tableRender'] = 'cpage';

$PAGE_TEMPLATE['default']['related']['start'] = '
{SETIMAGE: w=1200&h=1000}
<div class="cpage-related-title"><h2>'.LAN_RELATED.'</h2></div>
<div class="row">
';
$PAGE_TEMPLATE['default']['related']['item'] = '
  <div class="col-sm-6">
    <div class="cpage-related-item">
      <div class="cpage-related-news-image">
        <a href="{RELATED_URL}">{RELATED_IMAGE}</a> 
        <div class="cpage-related-item-bottom-box">    
          <h2 class="cpage-related-item-title"><a href="{RELATED_URL}">{RELATED_TITLE}</a></h2>
        </div>                 
      </div>  
    </div>
  </div>
';
$PAGE_TEMPLATE['default']['related']['end'] = '
</div>
';




// $PAGE_TEMPLATE['default']['editor'] = '<ul class="fa-ul"><li><i class="fa fa-li fa-edit"></i> Level 1</li><li><i class="fa fa-li fa-cog"></i> Level 2</li></ul>';

	
#### No table render example template ####

$PAGE_TEMPLATE['custom']['start'] = '<div id="{CPAGESEF}" class="cpage-body">'; 
$PAGE_TEMPLATE['custom']['body'] = ''; 
$PAGE_TEMPLATE['custom']['authorize'] = '';	
$PAGE_TEMPLATE['custom']['restricted'] = '';	
$PAGE_TEMPLATE['custom']['end'] = '</div>'; 
$PAGE_TEMPLATE['custom']['tableRender'] = '';

	
$PAGE_WRAPPER['profile']['CMENUIMAGE: template=profile'] = '<span class="page-profile-image pull-left col-xs-12 col-sm-4 col-md-4">{---}</span>';
$PAGE_TEMPLATE['profile'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['profile']['body'] = '
  {CPAGEMESSAGE}
	{CPAGESUBTITLE}
	<div class="clear"><!-- --></div>

	{CPAGENAV|default}
	{SETIMAGE: w=320}
	{CMENUIMAGE: template=profile}
	{CPAGEBODY}

	<div class="clear"><!-- --></div>
	{CPAGERATING}
	{CPAGEEDIT}
';
	
	
?>