<!DOCTYPE HTML>
<html>
<head>
<title> Saya </title>
    
<link rel="stylesheet" href="style.css">
</head>
<body background="1.jpg">
<header class="header">
    <marquee><font size="100" color="blue">LUKMAN YAHYA SAPUTRA</marquee>
    </header>
    
<nav class="topnav">
    <a href="https://www.facebook.com">Facebook</a>
    <a href="https://www.youtube.com">Youtube</a>
    <a href="https://www.google.com">Google</a>
    <a href="https://www.bing.com">Bing</a>
    <a href="Kalkulator.php">Kalkulator</a>
</nav>
<div class="row">
    <article class="leftcolumn">
<div class="card">
<img src="1.jpeg" width="640" height="360">
        </article>
        
    <aside class="rightcolumn">
<div class="card">
<div class="fakeimg" style="height:60px;">Bingung</div>
</div>
<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
</head>
<style>
    #jam-digital{overflow:hidden; width:350px}
    #hours{float:left; width:100px; height:50px; background-color:#6B9AB8; margin-right:25px}
    #minute{float:left; width:100px; height:50px; background-color:#A5B1CB}
    #second{float:right; width:100px; height:50px; background-color:#FF618A; margin-left:25px}
    #jam-digital p{color:#FFF; font-size:36px; text-align:center; margin-top:4px}
</style>
 
    <div id="jam-digital">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div>
<footer class="footer"></footer>

</body>
</html>

