$(document).ready(function(){
	/*
	 * Items.php
	 */

	 // Add items
	 $('button.addpRow').on('click',function(){
	 	var addpName = $('#addpName').val();
	 	var addpDesc = $('#addpDesc').val();
	 	var addpImage = $('#file').val().split('\\').pop();
	 	var addpStocks = $('#addpStocks').val();
	 	var addpPrice = $('#addpPrice').val();
	 	var addpCategory = $('#addpCategory').val();
	 	var cName = $('#addpCategory option:selected').text();

	 	$("#uploadimage").trigger('submit');

	 	$.ajax({
	 		url: './adminlib/additem.php',
	 		method: 'POST',
	 		data: {
	 			'pName':addpName,
	 			'pDesc':addpDesc,
	 			'pImage':addpImage,
	 			'pStocks':addpStocks,
	 			'pPrice':addpPrice,
	 			'pCategoryID':addpCategory
	 		}
	 	}).done(function(data){
	 		$('span.addsuccess').html(data);
	 		$('#addpName').val('');
	 		$('#addpDesc').val('');
	 		$('#addpImage').val('');
	 		$('#addpStocks').val('');
	 		$('#addpPrice').val('');
	 		$('.grid.productlists').append(
	 			'<div class="grid tableproducts">'+
	 			'<div>'+addpName+'</div>'+
	 			'<div>'+addpDesc+'</div>'+
	 			'<div>'+'<img src="../assets/img/'+addpImage+'" class="img-fluid">'+'</div>'+
	 			'<div>'+addpStocks+'</div>'+
	 			'<div>'+addpPrice+'</div>'+
	 			'<div>'+cName+'</div>'
	 			+'</div>'
	 			);
	 	});

	 });

	//Image Uploading Ajax
	$("#uploadimage").on('submit',(function(e) {

		e.preventDefault();

		$("#message").empty();

		$('#loading').show();

		$.ajax({
			url: "./adminlib/image_handler.php", 
			type: "POST",             
			data: new FormData(this),
			contentType: false,      
			cache: false,             
			processData:false,
		}).done(function(data){
			$('#loading').hide();
			$("#message").html(data);
		});

	}));

	// Label Uploading Button
	$('input#file').on('change',function(e){
		var fileName = $('#file').val().split('\\').pop();
		var label = $('label.filelabel');
		var labelVal = label.html();
		labelVal = label.html(fileName);
	});

});

function imageIsLoaded(e) {
	$("#file").css("color","green");
};