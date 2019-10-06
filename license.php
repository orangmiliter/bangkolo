<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    background-color:  #212421;
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
    background-color: #212421;
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
    .col-2 {width: 75%;
overflow: scroll;
height: 358px;
    }
}
.button {
    background-color:  #34b030;
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
</style>
</head>
<body>

<div class="header">
  <h1 style="color:white;">BANGKOLO</h1>
</div>

<div class="row">

<div class="col-1 menu">
  <ul>
    <form  id="hack" action="index.php" method="">
    <li onclick="hack.submit();">Periksa Celah</li>
  </form>
    <form  id="asu" action="output/output.pdf" method="get">
    <li onclick="asu.submit();">Ambil Laporan</li>
  </form>
    <form  id="lnc" action="license.php" method="get">
    <li onclick="lnc.submit();">Tentang</li>
</form>
  </ul>
</div>

<div class="col-2">
  <h1>The MIT License (MIT)</h1>
  <p><b>Copyright (c) 2018 orangmiliter</b></p>

  <span align="justify"><p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the &quot;Software&quot;), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p></span>

  <span align="justify"><p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p></span>

  <span align="justify"><p><b>THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</b></p></span>
</div>
</div>

</body>
</html>
