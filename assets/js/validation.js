
$(document).ready(function(){

	$(document).on('submit', '#submitForm', function(event){
		event.preventDefault();
		$form = $(this);
		
 // Validation checker.   
 if (validation()==false || check_email()==false || check_phone()==false) {
 	var x = $form.serializeArray();	
   var name = $('#input-name').val();
 	$.each(x, function(i, field){
 		if($.trim(field.value) == ''){
 			if(field.name !='name'){
 			$('#input-'+field.name).addClass('bcolor');
 			$('.label-'+field.name).addClass('label_val');
 			$('#input-'+field.name).removeClass('green_bcolor');
 			$('.label-'+field.name).removeClass('green_label_val');
 			}
 		}
 	});
 	// validation();
 }
 else{
  // Ajax calling.  	
   console.log('Validation success');
   $('#submitForm')[0].reset();
} 
});

});	


// Check required fields and set focus.
function validation(){
	// var name = $('#input-name').val();
	// var firstname = $.trim(name);
	// if (firstname=='' || firstname==null) {
	// 	return false;
	// }



	var email = $('#input-email').val().toLowerCase();;
	var mail = $.trim(email);
	if (mail=='' || mail==null) {
		return false;
	}



	var phone = $('#input-phone').val();
	var phone = $.trim(phone);
	if (phone=='' || phone==null) {
		return false;
	}

	var orgnisation = $('#input-orgnisation').val();
	var orgnisation = $.trim(orgnisation);
	if (orgnisation=='' || orgnisation==null) {
		return false;
	}

}


// remove validation css class
$(document).on('keydown', 'input', function(){
	$form = $(this);
	var x = $form.serializeArray();
	$.each(x, function(i, field){
			$('#input-'+field.name).removeClass('bcolor');
			$('.label-'+field.name).removeClass('label_val');
			$('#input-'+field.name).addClass('green_bcolor');
			$('.label-'+field.name).addClass('green_label_val');
			$('.ccode_btn').addClass('green_bcolor');
	});
});



// Check Email Validation.
function check_email(){
	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	if(pattern.test($("#input-email").val())) {
		$('#input-email').removeClass('bcolor');
		$('.label-email').removeClass('label_val');
		$('#input-email').addClass('green_bcolor');
		$('.label-email').addClass('green_label_val');
		$('.label-email').html('Email');
		return true;
	} else {
		$('#input-email').removeClass('green_bcolor');
		$('.label-email').removeClass('green_label_val');
		$('#input-email').addClass('bcolor');
		$('.label-email').addClass('label_val');
		$('.label-email').html('Enter valid email id');
		return false;
	}	
}


// check phone number length (phone validation).
function check_phone(){
	var phone = $("#input-phone").val();
	if (phone.length!=10) {
		$('#input-phone').removeClass('green_bcolor');
		$('.label-phone').removeClass('green_label_val');
		$('#input-phone').addClass('bcolor');
		$('.label-phone').addClass('label_val');
		// $('.label-phone').html('Enter valid phone number');
		return false;
	}
	else{
		$('#input-phone').removeClass('bcolor');
		$('.label-phone').removeClass('label_val');
		$('#input-phone').addClass('green_bcolor');
		$('.label-phone').addClass('green_label_val');
		$('.label-phone').html('Phone');
		return true;
	}
}


// Dynamic display Email Validation error.
$(document).on('keyup', '#input-email', function(){
	var data = this.value.toLowerCase();
	// console.log(data);
	$('#input-email').val(data);
	check_email();
});

// Dynamic display Phone Validation error.
$(document).on('keyup', '#input-phone', function(){
	var maxLimit = 10;
	var lengthCount = this.value.length;              
	if (lengthCount > maxLimit) {
		this.value = this.value.substring(0, maxLimit);
		var charactersLeft = maxLimit - lengthCount + 1;                   
	}
	else {                   
		var charactersLeft = maxLimit - lengthCount;                   
	}
	if(charactersLeft=='1'){
		var more = 'more digit';
	}
	else{
		more = 'more digits';
	}
	$('.label-phone').html('Enter valid phone number. <span class="phonecount"><b>'+ charactersLeft +'</b> '+ more +'</span>');
	check_phone();	
});


// Nuber Validation.
$(document).ready(function () {
	$("#input-phone").keypress(function (e) {
  	// allow numbers only.
  	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
  		return false;
  	}
  });
});

// Alphabets validation.
$(document).ready(function(){
	$("#input-name").keypress(function(event){
		var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 90 || inputValue>=97 && inputValue<=122) && (inputValue != 32 && inputValue != 0) && (inputValue!=46) && (inputValue!=39)) { 
        	event.preventDefault(); 
        }

        
    });
});


// Alphabets validation.
$(document).ready(function(){
	$("#input-orgnisation").keypress(function(event){
		var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 90 || inputValue>=97 && inputValue<=122) && (inputValue != 32 && inputValue != 0) && (inputValue!=46) && (inputValue!=39)) { 
        	event.preventDefault(); 
        }

        
    });
});

function capitalize_Words(data)
{
	return data.replace(/\w\S*/g, function(txt)
	{
		return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
	});
	console.log(data);
}


$(document).on('keyup', '#input-name', function(){
	if($('#input-name').val()!=""){
		var data = $('#input-name').val();
		$('#input-name').val(capitalize_Words(data));
		$('#input-name').addClass('green_bcolor');
		$('.label-name').addClass('green_label_val');

		var maxLimit = 50;
		var lengthCount = this.value.length;              
		if (lengthCount > maxLimit) {
			this.value = this.value.substring(0, maxLimit);
			var charactersLeft = maxLimit - lengthCount + 1;                   
		}
		else {                   
			var charactersLeft = maxLimit - lengthCount;                   
		}
	// console.log(charactersLeft)

}
});


$(document).on('keyup', '#input-orgnisation', function(){
	if($('#input-orgnisation').val()!=""){
		var data = $('#input-orgnisation').val();
		$('#input-orgnisation').val(capitalize_Words(data));
		$('#input-orgnisation').addClass('green_bcolor');
		$('.label-orgnisation').addClass('green_label_val');

		var maxLimit = 50;
		var lengthCount = this.value.length;              
		if (lengthCount > maxLimit) {
			this.value = this.value.substring(0, maxLimit);
			var charactersLeft = maxLimit - lengthCount + 1;                   
		}
		else {                   
			var charactersLeft = maxLimit - lengthCount;                   
		}
	// console.log(charactersLeft)

}
});