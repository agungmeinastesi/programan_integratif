<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Cara Pakai</h3>
	</div>
	<div class="panel-body">
		<p>
			Misalkan direktori HabibAndy ini ada di alamat sebagai berikut : 
		</p>
		<p>
			<code>http://localhost/progin-itb/habibandy</code>
		</p>
		<p>
			Maka alamat web service kami ada di:
		</p>
		<p>
			<code>http://localhost/progin-itb/habibandy/index.php/ws/</code>
		</p>

		<p>
			Maka cara untuk mengakses menu makanan adalah sebagai berikut :
		</p>
		<p>
			<ul>
				<li>
					<h4>Semua menu</h4>
					<br>
					<code>http://localhost/progin-itb/habibandy/index.php/ws/semua</code>
					<br><br>
					<a href="<?=site_url('ws/menu/semua')?>" class="btn btn-success" target="__blank">Coba ambil semua menu</a>
					<br><br>
					Contoh keluaran:
					<img src="<?=base_url('aset/gambar/semua.PNG')?>" class="img-responsive img-thumbnail">
				</li>
				<li>
					<h4>Berdasar kategori (minuman / makanan-berat / makanan-ringan)</h4>
					<br>
					<code>http://localhost/progin-itb/habibandy/index.php/ws/kategori/makanan-berat</code>
					<br><br>
					<a href="<?=site_url('ws/menu/kategori/makanan-berat')?>" class="btn btn-success" target="__blank">Coba ambil berdasar kategori</a>
					<br><br>
					Contoh keluaran:
					<img src="<?=base_url('aset/gambar/berdasar-kategori.PNG')?>" class="img-responsive img-thumbnail">
				</li>
				<li>
					<h4>Berdasarkan daerah (Jawa / Bali / Sumatra)</h4>
					<br>
					<code>http://localhost/progin-itb/habibandy/index.php/ws/daerah/Jawa</code>
					<br><br>
					<a href="<?=site_url('ws/menu/daerah/Jawa')?>" class="btn btn-success" target="__blank">Coba ambil berdasar daerah</a>
					<br><br>
					Contoh keluaran:
					<img src="<?=base_url('aset/gambar/berdasar-daerah.PNG')?>" class="img-responsive img-thumbnail">
				</li>
			</ul>
		</p>
	</div>
</div>