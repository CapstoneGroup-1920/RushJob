$(function(){
	$("#add-form").validate({
		rules:{
			title:{
				required: true
			},
			des:{
				required: true
			},
			salary:{
				required: true
				digits: true
			},
			loc:{
				required: true
			}
		}
	});
});