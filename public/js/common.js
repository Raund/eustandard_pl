$(function(){
    $('.flex-tabs li:first-child').addClass('active');
    $('.tab-content .tab-pane:first-child').addClass('active');
    /* слайдер на главной*/
    $("#webstudio-slider").unitegallery({
        gallery_theme: "slider",
        tiles_justified_space_between:0,
        gallery_width:'100%',							//gallery width
        gallery_height:360,								//gallery height
        gallery_max_height: 300,
        slider_control_zoom: false,
        slider_enable_text_panel: true,			 		//true,false - enable the text panel
        slider_textpanel_always_on: true,				//true,false - text panel are always on, false - show only on mouseover
        slider_textpanel_text_valign: "middle",			//middle, top, bottom - text vertical align
        slider_textpanel_padding_top:25,				//textpanel padding top
        slider_textpanel_padding_bottom:25,				//textpanel padding bottom
        slider_textpanel_height: null,					//textpanel height. if null it will be set dynamically
        slider_textpanel_padding_title_description: 5,	//the space between the title and the description
        slider_textpanel_padding_right: 20,				//cut some space for text from right
        slider_textpanel_padding_left: 20,				//cut some space for text from left
        slider_textpanel_fade_duration: 200,			//the fade duration of textpanel appear
        slider_textpanel_enable_title: true,			//enable the title text
        slider_textpanel_enable_description: true,		//enable the description text
        slider_textpanel_enable_bg: true,				//enable the textpanel background
        slider_textpanel_bg_color:"#000000",			//textpanel background color
        slider_textpanel_bg_opacity: 0.3,
        slider_enable_bullets: false,
        slider_arrow_left_offset_hor:0,
        slider_arrow_right_offset_hor:0,
        slider_enable_bullets: true,				//enable the bullets onslider element
        slider_bullets_skin: "",					//skin of the bullets, if empty inherit from gallery skin
        slider_bullets_space_between: -1,			//set the space between bullets. If -1 then will be set default space from the skins
        slider_bullets_align_hor:"center",			//left, center, right - bullets horizontal align
        slider_bullets_align_vert:"bottom",			//top, middle, bottom - bullets vertical algin
        slider_bullets_offset_hor:0,				//bullets horizontal offset
        slider_bullets_offset_vert:10,
        slider_textpanel_title_color:"#ffffff",				//textpanel title color. if null - take from css
        slider_textpanel_title_font_family:"MagistralBlack",		//textpanel title font family. if null - take from css
        slider_textpanel_title_text_align:null,			//textpanel title text align. if null - take from css
        slider_textpanel_title_font_size: 30,
        slider_textpanel_desc_color:"#ffffff",				//textpanel description font family. if null - take from css
        slider_textpanel_desc_font_family:"OpenSans",			//textpanel description font family. if null - take from css
        slider_textpanel_desc_font_size:15,
    });
    /* END слайдер на главной*/

    /* галлерея на странице компании*/
    $("#flex-gallery-company").unitegallery({
        gallery_theme: "carousel",
        gallery_width:'100%',							//gallery width
        gallery_height:260,								//gallery height
        gallery_max_height: 300,
        tile_width: 165,						//tile width
        tile_height: 140,
        carousel_space_between_tiles: 25,
        tile_enable_border:false,
    });
    /* END  галлерея на странице компании*/
    
    /* альбомы на странице галлереи */
    $('.flex-gallery').each(function(){
        $(this).unitegallery({
            gallery_theme: "tilesgrid",
            gallery_width:"100%",              //gallery width
            grid_space_between_cols:15,
            grid_space_between_rows:25,
            grid_space_between_mobile:0,
            tile_enable_border:false,
            tile_enable_shadow:false,
            grid_padding:0,
            tile_width: 165,						//tile width
            tile_height: 140,
            grid_num_rows:10
        });
    });
    /* END  альбомы на странице галлереи */

    /* появление меню при скроле */
    $(window).on('scroll', function(){
        var scrollPosition = $(this).scrollTop();
        //console.info(scrollPosition);
        if(scrollPosition > 180){
            if(!$('.navbar').hasClass('navbar-fixed-top')){
                $('.navbar').addClass('navbar-fixed-top');
                $('.navbar').hide(0);
                $('.navbar').fadeIn(500);
            }
        }else{
            $('.navbar').removeClass('navbar-fixed-top');
        }

    });

    $('.navbar').hover(
        function(){
            if($('.navbar').hasClass('navbar-fixed-top')){
                $(this).animate({opacity: 1});
            }
        },
        function(){
            if($('.navbar').hasClass('navbar-fixed-top')){
                $(this).animate({opacity: 0.9});
            }
        }
    );
    /* END появление меню при скроле */

    $('.description-show').click(function(){
        $(this).parent().find('.description').slideToggle(700);
        $('.description-show i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
        return false;
    });


    /*$('#upload').on('submit', function(event){
        //var formdata = $(this).serialize();
        var formdata = new FormData(this);

        alert('qwert');
        $.ajax({
            url: 'upload',
            method: 'POST',
            processData: false,
            data: formdata,
            success: function(response){
                if(response.status == "success"){
                    swal ("Ваше резюме успішно відправлено!");
                    jQuery("#upload").trigger("reset");
                }
                if(response.status == "error"){
                    alert(1);
                    // jQuery("#upload").trigger("reset");
                }
            }
        });
        event.preventDefault();
        return false;
    });*/

});

/* Скрипт формы обратной связи */
    document.addEventListener("DOMContentLoaded", function(){
        $("#contactform").submit(function(e){
            e.preventDefault();
            var name = $("input[name=name]").val();
            var email = $("input[name=email]").val();
            var message = $("textarea[name=message]").val();
            var token = $("#token").text();
            //var dataString = 'name='+name+'&email='+email+'&message'+message+'&_token='+token;
            var data = {
                name: name,
                email: email,
                message: message,
                '_token': token
            }
            $.ajax({
                method: "POST",
                url : "/contact",
                data : data,
                dataType : "json",

                success: function(data){
                    console.info('Server response: ', data);
                    if(data.status == 'success'){
                        swal("Ваше повідомлення успішно відправлено!"," ","success");
                        jQuery("#contactform").trigger("reset");
                    }
                },
                error:function(data){
                    swal ("Сталася помилка при відправці повідомлення!");
                    jQuery("#contactform").trigger("reset");
                }
            },"json");

        });
        /* END Скрипт формы обратной связи */
    });
/* Скрипт для отправки резюме с сайта */
    document.addEventListener("DOMContentLoaded", function(){
        $('#resume-send').on('click', function(event){
            $('#resume-send').attr('disabled', true);
            var data = $('form#resume-form').serialize();
            $.ajax({
                url: 'resume',
                method: "POST",
                data: data,
                dataType : "json",
                success: function(data){
                    console.info('Server response: ', data);
                    if(data.success){
                        swal(trans['base.success'], "", "success");
                        jQuery("#resume-form").trigger("reset");
                        $("#resume-send").attr('disabled', false);
                    }
                    else{
                        swal(trans['base.error'], data.message, "error");
                        $("#resume-send").attr('disabled', false);
                    }

                },
                error:function(data){
                    swal(trans['base.error']);
                    $("#resume-send").attr('disabled', false);
                    //  jQuery("#resume-form").trigger("reset");
                }

            },"json");
            event.preventDefault();

        });
    });
/* END Скрипт для отправки резюме с сайта */
