<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Web Service Teman</h3>
	</div>
	<div class="panel-body">
		<p>Gunawan / Nicolas / Nurafni | diakses menggunakan AJAX jQuery :  </p>
		<code><?=$direktoriProgin?>II3160-Pemograman-Integratif/show.php?data=makanan.xml</code>
		<br><br>
		<table id="tabel-nico" class="table table-bordered">
			<tr><th>Nama</th><th>Harga</th></tr>
		</table>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$.ajax({
		type: "GET",
		url: "<?=$direktoriProgin?>II3160-Pemograman-Integratif/show.php?data=makanan.xml",
		dataType: "xml",
		success: function(xml) {
			$(xml).find('makanan').each(function() {
				var nama = $(this).find('nama').text();
				var harga = $(this).find('harga').text();
				console.log(nama);
				$('<tr></tr>').html('<td>' + nama + '</td><td>' + harga + '</td>').appendTo('#tabel-nico');
			});
		}
	});
});
</script>