function kirimChat(){
	var pesan = $('#message').val();
		var username = $('#nickname').val();
		var alamatTujuan = "controller/simpanchat.php";	
		var alamatTujuan2 = "controller/getChatting.php";

		$.post(alamatTujuan, {'nickname':username, 'message':pesan},function(data){
				
				//alert(data);
				
				var txarea = $('#conversation');
				var obrolan = txarea.val();
					//newline
				txarea.val (obrolan + '\n' + username + ':' + pesan);
				
				var obrolanBaru = txarea.val();
				
				$('#message').val("");
				
					$.post(alamatTujuan2, {'username':username},function(data){
						//alert(data);
						
						var dataDiperoleh = JSON.parse(data);
							//alert(dataDiperoleh);
						//periksa didalam oborlan
						//apakah sudah ada data tsb?
						var i;
							//alert(dataDiperoleh[0]);
						for(i=0; i<dataDiperoleh.length; i++){
							var message = dataDiperoleh[i];
								obrolanBaru = txarea.val();
								//memeriksa bahwa obrolan tidak mengandung message dibawah
							if(obrolanBaru.indexOf(message) === -1){
								txarea.val(obrolanBaru + '\n' + message);
							}
						}
			
					});
				
				
			});
	
}


$( document ).ready(function() { 

	$('body').on('submit', 'form', function(ev){
		
		
		ev.preventDefault();
		
		var alamatTujuan = $(this).attr('action');
	
		
		var formulir = $(this);
		
			$.post(alamatTujuan, $(this).serialize(),function(data){
				
				alert(data);
				
				$(formulir).find("input[type=text], textarea, input[type=number], input[type=e-mail]").val("");
				
			});
			
	});
	
	$('body').on('keypress', '#message', function(evt){
		
		// no.13 ialah nomor keyboard-enter
		if(evt.which == 13){
			kirimChat();
		}
		
		
	});
	

	$('body').on('click', '#send', function(){
		kirimChat();
		
	});

	// ketika yg diklik adalah anchor dengan class = "delete"
	$('body').on('click', '.delete', function(ev){
		// menghadang agar linktidak jadi pindah ke page lain
		ev.preventDefault();
		
		// mengambil nilai dari href
		var alamatTujuan = $(this).attr('href');
		
				
		// mengambil nilai data dari element link tsb
		var namaTarget = $(this).attr('data');
		//var namaFile= $(this).children().text().replace(/\s/g, '') + '.html';
		var namaFile= 'management'+namaTarget + '.php';
			
			$.get(alamatTujuan, function(data){
				
				if(data=='sukses'){
					alert("data berhasil terhapus");
					
				$.get(namaFile, function(data){
					$('.konten').html(data);
			});
			
				}else if(data=='gagal'){
					alert("data gagal terhapus");
				}
			
			});
			

			
			
	});


	$('#chat').click(function(){
			
			var namaFile= "chat.php";
			//mengambil value dr username input hidden
			var username = $('#username').val();
			
			$.get(namaFile, {'username':username},function(data){
				$('.konten').html(data);
			
			});
			
	});
	
	$('#setting').click(function(){
			
			var namaFile= "setting.html";
			
			$.get(namaFile, function(data){
				$('.konten').html(data);
			
			});
			
	});

	$('.form').click(function(){
		//replace sg,"menghilangkan semua space dalam segala nilai string variable"
		var namaTarget = $(this).attr('data');
		//var namaFile= $(this).children().text().replace(/\s/g, '') + '.html';
		var namaFile = "";
		
		if(namaTarget == 'jurusan' || namaTarget == 'siswa' || namaTarget == 'guru'){
			 namaFile= namaTarget + '.php';
		}else{
			 namaFile= namaTarget + '.html';
		}

		var parameterPembeda = {'jenis_formulir': 'baru'};
		
		$.get(namaFile, parameterPembeda, function(data){
			$('.konten').html(data);
		
		});
		
	});
	
	$('.management').click(function(){
		
		var namaTarget = $(this).attr('data');
		var namaFile= 'management'+namaTarget + '.php';

		$.get(namaFile, function(data){
			$('.konten').html(data);
		
		});
		
	});
	
		$('.profil').click(function(evt){
			evt.preventDefault();
			
		var namaTarget = $(this).attr('href');
		var nomor_id = $(this).attr('no-id');
		
		//= itu artinya menyimpan nilai
		//== itu artinya memeriksa nilai
		//|| itu artinya atau
		//: artinya ngasih nilai
		var jenis_formulir = {'jenis_formulir' : 'profil', 'nomor_id' : nomor_id }
		
		$.get(namaTarget, jenis_formulir, function(data){
			$('.konten').html(data);
		
		});
		
	});
	
	$('.item').mouseover(function(){
		$(this).children('.subitem').show();
		$(this).children('.subitem').css('display', 'inline');
	});
	
	$('.item').mouseout(function(){
		$(this).children('.subitem').hide();
		$(this).children('.subitem').css('display', 'none');
	});
	
	//bedanya click and change. ketika nilai berubah meski tidak menggunakan mouse
	$('body').on('change', '.fk', function(){
		
		var namaFk = $(this).val();
			//alert("a");
		var alamatTujuan = "controller/getJurusan.php";
		var data = {fakultas : namaFk};
			
			//yg di dlm kurung function merupakan call ataupun respon dari server (data yg dikembalikan)
			$.post(alamatTujuan, data, function(respon){
				
				//mengconvert json dari php
				var dataJr = JSON.parse(respon);
				var nomor;
				var namaJurusan = "";
				for(nomor=0; nomor<dataJr.length; nomor++){
					namaJurusan += "<option>"+dataJr[nomor]+"</option>";
					
				}
				
				$('.jr').html(namaJurusan); 
			});
			
	});
	
	$('body').on('change', '#check', function(){
		
		//mengambil nilai type pada input checkbox tersebut
		var jenis=$('.pass').attr('type');
		
		if(jenis == 'text'){
			
			$('.pass').attr('type' , 'password');
			
		}else{
			$('.pass').attr('type' , 'text');
		}
		
		
	});
		

});