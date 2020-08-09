<?php
	if(!ossn_isLoggedin()){
		return;
	}
	ossn_unregister_menu_item('notifications', 'links', 'newsfeed');
	ossn_unregister_menu_item('messages', 'links', 'newsfeed');
	ossn_unregister_menu_item('friends', 'links', 'newsfeed');
	ossn_unregister_menu_item('photos', 'links', 'newsfeed');

?>
        <div class="sidebar ">
            <div class="sidebar-contents">

					<?php
					echo ossn_view_form('search', array(
								'component' => 'OssnSearch',
								'class' => 'ossn-search',
								'autocomplete' => 'off',
								'method' => 'get',
								'security_tokens' => false,
								'action' => ossn_site_url("search"),
					), false);
					/* */
					?>
					<div class="newseed-uinfo">
						<a href="<?php echo ossn_loggedin_user()->profileURL(); ?>">
						<img src="<?php echo ossn_loggedin_user()->iconURL()->small; ?>"/>
						</a>
						<div class="name">
							<a href="<?php echo ossn_loggedin_user()->profileURL(); ?>"><?php echo ossn_loggedin_user()->fullname; ?></a>
						</div>
					</div>
					<?php 
					/* */
					if (ossn_is_hook('newsfeed_member', "sidebar:left")) {
							$newsfeed_left_member = ossn_call_hook('newsfeed_member', "sidebar:left", NULL, array());
							echo implode('', $newsfeed_left_member);
            		}
							
					/* */
          			if (ossn_is_hook('newsfeed', "sidebar:left")) {
							$newsfeed_left = ossn_call_hook('newsfeed', "sidebar:left", NULL, array());
            				echo implode('', $newsfeed_left);
            		}
					/* */
           		 ?>                
            </div>
        </div>