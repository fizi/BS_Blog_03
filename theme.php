<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Game Plus Theme for e107 v2.x.
 */

if(!defined('e107_INIT')) { exit; }

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected)

define("BOOTSTRAP", 3);
define("FONTAWESOME", 4);
define('VIEWPORT', "width=device-width, initial-scale=1.0");

e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

// CDN provider for Bootswatch.
$cndPref = e107::pref('theme', 'cdn', 'cdnjs');

switch($cndPref) {

	case "jsdelivr":
	//	e107::css('url', 'https://cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url',    'https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js", 'jquery');
	break;			
	
	case "cdnjs":
	default:
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js", 'jquery', 2);

}

/* @example prefetch  */
//e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));

e107::css("theme", 			"css/animate.css"); 

e107::js("theme", 			"js/jquery.matchHeight.js");
e107::js("theme", 			"js/imagesloaded.pkgd.js");
e107::js("theme", 			"js/isotope.pkgd.js");
e107::js("theme", 			"js/responsive-tabs_mod_by_fizi.js");
e107::js("theme", 			"js/jquery.lettering.js");  
e107::js("theme", 			"js/custom.js");
                 

e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3.

// Theme disclaimer is displayed in your site disclaimer appended to the site disclaimer text.
// Uncomment the line below to set a theme disclaimer (remove the // ).
define('THEME_DISCLAIMER', "<br />".LAN_THEME_6.""); 

// applied before every layout.
// $LAYOUT['_header_'] = "";

// applied after every layout. 
// $LAYOUT['_footer_'] = "";   

$LAYOUT = array();

// Default Header layout for ALL layouts
$LAYOUT['_header_'] = "   
<div class='page-inner'>
  <div id='loader-wrapper'>
    <div class='sitename'>
		  <h1 class='entry-title'>{SITENAME}</h1>
    </div>
	  <div id='loader'></div>
	  <div class='loader-section section-left'></div>
    <div class='loader-section section-right'></div>
  </div>
  <div class='sitename-wrap'>
     <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}' alt='".SITENAME."'>{SITENAME}</a></div>
  </div>
  <nav id='navbar' class='navbar navbar-default'>
    <div class='container-fluid'>
      <!-- BRAND -->
      <div class='navbar-header'>
        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#blog_03' aria-expanded='false'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
      </div>
      <!-- COLLAPSIBLE NAVBAR -->
      <div class='collapse navbar-collapse' id='blog_03'>
        <!-- Links -->
        {NAVIGATION: type=main}
        <ul class='nav navbar-nav navbar-right'>
          {BOOTSTRAP_USERNAV: placement=top}
          <li><a href='#' id='searchtoggle'><i class='fa fa-search'></i></a></li>
        </ul>
      </div>  
    </div> 
  </nav>   
";


// Default Footer layout for ALL layouts
$LAYOUT['_footer_'] = "
  <div class='container-fluid'>
    <div class='row'>
      <div class='footer'>   
        <div class='bottom-menus'>
          <div class='col-md-3'>
            {SETSTYLE=bottombar}
            {MENU=3}
          </div>
          <div class='col-md-3'>
            {SETSTYLE=bottombar}
            {MENU=4}
          </div>
          <div class='col-md-3'>
            {SETSTYLE=bottombar}
            {MENU=5}
          </div>
          <div class='col-md-3'>
            {SETSTYLE=bottombar}
            {MENU=6}
          </div>      
        </div>
      </div>
      <div class='footer-bottom'>
        <div class='col-md-6'>
          <div class='site-info'>        
            {SITEDISCLAIMER}
            {THEME_DISCLAIMER}
          </div>
        </div>
        <div class='col-md-6'>
          <div class='footer-social-connected'>
            {XURL_ICONS}
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
";



// Blog Default layout 
$LAYOUT['blog_03_with_sidebar'] =  "
<div class='container-fluid'> 
  <div class='row'>   
    <div class='page_content'>
      <div id='searchbar' class='clearfix'>{SEARCH}</div>
      <div class='col-md-10'> 
        <div class='main_content'>
          {SETSTYLE=maincontent}
{---}
        </div>
      </div>
      <div class='col-md-2'>
        <div class='sidebar'>    
          {SETSTYLE=sidebar}
          {MENU=1}
          {MENU=2}
        </div>
      </div>
    </div>    
  </div>
</div>    
"; 


// Blog Default layout 
$LAYOUT['blog_03_home'] =  "
<div class='container-fluid'> 
  <div class='row'>   
    <div class='page_content'>
      <div id='searchbar' class='clearfix'>{SEARCH}</div>
      <div id='grid-filters' class='grid-items-filter'>
        <div class='grid-items-filter-inner'> 
          <a href='#mobile-nav' class='navigation-toggle'>
            <span class='fa fa-bars navigation-toggle-icon'></span>
            <span class='navigation-toggle-text'>".LAN_THEME_50."</span>
          </a>
          <div id='mobile-nav'>
            <div class='button-group filters-button-group'>
              <button class='button is-checked' data-filter='*'>".LAN_THEME_51."</button>
              {BOOTSTRAP_NEWS_CATEGORIES}
            </div>
          </div>
          <div class='button-group filters-button-group'>
            <button class='button is-checked' data-filter='*'>".LAN_THEME_51."</button>
            {BOOTSTRAP_NEWS_CATEGORIES}
          </div>
        </div>
      </div>
      <div class='col-md-10'> 
        <div class='main_content'>
          {SETSTYLE=maincontent}
{---}
        </div>
      </div>
      <div class='col-md-2'>
        <div class='sidebar'>    
          {SETSTYLE=sidebar}
          {MENU=1}
          {MENU=2}
        </div>
      </div>
    </div>    
  </div>
</div>    
";   



function rand_tag(){
        $tags = file(e_BASE."files/taglines.txt");
        return stripslashes(htmlspecialchars($tags[rand(0, count($tags))]));
}


//        [newsstyle]
/* NEWSSTYLE IS UNUSED FOR NOW */
/* NEWSSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */

      

//  [list of news category]
/* NEWSLISTSTYLE IS UNUSED FOR NOW */
/* NEWSLISTSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */



// define('ICONPRINTPDF', 'pdf.png');
// define('ICONMAIL', 'email.png');
// define('ICONPRINT', 'printer.png');
// define('ICONSTYLE', 'float: left; border:0');
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', LAN_THEME_2);
define('PRE_EXTENDEDSTRING', '');
define('EXTENDEDSTRING', LAN_THEME_3.'&nbsp;<i class="fa fa-long-arrow-right"></i>');
define('POST_EXTENDEDSTRING', '');
define('TRACKBACKSTRING', LAN_THEME_7);
define('TRACKBACKBEFORESTRING', '&nbsp;|&nbsp;');


// linkstyle
/* LINKSTYLE IS UNUSED FOR NOW */
/* LINKSTYLE IS IN THEME FOLDER/TEMPLATES/navigation_template.php */


/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data. 
 */ 


 function tablestyle($caption, $text, $id='', $info=array()){

//	global $style; // no longer needed.

  $style = $info['setStyle'];
  
  echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	
	if($id === "gallery-index-list" || $id === "gallery-index-category" || $id === "forum" || $id === "forum-track" || $id === "forum-viewforum" || $id === "forum-viewtopic" || $id === "forum-post" || $id === "cpage")
  {
    $style = 'no-caption';
  }

	//@todo a switch will be faster than all these elseif statements. 
	
	switch($style){
    
    case "wmessage":
      echo "<div class='wmessage-box'>                             
              <div class='wmessage-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='wmessage-body'>{$text}</div>
            </div>";
    break;
    
    case "maincontent":
      echo "<div class='maincontent-box'>                             
              <div class='maincontent-box-title'>{$caption}</div>
              <div class='col-md-offset-1 col-md-10 maincontent-box-body'>{$text}</div>
            </div>";
    break;  
    
    case "no-caption":
      echo "<div class='maincontent-box'>                             
              <div class='maincontent-box-body'>{$text}</div>
            </div>";
    break;
                
    case "sidebar":
      echo "<div class='sidebar-box'>
              <div class='sidebar-box-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='sidebar-box-body'>{$text}</div>                                                     
            </div>";
    break;
    
    case "bottombar":
      echo "<div class='bottombar-box'>                             
              <div class='bottombar-box-title'>             		                                                      
                <h2>{$caption}</h2>
                <hr />
              </div>
              <div class='bottombar-box-body'>{$text}</div>
            </div>";
    break;
    
    default: 
      echo "<div class='othermenu-box'>
              <div class='col-md-offset-2 col-md-8'>
		            <div class='othermenu-box-title'>
                  <h2>{$caption}</h2>
                </div>	                                 
                <div class='othermenu-box-body'>{$text}</div> 
              </div>                      
            </div>
            <div class='clearfix'></div>";
	}
}
    

// chatbox post style
// $CHATBOXSTYLE in THEME FOLDER/templates/chatbox_menu/chat_template.php    


// Image Version Example
// $SEARCH_SHORTCODE in THEME FOLDER/search_template.php

?>