<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
* {
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}
a{
	color:inherit;
	text-decoration: none;
}
body{
	display: flex;
	flex-direction: column;
	min-height: 100vh;
}

.container{
	width:80%;
	margin:0 auto;

}
.container:after {
	content:'';
	display: block;
	clear: both;
}
header h1 {
	float:left;
	padding: 15px 0;
	color: #000000;
}
header ul {
	float:right;

}
header ul li {
	display:inline-block;
}
header ul li a {
	padding: 25px 20px;
	display: inline-block;
}
header ul li a:hover {
	background-color: #148F77;
	color: #fff;
}
footer {
	padding: 25px 0;
	background-color: #333;

	color: #fff;
	text-align: center;
	margin-top: auto;
}
</style>
<body>
    <header>
        <nav>
            <div class="container">
			    <h1><a href="/">
				    Data Mahasiswa
			    </a></h1>
				    <ul>
					    <li><a href="/">HOME</a></li>
					    <li><a href="/data-mhs">DATA MAHASISWA</a></li>
					    <li><a href="/tambah-data-mhs">TAMBAH DATA MAHASISWA</a></li>
				    </ul>
		</div>
        </nav>
    </header>

	@yield('container')<br>

	<footer>
		<div class="container">
		<small>CopyRight @ 2023 Praktikum Web Lanjut</small>
	</footer>
</body>
</html>