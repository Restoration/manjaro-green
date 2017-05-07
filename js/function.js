jQuery(function(){

    // DropDownMenu
    var windowWidth = $(window).width();
	$("#mainMenu ul > li").hover(function(){
		if(windowWidth < 960){
			return false;
		}
		$(" > ul.children:not(:animated)", this).slideDown();
	}, function(){
		if(windowWidth < 960){
			return false;
		}
		$(" > ul.children",this).slideUp();
	});

	// Check menu to window resize action
	function resizeMenu(){
		var windowWidth = $(window).width();
		if(windowWidth > 960){
			$("#mainMenu ul").css('display','block');
			return false;
		}
	}

	// Form Focus Action
	$("input,textarea").focusin(function(e) {
		$(this).css('border-color', '#20b2aa');
	}).focusout(function(e) {
		$(this).css('border-color', '#e9e9e9');
	});

	// Centering
	$.fn.center = function () {
		this.css("position","absolute");
		this.css("top", ( $(window).height() - this.height() ) / 2+$(window).scrollTop() + "px");
		this.css("left", ( $(window).width() - this.width() ) / 2+$(window).scrollLeft() + "px");
		return this;
	};

    // Show Loading Image
    function appendLoading(){
        if($("#loading").size() == 0){
            $("body").append("<div id='loading'><div class='uil-ring-css' style='transform:scale(0.6);'><div></div></div></div>");
            $("body").append("<div id='loadingOverLay'></div>");
            $("#loading").center();
        }
    }
    // Hide Loading Image
    function removeLoading(){
        $("#loading").remove();
        $("#loadingOverLay").remove();
    }

    // Ajax Pager
	var cnt = 2;
	var maxCnt = $('#postMaxCnt').val();
	maxCnt = Math.ceil(maxCnt / 9);
	var readPost = function(){
		var href = window.location.href;
		if(maxCnt < cnt){
			return false;
		}
		appendLoading();
		$('#main').append($("<div class='postWrap-"+cnt+"'>").load(href+"/page/"+cnt+" .mainInner",function(){
			var speed = 400;
			var position = $('.postWrap-'+cnt).offset().top;
			$('body').animate({scrollTop:position}, speed, 'swing',function(){
				cnt++;
				if(maxCnt < (cnt)){
					$('#readMore').hide();
				}
				removeLoading();
				return false;
			});
		}));
	}
	$(document).on('click','#readMore',readPost);


	// SmartPhone Title position
	var titlePosition = function(){
		var mainTitleHeight = $('.headerText').height();
		var mainTitleWidth = $('.headerText').width();
		$('.headerText').css({
			'top': '50%',
			'left': '50%',
			'marginTop': '-'+(mainTitleHeight / 2) + 'px',
			'marginLeft': '-'+(mainTitleWidth / 2) + 'px',
		});
	}
	titlePosition();
	var timer = false;
	$(window).resize(function() {
	    if (timer !== false) {
	        clearTimeout(timer);
	    }
	    timer = setTimeout(function() {
	        titlePosition();
	        resizeMenu();
	    }, 100);
	});


	// Toggle Menu
	var spToggle = function(){
		$("#mainMenu ul").slideToggle();
	}
	$(document).on('click','#spToggle',spToggle);




});