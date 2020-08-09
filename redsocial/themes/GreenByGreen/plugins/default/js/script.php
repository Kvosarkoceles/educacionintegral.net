//<script>
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip({
		placement:'left',										  
	}); 
	$(document).on('click', '#sidebar-toggle', function() {
		var $toggle = $(this).attr('data-toggle');
		if ($toggle == 0) {
			$(this).attr('data-toggle', 1);
			if($(document).innerWidth() >= 1300 && $('.ossn-page-loading-annimation').is(':visible')){
				$('.sidebar').addClass('sidebar-open-no-annimation');
				$('.ossn-page-container').addClass('sidebar-open-page-container-no-annimation');
			} else {
				$('.sidebar').addClass('sidebar-open');
				$('.ossn-page-container').addClass('sidebar-open-page-container');
			}			
			$('.topbar .right-side').addClass('right-side-space');
			$('.topbar .right-side').addClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').addClass('sidebar-hide-contents-xs');
		}
		if ($toggle == 1) {
			$(this).attr('data-toggle', 0);
			
			$('.sidebar').removeClass('sidebar-open');
			$('.sidebar').removeClass('sidebar-open-no-annimation');
			
			$('.ossn-page-container').removeClass('sidebar-open-page-container');
			$('.ossn-page-container').removeClass('sidebar-open-page-container-no-annimation');
			$('.topbar .right-side').removeClass('right-side-space');
			$('.topbar .right-side').removeClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').removeClass('sidebar-hide-contents-xs');

			$('.topbar .right-side').addClass('right-side-nospace');
			$('.sidebar').addClass('sidebar-close');
			$('.ossn-page-container').addClass('sidebar-close-page-container');

		}
		var document_height = $(document).height();
	});
	var $chatsidebar = $('.ossn-chat-windows-long .inner');
	if($chatsidebar.length){
		$chatsidebar.css('height', $(window).height() - 45);
	}
	$(document).scroll(function() {
		$document_height = $(document).height();						
		
		if($chatsidebar.length){
			if ($(document).scrollTop() >= 50) {
				// $chatsidebar.addClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height());
			} else if ($(document).scrollTop() == 0) {
				// $chatsidebar.removeClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height() - 45);
			}
		}
	});

	if($(document).innerWidth() >= 1300){
		$('#sidebar-toggle').click();
	}
	
	if ($('.footer-wrapper').length) {
		$('body').addClass('body-background-image');
		$('footer .col-md-11').addClass('col-md-12');
		$('footer .col-md-11').removeClass('col-md-11');
	}


	// optimize-pre-loader 
	$(".ossn-page-loading-annimation").fadeOut("slow");
	
	// suppress green 'success' sytem messages on front-end
	$('.ossn-system-messages-inner').themeGreenByGreenNodeChanged(function(changes, observer) {
		if (!$('.header').length) {
			$('.ossn-system-messages-inner').css('position', 'fixed');
			if ($('.ossn-system-messages-inner').is(':visible') && $('.alert-success').length)  {
				$('.ossn-system-messages-inner').empty();
			}
		}
	})
	
	
});

(function($) {
  $.fn.themeGreenByGreenNodeChanged = function(cb, e) {
    e = e || { subtree:true, childList:true, characterData:true };
    $(this).each(function() {
      function callback(changes) { cb.call(node, changes, this); }
      var node = this;
      (new MutationObserver(callback)).observe(node, e);
    });
  };
})(jQuery);



$(window).on('load resize', function (e) {	
		// profile and group cover handling
		if (document.querySelector("#draggable")) {
			const desktop_cover_width  = 1040;
			const desktop_cover_height = 200;
			var current_cover_height  = $('.ossn-group-cover').height() + $('.profile-cover').height();
			var real_image_width  = document.querySelector("#draggable").naturalWidth;
			var real_image_height = document.querySelector("#draggable").naturalHeight;
			// 1. how many mobile heights would we need to hold the image?
			var mobile_height_factor = real_image_height / current_cover_height;
			// 2. how many pixels wide would be the scaled mobile image in comparison to fix desktop_cover_width?
			var mobile_pixel_width = desktop_cover_width / mobile_height_factor;
			// 3. how often would these pixels fit into the current coverwidth?
			var current_cover_width = $('.ossn-group-cover').width() + $('.profile-cover').width();
			var mobile_width_factor = current_cover_width / mobile_pixel_width;
			// 4. how many pixels do we get with the mobile cover height of 100?
			var mobile_pixel_height = mobile_width_factor * current_cover_height;
			// setting the new height already here allows us to retrieve the new scaled image width calculated by the browser
			$('#draggable').css('height', mobile_pixel_height);
			mobile_pixel_width = parseInt($('#draggable').css('width'));
			
			// 5. calculate the height-scaling factor for dragging - get maximum possible scroll top position
			var desktop_scroll_top_max = real_image_height - desktop_cover_height;
			var mobile_scroll_top_max  = mobile_pixel_height - current_cover_height;
			var height_scaling_factor  = desktop_scroll_top_max / mobile_scroll_top_max;
			// 6. calculate the width-scaling factor for dragging - get maximum possible scroll left position
			var desktop_scroll_left_max = real_image_width - desktop_cover_width;
			var mobile_scroll_left_max  = mobile_pixel_width - current_cover_width;
			var width_scaling_factor  = desktop_scroll_left_max / mobile_scroll_left_max;
			// 7. retrieve the saved dragging positions and scale accordingly
			var cover_top    = parseInt($('#draggable').data('top'));
			var cover_left   = parseInt($('#draggable').data('left'));
			var mobile_pixel_top  = cover_top / height_scaling_factor;
			var mobile_pixel_left = cover_left / width_scaling_factor;
			$('#draggable').css('top', mobile_pixel_top);
			$('#draggable').css('left', mobile_pixel_left);
			$('#draggable').fadeIn();

			var wtext = Ossn.Print('theme:greenbygreen:dragging:instruction', [current_cover_width]) ;
			$('#mobygreen-cover-width').text(wtext);
		}

		if(e.type == 'resize' && $(document).innerWidth() >= 1300 && !$('.sidebar-open').length){
			$('#sidebar-toggle').click();
		}
		
});

$(document).ready(function() {

		$('#reposition-group-cover').click(function() {
			var real_image_height   = document.querySelector("#draggable").naturalHeight;
			var current_cover_width = $('.ossn-group-cover').width();
			var saved_cover_top     = parseInt($('#draggable').data('top'));
			var saved_cover_left    = parseInt($('#draggable').data('left'));
			var wtext = "<div class='col-md-11'  id='mobygreen-cover-width'>" + Ossn.Print('theme:greenbygreen:dragging:instruction', [current_cover_width]) + "</div>";
			$('.ossn-group-top-row').after(wtext);
			$('#draggable').css('height', real_image_height);
			$('#draggable').css('top', saved_cover_top);
			$('#draggable').css('left', saved_cover_left);
		});
		
		$('.group-c-position').click(function() {
			$('#mobygreen-cover-width').remove();
		});

		
		$('#reposition-profile-cover').click(function() {
			var real_image_height   = document.querySelector("#draggable").naturalHeight;
			var saved_cover_top     = parseInt($('#draggable').data('top'));
			var saved_cover_left    = parseInt($('#draggable').data('left'));
			var current_cover_width = $('.profile-cover').width();
			var wtext = "<div id='mobygreen-cover-width'>" + Ossn.Print('theme:greenbygreen:dragging:instruction', [current_cover_width]) + "</div>";
			$('.ossn-profile-bottom').before(wtext);
			$('#draggable').css('height', real_image_height);
			$('#draggable').css('top', saved_cover_top);
			$('#draggable').css('left', saved_cover_left);
		});

		$('#cover-menu').find('.btn-action').click(function() {
			$('#mobygreen-cover-width').remove();
		});

});

$(document).ajaxComplete(function(event, xhr, settings) {
		var $url = window.location.href;
		$pagehandler = $url.replace(Ossn.site_url, '') + '/';
		if($pagehandler.includes('home/') || $pagehandler.includes('u/') || $pagehandler.includes('group/') || $pagehandler.includes('view/')){
			$(".ossn-comment-attachment:visible").each(function(){
				$(this).css('display', 'inline-block');
			});
		}
});
