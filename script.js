
		$("#name").click(function(){
			$("#help-name").slideDown();
		}).blur(function() {
			$("#help-name").slideUp();
		});
		$(".email").click(function(){
			$("#help-email").slideDown();
		}).blur(function() {
			$("#help-email").slideUp();
		});
		$(".phone").click(function(){
			$("#help-phone").slideDown();
		}).blur(function() {
			$("#help-phone").slideUp();
		});

			

$("#submit").click(function(){
		// jquery function to validate email
			 function validateEmail($email) {
			  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			  return emailReg.test( $email );
			}
		$("#submit").html('Proceed <img src="images/ajax-loader (1).gif">');
		setTimeout(function(){
			 var start = new Date( $('#start').val() ).getTime(),
        end = new Date( $('#end').val() ).getTime();
       var result = ((end - start) / 86400000); 
    //1000 * 60 * 60 * 24 = 1 day = 86400000
    // alert(result);
    $("#no_night").val(result);
    alert(result);
		$("#submit").html('Proceed');
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var room = $("#room").val();
		var adult = $("#adult").val();
		var strt_date = $("#strt_date").val();
		var end_date = $("#end_date").val();
		var message = $("#message").val();



		  // validating the input field
		 if (name == '' || email == '' || phone == '' || room == '' || adult == '' || strt_date == '' || end_date == '' || message == '') {
		 	$("input").css("border-color-color", "red");
		 	$("select").css("border-color-color", "red");
		 	$("textarea").css("border-color-color", "red");
		 	$("#error-message").html("Input field cannot be left empty please enter a valid details");
		 }
		 else if (room==0) {
		 	$("#room").css("border-color",  "red");
		 	$("#error-message").html("You must select at least one rooom");
		 	
		 	// swal("Oops!", "You must select at least one rooom",  "warning");
		 }
		 else if (adult==0) {
		 	swal("Oops!", "You must choose the number of adult",  "warning");
		 }
		 else if (strt_date == '') {
		 	$("#strt_date").css('border-color', 'red');
		 	$("#error-message").html("A start date is required");
		 }
		 else if (end_date == '') {
		 	$("#end_date").css('border-color', 'red');
		 	$("#error-message").html("An end date is required");
		 }
		 else if (name == '') {
		 	$("#error-message").html("Please enter your name");

		 }
		 else if( !validateEmail(email)) {
		 	$("#email").css("border-color", "red");
		 	$("#error-message").html("Please enter a valid email");
		 }
		 
		 else {
		 	setTimeout(function(){
				window.location='rooms-tariff_client.php';
			},3000);
	// $.ajax({
	// 	type: "POST",
	// 	url:   "include/btn_reserve.php",
	// 	data:{name:name,email:email,phone:phone,room:room,adult:adult,strt_date:strt_date,end_date:end_date,message:message},
	// 	success : function(data){

	// 		if (data=="success") {
	// 		swal("Success", "You have successfully registered", "success");
	// 		var name = $("#name").val('');
	// 		var email = $("#email").val('');
	// 		var phone = $("#phone").val('');
	// 		var room = $("#room").val('');
	// 		var adult = $("#adult").val('');
	// 		var strt_date = $("#strt_date").val('');
	// 		var end_date = $("#end_date").val('');
	// 		var message = $("#message").val('');
	// 		setTimeout(function(){
	// 			window.location='rooms-tariff_client.php';
	// 		},1000);
	// 		}
			
	// 		else{
	// 			 if (data == "exist") {
	// 		swal("Opps!", "Email already exist please choose another email address", "warning");
	// 		}
	// 		else{
	// 		swal("Opps!", "Error in registration", "warning");
	// 		}
	// 		}
	// 	}
	// })
	}
		}, 3000);

		// using the datepicker function below
		
});