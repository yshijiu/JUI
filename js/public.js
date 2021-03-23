$(function(){
	pageInit();
	$(window).resize(function(){throttle(pageInit(), 300)});
	
	//meau
	
});

function pageInit(){
	var totH = $(window).height();
	$('.meau').height(totH - $('.topbar').height());
	$('.meau-list').height(totH - $('.topbar').height() - $('.meau-slide').height()).niceScroll({cursorborder:"",cursorcolor:"#cccdd1",autohidemode:"leave"});;
	$('.contect').height(totH - $('.topbar').height());
}

//右击
+(function($) { 
	$.fn.extend({ 
		"rightClick":function(fn){
			$(this).bind('contextmenu',function(e){
				return false; 
			});
			$(this).mousedown(function(e){ 
				if(3 == e.which){
					fn(e,$(this));
				}
			}); 
		} 
	});
})(jQuery);

//checkbox,radio
+(function($){
    $(document).on("click",'[data-toggle="checkbox"]',function (e) {
        if (e || e.preventDefault()) e.preventDefault(); else window.event.returnValue = false;
        if($(this).is('.disabled')||$(this).children('input').is(':disabled')){
            return false;
        }
        $(this).toggleClass('checked');
        if($(this).hasClass('checked')) {
            $(this).find(':checkbox').prop({'checked':true});
        } else {
            $(this).find(':checkbox').prop({'checked':false});
        }
    });


    $(document).on("click",'[data-toggle="radio"]',function(e){
        if (e || e.preventDefault()) e.preventDefault(); else window.event.returnValue = false;
        if($(this).is('.disabled')||$(this).children('input').is(':disabled')){
            return false;
        }
        $(this).parent().find('.radio').removeClass('checked').find(':radio').prop({'checked':false});
        $(this).addClass('checked').find(':radio').attr({'checked':"checked"});
    });
})(jQuery);

//函数节流
function throttle(fn, delay){
	var timer = null;
	return function(){
		var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function(){
            fn.apply(context, args);
        }, delay);
    };
};