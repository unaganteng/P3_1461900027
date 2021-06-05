<!DOCTYPE html>
<html>
<head>
	<title>Join Broooo</title>
</head>
<body>
 
<h2>Data Pelanggan</h2>
 
<ul>
	@foreach($pelanggan as $use)
		<li>{{ "Id : ". $use->Nama . ' | Alamat : ' . $p->alamat }}</li>
	@endforeach
</ul>
 
</body>
</html>