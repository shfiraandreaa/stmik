$( document ).ready(function() {
	
	$(".register").click(function(evt){
		
		evt.preventDefault();
		
		var namaFile = "../registerUser.php";
		
		$.get(namaFile, function(data){
			$('.login').html(data);
			
		});
			
		
	});
	
	$('body').on('submit' , '#reg', function(evt){
		
		evt.preventDefault();
		
		var alamatDituju = "controller/signupUser.php";
		var userDiterima = $("#user").val();
		var passDiterima = $("#pass").val();
		var emailDiterima = $("#email").val();
		
		var data = {user : userDiterima , pass : passDiterima , email : emailDiterima};
		
		$.post(alamatDituju, data, function(respon){
			if(respon == 'Tersimpan'){
				alert("data berhasil disimpan");
				location.reload();
			}else{
				alert("data gagal disimpan");
			}
		});
		
		
		
		
	});
});