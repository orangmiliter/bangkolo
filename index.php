<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/pace.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/loader.css">
<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color:    #17202a;
    color: #ffffff;
    padding: 10px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color:  #17202a;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #3b6776;
}
.aside {
    background-color: #33b5e5;
    padding: 15px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 25%;}
    .col-2 {width: 70%;}
}
.button {
    background-color:  #17202a;
    border: none;
    color: white;
    padding: 8px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button {border-radius: 8px;}
input[type=text] {
    width: 45%;
    padding: 5px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>
<body>
<script>
  function myLoader() {
  document.getElementById("myImg").src = "icons/lod.gif";
}
  </script>
<div class="header">
  <h1 style="color:white;">BANGKOLO</h1>
</div>

<div class="row">

<div class="col-1 menu">
  <ul>
    <form  id="hack" action="index.php" method="">
    <li onclick="hack.submit();">Scan</li>
  </form>
    <form id="manager" action="output/filemanager.php" method="get">
    <li onclick="manager.submit();">Lihat Hasil</li>
  </form>
    <form  id="lnc" action="license.php" method="get">
    <li onclick="lnc.submit();">Tentang</li>
</form>
  </ul>
</div>

<div class="col-2">
  <form class="" action="" method="post">
    <label><b>Target / IP :</b></label>
    <input type="text" name="ip" value="" placeholder="IP / Domain">
    <input type="submit" onclick="myLoader()" value="Mulai" class="button">
  </form>
  <img id="myImg" style="width:15%;" align="left">
  <?php
  if (isset($_POST["ip"])){
    $com = "/usr/bin/nmap --script=vuln -d -oX tmp/output.xml ". $_POST["ip"];
    $tml = "/usr/bin/xsltproc tmp/output.xml -o tmp/output.html";
    $tpdf = "/usr/bin/wkhtmltopdf tmp/output.html output/$(date '+%Y-%m-%d')-". $_POST['ip'] .".pdf";
    $result = shell_exec($com);
    $result = shell_exec($tml);
    $result = shell_exec($tpdf);
  }
  ?>
</div>
</div>

</body>
</html>
