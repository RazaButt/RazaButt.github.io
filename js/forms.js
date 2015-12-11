var conactPage = conactPage || {};

conactPage = function () {

	var formValidation = (function(){
		
		$('#send-message').submit(function(event) {
			/* Act on the event */
			event.preventDefault();

			var errorBox = $('.contact-form-warn');
			var errorList = $('<ul></ul>');

			/* reset values */
			errorList.empty();
			errorBox.empty();
			$('.contact-form-warn').hide();

			var errorCount = 0;
			var inputList = $('#send-message input , #send-message textarea');

			inputList.removeClass('error');
			
			$.each(inputList, function(index, input) {			
				if($(input).val().length === 0){
					$(input).addClass('error');				
					$('<li>Please fill in ' + $(input).parent().prev('label').text() + '</li>').appendTo(errorList);
					errorCount = errorCount +1;
				};
			});

			if (errorCount > 0 ) {
				errorList.appendTo(errorBox);
				errorBox.show();
			}

			else {
				$(this).unbind('submit').submit()
			}			
		});	
	})();

	return {
		formValidation:formValidation
	}
}();


$(document).ready(function() {
	//myProject.init();
	conactPage.formValidation;
});


