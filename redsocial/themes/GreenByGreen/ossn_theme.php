<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
define('__THEMEDIR__', ossn_route()->themes . 'GreenByGreen/');

ossn_register_callback('ossn', 'init', 'theme_GreenByGreen_init');

function theme_GreenByGreen_init(){	
	//add bootstrap
	ossn_new_css('bootstrap.min', 'css/bootstrap/bootstrap.min.css');
	
	ossn_new_css('ossn.default', 'css/core/site');
	ossn_new_css('ossn.admin.default', 'css/core/admin');

	//load bootstrap
	ossn_load_css('bootstrap.min', 'admin');
	ossn_load_css('bootstrap.min');

	ossn_load_css('ossn.default');
	ossn_load_css('ossn.admin.default', 'admin');
	
	ossn_extend_view('ossn/admin/head', 'theme_GreenByGreen_admin_head');
	ossn_extend_view('ossn/site/head', 'theme_GreenByGreen_site_head');
    ossn_extend_view('js/opensource.socialnetwork', 'js/script');

	if(ossn_isLoggedin()) {
		$user_loggedin = ossn_loggedin_user();
	
		ossn_add_hook('newsfeed_member', "sidebar:left", 'theme_GreenByGreen_member_menu_handler');

		if(com_is_active('OssnNotifications')) {
			ossn_register_sections_menu('newsfeed_member', array(
				'name' => 'notifications',
				'text' => ossn_print('notifications'),
				'url' => ossn_site_url('notifications/all'),
				'parent' => 'theme:greenbygreen:section:menu:member',
			));		
		}
		if(com_is_active('OssnMessages')) {
			ossn_register_sections_menu('newsfeed_member', array(
				'name' => 'messages',
				'text' => ossn_print('user:messages'),
				'url' => ossn_site_url('messages/all'),
				'parent' => 'theme:greenbygreen:section:menu:member',
			));
		}
		ossn_register_sections_menu('newsfeed_member', array(
			'name' => 'friends',
			'text' => ossn_print('user:friends'),
			'url' => $user_loggedin->profileURL('/friends'),
			'parent' => 'theme:greenbygreen:section:menu:member',
		));
		
		if(com_is_active('OssnPhotos')) {
			ossn_register_sections_menu('newsfeed_member', array(
				'name' => 'photos',
				'text' => ossn_print('photos:ossn'),
				'url' => $user_loggedin->profileURL('/photos'),
				'parent' => 'theme:greenbygreen:section:menu:member',
			));
		}
		
		if(com_is_active('OssnGroups')) {
			ossn_register_sections_menu('newsfeed_member', array(
				'name' => 'mygroups',
				'text' => ossn_print('theme:greenbygreen:section:menu:mygroups'),
				'url' => ossn_site_url('mygroups'),
				'parent' => 'theme:greenbygreen:section:menu:member',
			));
		}

		ossn_register_page('mygroups', 'theme_GreenByGreen_pagehandler');
		
	}	
}

function theme_GreenByGreen_member_menu_handler($hook, $type, $return) {
		/* menu transfers */
		theme_GreenByGreen_remove_group_menu_items();
		theme_GreenByGreen_transfer_menu_item('myblogs', 'blogs', 'newsfeed', true);
		theme_GreenByGreen_transfer_menu_item('files_my', 'files', 'newsfeed', true);
		theme_GreenByGreen_transfer_menu_item('videos_my', 'videos', 'newsfeed', true);
		$return[] = ossn_view_sections_menu('newsfeed_member');
		return $return;
}

function theme_GreenByGreen_remove_group_menu_items() {
		global $Ossn;
		if(isset($Ossn->menu['newsfeed']['groups'])) {
			foreach($Ossn->menu['newsfeed']['groups'] as $key => $item) {
				if($item['name'] != 'addgroup' && $item['name'] != 'allgroups') {
					unset($Ossn->menu['newsfeed']['groups'][$key]);
				}
			}
		}
}

function theme_GreenByGreen_transfer_menu_item($name, $menu, $menutype = 'newsfeed', $entry_transfer = false) {
		global $Ossn;
		if(isset($Ossn->menu[$menutype][$menu])) {
			foreach($Ossn->menu[$menutype][$menu] as $key => $item) {
				if($item['name'] == $name) {
					if($entry_transfer) {
						$entry = $Ossn->menu[$menutype][$menu][$key];
						if($entry) {
							ossn_register_sections_menu('newsfeed_member', array(
							'name' => $entry['name'],
							'text' => $entry['text'],
							'url' => $entry['href'],
							'parent' => 'theme:greenbygreen:section:menu:member',
							));
						}
					}
					unset($Ossn->menu[$menutype][$menu][$key]);
				}
			}
		}
}

function theme_GreenByGreen_pagehandler($home, $handler) {
		switch($handler) {
				case 'mygroups':
						$title = ossn_print('theme:greenbygreen:section:menu:mygroups');
						if(com_is_active('OssnGroups')) {
								$contents['content'] = ossn_plugin_view('pages/contents/user/mygroups');
						}
						$content = ossn_set_page_layout('newsfeed', $contents);
						echo ossn_view_page($title, $content);
						break;
				
				default:
						ossn_error_page();
						break;
						
		}
}

function theme_GreenByGreen_site_head(){
	$head	 = array();
	// <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	$head[]  = ossn_html_css(array(
				'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
				// 'href' => '//use.fontawesome.com/releases/v5.7.2/css/all.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  'https://fonts.googleapis.com/css?family=PT+Sans:400italic,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));	
	return implode('', $head);
}

function theme_GreenByGreen_admin_head(){
	$head	 = array();	
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  '//fonts.googleapis.com/css?family=Roboto+Slab:300,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));
	return implode('', $head);
}
