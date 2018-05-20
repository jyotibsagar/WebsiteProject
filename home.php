<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Coming Soon</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
.header {
  padding: 10px 16px;
  background: url(images/PixelCrazyLogo.jpg) no-repeat;
}
  
  .logo{
		position: fixed;
		top: 0;
		left: calc(50% - 80px);
		z-index: 10;
		display: block;
    overflow: hidden;
}

  .content {
  padding: 16px;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

.sticky + .content {
  padding-top: 102px;
}


<!--Nav Manu ends -->

.center {<!--this is for the logo-->
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 25%;
    max-width: 100%;
    height: auto;
}



img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    height: auto;
 
}




<!--navigation menu-->
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #E86064;
  position: fixed;
  top:260px;
  width:100%;
}

.topnav a {
  float: left;
  color: Black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: white;
}

.topnav a.active {
  background-color: #C3C6C9;
  color: white;
}
h1 {
    color: black;
    text-align: center;
}

<!--this is for side by side images-->
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
<!-- styling ends here for side by side images-->

.img-group{
	display:flex;
}

.img-container1{
	flex:0.5656;
}
.img-container2{
	flex:1.7679;
}
.img-container3{
	flex:1.0135;
}

footer{
	color:black;
	text-align: center;
}
</style>
</head>
<body>

<header role="banner">
    <div class="logo">
    <a href="/"><img width="400" height="200" src="images/PixelCrazyLogo.jpg" alt="Pixel Crazy Photography" title="PixelCrazylogo"></a>
</div>
</header>


<?php

if(isset($_POST['username'])){
 $name = $_POST['username'];

}

if($_POST['password']== "password"){
echo ("Welcome!") .  $name;

?>

<div class="sticky_header" style="position:static;">
<div id="headersectiondiv">

<div id="myHeader" class="sticky-menu is-sticky" style="min-height:200px;">
<nav role="navigation" id="main-menu" class="wbc_menu">
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#about">About Us</a>
  <a href="#Portaits">Portraits</a>
  <a href="#Family">Family Photos</a>
  <a href="#Maternity">Maternity</a>
  <a href="#Newborns">Newborns</a>
  <a href="#Modelling">Modelling</a>
  <a href="contact.html">Get in Touch</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div style="padding-top:12px">
</div>

</div>
</div>


<!--responsive image gallery 1-->

<h2>Baby Viraj</h2>
<h4><i>by Jyoti B Sagar</i></h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/BabyVirajI.jpg">
      <img src="images/Viraj/BabyVirajI.jpg" alt="BabyVirajI" width="300" height="200">
    </a>
    <div class="desc">Image I</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/BabyVirajII.jpg">
      <img src="images/Viraj/BabyVirajII.jpg" alt="Forest" width="300" height="200">
    </a>
    <div class="desc">Image II</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank"  href="images/Viraj/BabyVirajIII.jpg">
      <img src="images/Viraj/BabyVirajIII.jpg" alt="Northern Lights" width="300" height="200">
    </a>
    <div class="desc">Image III</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/BabyVirajIV.jpg">
      <img src="images/Viraj/BabyVirajIV.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/V.jpg">
      <img src="images/Viraj/V.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>



<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/VI.jpg">
      <img src="images/Viraj/VI.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/VII.jpg">
      <img src="images/Viraj/VII.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/VIII.jpg">
      <img src="images/Viraj/VIII.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/IX.jpg">
      <img src="images/Viraj/IX.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/X.jpg">
      <img src="images/Viraj/X.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/XII.jpg">
      <img src="images/Viraj/XII.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/XIII.jpg">
      <img src="images/Viraj/XIII.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>
<div class="clearfix"></div>

<div style="padding:6px;">
</div>

<!--responsive image gallery 1 ends-->

<h2>Baby Viraj</h2>
<h4><i>by Jyoti B Sagar</i></h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/BabyVirajI.jpg">
      <img src="images/Viraj/BabyVirajI.jpg" alt="BabyVirajI" width="300" height="200">
    </a>
    <div class="desc">Image I</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/BabyVirajII.jpg">
      <img src="images/Viraj/BabyVirajII.jpg" alt="Forest" width="300" height="200">
    </a>
    <div class="desc">Image II</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank"  href="images/Viraj/BabyVirajIII.jpg">
      <img src="images/Viraj/BabyVirajIII.jpg" alt="Northern Lights" width="300" height="200">
    </a>
    <div class="desc">Image III</div>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/Viraj/BabyVirajIV.jpg">
      <img src="images/Viraj/BabyVirajIV.jpg" alt="Mountains" width="300" height="200">
    </a>
    <div class="desc">Image IV</div>
  </div>
</div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
</div>
<!--responsive image gallery 1 ends-->

<p class="lead">If you are a <strong>visitor</strong>, check back soon for more.</p>

<footer>&copy; Copyright 2018 PixelCrazy</footer>
</div>
</div>
</div>

<?php 


}
else{
	
	echo ("Login Failed. Please enter correct User Id and password");
}
?>

</body>
</html>
