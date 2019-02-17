<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../public/css/styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../public/css/demo.css" media="all" />
    <!-- jQuery lib from google server ===================== -->
	<script src="../public/js/jquery-1.7.2.min.js"></script>
	<title>Home</title>
<!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
$(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);			
		}
	);
});
//end
</script>

<style type="text/css">
* {
  box-sizing: border-box;
}
html {
  font-size: 1em;
  font-family: 'Alike';
  background-color: #262626;
  color: #d9d9d9;
}
body {
  margin: 0;
}
img {
  max-width: 100%;
  height: auto;
}
h1,h2,h3,h4,h5,h6 {
  font-family: 'Roboto';
  line-height: 1.313em;
}
h1 {
  font-size: 3em;
  margin: 0.563em 0;
}
h2 {
  font-size: 2.25em;
  margin: 0.625em 0;
}
h3 {
  font-size: 1.5em;
  margin: 1.313em 0;
}
h4 {
  font-size: 1.313em;
  margin: 1.313em 0;
}
h5 {
  font-size: 1.125em;
  margin: 1.313em 0;
}
h6 {
  font-size: 1em;
  margin: 0.75em 0;
}
/* estilos forma primer contenedor */
.content {
 font-size: 1.875rem;
  color: #262626;
  background-size: 100% auto;
  background-attachment: fixed;
  background-repeat: no-repeat;
}
.right {
  padding: 1.618em 6.472em 3.236em 50%;
  background-position: 0 50%;
}
.illustration_01 {
  background-color: #00c17b;
  background-image: url("../public/images/planoColor.jpg");
}
/* estilos forma primer contenedor */

/* estilos forma segundo contenedor */
.left {
  padding: 1.618em 50% 3.236em 6.472em;
  background-position: 100% 50%;
}
.illustration_02 {
  background-color: #e8697b;
  background-image: url("../public/images/img2.jpg");
}
.fondo{
 background-image: url("../public/images/plano.jpg");
}
/* estilos forma segundo contenedor */

.separator {
    color: #e0dfdc;
    background-color: #333;
    letter-spacing: .1em;
    text-shadow: 
      0 -1px 0 #fff, 
      0 1px 0 #2e2e2e, 
      0 2px 0 #2c2c2c, 
      0 3px 0 #2a2a2a, 
      0 4px 0 #282828, 
      0 5px 0 #262626, 
      0 6px 0 #242424, 
      0 7px 0 #222, 
      0 8px 0 #202020, 
      0 9px 0 #1e1e1e, 
      0 10px 0 #1c1c1c, 
      0 11px 0 #1a1a1a, 
      0 12px 0 #181818, 
      0 13px 0 #161616, 
      0 14px 0 #141414, 
      0 15px 0 #121212, 
      0 22px 30px rgba(0, 0, 0, 0.9);
  font-size: 0.875rem;
  padding: 0.618em 0;
  text-align: center;
}

.smallscreen {
  display: none;
}

@media (max-width: 106.25rem) {
  .wrapper,
  .separator {
    font-size: 1.6875rem;
  }
}
@media (max-width: 93.75rem) {
  .content,
  .separator {
    font-size: 1.5rem;
  }
  .right {
    padding: 1.618em 4.854em 1.618em 50%;
  }
  .left {
    padding: 1.618em 50% 1.618em 4.854em;
  }
}
@media (max-width: 81.25rem) {
  .content,
  .separator {
    font-size: 1.3125rem;
  }
  .right {
    padding: 1.618em 3.236em 1.618em 45%;
    background-size: 100% auto;
    background-position: 0 55%;
  }
  .left {
    padding: 1.618em 45% 1.618em 3.236em;
    background-size: 100% auto;
    background-position: 100% 55%;
  }
}
@media (max-width: 68.75rem) {
  .content,
  .separator {
    font-size: 1.125rem;
  }
  .right {
    padding: 1.618em 3.236em 1.618em 40%;
    background-size: 100% auto;
    background-position: 0 60%;
  }
  .left {
    padding: 1.618em 40% 1.618em 3.236em;
    background-size: 100% auto;
    background-position: 100% 60%;
  }
}
@media (max-width: 50rem) {
  .smallscreen {
    display: block;
  }
  .right {
    padding: 1.618em 3.236em;
    background-image: none;
  }
  .left {
    padding: 1.618em 3.236em;
    background-image: none;
  }
}

@media (max-width: 31.25rem) {
  .right {
    padding: 1.618em 1.618em;
  }
  .left {
    padding: 1.618em 1.618em;
  }
}
@media (max-width: 12rem) {
  html {
    min-width: 12rem;
  }
}
#fdw{width:100%; height:50px; background:#2b2b2b; padding-top:20px; text-align:center; min-width:900px}
	</style>
</head>
<body>
	<div id="fdw">
				<!--nav-->
					<nav>
						<ul>
							<li class="current"><a href="http://www.freshdesignweb.com">home<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a class="subCurrent" href="http://www.freshdesignweb.com">Home Service</a></li>
									<li><a href="http://www.freshdesignweb.com">Home Responsive</a></li>
								</ul>
							</li>
							<li><a href="http://www.freshdesignweb.com">about</a></li>
							<li><a href="http://www.freshdesignweb.com">services</a></li>
							<li>
								<a href="http://www.freshdesignweb.com">portfolio<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio 3 </a></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio 4 </a></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio Single</a></li>
									<li><a href="http://www.freshdesignweb.com">Portfolio Two</a></li>
								</ul>
							</li>
							<li>
								<a href="http://www.freshdesignweb.com">blog<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="http://www.freshdesignweb.com">Design</a></li>
									<li><a href="http://www.freshdesignweb.com/category/html5">HTML5</a></li>
									<li><a href="http://www.freshdesignweb.com/category/css-html">CSS3</a>
									</li><li><a href="http://www.freshdesignweb.com/category/ajax-jquery">jQuery</a></li>
								</ul>
							</li>
							<li><a href="http://www.freshdesignweb.com">contact</a></li>
						</ul>
					</nav>
		</div><!-- end fdw -->
    <div class="content  illustration_01">
     	<div style="width: 50%;height: 600px;background-color:#e8697b">
			hola
		</div>
    </div>  
    <section class="separator">
 		 <h3>Cuerpo</h3>
	</section>
  	<div class="content illustration_02">
    	<figure class="smallscreen">
 			 <image src="../public/images/img2.jpg">
		</figure>
		<div style="width: 50%;height: 100%;background-color:#e8697b">
			hola
		</div>
	</div>
	<div class="fondo">
	    	 <div class="content">
		 		 <h2>Fixed Background Scrolling Effect</h2>
			</div>
	</div>
</body>
</html>

