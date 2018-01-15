<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/

class theme_shortcodes extends e_shortcode { 
  function __construct(){
		
	}
  
/*----------------------------- 
  LOGIN SHORTCODE 
-----------------------------*/  
	                     
	function sc_bootstrap_usernav($parm='')
	{

		$placement = e107::pref('theme', 'usernav_placement', 'top');

		if($parm['placement'] != $placement)
		{
			return '';
		}

		e107::includeLan(e_PLUGIN."login_menu/languages/".e_LANGUAGE.".php");
		
		$tp = e107::getParser();		   
		require(e_PLUGIN."login_menu/login_menu_shortcodes.php"); // don't use 'require_once'.

		$direction = vartrue($parm['dir']) == 'up' ? ' dropup' : '';
		
		$userReg = defset('USER_REGISTRATION');
				   
		if(!USERID) // Logged Out. 
		{		
			$text = '
			<ul class="usernav nav navbar-nav navbar-right'.$direction.'">';

			

			$socialActive = e107::pref('core', 'social_login_active');

			if(!empty($userReg) || !empty($socialActive)) // e107 or social login is active.
			{
				$text .= '
				<li class="divider-vertical"></li>
				<li class="dropdown">
			
				<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user-plus"></i></a>
				<div class="usernav-menu dropdown-menu col-sm-12">
				
				{SOCIAL_LOGIN: size=2x&label=1}
				'; // Sign In
			}
			else
			{
				return '';
			}
			
			
			if(!empty($userReg)) // value of 1 or 2 = login okay. 
			{

			//	global $sc_style; // never use global - will impact signup/usersettings pages. 
			//	$sc_style = array(); // remove any wrappers.

				$text .='	
				
				<form method="post" onsubmit="hashLoginPassword(this);return true" action="'.e_REQUEST_HTTP.'" accept-charset="UTF-8">
				<p>{LM_USERNAME_INPUT}</p>
				<p>{LM_PASSWORD_INPUT}</p>


				<div class="form-group"></div>
				{LM_IMAGECODE_NUMBER}
				{LM_IMAGECODE_BOX}
				
				<div class="checkbox">
				
				<label class="string optional" for="autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="autologin" value="1">
				'.LAN_LOGINMENU_6.'</label>
				</div>
				<input class="login-button" type="submit" name="userlogin" id="userlogin" value="'.LAN_LOGINMENU_51.'">
				';
				
				$text .= '
				
				<a href="{LM_FPW_LINK=href}" class="forget-login">'.LAN_LOGINMENU_4.'</a>
				';
				
				
				/*
				$text .= '
					<label style="text-align:center;margin-top:5px">or</label>
					<input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
					<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
				';
				*/
				
				$text .= "<p></p>
				</form>
        <div class='dividing-line'>
          <span><i class='material-icons'>import_export</i></span>
        </div>                
				<a class='signin-button' href='".e_SIGNUP."'>".LAN_LOGINMENU_3."</a>
				
        
				</div>
				
				</li>
				";
			
			}

			$text .= "
			
			
			</ul>";	
			
			
			
			return $tp->parseTemplate($text, true, $login_menu_shortcodes);
		}  

		
		// Logged in. 
		//TODO Generic LANS. (not theme LANs) 	

		$userNameLabel = !empty($parm['username']) ? USERNAME : ''; 
    
    if( e107::isInstalled('pm') )
		{
			$text .= '<li class="pm dropdown">{PM_NAV}</li>';
		}                

		$text = '
		  <li class="dropdown dropdown-avatar"><a href="#" class="dropdown-toggle" data-toggle="dropdown">'.USERNAME.' <b class="caret"></b></a>
		    <ul class="usernav-box dropdown-menu">
		      <li><a href="{LM_USERSETTINGS_HREF}"><span class="glyphicon glyphicon-cog"></span> '.LAN_SETTINGS.'</a></li>
		      <li><a class="dropdown-toggle no-block" role="button" href="{LM_PROFILE_HREF}"><span class="glyphicon glyphicon-user"></span> '.LAN_LOGINMENU_13.'</a></li>
		      <li class="divider"></li>';
		
		if(ADMIN) 
		{
			$text .= '<li><a href="'.e_ADMIN_ABS.'"><span class="fa fa-cogs"></span> '.LAN_LOGINMENU_11.'</a></li>';	
		}
		
		$text .= '<li><a href="'.e_HTTP.'index.php?logout"><span class="glyphicon glyphicon-off"></span> '.LAN_LOGOUT.'</a></li>
		    </ul>
		  </li>		
		  ';

		return $tp->parseTemplate($text,true,$login_menu_shortcodes);
	}	
  
  
  /*----------------------------- 
  NEWS CATEGORIES ON TOP 
-----------------------------*/  
  function sc_bootstrap_news_categories(){
  
    $news   = e107::getObject('e_news_category_tree');  // get news class.
    $sc     = e107::getScBatch('news'); // get news shortcodes.
    $tp     = e107::getParser(); // get parser.
    
    // load active news categories. ie. the correct userclass etc.
    $data = $news->loadActive(false)->toArray();  // false to utilize the built-in cache.

    $TEMPLATE = "<button class='button' data-filter='.news-category-{NEWS_CATEGORY_ID}'>{NEWS_CATEGORY_NAME}</button>";

    $text = '';

    foreach($data as $row){
      $sc->setScVar('news_item', $row); // send $row values to shortcodes.
      $text .= $tp->parseTemplate($TEMPLATE, true, $sc); // parse news shortcodes.
    }

    return $text;

  }

} 
 
?>