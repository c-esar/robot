    <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
      <script type="text/javascript" src="../public/js/jquery-1.7.2.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="../public/js/main.js"></script>
      <script type="text/javascript" src="../public/js/demo1.js"></script>
      <script type="text/javascript" src="../public/js/functionss.js"></script>

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
       font-size: -webkit-xxx-large;
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
.centrado{
  position: relative;
  color: #fff;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.list-inline-dashed>li+li:before {
  content: '/';
  padding-right: 5px;
  padding-left: 5px;
}
.alineacion a:hover{
  color: #e25d29;
  text-decoration: none;

}




#slides {
  display: none
}

/* Center the slideshow */
.container {
  margin: 0 auto
}

/* Show active item in the pagination */
.slidesjs-pagination .active {
  color:red;
}

/* Media quires for a responsive layout */

/* For tablets & smart phones */
@media (max-width: 767px) {
  .container {
    width: auto
  }
}

/* For smartphones */
@media (max-width: 480px) {
  .container {
    width: auto
  }
}

/* For smaller displays like laptops */
@media (min-width: 768px) and (max-width: 979px) {
  .container {
    width: 724px
  }
}

/* For larger displays */
@media (min-width: 1200px) {
  .container {
    width: 1170px
  }
}
.main {
  width:90%;
  max-width:1000px;
  margin:20px auto;
}

.slides {
  width:100%;
}



.slidesjs-pagination {
  background:#424242;
  list-style:none;
  overflow:hidden;
}

.slidesjs-pagination li {
  float:left;
}

.slidesjs-pagination li a {
  display:block;
  padding:10px 20px;
  color:#fff;
  text-decoration:none;
}

.slidesjs-pagination li a:hover {
  background:#000;
}

.slides .active {
  background:#000;
}

.slidesjs-navigation{
  background:#000;
  color:#fff;
  text-decoration:none;
  display:inline-block;
  padding:10px;
  float:right;
}


@media(max-width: 960px){
  .slidesjs-navigation{
    width: 33.3%;
  }
  video.slidesjs-slide{
    height: 100%;
  }
}

.thumbnail{
  border: none;
  margin: 10% auto;
  margin-bottom: 5% !important;
}
.slidesjs-control{
  height: 450px !important;
}
.slidesjs-container{
  height: 100% !important;
}
.slidesjs-pagination{
  display: none;
}
.slidesjs-navigation{
    width: 50%;
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
                <li><a  href="welcome.blade.php">Inicio</a></li>
                <li><a  href="afiliacion.php">Afiliación</a></li>
                <li class="activado"><a href="">Indicadores <div style="float: right; margin-left: 50px;"><i class=" fa fa-chevron-down"></i></div></a>
                  <ul>
                    <li><a href="redneuronal.php">Red Neuronal</a></li>
                    <li><a href="indicador-noticias.php">Indicador Noticias</a></li>
                  </ul>
                </li>
                <li class="activado"><a href="">Robot<div class="i-flecha"><i class=" fa fa-chevron-down"></i></div></a>
                  <ul>
                    <li><a href="ccscalpingc.php">CCscalpingc</a></li>
                  </ul>
                </li>
                <li class="activado sitio"><a href="">Blog <div class="i-flecha"><i class=" fa fa-chevron-down"></i></div></a>
                  <ul>
                    <li><a class="sitio" href="cliente.php">Clientes</a></li>
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
                  <li class="w3-hide-small" ><a href="welcome.blade.php">Inicio</a></li>
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

                  <li class="current"><a href="#">Blog<span class="arrow"></span></a>
                    <ul style="display: none;" class="sub_menu">
                      <li class="arrow_top"></li>
                      <li class="current"><a href="cliente.php">Clientes</a></li>
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

    <main class="contenedor">
      <section>
        <div  style="background-image: url(../public/images/img21.jpg); width: 100%; height: 300px; margin-top:-260px;">
          <div class="centrado" style="color: #fff"> <h2 style="font-size: 75px;"> Blog Clientes </h2>
           <ul class="list-inline-dashed" style="display: -webkit-inline-box;">
            <li class="alineacion">
              <a href="welcome.blade.php"> Inicio</a>
            </li>
            <li class="alineacion">
             Blog Clientes
           </li>
         </ul>

       </div>
     </div>
   </section>
   <section id="ancla1" class="ancla1"  style="    position: sticky;">
    <h1 class="h1">Bienvenido al Blog Clientes</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="col-md-6">
          <h1 class="h2">
            Cuenta Clientes
          </h1>
          <hr class="divider bg-red"></hr>
          <p>
           Cuentas reales de todos nuestros clientes y evidencia que son cuentas reales.
          </p>
          <div class="thumbnail" >
            <div class="slides" id="slides">
              <img src="../public/images/bo1.png" style="height: 100%;">
              <img src="../public/images/bo2.png" style="height: 100%;">
              <img src="../public/images/bo3.png" style="height: 100%;">
              <img src="../public/images/bo4.png" style="height: 100%;">
              <img src="../public/images/bo5.png" style="height: 100%;">
              <img src="../public/images/bo6.png" style="height: 100%;">
              <img src="../public/images/bo7.png" style="height: 100%;">
              <img src="../public/images/bo8.png" style="height: 100%;">
              <img src="../public/images/bo9.png" style="height: 100%;">
              <img src="../public/images/bo10.png" style="height: 100%;">
              <img src="../public/images/bo11.png" style="height: 100%;">
              <img src="../public/images/bo12.png" style="height: 100%;">
              <img src="../public/images/bo13.png" style="height: 100%;">
              <img src="../public/images/bo14.png" style="height: 100%;">
              <img src="../public/images/bo15.png" style="height: 100%;">
              <img src="../public/images/bo16.png" style="height: 100%;">
              <img src="../public/images/bo17.png" style="height: 100%;">
              <img src="../public/images/bo18.png" style="height: 100%;">
              <img src="../public/images/bo19.png" style="height: 100%;">
              <img src="../public/images/bo20.png" style="height: 100%;">
               <img src="../public/images/bo21.png" style="height: 100%;">
              <img src="../public/images/bo22.png" style="height: 100%;">
              <img src="../public/images/bo23.png" style="height: 100%;">
              <img src="../public/images/bo24.png" style="height: 100%;">
              <img src="../public/images/bo25.png" style="height: 100%;">
              <img src="../public/images/bo26.png" style="height: 100%;">
              <img src="../public/images/bo27.png" style="height: 100%;">
              <img src="../public/images/bo28.png" style="height: 100%;">
              <img src="../public/images/bo29.png" style="height: 100%;">
              <img src="../public/images/bo30.png" style="height: 100%;">
              <img src="../public/images/bo31.png" style="height: 100%;">
              <img src="../public/images/bo32.png" style="height: 100%;">
              <img src="../public/images/bo33.png" style="height: 100%;">
              <img src="../public/images/bo34.png" style="height: 100%;">
              <img src="../public/images/bo35.png" style="height: 100%;">
              <img src="../public/images/bo36.png" style="height: 100%;">
              <img src="../public/images/bo37.png" style="height: 100%;">
              <img src="../public/images/bo38.png" style="height: 100%;">
              <img src="../public/images/bo39.png" style="height: 100%;">
              <img src="../public/images/bo40.png" style="height: 100%;">
              <img src="../public/images/bo41.png" style="height: 100%;">
              <img src="../public/images/bo42.png" style="height: 100%;">
              <img src="../public/images/bo43.png" style="height: 100%;">
              <img src="../public/images/bo44.png" style="height: 100%;">
              <img src="../public/images/bo45.png" style="height: 100%;">
              <img src="../public/images/bo46.png" style="height: 100%;">
              <img src="../public/images/bo47.png" style="height: 100%;">
              <img src="../public/images/bo48.png" style="height: 100%;">
              <img src="../public/images/bo49.png" style="height: 100%;">
              <img src="../public/images/bo50.png" style="height: 100%;">
              <img src="../public/images/bo51.png" style="height: 100%;">
              <img src="../public/images/bo52.png" style="height: 100%;">
              <img src="../public/images/bo53.png" style="height: 100%;">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h1 class="h2">
            Cuenta Clientes
          </h1>
          <hr class="divider bg-red"></hr>
          <p>
            Cuentas reales de todos nuestros clientes y evidencia que son cuentas reales.
          </p>
          <div class="thumbnail" >
            <div class="slides" id="slides1">
              <video  src="../public/video/vi1.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi2.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi3.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi4.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi5.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi6.mp4" height="350" style="height: 100%;" controls ></video>

              <video  src="../public/video/vi9.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi10.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi11.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi12.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi13.mp4" height="350" style="height: 100%;" controls ></video>

              <video  src="../public/video/vi15.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi16.mp4" height="350" style="height: 100%;" controls ></video>


              <video  src="../public/video/vi21.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi22.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi23.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi24.mp4" height="350" style="height: 100%;" controls ></video>
              <video  src="../public/video/vi25.mp4" height="350" style="height: 100%;" controls ></video>

              <video  src="../public/video/vi27.mp4" height="350" style="height: 100%;" controls ></video>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h1 class="h2">
            Auditoria Clientes
          </h1>
          <hr class="divider bg-red"></hr>
          <p>
            imágenes de auditoría realizada por los bróker a las cuentas de los clientes para
            evidenciar que son cuentas reales.

          </p>
          <div class="thumbnail" >
            <div class="slides" id="slides2">
              <a href="../public/images/bo60.png" target="_blank"><img src="../public/images/bo60.png" style="height: 600px;" ></a>
             <a href="../public/images/bo61.png" target="_blank"><img src="../public/images/bo61.png" style="height: 600px;" ></a>
             <a href="../public/images/bo62.png" target="_blank"><img src="../public/images/bo62.png" style="height: 600px;" ></a>
             <a href="../public/images/bo63.png" target="_blank"><img src="../public/images/bo63.png" style="height: 600px;" ></a>
             <a href="../public/images/bo64.png" target="_blank"><img src="../public/images/bo64.png" style="height: 600px;" ></a>
             <a href="../public/images/bo65.png" target="_blank"><img src="../public/images/bo65.png" style="height: 600px;" ></a>
             <a href="../public/images/bo66.png" target="_blank"><img src="../public/images/bo66.png" style="height: 600px;" ></a>
             <a href="../public/images/bo67.png" target="_blank"><img src="../public/images/bo67.png" style="height: 600px;" ></a>
             <a href="../public/images/bo68.png" target="_blank"><img src="../public/images/bo68.png" style="height: 600px;" ></a>
             <a href="../public/images/bo69.png" target="_blank"><img src="../public/images/bo69.png" style="height: 600px;" ></a>
             <a href="../public/images/bo70.png" target="_blank"><img src="../public/images/bo70.png" style="height: 600px;" ></a>
             <a href="../public/images/bo71.png" target="_blank"><img src="../public/images/bo71.png" style="height: 600px;" ></a>
             <a href="../public/images/bo72.png" target="_blank"><img src="../public/images/bo72.png" style="height: 600px;" ></a>
             <a href="../public/images/bo73.png" target="_blank"><img src="../public/images/bo73.png" style="height: 600px;" ></a>
             <a href="../public/images/bo74.png" target="_blank"><img src="../public/images/bo74.png" style="height: 600px;" ></a>
             <a href="../public/images/bo75.png" target="_blank"><img src="../public/images/bo75.png" style="height: 600px;" ></a>
             <a href="../public/images/bo76.png" target="_blank"><img src="../public/images/bo76.png" style="height: 600px;" ></a>
             <a href="../public/images/bo77.png" target="_blank"><img src="../public/images/bo77.png" style="height: 600px;" ></a>
             <a href="../public/images/bo78.png" target="_blank"><img src="../public/images/bo78.png" style="height: 600px;" ></a>
             <a href="../public/images/bo79.png" target="_blank"><img src="../public/images/bo79.png" style="height: 600px;" ></a>
             <a href="../public/images/bo80.png" target="_blank"><img src="../public/images/bo80.png" style="height: 600px;" ></a>
             <a href="../public/images/bo81.png" target="_blank"><img src="../public/images/bo81.png" style="height: 600px;" ></a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h1 class="h2">
            Testimonio de nuestros Clientes
          </h1>
          <hr class="divider bg-red"></hr>
          <p>
            Corto video de nuestros clientes hablando del robot sus bondades y nuestro buen servicio al cliente !!!Clientes felices!!!.
          </p>
          <div class="thumbnail" >
            <div class="slides" id="slides3">
              <video  src="../public/video/videoe.mp4" style="height: 100%;" controls ></video>
              <video  src="../public/video/comentario.mp4" style="height: 100%;"  controls ></video>
              <video  src="../public/video/comentario2.mp4" style="height: 100%;"  controls ></video>
              <video  src="../public/video/comentario3.mp4" style="height: 100%;"  controls ></video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</section>
<section  class="preguntas" style="background-image:  url(../public/images/imagen1.jpeg); width: 100%; background-repeat: no-repeat;background-size: cover; background-attachment: fixed; background-position: center;">
 <div style="background-color: rgba(0, 0, 0, 0.5);">
  <div class="container" style="width:95% !important;">
    <div>
      <h1 class="h1" style="color: #ffce25; margin-bottom: 5%; font-size: 50px;">
       Preguntas & Respuestas
     </h1>

   </div>
   <div class="row">

    <div class="col-md-6">
      <div  class="thumbnail " style=" margin: 10px;
      background-color: transparent;
      border: none;" >
      <h6 class="text-primary">Conócenos </h6>
      <p class="hola">Operar en forex manualmente no es algo muy efectivo ya que se necesita mucho
        tiempo y dedicación para poder entender, aplicar y probar las estrategias de
      forex.</p>
    </div>
  </div>
  <div class="col-md-6">
    <div  class="thumbnail" style=" margin: 10px;
    background-color: transparent;
    border: none;">
    <h6 class="text-primary">Con este robot</h6>
    <p class="hola">sabrás como los súper traders explotan el mercado forex, administrara automáticamente toda tu cuenta de forex, para que así puedas proteger tu inversión al máximo.</p>
  </div>
</div>
<div class="col-md-6">
  <div class="thumbnail" style=" margin: 10px;
  background-color: transparent;
  border: none;">
  <h6 class="text-primary">Obtendre sorporte</h6>
  <p class="hola">Por si fuera poco, te brindaremos soporte técnico los 365 días del año.</p>
</div>
</div>
<div class="col-md-6">
  <div class=" thumbnail" style=" margin: 10px;
  background-color: transparent;
  border: none;">
  <h6 class="text-primary">Que obtendré con el robot</h6>
  <p class="hola">ya podrás tener en tus manos un Robot Forex 100% en español el cual realizara todo el
    trabajo pesado por ti de forma automática para que puedas comenzar a ganar
    dinero en forex.
  </p>
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


<script>
  $(function() {
    $('#slides').slidesjs({

     play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 5000,
        // [number] Time spent on each slide in milliseconds.
        auto: false,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  });
</script>
<script>
  $(function() {
    $('#slides1').slidesjs({

     play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 5000,
        // [number] Time spent on each slide in milliseconds.
        auto: false,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  });
</script>
<script>
  $(function() {
    $('#slides2').slidesjs({

     play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 5000,
        // [number] Time spent on each slide in milliseconds.
        auto: false,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  });
</script>
<script>
  $(function() {
    $('#slides3').slidesjs({

     play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 5000,
        // [number] Time spent on each slide in milliseconds.
        auto: false,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  });
</script>

<script src="../public/js/jquery.slides.min.js"></script>

</body>
</html>
