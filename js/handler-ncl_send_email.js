///require <jquery.packed.js>

//show message on clicking send email button
jQuery(document).ready(function($){
		//worked..   $('#history').click(function(){
		$('#record-actions-ncl_send_email').click(function(){
		//$(this).attr("disabled","disabled");
		alert("Send Email button has been pressed.\n  There is no need to press send email again. \n\nPlease wait for up to a minute to see the message saying the email has been sent.  \n\nPress OK to send the email....");
	});

});

