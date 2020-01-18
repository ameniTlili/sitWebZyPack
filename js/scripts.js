//for gallery1ations-------------------------------------------------------------------------------------------------
var is_anim_slider = false;
var MSIE = ($.browser.msie) && ($.browser.version <= 8)
//resize-------------------------------------------------------------------------------------------------
var siteResize = false, content, mh = 0, defMh = 0, h = 0, ind = 0; 
    content, mh = 0, h = 0, defMh = 0;

 jQuery(document).ready(function() {
//window resize------------------------------------------------------------------------------------------   
    var h_cont=66;
	var h, new_h;
	setHeight();
	h=new_h;
	setSize();
	function setHeight(){
		new_h=$(window).height();
	}
	function setSize(){
		if (h>h_cont) {
			$('#bgControls').stop().animate({paddingTop:~~((h-h_cont)/2)});
            
		} else {
			$('#bgControls').stop().animate({paddingTop:0});
		}
	}
	setInterval(setNew,1);
	function setNew(){
		setHeight();
		if (h!=new_h) {
			h=new_h;
			setSize();
		}
	} 
});     
$(window).load(function(){
mh = parseInt($('body').css('minHeight'));
defMh = mh;
//Slider-------------------------------------------------------------------------------------------------
	 if ($(".slider1").length) {
        $('.slider1').cycle({
            fx: 'scrollHorz',
            speed: 600,
    		timeout: 0,
            next: '.next',
    		prev: '.prev',                
    		easing: 'easeInOutExpo',
    		cleartypeNoBg: true ,
            rev:0,
            startingSlide: 0,
            wrap: true
  		})
    };
    var ind = 0;
    var len = $('.nav_item').length;
    $('.nav_item').bind('click',function(){
        ind = $(this).index()-0;
        $('.nav_item').each(function(index,elem){if (index!=(ind)){$(this).removeClass('active');}});
        $(this).addClass('active');
        $('.slider1').cycle(ind);
    });
//bgStretch ---------------------------------------------------------------------------------------------
    $('#bgStretch').bgStretch({
    	   align:'leftTop',
           //navs:$('.pagin').navs({})
        })
//for browsers------------------------------------------------------------------------------------------------
    if($.browser.msie && $.browser.version == 9){    
        $('#page_about .container').css({'padding-bottom':'56px'});
        $('#page_products .container').css({'padding-bottom':'40px'});
        $('#page_services .container').css({'padding-bottom':'37px'});
        $('#page_blog .container').css({'padding-bottom':'56px'});
        $('#page_contacts .container').css({'padding-bottom':'50px'});
        $('#page_privacy .container').css({'padding-bottom':'73px'});
        $('#page_more .container').css({'padding-bottom':'74px'});
    }
    if($.browser.opera){    
        $('.submenu_1').css({'margin-top':'69px'});
        $('#page_about .container').css({'padding-bottom':'58px'});
        $('#page_services .container').css({'padding-bottom':'38px'});
        $('#page_blog .container').css({'padding-bottom':'50px'});
        $('#page_privacy .container').css({'padding-bottom':'74px'});
        $('#page_more .container').css({'padding-bottom':'75px'});
    } 
    if($.browser.mozilla){    
        $('#page_about .container').css({'padding-bottom':'58px'});
        $('#page_services .container').css({'padding-bottom':'38px'});
        $('#page_blog .container').css({'padding-bottom':'36px'});
        $('#page_privacy .container').css({'padding-bottom':'73px'});
        $('#page_more .container').css({'padding-bottom':'75px'});
    }
//Sprites-----------------------------------------------------------------------------------------------------
    $('.link1, .link2, .link3').sprites({method:'gStretch',hover:true})      
//Hover a ----------------------------------------------------------------------------------------------------
    $('footer a').hover(function(){
        $(this).stop().animate({color:'#fff'},350, "easeOutSine");		 
            }, function(){
        $(this).stop().animate({color:'#e0bd8a'},350, "easeOutSine");						 
    })
    $('footer ul a').hover(function(){
        //$(this).stop().animate({opacity:0.5},350, "easeOutSine");
        $(this).stop().find('img').animate({'margin-top':'-5px'},350, "easeOutSine");			 
            }, function(){
        //$(this).stop().animate({opacity:1},350, "easeOutSine");	
        $(this).stop().find('img').animate({'margin-top':'0px'},350, "easeOutSine");					 
    })
    $('.list1 a').hover(function(){
        $(this).stop().animate({color:'#ffd200'},350, "easeOutSine");		 
            }, function(){
        $(this).stop().animate({color:'#ca5220'},350, "easeOutSine");						 
    })
    $('.list3 a').hover(function(){
        $(this).stop().animate({color:'#5c1e01'},350, "easeOutSine");		 
            }, function(){
        $(this).stop().animate({color:'#c2572a'},350, "easeOutSine");						 
    })
    $('.col6 > a').hover(function(){
        $(this).stop().animate({color:'#5c1e01'},350, "easeOutSine");		 
            }, function(){
        $(this).stop().animate({color:'#c2572a'},350, "easeOutSine");						 
    })
    $('.info2 a').hover(function(){
        $(this).stop().animate({color:'#5c1e01'},350, "easeOutSine");		 
            }, function(){
        $(this).stop().animate({color:'#c2572a'},350, "easeOutSine");						 
    })
    $('.posted a').hover(function(){
        $(this).stop().animate({color:'#5d1f01'},350, "easeOutSine");		 
            }, function(){
        $(this).stop().animate({color:'#C2572A'},350, "easeOutSine");						 
    })
    $('.col10 a').hover(function(){
        $(this).stop().animate({color:'#5c1e01'},350, "easeOutSine");		 
            }, function(){
        $(this).stop().animate({color:'#c2572a'},350, "easeOutSine");						 
    })
//Content switch---------------------------------------------------------------------------------------------- 
 $('ul#menu').superfish({
      delay:       800,
      animation:   {height:'show'},
      speed:       600,
      autoArrows:  false,
     dropShadows: false
    });
    
	content=$('#content'),
		nav=$('.menu');
    //var firstSpl=false;

    	$('#content').tabs({
		preFu:function(_){
			_.li.css({left:"1700px",'display':'none'});      
		}
		,actFu:function(_){			
			if(_.curr){
                h = parseInt( _.curr.outerHeight(true));
               content.children('ul').animate({'height':h},500,'easeOutCubic');
               $(window).trigger('resize'); 
            if(_.n == 0){
                _.curr.css({'display':'block', left:'-1700px'}).stop().delay(300).animate({left:"0px"},450,'easeOutExpo');     
                }
            if(_.n != 0){ 
                _.curr.css({'display':'block', left:'1700px'}).stop().delay(300).animate({left:"0px"},450,'easeOutExpo'); 
                $('.bgprev, .bgnext').stop().animate({opacity:0}, 350, 'easeOutSine');
                $('.navbox').stop().animate({opacity:0}, 350, 'easeOutSine');          
                } 
            }
                //h = parseInt( _.curr.outerHeight(true));
               //content.children('ul').animate({'height':h},500,'easeOutCubic');
               //$(window).trigger('resize'); 
			if(_.prev){
			 if(_.n > 0){
			     _.prev.stop().animate({left:"-1700px"},450,'easeInExpo',function(){_.prev.css({'display':'none'});});
                }
            if(_.n == 0){
                _.prev.stop().animate({left:"1700px"},450,'easeInExpo',function(){_.prev.css({'display':'none'});});
                $('.bgprev, .bgnext').stop().delay(650).animate({opacity:1}, 450, 'easeOutSine');
                $('.navbox').stop().delay(650).animate({opacity:0.25}, 450, 'easeOutSine');
                }
             }
		}
	})
//Main menu--------------------------------------------------------------------------------------------------- 
	nav.navs({
			useHash:true,
            defHash:'#!/page_home',
             hoverIn:function(li){
                $('.button', li).stop(true).animate({top:'0px'}, 450,'easeOutExpo');
             },
                hoverOut:function(li){
                    if ((!li.hasClass('with_ul')) || (!li.hasClass('sfHover'))) {
                        $('.button', li).stop(true).animate({top:'-90px'}, 450,'easeInExpo');
                    } 
                } 
		})
		.navs(function(n){			
			$('#content').tabs(n);
		}) 
//setTimeout(function(){  $('body').css({'overflow':'visible'}); },300);    
$(window).trigger('resize');        
}) 
//resize-------------------------------------------------------------------------------------------------------
$(window).resize(function (){
    if (content) {
        var newMh = 0;

       newMh = mh+h-301;
      
        if (newMh < defMh) { newMh = defMh;}
        $('body').animate({'minHeight':newMh},800,'easeOutSine')
            content.parents('.main')
                .stop().animate({'top':(windowH()-h)*.5,'height':h},800,'easeOutSine')
                .css('overflow','visible')
       
    } 
}); 