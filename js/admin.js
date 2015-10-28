$(document).ready(function(){
	$(document).on('click', '.media-upload', function() { 
		var par = $(this).parent(); 
		var send_attachment_bkp = wp.media.editor.send.attachment; 
		wp.media.editor.send.attachment = function(props, attachment) { 
		par.children('.media').attr('src', attachment.url); 
		par.children('.media-img').val(attachment.url); 
		// jQuery('.custom_media_id').val(attachment.id); 
		wp.media.editor.send.attachment = send_attachment_bkp; 
		} 
		wp.media.editor.open(); 
		return false; 
	});
});