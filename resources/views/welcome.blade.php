
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="../public/js/jquery-1.7.2.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="../public/js/main.js"></script>
 <script type="text/javascript" src="../public/js/demo1.js"></script>


 <script type="text/javascript" src="../public/js/Swipe.js"></script>   
 <script type="text/javascript" src="../public/js/unslider.js"></script>
 <script type="text/javascript"  src="../public/js/Swipe2.js"></script>

 <link rel="stylesheet" type="text/css" href='../public/css/styles.css' media="all" />
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


 <link rel="shortcut icon"  href="../public/images/candelabros.png">
 <link rel="stylesheet" type="text/css" href="../public/css/Swipe.css" /> 
 <link rel="stylesheet" type="text/css" href="../public/css/demo.css" media="all" /> 
 
 <script type="text/javascript" src="../public/js/functionss.js"></script>
 <link rel="stylesheet" type="text/css" href="../public/css/menu.css"/>
 <link rel="stylesheet" type="text/css" href="../public/css/mediciones.css"/> 


 <title>CcscalpingC</title>

 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

 <!-- Styles -->
 <style> 
 * {
  box-sizing: border-box;
}
body{
  font-family: "Ubuntu", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.6;
  color: #434345;
  background-color: #191919;
}

.logo{
  background-image:  url(../public/images/logoToro6.png);
  width: 20%; 
  height: 120px;
  background-repeat: no-repeat;
  display: inline-block;
  float: left;
  margin-top: -53px;
  margin-left: 5%;
}

.contenedor{
  display:-webkit-box;display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
  -ms-flex-flow:column wrap;
  flex-flow:column wrap;width:100%;
  min-height:-190vh;
  font-family:PT Sans,sans-serif
  background-color:blue;
}
/*#ancla1{height:900px;}*/
#ancla2{height:500px; }
#ancla3{padding:10px}
#ancla4{ }
.fixed{
  position:fixed;
  top:0;
}
.cambio{
  transition: .6s all ease;
  width:100% !important;
  background: #191919 !important;
  text-align:right !important; 
}
.margen{margin-top:50px}
.navpanel{
  width: 100%;
  height:41px;
  position: absolute;
  display: block; 
  z-index: 2;
  background: #D01919;

}
.navNemu{
  margin-top: -3%;
  width: 100%;
  height:40px;
  position: relative;
  display: block;
  z-index: 2;
}
.zoom{
  transition: .6s all ease;
  width: 100% !important;
}
.display{
  transition: .6s all ease;
  display: none ;
}
.display2{
  transition: .6s all ease;
  display: inline-block;
}

.d{
  background-color: rgba(25, 25, 25, 0.35) !important;
}

.swiper-container {
  width: 100%;
  /* height: 1020px;*/
  z-index: 0;
  top: -123px;
  margin: -9px auto;
}
.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}
.menuScroll{
  margin-left: -47px;  
}
.menuScroll2{
  margin-left: 30px;  
}
.swiper-caption {
  /*  position: relative;   ojo original*/
  position: initial;
  z-index: 9;
  background-size: cover;
} 
.swiper-parallax {
  height: 100%;
  white-space: nowrap;
  /* background: red;*/
}

.swiper-parallax:before {
  content: '';
  display: inline-block;
  height: 50%;
}
.swiper-slide-caption {
  display: inline-block;
  width: 100%;
  vertical-align: middle;
  white-space: normal;
  margin-left: -4px;
  margin-top: -65%;
}
.swiper-slide-caption:after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(25, 25, 25, 0.35);
  z-index: -1;
}
.shell{
  max-width: 1200px;
}
.range {  
  display: flex;
  flex: 0 1 auto;
  flex-direction: row;
  flex-wrap: wrap;
}
.range > .cell-lg-8 {
  flex-basis: 66.66667%;
  max-width: 66.66667%;
}
.range-lg-center {
  justify-content: center;
}
.animated {
  display: block;
  animation-duration: 2s;
  animation-fill-mode: both;
  opacity: 1;
  animation: fadeInUp 3s ;
  animation-delay: 0s;
}
.logo-spw{
  margin-left: 43px !important;
  margin-top: -24px;
}
.not-animated {
  display: none;

}
.displayB{
  display: block;
}
.displayN{
  display: none;
}

.text-extra-big {
  font-size: 90px;
}
.text-bold{
  font-weight: 700;
}
.text-italic {
  font-style: italic;
}
.offset-top-10 {
  margin-top: 10px;
}
.reveal-xs-block {
  display: block !important;
}
.text-light {
  font-weight: 300;
}
.w3-show{
  display:block!important;
}
.w3-hide {
  display: none ;
}
.w3-bar-block .w3-bar-item {
  width: 100%;
  display: block;
  border: none;
  white-space: normal;
  float: none;
  outline: 0;
  background-color: black; 
}
#navDemo  a:hover, #navDemonav a:active {
  color:#e25d29;
  text-decoration:none;
}

.ancla1{
  padding-top: 110px;
  padding-bottom: 110px;
}
.anclaShell{
  /*  background-color: red;*/
  min-width: 300px;
  /* max-width: 480px;*/
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.h1{
  font-weight: 700;	
}
.bg-red {
  background: linear-gradient(90deg, #d01919 0%, #a31111 100%);
}
.divider {
  width: 40px;
  height: 2px;
  padding: 0;
  margin: 27px auto 34px;
  border: none;
}
.btn-anis-effect.btn-danger {
  color: #fff;
  background-color: #d01919;
}
html *:last-child {
  margin-bottom: 0;
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  opacity: 1;
}





/* boton slider */
.btn-anis-effect {
  position: relative;
  z-index: 1;
  overflow: hidden;
  background-color: transparent;
  transition: .2s;
  transition-delay: .1s;
}
.btn-danger {
  color: #fff;
  background-color: #d01919;
  border-color: #d01919;
}
.btn, .pagination-classic > li > a, .pagination-classic > li > span {
  position: relative;
  padding: 9px 26px;
  font-size: 15px;
  line-height: 28px;
  border-radius: 5px;
  white-space: nowrap;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  border-width: 1px;
  transition: .3s;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn, .pagination-classic > li > a, .pagination-classic > li > span {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 700;
  text-align: center;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 9px 26px;
  font-size: 15px;
  line-height: 1.6;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn-anis-effect.btn-danger:before, .btn-anis-effect.btn-danger:after {
  background: #ffce25;
}
.btn-anis-effect:before {
  left: -20px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.btn-anis-effect:before, .btn-anis-effect:after {
  position: absolute;
  top: 50%;
  content: '';
  width: 20px;
  height: 20px;
  background: #434345;
  border-radius: 50%;
  transition: 0.5s;
  z-index: -1;
  }swiper-slide
  .btn-anis-effect.btn-danger:before, .btn-anis-effect.btn-danger:after {
   background: #ffce25;
 }
 .btn-anis-effect:after {
   right: -20px;
   -webkit-transform: translate(50%, -50%);
   transform: translate(50%, -50%);
 }
 .btn-anis-effect:before, .btn-anis-effect:after {
   position: absolute;
   top: 50%;
   content: '';
   width: 20px;
   height: 20px;
   background: #434345;
   border-radius: 50%;
   transition: 0.5s;
   z-index: -1;
 }
 0% {
   opacity: 0;
   -webkit-transform: translate3d(0, 100%, 0);
   transform: translate3d(0, 100%, 0);
 }
 100% {
   opacity: 1;
   -webkit-transform: none;
   transform: none;
 }
 .btn-anis-effect.btn-danger:before, .btn-anis-effect.btn-danger:after {
   background: #ffce25;
 }
 .btn-anis-effect:before {
   left: -20px;
   -webkit-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
 }
 .btn-anis-effect:before, .btn-anis-effect:after {
   position: absolute;
   top: 50%;
   content: '';
   width: 20px;
   height: 20px;
   background: #434345;
   border-radius: 50%;
   transition: 0.5s;
   z-index: -1;
 }
 *:before, *:after {
   box-sizing: border-box;
 }
 .btn-anis-effect.btn-danger:before, .btn-anis-effect.btn-danger:after {
   background: #ffce25;
 }
 .btn-anis-effect:after {
   right: -20px;
   -webkit-transform: translate(50%, -50%);
   transform: translate(50%, -50%);
 }
 .btn-anis-effect:before, .btn-anis-effect:after {
   position: absolute;
   top: 50%;
   content: '';
   width: 20px;
   height: 20px;
   background: #434345;
   border-radius: 50%;
   transition: 0.5s;
   z-index: -1;
 }
 #boton-arriba:hover{
   background-color: #ff9625;
 }
 .btn-anis-effect.btn-danger:hover{
   color: black;
 }
 /* fin boton */







 a {
  color: inherit;
  text-decoration: none;
}
a {
  background-color: transparent;
}
* {
  box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
  color: -webkit-link;
  cursor: pointer;
  text-decoration: underline;
}
.swiper-slide-caption {
  display: inline-block;
  width: 100%;
  vertical-align: middle;
  white-space: normal;
  margin-left: -4px;
}
.swiper-slide .swiper-parallax {
  height: 100%;
  white-space: nowrap;
}
.page .text-center {
  text-align: center;
}
.text-center {
  text-align: center;
}
.text-center {
  text-align: center;
}
body {
  font-family: "Ubuntu", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.6;
  color: #434345;
  background-color: #191919;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: transparent;
}
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

/* */


.thumbnail iframe{

 margin-right: auto;
 margin-left: auto;
 display: block;
 max-width: 100%;

}
iframe{
 vertical-align: middle;
 border:0px !important;
}
#tabla-fija{
 height: 100%;
}

#ancla2 div.thumbnail{

 margin-right: auto;
 margin-left: auto;
 display: block;
 max-width: 100%;

}
.boton5 {
 color: #fff !important;
 font-size: 20px;
 font-weight: 500;
 padding: 0.5em 1.2em;
 background: #318aac;
 position: relative;

 outline: 1px solid;
 outline-color: rgba(49, 138, 172, 0.4);
 transition: all 1s cubic-bezier(0.19, 1, 0.22, 1);
}
.boton5:hover {
 box-shadow: inset 0 0 20px rgba(49, 138, 172, 0.5), 0 0 20px rgba(49, 138, 172, 0.4);
 outline-color: rgba(49, 138, 172, 0);
 outline-offset: 80px;
 text-shadow: 1px 1px 6px black;
}

#ancla4 .ajuste-ventana{
  background: transparent;
}

/*Estilos del modal*/

.modal {
  display: none;
}
@media(min-width: 960px){
  .modal:target {

    display: block;
    position: fixed;
    background: rgba(0,0,0,0.8);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  a.class_href{
    text-decoration:none;
    color:black;
}
}

.imagen {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.imagen a {
  color: #fff;
  font-size: 40px;
  text-decoration: none;
  margin: 0 10px;
}

.imagen a:nth-child(2) {
  margin: 0;
  height: 100%;
  flex-shrink: 2;
}

.imagen img {
  max-height: 100%;
  max-width: 100%;
  box-sizing: border-box;
}

.cerrar2 {
  display: block;
  background: #fff;
  width: 25px;
  height: 25px;
  margin: auto 95%;
  text-align: center;
  text-decoration: none !important;
  font-size: 25px;
  color: #000;
  border-radius: 50%;
  line-height: 25px;
}
.centrado{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
@media(max-width: 960px){
  .centrado2{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  } 
}
/* fin modal */

/* ancla 4*/
.thumbnail2{
  width: 100%;
  height: 200px  !important;
  border-radius: 4px;
}
.ajuste-ventana{
  margin-top: 1%;
  margin-bottom: 1%; 
  border:0px;
  width: 100%;
  height: 100%;
  display: inline-block !important;
}
.thumbnail3{
  width: 100%;   
  border-radius: 10px;
}
.responsivo{
  margin-top:1%; margin-bottom: 1%; padding-right: 5px !important; padding-left: 5px !important;"
}

/* fin ancla 4 */

/* slider movimiento pequeño*/
.contenedor-slider {
  margin: auto;
  width: 85%;
  max-width: 900px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 5px 23px 0 rgba(0, 0, 0, 0.30); 
}

.slider {
  display: flex;
  width: 400%;
}

.slider__section {
  width: 100%;
}

.slider__img {
  display: block;
  width: 100%;
  
}

.btn-prev, .btn-next {
  width: 40px;
  height: 40px;
  background: rgba(255, 255, 255, 0.7);
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  line-height: 40px;
  font-size: 30px;
  font-weight: bold;
  text-align: center;
  border-radius: 50%;
  font-family: monospace;
  cursor: pointer;
}

.btn-prev:hover, .btn-next:hover {
  background: white;
}

.btn-prev {
  left: 10px;
}

.btn-next {
  right: 10px;
}
/* fin slider pequeño */







.range {
 margin-left: -15px;
 margin-right: -15px;
}
.offset-top-66 {
 margin-top: 66px;
}
[class*="cell-"] {
 padding-left: 15px;
 padding-right: 15px;
}
.offset-top-98 {
 margin-top: 0px;
}
.box-icon {
 position: relative;
 padding: 42px 25px 27px 25px;
}
.box-icon-bordered {
 border: 2px solid #f2f2f2;
}
.box-icon .icon {
 position: absolute;
 top: 0;
 left: 50%;
 -webkit-transform: translate(-50%, -50%);
 transform: translate(-50%, -50%);
}
.icon-outlined, .icon-outlined:after {
 border-radius: 50%;
}
.icon-sm {
 font-size: 46px;
 /*  line-height: 42px;*/
 width: 67px;
 height: 67px;
}
.icon-dark-filled {
 background: linear-gradient(45deg, #191919 0%, #434345 100%);

 color: #fff;
 border: none;
}
.mdi {
 display: inline-block;
 font-weight: 400;
 font-style: normal;
 font-family: "Material Design Icons";
 /*font-size: -webkit-xxx-large;*/
 text-rendering: auto;
 -webkit-font-smoothing: antialiased;
 -moz-osx-font-smoothing: grayscale;
 -webkit-transform: translate(0, 0);
 transform: translate(0, 0);
}
.mdi-account-multiple:before {
 content:url("../public/images/group.png"); 
}
.mdi-account-like:before {
 content:url("../public/images/like.png"); 
}
.icon-outlined:after {
 position: absolute;
 top: -7px;
 right: -7px;
 bottom: -7px;
 left: -7px;
 content: '';
 border: 2px solid #f5f5f5;
}
.icon-outlined:after {
 border-radius: 50%;
}
.offset-top-20 {
 margin-top: 20px;
}
.text-danger {
 color: #d01919;
}
@keyframes fadeInUp {
 0% {
  opacity: 0;
  -webkit-transform: translate3d(0, 100%, 0);
  transform: translate3d(0, 100%, 0);
}
100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
}
}

.fadeInUp {
 -webkit-animation-name: fadeInUp;
 animation-name: fadeInUp;
}



@media only screen and (min-width: 600px) and (max-width:1950px) {
 .range {
  display: flex;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
}
.swiper-slide-caption { /*esto es para el rsponse*/
  padding: 0px 15px;
  /* background: rebeccapurple;*/
}
/*.w3-hide {
  display: none !important;
  }*/

}
@media only screen and (min-width: 1366px) and (max-width:1950px){
 .swiper-slide-caption {
  margin-top: 10%;
}
}
@media only screen and (min-width: 1250px) and (max-width:1366px) {
 .swiper-slide-caption {
  margin-top: 10%;
}
}
@media only screen and (min-width: 750px) and (max-width:1250px) {
 .swiper-slide-caption {
  margin-top: 10%;
}
}
@media screen and (min-width: 0px) and (max-width:750px) {

}

@media (min-width: 768px)
{

 .anclaShell{
  max-width: 750px;
}
h1{
  line-height: 1.2;
  font-size: 45px;
}
.range-xs-center {
  -ms-flex-pack: center;
  justify-content: center;
}
.range {
  display: -ms-flexbox;
  display: flex;
  flex: 0 1 auto;
  flex-direction: row;
  flex-wrap: wrap;
}
.range > .cell-sm-8 {
  flex-basis: 66.66667%;
  max-width: 66.66667%;
}
}

@media (min-width: 1200px){
 .range > .cell-lg-8 {
  flex-basis: 66.66667%;
  max-width: 66.66667%;
}
.range > .cell-sm-preffix-2 {
  margin-left: 16.66667%;
}	
}

@media (min-width: 992px){
 .range > .cell-md-4 {
  -ms-flex-preferred-size: 33.33333%;
  flex-basis: 33.33333%;
  max-width: 33.33333%;
}
.offset-md-top-0 {
  margin-top: 0;
}
}

@media (min-width: 992px)
{
 .range > .cell-md-preffix-0 {
  margin-left: 0%;
}
.range > .cell-sm-preffix-2 {
  margin-left: 0%;
}
.anclaShell{
  max-width: 970px;
}	

}



@media (max-width:960px)
{
 .swiper-button-prev, .swiper-button-next{
  margin-top: -8px;
}
.text-extra-big {
  font-size: 48px;
}
#headercont{
  width: initial;
}

.headerContenv{
  display: none;
}
.headerContenv2{
  display: none;
}
.navpanel{
  display: none;
}


.navNemu{
  margin-top: 0px;
}
.iconMenu{
  background-image: url(../public/images/menu.png);
  background-repeat: no-repeat;
  padding-top: 15px;
  cursor: pointer;
}
#fdw nav ul li.current {
  border-bottom: none;
}
}
@media(max-width: 960px){

}


</style>



<script type="text/javascript">



  $(document).ready(function() {   

   if (screen.width<600) 
   {
    $('.contenedor').removeClass("margen");
    $('#headerL').removeClass("display")
    $('#headerR').removeClass("display")

  }

});

  if (screen.width<600) 
  {
   $('#headerL').addClass("display");
   $('#headerR').addClass("display");
   $('#headercont').addClass("zoom");
   $('#menu').addClass("fixed");
   $('#menu').addClass("cambio");
   $('.contenedor').addClass("margen");

 }
 else
 {

   $(window).scroll(function()
   {

    if ($(this).scrollTop() > 70){
     $('#headerL').addClass("display");
     $('#headerR').addClass("display");
     $('#headercont').addClass("zoom").fadeIn(3000);
     $('#menu').addClass("fixed").fadeIn(3000);
     $('#menu').addClass("cambio").fadeIn();
     $('#img-log').addClass("logo-spw");
       //  $('#fdw nav ul li').removeClass("menuScroll");
       //  $('#fdw nav ul li').addClass("menuScroll2");

       $('.contenedor').addClass("margen").fadeIn();

     }
     else {

      $('#headercont').removeClass("zoom").fadeIn(3000);
      $('#menu').removeClass("fixed").fadeIn(3000);
      $('#menu').removeClass("cambio");
       // $('#fdw nav ul li').removeClass("menuScroll2");
       // $('#fdw nav ul li').addClass("menuScroll");
       $('.contenedor').removeClass("margen");
       $('#headerL').removeClass("display")
       $('#headerR').removeClass("display")
       $('#img-log').removeClass("logo-spw");
     }

   });
 }




</script>




</head>
<body>
 <div class="page text-center">
   <header id="header">
    <div style="position: relative;width: 100%;height: 300px">
      <div style="position: absolute;width: 100%;height: 40PX ;background: #D01919; left: 0px;top: 0px; ">
        <div id="headerL" class="headerContenv" >
          <div id="ubicacion"> 
            <a href="" style="text-decoration: none;"> 
              <img src="../public/images/telefono.png"  width="30" height="30"  style="border-radius: 10px;">
              <img src="../public/images/whatsapp.png" width="30" height="30"  style="border-radius: 10px;">
              <span style="margin: 10px;">+573212279938</span>
            </a>


          </div>

        </div> 
        <div id="headercont">
          <div  style="width: 100% background:#D01919">
            <div class="navpanel">
              <div id="ubicacion"> 
                <a href="" style="text-decoration: none;"> 
                  <img src="../public/images/ubica.png" width="30" height="30"  style="border-radius: 10px; margin-top:-5px;">
                  <span>Sur américa, Norte américa , Centro américa </span>
                </a>


              </div>
            </div> 
          </div>
        </div>
        <div id="headerR" class="headerContenv2" >
          <div id="redes-sociales"> 
            <ul style="display: -webkit-box; ">
              <li> <div id="facebook"> <a href="https://www.facebook.com/Forex-para-todos-300736087161283/" target="_blank"> <img src="../public/images/facebook2.png" width="30" height="30" style=""></a></div></li>
              <!-- <li> <div id="correo"> <a href="" target="_blank"> <img src="../public/images/correo2.png" width="20" height="20"></a></div></li>-->
              <li><div id="youtube"> <a href="https://www.youtube.com/channel/UCahmlQy72dwCb7wZcAyoqhQ" target="_blank"> <img src="../public/images/youtube2.png" width="30" height="30"></a></div></li>
              <li><div><a href="https://t.me/coberturasEa" target="_blank"><img class="img-footer" src="../public/images/telegram-respo.png" style="width: 30px; height: 30px;"></a></div></li>
            </ul>
          </div>
        </div>
        <div class="navNemu">
          <!--inicio menu pequeño-->
          <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" style="display: none;">
          <label id="cerrar" for="abrir-cerrar" class="fixed">&#9776; <span class="abrir">Menu</span><span class="cerrar">Cerrar</span></label>
          <div id="sidebar" class="sidebar" style="list-style: none !important;">
            <div class="contenedor-menu" >
              <ul class="menu2">
                <li><a class="sitio" href="welcome.blade.php">Inicio</a></li>
                <li><a  href="afiliacion.php">Afiliación</a></li>
                <li class="activado"><a href="">Indicadores <div style="float: right; margin-left: 50px;"><i class=" fa fa-chevron-down"></i></div></a>
                  <ul>
                    <li><a  href="redneuronal.php">Red Neuronal</a></li>
                    <li><a href="indicador-noticias.php">Indicador Noticias</a></li>
                  </ul>
                </li>
                <li class="activado"><a href="">Robot<div class="i-flecha"><i class=" fa fa-chevron-down"></i></div></a>
                  <ul>
                    <li><a href="ccscalpingc.php">CCscalpingc</a></li>
                  </ul>
                </li>
                <li class="activado"><a href="">Blog <div class="i-flecha"><i class=" fa fa-chevron-down"></i></div></a>
                  <ul>
                    <li><a href="cliente.php">Clientes</a></li>
                  </ul>
                </li>
                <li><a href="contacto.php?basico=0">Contacto</a></li>
                <ul class="redes-pequeñas" style="display: -webkit-box; ">
                  <li> <div id="facebook"> <a href="https://www.facebook.com/Forex-para-todos-300736087161283/" target="_blank"> <img src="../public/images/facebook2.png" width="30" height="30" style=""></a></div></li>
                  <!-- <li> <div id="correo"> <a href=""> <img src="../../public/images/correo2.png" width="20" height="20"></a></div></li>-->
                  <li><div id="youtube"> <a href="https://www.youtube.com/channel/UCahmlQy72dwCb7wZcAyoqhQ" target="_blank"> <img src="../public/images/youtube2.png" width="30" height="30"></a></div></li>
                  <li><div><a href="https://t.me/coberturasEa" target="_blank"><img class="img-footer" src="../public/images/telegram-respo.png" style="width: 30px; height: 30px;"></a></div></li>
                </ul>
              </ul>
            </div>
          </div>
          <!-- finmenu pequeño-->



          <div id="menu" style="z-index: 3">
            <!-- start header here-->
            <div id="img-log" class="logo"></div>
            <div id="fdw"  >
              <!--nav-->
              <nav>

                <ul style="display: table-cell; position: relative;">
                  <li class="current" ><a href="welcome.blade.php">Inicio</a></li>
                  <li class="w3-hide-small"><a href="afiliacion.php">Afiliacion</a></li>
                  <li class="w3-hide-small"><a href="#">Indicadores<span class="arrow"></span></a>
                    <ul style="display: none;" class="sub_menu">
                      <li class="arrow_top"></li>
                      <li class="w3-hide-small"><a href="redneuronal.php">Red Neuronal</a></li>
                      <li class="w3-hide-small"><a href="indicador-noticias.php">Indicador Noticias</a></li>
                    </ul> 
                  </li>

                  <li class="w3-hide-small"><a href="#">Robot<span class="arrow"></span></a>
                    <ul  style="display: none;" class="sub_menu">
                      <li class="arrow_top"></li>
                      <li class="w3-hide-small"><a href="ccscalpingc.php">CCscalpingc</a></li>
                    </ul>
                  </li>

                  <li class="w3-hide-small"><a href="#">Blog<span class="arrow"></span></a>
                    <ul style="display: none;" class="sub_menu">
                      <li class="arrow_top"></li>
                      <li class="w3-hide-small"><a href="cliente.php">Clientes</a></li>
                    </ul>
                  </li>
                  <li class="w3-hide-small"><a href="contacto.php?basico=0">Contacto</a></li>
                </ul>
              </nav>
            </div><!-- end fdw -->
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="contenedor " style="margin-top:-140px;">
   <section>
     <div id="silder-nuevo">
      <div class="swiper-slide" style="background-image:  url(../public/images/bot2.jpeg); width: 100%; height: 100vh;background-repeat: repeat;background-size: cover;background-position:center;margin: -120px auto !important;">
        <div class="offset-top-20 offset-xs-top-50">
          <a  id="boton-arriba" class="btn btn-danger btn-anis-effect fadeInUp animated boton5" href="afiliacion.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800">
           <span class="btn-text">Comenzar</span></a>
         </div>
       </div>
     </div>
     <div  class="swiper-container">
      <div id="sl" class="swiper-wrapper">
       <div class="swiper-slide" style="background-image:  url(../public/images/bot2.jpeg); width: 100%; height: 100vh;background-repeat: repeat;background-size: cover;background-position:center;">

        <div class="swiper-caption swiper-parallax  ">
         <div class="swiper-slide-caption" style="margin: auto;">
          <div  class="shell" style="color:#fff;">
            <div class="centrado2 range range-lg-center " style="margin-top:50px;">
              <div class="text-extra-big text-bold text-italic text-uppercase fadeInUp not-animated">
               Auto Trading
             </div>
             <div class="cell-lg-8 offset-top-10 fadeInUp not-animated">
               <H5 class="text-align reveal-xs-block">
                Protege tu cuenta para minimizar las perdidas y potenciar tus ingresos de una forma automatizada y lo más importante que un robot lo hace por ti.
              </H5>
              <div class="offset-top-20 offset-xs-top-50">
                <a  id="boton-arriba" class="btn btn-danger btn-anis-effect fadeInUp animated boton5" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800">
                 <span class="btn-text">Comenzar</span></a>
               </div>
             </div> 

           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="swiper-slide" style="background-image:  url(../public/images/bot1.jpeg); width: 100%; height: 100vh;background-repeat: repeat;background-size: cover;background-position:center;">
     <div class="swiper-caption swiper-parallax ">
      <div class="swiper-slide-caption" style="margin: auto;">
       <div  class="shell" style="color:#fff;">
        <div class="centrado2 range range-lg-center" style="margin-top:50px;">
         <div id="shell1" class="text-extra-big text-bold text-italic text-uppercase fadeInUp not-animated">
           Red neuronal
         </div>
         <div class="cell-lg-8 offset-top-10">
          <H5 class="text-align reveal-xs-block fadeInUp ">
            Conjunto de modelos basado en el análogo comportamiento que se puede observar en las redes neuronales de los cerebros biológicos. Empleado en el mercado forex para predecir el precio.
          </H5>
          <div class="offset-top-20 offset-xs-top-50">
           <a id="boton-arriba" class="btn btn-danger btn-anis-effect fadeInUp animated boton5" href="redneuronal.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800">
            <span class="btn-text">Comenzar</span></a>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</div>
<div class="swiper-slide" style="background-image:  url(../public/images/mt41.jpeg); width: 100%; height: 100vh;background-repeat: repeat;background-size: cover;background-position:center;">
  <div class="swiper-caption swiper-parallax">
   <div class="swiper-slide-caption" style="margin: auto;">
    <div  class="shell" style="color:#fff;">
     <div class="centrado2 range range-lg-center" style="margin-top:50px;">
      <div id="shell1" class="text-extra-big text-bold text-italic text-uppercase fadeInUp not-animated">
        Promoción fin de año
      </div>
      <div class="cell-lg-8 offset-top-10">
       <H5 class="text-align reveal-xs-block fadeInUp ">
        Antes que acabe el año obtenga su primer mes del 2019 por 30 USD o el año del robot básico por 150 USD. aprovecha la oportunidad de generar un ingreso extra.
      </H5>
      <div class="offset-top-20 offset-xs-top-50">
        <a id="boton-arriba" class="btn btn-danger btn-anis-effect fadeInUp animated boton5" href="afiliacion.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800">
         <span class="btn-text">Comenzar</span></a>
       </div>
     </div> 
   </div>
 </div>
</div>
</div>
</div>
<div class="swiper-slide" style="background-image:  url(../public/images/mt42.jpeg); width: 100%; height: 100vh;background-repeat: repeat;background-size: cover;background-position:center;">
 <div class="swiper-caption swiper-parallax">
  <div class="swiper-slide-caption" style="margin: auto;">
   <div  class="shell" style="color:#fff;">
    <div class=" centrado2 range range-lg-center" style="margin-top:50px;">
     <div id="shell1" class="text-extra-big text-bold text-italic text-uppercase fadeInUp not-animated">
      Promoción fin de año
    </div>
    <div class="cell-lg-8 offset-top-10">
     <H5 class="text-align reveal-xs-block fadeInUp ">
      Antes que acabe el año obtenga su primer mes del 2019 por 30 USD o el año del robot básico por 150 USD. aprovecha la oportunidad de generar un ingreso extra.
    </H5>
    <div class="offset-top-20 offset-xs-top-50">
      <a id="boton-arriba" class="btn btn-danger btn-anis-effect fadeInUp animated boton5" href="afiliacion.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800">
       <span class="btn-text">Comenzar</span></a>
     </div>
   </div> 
 </div>
</div>
</div>
</div>
</div>

</div>
<!-- Add Pagination -->
<div class="swiper-pagination"></div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</section>
<section id="ancla1" class="ancla1" style="height: 100%; padding-top: 0px !important;">
  <div class="anclaShell" style="height: 100%;">
   <h1 class="h1">
    Bienvenido
  </h1>
  <hr class="divider bg-red"></hr>
  <div class="range range-xs-center offset-top-66" style="justify-content: center;">
    <div class="cell-lg-8">
     <p style="padding-bottom: 98px;">
      ¡Bienvenido a nuestro sitio web! Esperamos que aprecie nuestros servicios y oportunidades que ofrecemos a nuestros clientes. Éstos son algunos de ellos:
    </p>
  </div>
  <div class="range offset-top-98" style="width:100%;">
   <div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0" style="width:100%;">
    <div  id="tabla-fija" class="box-icon box-icon-bordered">
     <span class="icon icon-outlined icon-sm icon-dark-filled mdi mdi-account-multiple"></span>
     <h4 class="text-danger offset-top-20">Trading Supervisado</h4>
     <p> * Operamos por usted automáticamente.
      <br> 
      * Mercado supervisado día y noche. 
      <br>
      * Soporte especial al cliente.
      <br>
      * Comunicación e información personalizada al cliente. 
    </p>
  </div>
</div>
<div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0 offset-top-98 offset-md-top-0 ajuste-bienvenidos" style="width:100%;">
  <div id="tabla-fija" class="box-icon box-icon-bordered">
   <span class="icon icon-outlined icon-sm icon-dark-filled mdi mdi-account-like"></span>
   <h4 class="text-danger offset-top-20">Gestion del riesgo</h4>
   <p>
    * Trabajo integrado con varios pares de divisas a la vez.
    <br>
    * Se optimizan las configuraciones predeterminadas y se
    <br>
    transmite conocimiento al cliente para volverlo un trade experto. 
    <br>
    * Instalación rápida de 5 minutos. 
    <br>
    * No se necesita ajustes. 
    <br>
    * Gestión de dinero integrada.
  </p>
</div>
</div>
<div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0 offset-top-98 offset-md-top-0 ajuste-bienvenidos" style="width:100%;">
  <div id="tabla-fija" class="box-icon box-icon-bordered">
   <span class="icon icon-outlined icon-sm icon-dark-filled mdi mdi-account-multiple"></span>
   <h4 class="text-danger offset-top-20">Equipo</h4>
   <p>* Funciona en muchos tamaños Micro, mini y estándar.
    <br> 
    * Interrupción automática de pérdidas y ganancias. 
    <br>
    * Funciona en cualquier PC, sin restricciones. 
    <br>
    * Se ejecuta en cuentas de demostración y en vivo. 
    <br>
    * No se necesita experiencia.
    <br>
    * Licencia permanente.
  </p>
</div>
</div>
</div>
</div>
</div>
</section> 
<section id="ancla3" class="ancla1">
  <!-- mostrar imagen grande-->
  <div class="cerrar-modal">
    <div class="modal" id="img1">
      <a class="cerrar2" href="">X</a>
      <div class="imagen centrado">

        <a href="#img1"><video id="video" onclick="reproducir()" src="../public/video/vi15.mp4" height="500" width="500" controls ></video></a>
      </div>

    </div>

    <div class="modal" id="img2">
      <a class="cerrar2" href="">X</a>
      <div class="imagen centrado">
        <a href="#img2"> <video id="video2" onclick="reproducir2()" src="../public/video/video3.mp4" height="500" width="500" controls ></video></a>
      </div>

    </div>

    <div class="modal" id="img4">
      <a class="cerrar2" href="">X</a>
      <div class="imagen centrado">
        <a href="#img4"><img src="../public/images/imagen6.jpeg" height="500" width="500"></a>
      </div>

    </div>
  </div>
  <!-- fin mostrar imagen grande-->
  <div>
    <h1 class="h1">Trading automatico</h1>
  </div>

  <div style="margin-top: 2%;"></div>

  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="col-md-6">
        <div class="col-md-6 responsivo">
          <div class="thumbnail" style="width: 100%; height: 100%;">
           <a class="class_href" href="#img1" >
            <video id="nuevo"  src="../public/video/vi15.mp4" class="thumbnail3" height="300px" controls ></video>
            <div class="caption">
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-6 responsivo">
        <div class="thumbnail" style="width: 100%; height: 100%;">
         <a class="class_href" href="#img2"  >
          <video id="nuevo"  src="../public/video/video3.mp4" class="thumbnail3" height="300px" controls ></video>
          <div class="caption">
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 responsivo">
      <div class="thumbnail" style="width: 100%; height: 100%;">
       <a href="../public/images/auditoria-broker.png" class="class_href" target="_blank" >
        <img  class="thumbnail2" src="../public/images/auditoria-broker.png" alt="#" >
        <div class="caption">
          <div class="offset-top-20 offset-xs-top-50">
            <a id="boton-arriba"  style="border:none;" class="btn btn-danger btn-anis-effect fadeInUp animated boton5" href="cliente.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800">
              <span class="btn-text">Comenzar</span></a>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 responsivo">
      <div class="thumbnail" style="width: 100%; height: 100%;">
       <a href="#img4" class="class_href">
        <img  class="thumbnail2 " src="../public/images/imagen6.jpeg" alt="#">
        <div class="caption">
         <div class="offset-top-20 offset-xs-top-50">
          <a id="boton-arriba"  style="border:none;" class="btn btn-danger btn-anis-effect fadeInUp animated boton5" href="cliente.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800">
            <span class="btn-text">Comenzar</span></a>
          </div>
        </div>
      </a>
    </div>
  </div>  
</div> <!-- fin col 6 -->
<div class="col-md-6 " style="margin-top: 15%;">
 <div class="col-md-12">
  <div class="thumbnail" style="border:0px;">
   <div id="contenedor-slider" class="contenedor-slider">
     <div id="slider" class="slider">
      <section class="slider__section" style="height: 300px;"><img src="../public/images/img23.jpg" width="300" height="300" class="slider__img"></section>
      <section class="slider__section"><img src="../public/images/img22.jpg"  width="300"
        height="300" class="slider__img"></section>
        <section class="slider__section"><img src="../public/images/img24.jpg"  width="300"
          height="300" class="slider__img"></section>
          <section class="slider__section"><img src="../public/images/img25.png"  width="300"
            height="300" class="slider__img"></section>
          </div>
          <div id="btn-prev" class="btn-prev">&#60;</div>
          <div id="btn-next" class="btn-next">&#62;</div>
        </div>
      </div>

    </div>

  </div>



</div>

</div>
</div>


</section> 

<section id="ancla4" class="ancla1" style="background:#efefef;">


 <div class="container">

  <div class="row" style="margin:1px;">
   <div id="mostrar" class="col-md-6">
    <div class="  ajuste-ventana thumbnail">
     <video id="nuevo" style="border-radius: 20px;" src="../public/video/video4.mp4" class="thumbnail3" autoplay height="449"  controls ></video>
   </div>
 </div>
 <div id="no-mostrar" class="col-md-6">
  <div class=" ajuste-ventana thumbnail ">
   <iframe id="nuevo" class="thumbnail3" height="449" frameborder="0"  class="qerh" src="http://staticmy.roboforex.com/es/partners/informers_get/?theme_ch=classic&size=600x400&type=charts" ></iframe>
 </div>
</div>

<div id="no-mostrar"  class="col-md-6">
  <div  class=" ajuste-ventana thumbnail ">
    <iframe id="nuevo" class="thumbnail3" frameborder="0" height="250"  class="qerh" src="http://staticmy.roboforex.com/es/partners/informers_get/?width=500&theme=dark&bid=&ask=&spread=&EURUSD=&GBPUSD=&USDCHF=&USDJPY=&EURJPY=&GBPJPY=&XAUUSD=&type=quotes"></iframe>

  </div>
</div>
<div id="no-mostrar"  class="col-md-6">
  <div id="nuevo" class=" ajuste-ventana thumbnail">
   <iframe class="thumbnail3"  height="310" frameborder="0" class="qerh" src="http://staticmy.roboforex.com/es/partners/informers_get/?width=303&theme_nt=classic&amount=20&US=&JP=&CA=&UK=&AU=&type=newstimer"></iframe> 
 </div>
</div> 
</div>
</div>


</section>


<section  class="preguntas" style="background-image:  url(../public/images/imagen1.jpeg);">

 <div style="background-color: rgba(0, 0, 0, 0.5);">
  <div class="container">
    <div style="margin-bottom: 5%;">
      <h1 class="h1">
       Preguntas & Respuestas
     </h1>
     
   </div>
   <div class="row">

    <div class="col-md-6">
      <div  class="thumbnail preguntas-respuestas" > 
        <h6 class="text-primary">Conócenos</h6>
        <p class="hola">Operar en forex manualmente no es algo muy efectivo ya que se necesita mucho
          tiempo y dedicación para poder entender, aplicar y probar las estrategias de 
          forex
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div  class="thumbnail preguntas-respuestas" >
        <h6 class="text-primary">Debe tener presente</h6>
        <p class="hola">Muchas Personas operan manualmente en forex, pero, aunque se preparen al máximo
          posible, la mayoría de las veces no obtienen los resultados deseados.
        </p>
      </div>
    </div>



    <div class="col-md-6">
      <div class=" thumbnail preguntas-respuestas" >
        <h6 class="text-primary">En Forex puede suceder </h6>
        <p class="hola">Te sorprenderás al saber que más del 70% de los traders, pierden su dinero operando manualmente
          debido a que muchas veces nos ganan las emociones lo cual nos hace perder dinero de nuestras
          cuentas de forex.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail preguntas-respuestas" >
        <h6 class="text-primary">Con nuestro robot podras hacer</h6>
        <p class="hola">Afortunadamente existe un robot forex el cual te permitirá operar de forma 100% automatizada para comenzar a ganar dinero este mismo mes.</p>
      </div>
    </div>
  </div>

</div>

</div>

</section>


</main>
<footer>
  <div class="footer"></div>
</footer>
<script>
  $(document).ready(function () {
    $('.footer').load('../public/footer.php');
  });
</script>
<script type="text/javascript">
  window.reproducir = function() {
    document.getElementById("video").play();
  };
  window.reproducir2 = function() {
    document.getElementById("video2").play();
  };

</script>

<!--<script type="text/javascript">
   var elem =document.getElementById("mySwipe");
   window.mySwipe = Swipe(elem, {
     startSlide: 1,
     auto: 1500,
     continuous: true,
  // disableScroll: true,
  // stopPropagation: true,
  // callback: function(index, element) {},
  // transitionEnd: function(index, element) {}
});

</script>-->


<!-- Swiper JS -->

<!-- end -->

<!-- Initialize Swiper -->

<script type="text/javascript">
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
      //spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>  



  <script type="text/javascript">
//almacenar slider en una variable
var slider = $('#slider');
//almacenar botones
var siguiente = $('#btn-next');
var anterior = $('#btn-prev');

//mover ultima imagen al primer lugar
$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
//mostrar la primera imagen con un margen de -100%
slider.css('margin-left', '-'+100+'%');

function moverD() {
  slider.animate({
    marginLeft:'-'+200+'%'
  } ,700, function(){
    $('#slider .slider__section:first').insertAfter('#slider .slider__section:last');
    slider.css('margin-left', '-'+100+'%');
  });
}

function moverI() {
  slider.animate({
    marginLeft:0
  } ,700, function(){
    $('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
    slider.css('margin-left', '-'+100+'%');
  });
}

function autoplay() {
  interval = setInterval(function(){
    moverD();
  }, 2000);
}
siguiente.on('click',function() {
  moverD();
  clearInterval(interval);
  autoplay();
});

anterior.on('click',function() {
  moverI();
  clearInterval(interval);
});


autoplay();
</script>
</body>
</html>
