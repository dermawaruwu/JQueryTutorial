<!DOCTYPE html>
<html>
<head>
	<title>JQuery Tutorial</title>
	<link rel="stylesheet" type="text/css" href="cobajquery.css">
	<script src="jquery.min.js" type="text/javascript"></script>
</head>
<body>
	<script type="text/javascript">
		// alert("Versi JQuery ini adalah "+$.fn.jquery);
		$(document).ready(function(){  // tanda $ sama dengan jQuery.
			//jQuery('p').hide(); 
			//$('p').hide(); untuk id
			//$('#cth').hide(); untuk div, di .css jadi untuk id
			//$('.vp').hide(); untuk class
			$('p.a').slideUp().slideDown();
			$('p.b').css("color", 'red');
			$('p#c').css("color", 'blue');
			$("p.d").hover(function(){
				$("p.d").css("color", "#ff4800");
			});
			$(".tombol1").click(function(){
				$("div.divbaru").animate({left:"550px", height:"200px", opacity:".30"}, "slow");
			});
			$(".tombol2").click(function(){
				$("div.divbaru").animate({left:"0px", height:"100px", opacity:"1"}, "slow");
			});				
		});

	</script>
	
	<p class="a">Hello JQuery A</p>
	<p class="b">Hello JQuery B</p>
	<p id="c">Hello JQuery C</p>
	<p class="d">Hover Di Sini, Warna Berubah</p>

	<button class="tombol1">Coba Deh Animasinya</button>
	<button class="tombol2">Kembalikan</button>
	<br />
	<br />
	<div class="divbaru">
		<h3>:)</h3>
	</p>	

	
	

</body>
</html>