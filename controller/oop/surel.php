<?php
	class surel{
		
		public $judulEmail;
		public $kepada;
		public $pesan;
		public $header;
		
		public function kirim(){
			mail($this->kepada, $this->judulEmail, $this->pesan, $this->header);
				//echo "E-mail Terkirim";
		}
	}
?>