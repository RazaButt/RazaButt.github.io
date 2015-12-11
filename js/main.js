var myProject = myProject || {};


 myProject = function(){

	var myModule = (function() {

		var main = function() {
			alert('hello1s2');
		};

		var main2 = function() {
			alert('hello2');
		};

		var init = function(){
			main();
			main2();
		};

		return {
			init:init
		};
	})();

	var handleImgClicks = (function() {

		var profilePic = function() {
			$('img').click(function(event) {
				console.log($(this).attr('title'));
			});	
		};

		return {
			profilePic:profilePic
		}
		
	})();

	var init = function(){
		myModule.init();
		handleImgClicks.profilePic();
	};


	return {
		init:init
	}
}();

	


$(document).ready(function() {
	//myProject.init();
});


