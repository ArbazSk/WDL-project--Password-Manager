$(function(){
	$('')

	$('#address').on('blur',function(){
		console.log(this.value.length);

		if(this.value.length<50 && this.value.length>150){
			alert("Invalid address. Length must be between 50 to 150 chararacter");
			this.value="";
			$(this).focus();
		}

	});

	$('#semail').on('blur',function(){
		if(/((\w*.?_?-?\d*\w+)@(\w*-?.?\d*\w+).(\w*-?))/.test(this.value)){
			alert("Invalid Email.");
			this.value="";
			$(this).focus();
		}
		


	});

});