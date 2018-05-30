
$('.productlists').DataTable({
	"autoWidth": true,
	responsive:true
});

$('.ordercontainer').DataTable({
	"autoWidth": true,
	responsive:true
});

$('.userscontainer').DataTable({
	"autoWidth": true,
	responsive:true
});



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
 		$('span.addsuccess').show();
 		$('span.addsuccess').html('Added an Item');
 		$('#addpName').val('');
 		$('#addpDesc').val('');
 		$('#addpImage').val('');
 		$('#addpStocks').val('');
 		$('#addpPrice').val('');
 		$('.grid.productlists').append(data);
 		$('label.filelabel').html('Upload Image');
 		$('span.addsuccess').fadeOut(2500);
 	});
 });

//Image Uploading Ajax
$("#uploadimage").on('submit',(function(e) {

	e.preventDefault();

	$.ajax({
		url: "./adminlib/image_handler.php", 
		type: "POST",
		data: new FormData(this),
		contentType: false,      
		cache: false,             
		processData:false 
	});

}));

// Label Uploading Button
$('input#file').on('change',function(e){
	var fileName = $('#file').val().split('\\').pop();
	var label = $('label.filelabel');
	var labelVal = label.html();
	labelVal = label.html(fileName);
});

//Clear fields 
$('.clearfields').on('click',function(){
	$('#addpName').val('');
 	$('#addpDesc').val('');
 	$('#addpImage').val('');
 	$('#addpStocks').val('');
 	$('#addpPrice').val('');
});
//Edit/Update Items

/* Reserved code */
// $(document).on('dblclick','[class*=pCell]',function(){
// 	var pId = $(this).data('productid');
// 	var col = $(this).data('col');
// 	var cellClass = '.cellItem'+pId+'col'+col;
// 	var inputval = $(cellClass+'input').val();
// 	var readOnly = $(cellClass+'ReadOnly');
// 	$(cellClass).toggleClass('d-none');
// 	readOnly.html(inputval);
// });

$(document).on('click','.btn.editbtn',function(){
	var id = $(this).parent().data('productid');
	var btntarget = '.buttonsave0'+id;
	//cells
	var cellItem01 = '.cellItem'+id+'col1';
	var cellItem02 = '.cellItem'+id+'col2';
	var cellItem04 = '.cellItem'+id+'col4';
	var cellItem05 = '.cellItem'+id+'col5';

	$(cellItem01).toggleClass('d-none');
	$(cellItem02).toggleClass('d-none');
	$(cellItem04).toggleClass('d-none');
	$(cellItem05).toggleClass('d-none');
	$(this).toggleClass('d-none');
	$(btntarget).toggleClass('d-none');
});

$(document).on('click','.btn.savebtn',function(){
	var id = $(this).parent().data('productid');
	var btntarget = '.buttonedit0'+id;
	//cells
	var cellItem01 = '.cellItem'+id+'col1';
	var cellItem02 = '.cellItem'+id+'col2';
	var cellItem04 = '.cellItem'+id+'col4';
	var cellItem05 = '.cellItem'+id+'col5';
	//inputs
	var input01 = cellItem01+'input';
	var input02 = cellItem02+'input';
	var input04 = cellItem04+'input';
	var input05 = cellItem05+'input';
	//input values
	var value01 = $(input01).val();
	var value02 = $(input02).val();
	var value04 = $(input04).val();
	var value05 = $(input05).val();
	//readonly
	var readonly01 = cellItem01+'ReadOnly';
	var readonly02 = cellItem02+'ReadOnly';
	var readonly04 = cellItem04+'ReadOnly';
	var readonly05 = cellItem05+'ReadOnly';

	$.ajax({
		url: "./adminlib/edititem.php",
		method:'POST',
		data:{
			'pName': value01,
			'pDesc': value02,
			'pStocks': value04,
			'pPrice': value05,
			'id': id
		}
	}).done(function(data){
		$('span.editmsg').show();
		$('span.editmsg').html(data);
		$('span.editmsg').fadeOut(2500);
	});

	$(readonly01).html(value01);
	$(readonly02).html(value02);
	$(readonly04).html(value04);
	$(readonly05).html(value05);


	$(cellItem01).toggleClass('d-none');
	$(cellItem02).toggleClass('d-none');
	$(cellItem04).toggleClass('d-none');
	$(cellItem05).toggleClass('d-none');
	$(this).toggleClass('d-none');
	$(btntarget).toggleClass('d-none');
});



//Delete items
$(document).on('click','.btn.deleteitem',function(){
	var itemid = $(this).parent().data('productid');
	$('.deletefinal').data('itemid',itemid);	
	$('#deletemodal').modal('toggle');
});

$(document).on('click','.btn.deletefinal',function(){
	var itemid = $('.deletefinal').data('itemid');
	console.log(itemid)
	$.ajax({
		url:'./adminlib/deleteitem.php',
		method: 'POST',
		data: {'itemid':itemid}
	}).done(function(data){
		$('#deletemodal').modal('toggle');
		if(data=="This item is in some users' cart"){
	 		$('span.deletemsg').show();
			$('span.deletemsg').html(data);
			$('span.deletemsg').fadeOut(3500);
 		}else{
			var divclass = '.productid0'+itemid;
			$(divclass).hide();
			$('span.deletemsg').show();
			$('span.deletemsg').html(data);
			$('span.deletemsg').fadeOut(3500);
 		}
		
	});
});
