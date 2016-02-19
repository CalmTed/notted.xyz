//TeddyFrost©
//if you want to use this code please contact me : r2d2f9@gmail.com
//using this code without contact me is a theft!
var start = function(){
	if($('#notetexthidden').val()==''){}else{
		$('#notetext').html($('#notetexthidden').val());
	}
	$('#notetext script').remove();
	$(document).resize(function(){
	});
	$('#notetext').keyup(function(e){
		$('#save i').removeClass('fa-check').addClass('fa-save');
	});
	$('#save').click(function(){
		clear();
		empty();
		text = $('#notetext').html();
		name = $('#notename').val();
		$('#save i').removeClass('fa-save').addClass('fa-spinner fa-pulse');
		objs = {
			"name" : name,
			"text" : text
		}
		$.ajax({
			type : "POST",
			data : objs,
			url : "../save.php",
			datatype : "json",
			success : function(){
				if($('#notenamehidden').val().length < 1 ){
					$('head').append($("<meta http-equiv='refresh' content='0; url=?n="+ name+"'>"));
				}else{
					$('#save i').removeClass('fa-spinner fa-pulse').addClass('fa-check');
					if($('#notetext').html().length < 1 ){
						if(confirm('Do you want to delite file?')){
							console.log('file deliting');
						}
					}
				}

			},
			error : function() {
				$('#save i').removeClass('fa-spinner fa-pulse').addClass('fa-check');
				alert('aaAaAA! SAVE ERROR!');
			}
		})
	});
	$('#save').on('mousedown',function(){
		clear();
		empty();
		text = $('#notetext').html();
		name = $('#notename').val();
		if(text.length>0&& name.length>0){
			
		$('#save i').removeClass('fa-save').addClass('fa-spinner fa-pulse');
		objs = {
			"name" : name,
			"text" : text
		}
		$.ajax({
			type : "POST",
			data : objs,
			url : "../save.php",
			datatype : "json",
			success : function(){
				$('#save i').removeClass('fa-spinner fa-pulse').addClass('fa-check');	
			},
			error : function() {
				$('#save i').removeClass('fa-spinner fa-pulse').addClass('fa-check');
				alert('aaAaAA! SAVE ERROR!');
			}
		})
		}
	});
	$('#notetext').on('mousedown',function(){
		clear();
	});
	$('#notetext').on('keydown',function(){
		//$('#notename').val($('#notetext').html().length);
		clear();
	});
}//end of start f
var clear = function(){
		$('#emptytext').remove();
		$('#notetext script').remove();
		$('#notetext').children().removeAttr('style');
		$('#notetext').children().children().removeAttr('style');
		$('#notetext').children().children().removeAttr('style');
		$('#notetext').children().children().children().removeAttr('style');
		$('#notetext').children().children().children().children().removeAttr('style');
		$('#notetext').children().children().children().children().children().removeAttr('style');
		$('#notetext').children().children().children().children().children().children().removeAttr('style');
		$('#notetext').children().children().children().children().children().children().children().removeAttr('style');
		$('#notetext').children().children().children().children().children().children().children().children().removeAttr('style');
		$('#notetext').children().children().children().children().children().children().children().children().children().remove();
		
		$('#notetext div').removeAttr('style');
		$('#notetext p').removeAttr('style');
		$('#notetext a').removeAttr('style');
		$('#notetext h1').removeAttr('style');
		$('#notetext h2').removeAttr('style');
		$('#notetext h3').removeAttr('style');
		$('#notetext h4').removeAttr('style');
		$('#notetext h5').removeAttr('style');
		$('#notetext h6').removeAttr('style');
		$('#notetext li').removeAttr('style');
		$('#notetext ol').removeAttr('style');
		$('#notetext ul').removeAttr('style');
}
var empty = function(){
			$('#notetext').children().children().children().children().children().children().children().children().children('*:empty').remove();
		$('#notetext').children().children().children().children().children().children().children().children('*:empty').remove();
		$('#notetext').children().children().children().children().children().children().children('*:empty').remove();
		$('#notetext').children().children().children().children().children().children('*:empty').remove();
		$('#notetext').children().children().children().children().children('*:empty').remove();
		$('#notetext').children().children().children().children('*:empty').remove();
		$('#notetext').children().children().children('*:empty').remove();
		$('#notetext').children().children('*:empty').remove();
		$('#notetext').children('*:empty').remove();
}

$(document).ready(function(){start();});
