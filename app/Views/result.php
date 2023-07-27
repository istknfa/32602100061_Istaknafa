<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<style type="text/css">
	html {
		height: 100%;
	}
	body {
		margin:0;
		padding:0;
		font-family: sans-serif;
		background: linear-gradient(#141e30, #243b55);
		color: #fff;
	}
	.result {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 400px;
		padding: 40px;
		transform: translate(-50%, -50%);
		background: rgba(0,0,0,.5);
		box-sizing: border-box;
		box-shadow: 0 15px 25px rgba(0,0,0,.6);
		border-radius: 10px;
	}
</style>
<body>
	<div class="result">
	<h1>Result</h1>
	<p>Nama: <?php echo $nama; ?></p>
	<p>NIM: <?php echo $nim; ?></p>
	<p>Kelas: <?php echo $kelas; ?></p>
	<p>Mata Kuliah: <?php echo $matakuliah; ?></p>
	<p>Dosen Pengampu: <?php echo $dosen; ?></p>
	<p>Asisten Praktikum: <?php echo $asisten; ?></p>
	</div>
</body>
</html>