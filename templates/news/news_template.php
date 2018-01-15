<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '
{SETIMAGE: w=2000}
<div class="news-cat-caption-image" style="background: url({NEWS_IMAGE: item=1&type=src}) no-repeat center center; background-size: cover;">
  <div class="news-cat-caption-image-inner">{NEWSCATEGORY}</div>
</div>';

$NEWS_TEMPLATE['list']['start']	= '
<!-- List News Template -->
<div class="news-cat-items">
  <div class="row">
';
$NEWS_TEMPLATE['list']['item']	= '
    <div class="col-sm-6"> 
      <div class="news-cat-item news-category-{NEWS_CATEGORY_ID}">
        <div class="news-cat-item-mainimage">
          {SETIMAGE: w=1200&h=1000&crop=1}
          <a href="{NEWSURL}">
            {NEWS_IMAGE: item=1&type=tag} 
          </a> 
          <div class="news-cat-item-box">
            <div class="news-cat-category">{NEWSCATEGORY}</div>
            <h2 class="news-cat-title">{NEWS_TITLE: link=1}</h2>               	    
            <div class="news-cat-meta">{NEWS_DATE}&nbsp;&there4;&nbsp;{GLYPH=fa-comments-o}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&there4;&nbsp;{GLYPH=fa-eye}&nbsp;{HITS_COUNTER: multi=1}</div>  
            <div class="lead">{NEWS_SUMMARY}</div>
          </div>
        </div>
      </div>
    </div>
';
$NEWS_TEMPLATE['list']['end']	= '
  </div>
</div>
';





//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';



// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme. 
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/


/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/


// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';


$NEWS_TEMPLATE['default']['start']	= '
<!-- Default News Template -->  
<div class="isotope-grid">
  <div class="isotope-grid-sizer col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
';
$NEWS_TEMPLATE['default']['item'] = '
<div class="isotope-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 news-category-{NEWS_CATEGORY_ID}">
  <div class="default-item news-category-{NEWS_CATEGORY_ID}">
    <div class="default-item-mainimage">
      {SETIMAGE: w=1200&h=1000}
      <a href="{NEWSURL}">
        {NEWS_IMAGE: item=1&type=tag} 
      </a> 
      <div class="default-item-category">{NEWSCATEGORY}</div>  
      <div class="default-item-info">{GLYPH=fa-user-o}&nbsp;{NEWS_AUTHOR}&nbsp;&there4;&nbsp;{GLYPH=fa-comments-o}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&there4;&nbsp;{GLYPH=fa-eye}&nbsp;{HITS_COUNTER: multi=1}</div>
      <div class="default-item-bottom-box">    
        <div class="default-item-date">{NEWS_DATE=yyyy. M dd.}</div>
        <h2 class="default-item-title">{NEWS_TITLE: link=1}</h2> 
        <div class="default-item-summary">{NEWS_SUMMARY: limit=130}</div>
      </div>                 
    </div>  
  </div>
</div>
';     

$NEWS_TEMPLATE['default']['end']	= '
</div>';



/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/
$NEWS_TEMPLATE['category']['caption']	= '
{SETIMAGE: w=2000}
<div class="news-cat-caption-image" style="background: url({NEWS_IMAGE: item=1&type=src}) no-repeat center center; background-size: cover;">
  <div class="news-cat-caption-image-inner">{NEWSCATEGORY}</div>
</div>';

$NEWS_TEMPLATE['category']['start'] = '
<!-- Category News Template -->
<div class="news-cat-items">
  <div class="row">
';

$NEWS_TEMPLATE['category']['item'] = '
    <div class="col-sm-6"> 
      <div class="news-cat-item news-category-{NEWS_CATEGORY_ID}">
        <div class="news-cat-item-mainimage">
          {SETIMAGE: w=1200&h=1000&crop=1}
          <a href="{NEWSURL}">
            {NEWS_IMAGE: item=1&type=tag} 
          </a> 
          <div class="news-cat-item-box">
            <div class="news-cat-category">{NEWSCATEGORY}</div>
            <h2 class="news-cat-title">{NEWS_TITLE: link=1}</h2>               	    
            <div class="news-cat-meta">{NEWS_DATE}&nbsp;&there4;&nbsp;{GLYPH=fa-comments-o}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&there4;&nbsp;{GLYPH=fa-eye}&nbsp;{HITS_COUNTER: multi=1}</div>  
            <div class="lead">{NEWS_SUMMARY}</div>
          </div>
        </div>
      </div>
    </div>
';

$NEWS_TEMPLATE['category']['end'] = '
  </div>
</div>';





###### Default view item (temporary)  ######
//$NEWS_MENU_TEMPLATE['view']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['view']['end']         = '</ul>';

// As displayed by news.php?extend.1

/* FOR EXTEND NEWS ITEM ***************************************************************************/


// $NEWS_WRAPPER['view']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['view']['item'] = '
<div class="view-item news-category-{NEWS_CATEGORY_ID}">
  <div class="view-item-mainimage">
    {SETIMAGE: w=2000}
    {NEWS_IMAGE: item=1}
    <div class="col-md-offset-2 col-md-8 view-item-box">
      <div class="view-item-category">{NEWSCATEGORY}</div>
      <h2 class="view-item-title">{NEWS_TITLE: link=1}</h2>
      <div class="lead">{NEWS_SUMMARY}</div>   	    
      <div class="view-item-meta">{NEWS_DATE}&nbsp;&there4;&nbsp;'.LAN_THEME_8.'&nbsp;{NEWS_AUTHOR}&nbsp;&there4;&nbsp;{NEWSCOMMENTS}</div>      
    </div>      
  </div>
  <div class="col-md-offset-2 col-md-8 view-item-content">
    <div class="view-item-body">{NEWS_BODY=body}</div>
    {SETIMAGE: w=1200&h=1000}
    <div class="row view-item-images-1">
      <div class="col-md-6">{NEWS_IMAGE: item=2}</div>
      <div class="col-md-6">{NEWS_IMAGE: item=3}</div>
    </div>
    <div class="row view-item-images-2">
      <div class="col-md-6">{NEWSIMAGE: item=4}</div>
      <div class="col-md-6">{NEWSIMAGE: item=5}</div>
    </div>
    <div class="view-item-extended">{NEWS_BODY=extended}</div>  
    <div class="row view-item-videos">
			<div class="col-md-6 view-video">{NEWSVIDEO: item=1}</div>
		 	<div class="col-md-6 view-video">{NEWSVIDEO: item=2}</div>
		 	<div class="col-md-6 view-video">{NEWSVIDEO: item=3}</div>
      <div class="col-md-6 view-video">{NEWSVIDEO: item=4}</div>
		</div>
    <div class="view-item-tags">{NEWSTAGS: separator=&nbsp;}</div>
    <div class="view-item-share">{GLYPH=fa-share-alt}&nbsp;&nbsp;{PRINTICON: class=social-icon}{ADMINOPTIONS: class=social-icon}{SOCIALSHARE: type=basic&btnClass=social-icon}</div>
  </div> 
  <div class="clearfix"></div>  
  <div class="col-md-offset-2 col-md-8 view-item-author">
    <div class="row">
      <div class="col-sm-2">    
	      <div class="view-item-author-avatar">
          {SETIMAGE: w=160&h=160&crop=1}
          {NEWS_AUTHOR_AVATAR}
        </div>
      </div>
      <div class="col-sm-10">
        <div class="view-item-author-meta">               
	        <h4 class="view-item-author-name">{NEWS_AUTHOR}</h4>
	        <div class="view-item-author-info">{NEWS_AUTHOR_SIGNATURE}</div>
          <div class="view-item-author-articles"><a class="articles" href="{NEWS_AUTHOR_ITEMS_URL}">'.LAN_THEME_71.'</a></div>
        </div>
      </div>	
    </div>
  </div>
  <div class="clearfix"></div>           
  {NEWSRELATED: limit=4&types=news}
</div>
{NEWSNAVLINK}
';

/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';





### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '
{SETIMAGE: w=1200&h=1000}
<div class="e-related-news-title"><h2>'.LAN_RELATED.'</h2></div>
<div class="row">';

$NEWS_TEMPLATE['related']['item'] = '
  <div class="col-sm-6">
    <div class="e-related-item">
      <div class="e-related-news-image">
        <a href="{RELATED_URL}">
          {RELATED_IMAGE} 
        </a> 
        <div class="e-related-item-bottom-box">    
          <h2 class="e-related-item-title"><a href="{RELATED_URL}">{RELATED_TITLE}</a></h2> 
          <div class="e-related-item-summary">{RELATED_SUMMARY}</div>
        </div>                 
      </div>  
    </div>
  </div>
';

$NEWS_TEMPLATE['related']['end'] = '
</div>';
