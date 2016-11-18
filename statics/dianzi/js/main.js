$("document").ready(function(){
    $(".tab-title li").each(function(){
        $(this).click(function(){
            $(this).addClass("actived").siblings().removeClass("actived");
            var index=$(this).index();
            $(".tab-content li").eq(index).show().siblings().hide();
        });
    });
});