<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Habib Andy - Kuliner Indonesia</title>

	<script src="<?=base_url('aset/js/jquery.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('aset/js/bootstrap.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('aset/js/underscore.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('aset/js/backbone.js')?>" type="text/javascript"></script>

	<link href="<?=base_url('aset/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url('aset/css/bootstrap-theme.min.css')?>" rel="stylesheet" type="text/css">

	<!-- Bootstrap 3 bug fixing -->
	<style>
		@media (max-width: 767px) {
			.row {
				margin-left: 0px;
				margin-right: 0px;
			}
		}
		@media (min-width: 768px) {
			.row { 
				margin-right: 0px;
				margin-left: 0px;
			}
		}
	</style>

	<style>
		#footer {
			border-top: solid 3px #ccc;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;    
			padding: 13px;
		}
	</style>
</head>
<body>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-9">
		<h1>HabibAndy Resto</h1>
		<p><i>kuliner Indonesia...</i></p>
	</div>
</div>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-3">
		<div class="list-group">
			<!--
			<a href="<?=site_url('web/beranda')?>" class="list-group-item" id="menu-beranda">
				<h4 class="list-group-item-heading">Beranda</h4>
				<p class="list-group-item-text">Di sini gambaran besar HabibAndy Resto</p>
			</a>
			-->
			<a href="<?=site_url('web/cara_pakai')?>" class="list-group-item" id="menu-cara_pakai">
				<h4 class="list-group-item-heading">Cara Pakai</h4>
				<p class="list-group-item-text">Bingung bagaimana cara pakai web service HabibAndy Resto? Baca di sini yaa</p>
			</a>
			<a href="<?=site_url('web/ws_temen')?>" class="list-group-item" id="menu-ws_temen">
				<h4 class="list-group-item-heading">WS Temen</h4>
				<p class="list-group-item-text">Di sini kami mendemokan penggunaan web service teman-temaan</p>
			</a>
			<a href="<?=site_url('pasti_gak_ada')?>" class="list-group-item" id="menu-ws_temen">
				<h4 class="list-group-item-heading">Coba error404</h4>
				<p class="list-group-item-text">Cobain langsung ajaa...</p>
			</a>
		</div>
	</div>
	<div class="col-md-6">