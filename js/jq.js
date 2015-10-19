$(document).ready(function(){
    // $(".image").each(function() {
    //     $(this).width($(this).width() / 2);
    //       //$(this).height($(this).height() / 2);
    // });
    // $(".quick-tabs-links").click(function(event){
    // 	//event.preventDefault();
    //  	if ($(this).hasClass("second")) {
    //  		alert("test");
    //  	}
    //  });

	$(".tab").find("a").click(function(event){
		event.preventDefault();
	});

    $(".tab").on('click', function(){
    	$(".quick-tabs-links li").removeClass("active");
    	$(this).addClass("active");
		var tab = $(this).attr('data-tab');
		$(".quick-tabs-container").hide();
		$("#tab_" + tab).show();

    });
});