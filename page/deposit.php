<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../css/page.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
<h1 class="page-title">• Deposit</h1>
<div class="widget">
<u><b>Informasia:</b></u>
<p>Akan terdapat 3 digit sebagai angka unik untuk pengecekan. Nama pengirim harus sesuai dengan nama akun.<br/>Mohon untuk diperhatikan lebih baik karena kesalahan dapat diproses dalam waktu 24x7 jam.</p>
</div><br/>
<div class="row">
<div class="column">
<label for="nominal">Nominal</label><br/>
<input type="number" id="nominal" onkeyup="nominal();" min="10000" class="input-text" placeholder="10000"/><br/><br/>
<label for="bpengirim">Bank Pengirim</label><br/>
<input type="text" id="bpengirim" class="input-text" placeholder="Masukkan nama bank"/><br/><br/>
<label for="pengirim">Nama Pengirim</label><br/>
<input type="text" id="pengirim" class="input-text" placeholder="Masukkan nama"/><br/><br/>
</div>
<div class="column">
<label for="pengirim">Tujuan</label><br/>
<select id="tujuan" onchange="nominal();" class="input-text">
<option value="1">BCA VA (Otomatis)</option>
<option value="2">BNI VA (Otomatis)</option>
<option value="3">BRI VA (Otomatis)</option>
<option value="4">BCA Transfer (Manual)</option>
<option value="5">BNI Transfer (Manual)</option>
<option value="6">BRI Transfer (Manual)</option>
</select>
<br/><br/>
<div class="widget">
<div class="row">
<div class="column">
<h3>Yang harus dibayarkan sebesar:</h3>
<h3>Rp</h3><h2 id="nom">1000000</h2><br/>
</div>
<div class="column">
<h3>Ke rekening:</h3>
<h2>7135260801</h2> <h3>BCA</h3><br/>
</div>
</div>
<button class="btn" style="background:white;color:black;">Konfirmasi Deposit</button>
</div>
</div>
</div>
<script type="text/javascript">
var unique=0;
function generateU(){
	unique = parseInt(document.getElementById("nominal").value)+Math.floor(Math.random() * (999 - 101) ) + 101;
}
function nominal(){
	if (document.getElementById("nominal").value >= 10000){
		if (document.getElementById("tujuan").value >= 4){
			if (unique == 0){
				generateU();
			}
			document.getElementById("nom").innerHTML = unique;
		}else{
			document.getElementById("nom").innerHTML = document.getElementById("nominal").value;
		}
		document.getElementById("nominal").style.border = "1px solid #bdc3c7";
	}else{
		document.getElementById("nom").innerHTML = 0;
		document.getElementById("nominal").style.border = "1px solid red";
	}
}
</script>
