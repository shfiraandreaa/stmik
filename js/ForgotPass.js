$( document ).ready(function() {
	
	$('.fgtPass').click(function(evt){
		evt.preventDefault();
		
		//var namaFile = "../ForgotPass.html";
		var namaFile = $(this).attr('href');
		
		$.get(namaFile, function(data){
			$('.kanan').html(data);
			
		});
	});
	
	$('body').on('submit' , '#recovery', function(evt){
		
		//$('.preload').css('display','block');
		$('.preload').show();
		$('.btn-submit').hide();
		
		evt.preventDefault();
		
		var alamatDituju = "controller/forgotPass.php";
		var emailDiterima = $("#email").val();

		var data = {email : emailDiterima};
		
		$.post(alamatDituju, data, function(respon){
			if(respon == 'Terkirim'){
				alert("email berhasil terkirim");
				location.reload();
			}else{
				alert("data tidak ditemukan");
			}
		});
		
		
	});
});