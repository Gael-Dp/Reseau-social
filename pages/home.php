<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<script type="text/javascript">
// Vous pouvez changer la vitesse (speed) (1 == tres rapide)
// Vous pouvez changer la qualité de la transition (1 == best)
// Plus la transition est de qualité, plus la rapidité ralenti et doit être augmenté
var speed = 10;
var transition = 10;

// Dimensions du preloader en GIF animé
var GIFpreloadLargeur = 20;
var GIFpreloadHauteur = 20;

var timer= 0;
var opaciT = 100;

function opacity()
{
opaciT = opaciT - transition;

var object = document.getElementById("preloader").style;
object.opacity = (opaciT / 100);
object.MozOpacity = (opaciT / 100);
object.KhtmlOpacity = (opaciT / 100);
object.filter = "alpha(opacity=" + opaciT + ")";

if (opaciT <= 0)
{
document.getElementById("preloader").style.visibility="hidden";
clearInterval(timer);
}

}

function preload()
{
if (document.getElementById)
{
document.getElementById("preloadIMG").style.visibility="hidden";
timer = setInterval("opacity()",speed);
}

else
{
if (document.layers)
{
document.preloadIMG.visibility = "hidden";
timer = setInterval("opacity()",speed);
}
else
{
document.all.preloadIMG.style.visibility = "hidden";
timer = setInterval("opacity()",speed);
}
}
}

// GÉNÉRER LE CSS POUR LE PRELOADER
var myCSS;
myCSS = "<style type=\"text/css\">";

myCSS += "html, body { height:auto; margin:0px; padding:0px;}";

myCSS += "#preloader {";
myCSS += "position:fixed;";
myCSS += "background-color:white;";
myCSS += "width:100%;";
myCSS += "height:100%; ";
myCSS += "display:block;";
myCSS += "z-index:100000;";
myCSS += "}";

myCSS += "#preloadIMG {";
myCSS += "position:absolute;";
myCSS += "left:50%;";
myCSS += "width:" + GIFpreloadLargeur + "px;";
myCSS += "height:" + GIFpreloadHauteur + "px;";
myCSS += "margin-left:-" + (GIFpreloadLargeur / 2) + "px;";
myCSS += "top:150px;";
myCSS += "}";

myCSS += "</style>";

// ÉCRITURE DES CSS
window.document.write(myCSS);

// ÉXÉCUTION
window.onload = function() { preload(); }


</script>
<meta content="text/html; charset=ISO-8859-15" http-equiv="content-type">
<title>
Reseau Social
</title>
<meta content="Gael" name="author">
<style type="text/css">
body {
margin: 0px auto;
width:1024px;
background-color:#F0F0F0;
}
#EnTete {
width: 1024px;
height: 0px;
background-color:#FFF;
margin-bottom: 0px;
background-image: url(image/bandeau2.jpg);
}
#Menus {
float: center;
width: 1068px;
position: fixed;
height:80px;
background-color:#FFF;
left: -7px;
top: -20px;
}
h3 {
border: 1px solid #000000;
padding: 0px;
background-color:#011 ;
color: #0000ff;
font-family: "Times New Roman";
text-align: center;
}
#Corps {
border: 1px solid #000000;
padding: 0px;
background-color: #ffebcd;
color: #00008b;
margin-left: 0px;
margin-bottom: 0px;
}
#Corps h1 {
color: #0000ff;
text-align: center;
font-family: "Times New Roman";
}

#div{
position : absolute;
top : expression( ignore = - this.offsetHeight + document.documentElement.clientHeight + document.documentElement.scrollTop + "px" );
width: 100%;
height: 30px;
left: 0px;
background:#DFDFDF;
}

#Menus p strong {
font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
#Menus p strong {
font-family: Lucida Console, Monaco, monospace;
}
</style>
</head>
<body>
<div id="EnTete"></div>
<div id="Menus" style="background-color:#003399; height:61px; width:1024px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:25px; color:#FFF; position:absolute; margin-left:0px; font-size-adjust:top; margin-top:0px; padding-left:8px;">
<p><strong>Home</strong>
<input name="recherche" type="text" id="recherche" style="margin-left:100px; padding-top:5px;" size="60">
</p>
<form name="form1" method="post" action="serch">
</form>

</div>

</body>
</html>