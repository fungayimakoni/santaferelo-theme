$(document).ready( function(){
	var ip_lang = Cookies.get('set_language');
    var post_id = $(document.body).attr("data-ajaxid");
    $.ajax({
        url : adminajax.ajaxurl,
        type : 'post',
        data : {
            action : 'ip_contact',
            ip_lang : ip_lang,
            ajax_id : post_id
        },
        success : function(data) {
            $('.home .module-2').html(data);
        },
    });
    if(ip_lang == 'TH'){
        $('#menu-top-menu li.flag a').html('th<i class="material-icons">language</i>');
    }
    if(ip_lang == 'HK'){
        $('#menu-top-menu li.flag a').html('hk<i class="material-icons">language</i>');
    }
    if(ip_lang == 'IN'){
        $('#menu-top-menu li.flag a').html('in<i class="material-icons">language</i>');
    }
    if(ip_lang == 'SG'){
        $('#menu-top-menu li.flag a').html('sg<i class="material-icons">language</i>');
    }
    if(ip_lang == 'AE'){
        $('#menu-top-menu li.flag a').html('ae<i class="material-icons">language</i>');
    }
    if(ip_lang == 'GB'){
        $('#menu-top-menu li.flag a').html('gb<i class="material-icons">language</i>');
    }
    if(ip_lang == 'US'){
        $('#menu-top-menu li.flag a').html('us<i class="material-icons">language</i>');
    }
    $("#modal-internation .launch.button").click(function(t) {
        t.preventDefault(), window.location = $("#modal-internation .country_flags-select option:selected").val()
    });
});