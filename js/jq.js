$(document).ready(function(){
//quick-tabs
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


   // $('select').find("option[value='Выберите специальность']").attr('disabled','disabled');
});