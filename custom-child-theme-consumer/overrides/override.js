$('.title-toggler').on('click',function(e){
    e.preventDefault()
    var target = '#' + $(this).data('target')
    if( !$(this).hasClass('active')){
       
        //$('.description').slideUp(200)
        $(target).slideDown(200)
        $(this).addClass('active')
    }
    else{
        $('.title-toggler').removeClass('active')
        $('.description').slideUp(200)
    }
    
})
$(document).ready(function(){
    setTimeout(function(){
        $('.banner-top-new').addClass('shown')
    },1500)
})


