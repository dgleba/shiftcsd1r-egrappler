
// ver: 10  ..  2013-08-01_Thu_13.55-PM 

///require <jquery.packed.js>

//show message on clicking send email button
jQuery(document).ready(function($){
		//worked..   $('#history').click(function(){
		$('#record-actions-send_email_test').click(function(){
		//$(this).attr("disabled","disabled");
 		alert("Send Email button has been pressed.\n\n  -There is no need to press the 'Send Email' button again. \n\n  -This button should only be single-clicked. Don't double-click it.\n\nPlease wait for up to a minute to see the message saying the email has been sent.  \n\nPress OK to send the email....\n");

	});

});


//	alert("\nGood news: You pressed the Save button!.\n\n\nPress OK to continue and save this record....\n\n\nPlease wait for up to a minute after pressing the OK button in this box to see the 'Success' message.\n");
