$(document).ready(function(){  

	$("#submit").click(function(){$('#loading').show();

		var errMsg = ''; 

		var lname = trim($('#name').val()); 
		var email_id = trim($('#email_id').val());
		var phone = trim($('#phone').val());
		var message = trim($('#message').val());

		var dataString = 'name='+ name + '&email_id='+ email_id + 'phone='+ phone + '&message='+ message;

		if(name=='undefined' || name==''){ errMsg += '<li>Please provide Your Name !!\n</li>'; }
		if(email_id=='undefined' || email_id=='' || !checkemail(email_id)){ errMsg += '<li>Please provide Email Id !!\n</li>'; }
		if(phone=='undefined' || phone==''){ errMsg += '<li>Please provide Phone Number !!\n</li>'; }
		if(message=='undefined'|| message==''){errMsg+='<li>Please Enter Your Message !!\n</li>';}

		if(errMsg!=''){ $('#loading').hide();showError(errMsg); return false; }

		else{

			$.ajax({type: "POST", url: "phpmailer/ajaxsubmit.php", data: dataString, cache: false, success: function(data){$('#loading').hide();showSucess(data);$("#contactForm")[0].reset();}

			});

		}

		return false;

	});

});

