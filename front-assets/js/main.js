jQuery(document).ready(function($) {

    // sidebar-new MENU BUTTON SCRIPT
	$('.menu-btn').on("click", function(){
		var menuBtn = $(this);
		if(menuBtn.attr('src').indexOf('menu.png') > -1) {
			$('.sidebar-new').addClass('show');
			menuBtn.attr('src', 'close.png');
		} else {
			$('.sidebar-new').removeClass('show');
			menuBtn.attr('src', 'menu.png');
		}

        if($('.sidebar-new').hasClass('show')) {
            console.log('sidebar-new has class show');
            $('.floating-btns').addClass('hide');
        } else {
            $('.floating-btns').removeClass('hide');
        }
	});

    // FIXED header-new ENABLE
    $(window).scroll(function() {
        const TOP = $(window).scrollTop();
        if(TOP > 100) {
            $('.header-new.fixed').addClass('show');
        } else {
            $('.header-new.fixed').removeClass('show');
        }
    })  
    
    // sidebar-new SUBMENU TOGGLE
	$('.dropdown-btn').click(function() {
		var icon = $(this).children(); 
		var list = $(this).next();
		list.toggleClass("show");
		icon.toggleClass("rotate");
	})
})    