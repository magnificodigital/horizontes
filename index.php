<?
$mktime = mktime();
$para	 = "atendimento@ekoconstrutora.com.br";
$headers = "Content-Type: text/plain; charset=utf-8\n";
$headers.= "From: contato@ekoconstrutora.com <contato@ekoconstrutora.com>\n";
$subject = "FORMULÁRIO DE CONTATO - EKO Horizontes";

$msg = "FORMULÁRIO DE CONTATO - EKO Horizontes - 
Data do ENVIO: ".date("d/m/y h:i",$mktime)."\n\n";

$msg .= "Nome: $nome\n";
$msg .= "DDD: $ddd\n";
$msg .= "Telefone: $telefone\n";
$msg .= "Email: $email\n";
$msg .= "Mensagem: $mensagem\n";

$msg .= "Quer receber as novidades da EKO? $checkbox\n";

#### Envia valores acima por email ##############################
if ($Submit) {			 
			mail($para,$subject,$msg,$headers);
			header("Location: http://www.ekohorizontes.com.br/index_form.php");
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eko Horizontes - O Privilégio de viver em um lugar único.</title>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25943833-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link type="text/css" rel="stylesheet" href="css/reset.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/rcarousel.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="jquery.colorbox.js"></script>
<link rel="stylesheet" href="css/colorbox.css" />
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2'});
				$(".group3").colorbox({rel:'group3'});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:650, innerHeight:400});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>


<!-- slider JS files -->
    
    
    <script class="rs-file" src="assets/jquery.royalslider.min.js"></script>
    <link class="rs-file" href="assets/royalslider.css" rel="stylesheet">


    <!-- slider stylesheets -->
    
     
        <link class="rs-file" href="css/rs-minimal-white.css" rel="stylesheet">

<!-- slider css -->
    <style>
  #full-width-slider {
  width: 100%;
  color: #000;
	}

.photosBy {
  position: absolute;
  line-height: 84px;
  font-size: 14px;
  background: #271f16;
  color: #FFFFF;
  padding: 0px 20px;
  position: absolute;
  left: 0px;
  bottom: 0px;
  top: auto;
  border-radius: 2px;
  z-index: 25;
	width:100%;
	height:80px;
	opacity:0.80;
	-moz-opacity: 0.80;
	filter: alpha(opacity=80); 
} 
.photosBy a {
  color: #000;
}
.fullWidth {
  max-width: 100%;
  margin: 0 auto;
}

@media screen and (min-width:960px) and (min-height:660px) {
  .heroSlider .rsOverflow,
  .royalSlider.heroSlider {
      height: 600px !important;
  }
}

@media screen and (min-width:960px) and (min-height:1000px) {
    .heroSlider .rsOverflow,
    .royalSlider.heroSlider {
        height: 660px !important;
    }
}
@media screen and (min-width: 0px) and (max-width: 800px) {
  .royalSlider.heroSlider,
  .royalSlider.heroSlider .rsOverflow {
    height: 300px !important;
  }
  </style>
  
	<style>
		.content{width:260px; height:600px;overflow:auto;}
		.content_5{width:870px !important; height:340px; overflow:auto;}
		#mcs_t_5{background:#e7be00;}
				
		#rolante ul{
		height:260px;	
		}
		
		#rolante ul li {
		float:left;
		margin-right:20px;
		}
		
		#rolante ul li h1 {
		font-size:14px;
		color:#000000;
		font-weight:400;
		padding-top:18px;
		}
		
	</style>
	<!-- Custom scrollbars CSS -->
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />
  <link href="css/css_hover.css" rel="stylesheet" />


<style type="text/css">
#container {
width: 540px;
position: relative;
margin: 0 auto;
}
			
#carousel {
width: 540px;
margin: 0 auto;
}
				
.slide {
margin: 0;
position: relative;
}
</style>

<script src="lib/prettyCheckboxes.js" type="text/javascript" charset="utf-8"></script>
<link type="text/css" rel="stylesheet" href="prettyCheckboxes.css"/>

<script src="lib/jquery.lettering-0.6.1.min.js"></script>
<script src="lib/jquery.scrollorama.js"></script>

                        <!-- Início do script Omnize --> 
<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);</script> 
<!-- Fim do script Omnize -->

</head>

<body onload="javascript:verificaMenu()">

<div id="menu" class="floater">
<div id="tarja_menu">
<div id="menu_content">
<div id="logo_menu"><a href="#home"><img src="_imgs/horizontes_aruja.png" width="310" height="70" alt="Eko Horizontes" /></a></div>
<div id="itens_menu">
<ul class="itens_menu" id="flutuante">
<li><a href="#empreendimento" id="btEmpreendimento">Empreendimento</a></li>
<li><a href="#empreendimento_localizacao_bg" id="btLocalizacao">Localização</a></li>
<li><a href="#empreendimento_diferenciais_bg" id="btFichaTecnica">Ficha Técnica</a></li>
<li><a href="#background_contato" id="btFalecomumCorretor">Fale com um Corretor</a></li>
</ul>

</div>

</div>
</div>

</div>


<div id="home">

<div id="tagverde">
<h1>O privilÉgio de viver em um lugar Único</h1> 
</div>
</div>

<div id="empreendimento">

<div id="empreendimento_sobre">
<h1>SOBRE O EMPREENDIMENTO</h1>
<p>O Horizontes é um projeto moderno e de alto padrão arquitetônico, localizado no bairro do Caputera em uma região bem estruturada, tranquila e cercada de verde, a apenas 5 minutos do centro de Arujá. Em meio às belas paisagens, compostas por ruas arborizadas, o bairro passa por constante desenvolvimento e valorização no mercado imobiliário, atraindo a atenção de novos moradores que buscam um local de fácil acesso e agradável para morar.</p>
</div>

<div id="empreendimento_lazer_titulo">
<div id="empreendimento_lazer_titulo_content">
<h2>Área de lazer completa e espaços perfeitos</h2>
</div>
</div>

<div id="empreendimento_lazer_carrossel">
<div id="empreendimento_lazer_carrossel_content">
<div class="content_5 content">
<div class="images_container">
<div id="rolante">			
<ul>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/01_imovelemaruja_horizontes.jpg"  title="Piscina Coberta"> <span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span><img src="_imgs/thumb01.jpg" border="0" /></a>
<h1>Piscina Coberta</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/02_imovelemaruja_horizontes.jpg" title="Piscina Externa"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png" border="0"/></span>
<img src="_imgs/thumb02.jpg" />
</a>
<h1>Piscina Externa</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/03_imovelemaruja_horizontes.jpg"  title="Sauna Spa"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png" border="0"/></span>
<img src="_imgs/thumb03.jpg" />
</a>
<h1>Sauna Spa</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/04_imovelemaruja_horizontes.jpg" title="Churrasqueira"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png" border="0"/></span>
<img src="_imgs/thumb04.jpg" />
</a>
<h1>Churrasqueira</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/05_imovelemaruja_horizontes.jpg" title="Quadra Poliesportiva"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png" border="0"/></span>
<img src="_imgs/thumb05.jpg" />
</a>
<h1>Quadra Poliesportiva</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/06_imovelemaruja_horizontes.jpg"  title="Quadra de Tênis"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span>
<img src="_imgs/thumb06.jpg" />
</a>
<h1>Quadra de Tênis</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/07_imovelemaruja_horizontes.jpg" title="Sala de Ginástica"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span>
<img src="_imgs/thumb07.jpg" />
</a>
<h1>Sala de Ginástica</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/08_imovelemaruja_horizontes.jpg" title="Sala de Dança"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span>
<img src="_imgs/thumb08.jpg" />
</a>
<h1>Sala de Dança</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/09_imovelemaruja_horizontes.jpg" title="Salão de Jogos Adulto"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span>
<img src="_imgs/thumb09.jpg" />
</a>
<h1>Salão de Jogos Adulto</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/10_imovelemaruja_horizontes.jpg" title="Salão de Jogos Juvenil"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span>
<img src="_imgs/thumb10.jpg" />
</a>
<h1>Salão de Jogos Juvenil</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/11_imovelemaruja_horizontes.jpg" title="Playground"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span>
<img src="_imgs/thumb11.jpg" />
</a>
<h1>Playground</h1>
</div>
</li>
<li>
<div class="viewport_projetos">
<a class="group3" href="_imgs/12_imovelemaruja_horizontes.jpg" title="Brinquedoteca"> 
<span class="dark-background"><img src="_imgs/img_zoom_lupa.png"/></span>
<img src="_imgs/thumb12.jpg" />
</a>
<h1>Brinquedoteca</h1>
</div>

</li>
</ul>

</div>
</div>
</div>


	<!-- custom scrollbars plugin -->
	<script src="lib/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				/* custom scrollbar fn call */
				$(".content_5").mCustomScrollbar({
					horizontalScroll:true,
					scrollButtons:{
						enable:false
					},
					theme:"dark-thin"
				});			
				/* 
				demo fn 
				functions below are for demo and examples
				*/
				$(".demo_functions a[rel='append-new']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container").append("<img src='demo_files/mcsThumb1.jpg' class='new' />");
					$(".content_6 .images_container img").load(function(){
						$(".content_6").mCustomScrollbar("update");
					});
				});
				$(".demo_functions a[rel='prepend-new']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container").prepend("<img src='demo_files/mcsThumb8.jpg' class='new' />");
					$(".content_6 .images_container img").load(function(){
						$(".content_6").mCustomScrollbar("update");
					});
				});
				$(".demo_functions a[rel='append-new-scrollto']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container").append("<img src='demo_files/mcsThumb1.jpg' class='new' />");
					$(".content_6 .images_container img").load(function(){
						$(".content_6").mCustomScrollbar("update");
						$(".content_6").mCustomScrollbar("scrollTo","right");
					});
				});
				$(".demo_functions a[rel='scrollto']").click(function(e){
					e.preventDefault();
					$(".content_6").mCustomScrollbar("scrollTo","#mcs_t_5");
				});
				$(".demo_functions a[rel='remove-last']").click(function(e){
					e.preventDefault();
					$(".content_6 .images_container img:last").remove();
					$(".content_6").mCustomScrollbar("update");
				});
				$(".demo_functions a[rel='toggle-width']").click(function(e){
					e.preventDefault();
					$(".content_6").toggleClass("toggle_width");
					$(".content_6").mCustomScrollbar("update");
				});
				$(".demo_functions a[rel='scrollto-par-5']").click(function(e){
					e.preventDefault();
					$(".content_7").mCustomScrollbar("scrollTo","#par-5");
				});
				$(".demo_functions a[rel='increase-height']").click(function(e){
					e.preventDefault();
					$(".content_7").animate({height:1100},"slow",function(){
						$(this).mCustomScrollbar("update");
					});
				});
				$(".demo_functions a[rel='decrease-height']").click(function(e){
					e.preventDefault();
					$(".content_7").animate({height:350},"slow",function(){
						$(this).mCustomScrollbar("update");
					});
				});
				var content_7_height=$(".content_7").height();
				$(".demo_functions a[rel='reset-height']").click(function(e){
					e.preventDefault();
					if($(".content_7").height()!=content_7_height){
						$(".content_7").animate({height:content_7_height},"slow",function(){
							$(this).mCustomScrollbar("update");
						});
					}
				});
				$(".demo_functions a[rel='scrollto-bottom']").click(function(e){
					e.preventDefault();
					$(".content_7").mCustomScrollbar("scrollTo","bottom");
				});
				$(".demo_functions a[rel='scrollto-top']").click(function(e){
					e.preventDefault();
					$(".content_7").mCustomScrollbar("scrollTo","top");
				});
				$(".demo_functions a[rel='scrollto-par-1st']").click(function(e){
					e.preventDefault();
					$(".content_7").mCustomScrollbar("scrollTo","first");
				});
				function onScrollCallback(){
					$(".callback_demo .callback_demo_output").html("<em>Scrolled... Content top position: "+mcs.top+"</em>").children("em").delay(1000).fadeOut("slow");
				}
				function onTotalScrollCallback(){
					if($(".appended").length<1){
						$(".content_8 .mCSB_container").append("<p class='appended'><img src='demo_files/mcsImg1.jpg' /></p>");
					}else{
						$(".callback_demo .callback_demo_output").html("<em>Scrolled to bottom. Content top position: "+mcs.top+"</em>").children("em").delay(1000).fadeOut("slow");
					}
					$(".content_8 .mCSB_container img").load(function(){
						$(".content_8").mCustomScrollbar("update");
						$(".callback_demo .callback_demo_output").html("<em>New image loaded...</em>").children("em").delay(1000).fadeOut("slow");
					});
				}
				function onTotalScrollBackCallback(){
					$(".callback_demo .callback_demo_output").html("<em>Scrolled to top. Content top position: "+mcs.top+"</em>").children("em").delay(1000).fadeOut("slow");
				}
				$(".callback_demo a[rel='scrollto-bottom']").click(function(e){
					e.preventDefault();
					$(".content_8").mCustomScrollbar("scrollTo","bottom");
				});
			});
		})(jQuery);
	</script>
  
    <script type="text/javascript">
		    $(document).ready(function() {
        $('.viewport_projetos').mouseenter(function(e) {
            $(this).children('a').children('img').animate({ height: '200', left: '0', top: '0', width: '200'}, 100);
            $(this).children('a').children('span').fadeIn(200);
        }).mouseleave(function(e) {
            $(this).children('a').children('img').animate({ height: '200', left: '0', top: '0', width: '200'}, 100);
            $(this).children('a').children('span').fadeOut(200);
        });
    });
    </script>

</div>
</div>

<div id="empreendimento_depoimentos">
<div id="empreendimento_depoimentos_content">
<div id="empreendimento_depoimentos_content_carrossel">

<div id="container">

<div id="carousel">

<div id="slide01" class="slide">
<div id="depoimentos">
<div id="aspas01"><img src="_imgs/aspas_topo.png" alt="" width="30" height="20" /></div>
<p>Um projeto ímpar, contemporâneo, com muito conforto, privacidade e integração com a natureza. Sua vista privilegiada e as áreas de convivência e lazer imersas em áreas verdes fazem este empreendimento de alto padrão alimentar o sonho de morar bem e com estilo.</p>
<div id="aspas02"><img src="_imgs/aspas_baixo.png" alt="" width="30" height="20" /></div>
<div id="depoimentos_autor">
<div id="depoimentos_autor_texto"><span class="negrito">Sandra Chechter e Vania Tramontino</span><br />
<span class="catorze">Arquitetas Responsáveis</span></div>
<div id="depoimentos_autor_foto"><img src="_imgs/autor01.png" alt="" width="100" height="100" /></div>
</div>
</div>
</div>


<div id="slide02" class="slide">
<div id="depoimentos">
<div id="aspas01"><img src="_imgs/aspas_topo.png" alt="" width="30" height="20" /></div>
<p>O Horizontes foi inspirado em um estilo único, para o morador usufruir ao máximo o seu espaço. Utilizamos materiais nobres e mobiliários modernos, tornando cada ambiente um espaço agradável.</p>
<div id="aspas02"><img src="_imgs/aspas_baixo.png" alt="" width="30" height="20" /></div>
<div id="depoimentos_autor">
<div id="depoimentos_autor_texto"><span class="negrito">Ricardo Frazatto</span><br />
<span class="catorze">Arquiteto de Interiores Responsável</span></div>
<div id="depoimentos_autor_foto"><img src="_imgs/autor02.png" alt="" width="100" height="100" /></div>
</div>
</div>
</div>


<div id="slide03" class="slide">
<div id="depoimentos">
<div id="aspas01"><img src="_imgs/aspas_topo.png" alt="" width="30" height="20" /></div>
<p>Pensei com carinho no futuro morador e em como as áreas de lazer neste empreendimento pudessem verdadeiramente acrescentar melhorias ao seu cotidiano. Acredito que fazer amigos, poder brincar, relaxar e estar próximo de áreas ajardinadas, de fato contribuem para reduzir o stress e aumentar a sensação de bem-estar. Sendo assim, projetei espaços que propiciem esta convivência de modo harmonioso.</p>
<div id="aspas02"><img src="_imgs/aspas_baixo.png" alt="" width="30" height="20" /></div>
<div id="depoimentos_autor">
<div id="depoimentos_autor_texto"><span class="negrito">Martha Gavião</span><br />
  <span class="catorze">Arquiteta de Paisagismo Responsável</span></div>
<div id="depoimentos_autor_foto"><img src="_imgs/autor03.png" alt="" width="100" height="100" /></div>
</div>
</div>
</div>


</div>
</div>
</div>

		<script type="text/javascript" src="lib/jquery.ui.core.js"></script>
		<script type="text/javascript" src="lib/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="lib/jquery.ui.rcarousel.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				function generatePages() {
					var _total, i, _link;
					
					_total = $( "#carousel" ).rcarousel( "getTotalPages" );
					
					for ( i = 0; i < _total; i++ ) {
						_link = $( "<a href='#'></a>" );
						
						$(_link)
							.bind("click", {page: i},
								function( event ) {
									$( "#carousel" ).rcarousel( "goToPage", event.data.page );
									event.preventDefault();
								}
							)
							.addClass( "bullet off" )
							.appendTo( "#pages" );
					}
					
					// mark first page as active
					$( "a:eq(0)", "#pages" )
						.removeClass( "off" )
						.addClass( "on" )
						.css( "background-image", "url(images/page-on.png)" );

				}

				function pageLoaded( event, data ) {
					$( "a.on", "#pages" )
						.removeClass( "on" )
						.css( "background-image", "url(images/page-off.png)" );

					$( "a", "#pages" )
						.eq( data.page )
						.addClass( "on" )
						.css( "background-image", "url(images/page-on.png)" );
				}
				
				$("#carousel").rcarousel(
					{
						visible: 1,
						step: 1,
						speed: 400,
						auto: {
							enabled: true
						},
						width: 540,
						height: 290,
						start: generatePages,
						pageLoaded: pageLoaded
					}
				);
				
				$( "#ui-carousel-next" )
					.add( "#ui-carousel-prev" )
					.add( ".bullet" )
					.hover(
						function() {
							$( this ).css( "opacity", 0.7 );
						},
						function() {
							$( this ).css( "opacity", 1.0 );
						}
					);
			});
		</script>


<div id="empreendimento_depoimentos_content_imagem">
  <img src="_imgs/depoimento_empreendimento.png" alt="EKO Horizontes" width="264" height="420" /> </div>

</div>
</div>

<div id="empreendimento_fotos_titulo">
<h1>190m², 3 suítes e 4 vagas de garagem. Sua casa do seu jeito</h1>
</div>

<div id="empreendimento_fotos_carrossel">

    <!-- slider code start -->
  <div class="sliderContainer fullWidth clearfix">
<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
<div class="rsContent">
<img class="rsImg" src="_imgs/13_imovelemaruja_horizontes.jpg" alt="" />
<span class="photosBy rsAbsoluteEl" data-fade-effect="fa;se" data-move-offset="40" data-move-effect="bottom" data-speed="200">Hall</span>
</div>
<div class="rsContent">
<img class="rsImg" src="_imgs/14_imovelemaruja_horizontes.jpg" alt="" />
<span class="photosBy rsAbsoluteEl" data-fade-effect="fa;se" data-move-offset="40" data-move-effect="bottom" data-speed="200">Living</span>
</div>
<div class="rsContent">
<img class="rsImg" src="_imgs/15_imovelemaruja_horizontes.jpg" alt="" />
<span class="photosBy rsAbsoluteEl" data-fade-effect="fa;se" data-move-offset="40" data-move-effect="bottom" data-speed="200">Espaço Gourmet</span>
</div>
<div class="rsContent">
<img class="rsImg" src="_imgs/16_imovelemaruja_horizontes.jpg" alt="" />
<span class="photosBy rsAbsoluteEl" data-fade-effect="fa;se" data-move-offset="40" data-move-effect="bottom" data-speed="200">Suíte Master</span>
</div>
<div class="rsContent">
<img class="rsImg" src="_imgs/17_imovelemaruja_horizontes.jpg" alt="" />
<span class="photosBy rsAbsoluteEl" data-fade-effect="fa;se" data-move-offset="40" data-move-effect="bottom" data-speed="200">Terraço</span>
</div>

</div>
</div> 
</div>
</div>   
  

<div id="empreendimento_localizacao_bg">
<div id="empreendimento_localizacao_content">
<h1>Perto de tudo o que você precisa</h1>
<div id="empreendimento_localizacao_content_mapa"><img src="_imgs/imagem_mapa.jpg" width="700" height="300" /></div>
<div id="empreendimento_localizacao_content_texto">
<p>Estrada do Limoeiro, 505 Bairro do Caputera - Arujá/SP</p>
<p>Em frente ao Colégio Sion</p>
<a class="group2" href="_imgs/18_imovelemaruja_horizontes.jpg"><img src="_imgs/bt_mapa_artistico.png" width="220" height="80" /></a></div>
</div>
</div>

<div id="empreendimento_diferenciais_bg">
<div id="empreendimento_diferenciais_content">

<div id="empreendimento_diferenciais_content_esquerda">
<h1>DIFERENCIAIS E FICHA TÉCNICA</h1><br />
<p>• Área privada de 190,36m²<br />• 3 Suítes<br />• 4 Vagas de Garagem por Unidade</p>
<p>• Terreno com mais de 10.141,30m²<br />• 2 Torres<br />• 3 Elevadores por Torre<br />• Estacionamento para Visitantes<br />• Piscina Coberta e Aquecida<br />• Piscina Externa<br />
• Churrasqueira<br />• Quadra Poliesportiva<br />• Quadra de Tênis<br />• Pista de Caminhada<br />• Sala de Ginástica<br />• Sala de Dança<br />• Sauna SPA<br />• Sala de Fisioterapia e Massagem<br />
• Salão de Festas<br />• Lounge<br />• Salão de Jogos Adulto<br />• Salão de Jogos Juvenil<br />• Playground<br />• Brinquedoteca</p>
</div>

<div id="empreendimento_diferenciais_content_direita">
<img src="_imgs/img_planta.png" width="540" height="346" />
<div id="empreendimento_diferenciais_content_direita_botao">
<a class="group1" href="_imgs/20_imovelemaruja_horizontes.jpg" title="Planta de Implantação"><img src="_imgs/bt_plantas.png" width="220" height="80" /></a>
<a class="group1" href="_imgs/19_imovelemaruja_horizontes.jpg" title="Planta Apartamento Tipo"></a>
</div>
</div>

</div>
</div>
</div>
</div>

<div id="background_contato">
<div id="contato">
<h1>FALE COM UM CORRETOR</h1>
<p>Aproveite e reserve agora mesmo a sua unidade no HORIZONTES.<br />Preencha o formulário abaixo e nós ligamos para você.<br /><br />Se preferir, ligue para (11) 4274-0500.</p>
<div id="formulario">
<? if (!isset($Submit)) { ?>	
<span class="msgsend"><? echo $msg2; ?></span>	   
<form method="POST" action="" onSubmit="return validaform();" id="checkboxDemo" name="checkboxDemo">
<input name="nome" id="nome" value="Nome*" class="padrao1" onFocus="if(this.value == 'Nome*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'Nome*';}" />

<div id="telddd">
<input name="ddd" id="ddd" onkeypress="return txtBoxFormat(this, '(99)', event);" maxlength="5" value="DDD*" class="ddd" onFocus="if(this.value == 'DDD*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'DDD*';}"/>
<input name="telefone" id="telefone" onkeypress="return txtBoxFormat(this, '(99)9999-99999', event);" maxlength="20" value="Telefone*" class="fone" onFocus="if(this.value == 'Telefone*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'Telefone*';}"/>
</div>

<input name="email" id="email" value="E-mail*" class="padrao1" onFocus="if(this.value == 'E-mail*'){ this.value='';}" onBlur="if(this.value == '') {this.value = 'E-mail*';}"/>
<input name="mensagem" type="text" class="mensagem" id="mensagem" onfocus="if(this.value == 'Mensagem*'){ this.value='';}" onblur="if(this.value == '') {this.value = 'Mensagem*';}" value="Mensagem*" />

<div id="checkkk">
<input name="checkbox" type="checkbox" id="checkbox-2" value="SIM" checked="CHECKED" />
<label for="checkbox-2" tabindex="2">
<div id="label_check">
Quero receber as novidades do EKO HORIZONTES em meu e-mail
</div>
</label>
</div>

<input name="Submit" id="Submit" type="submit" value="Enviar" class="btSubmit">
</form>
 <? } ?>  
</div>
</div>

</div>




<div id="bg_footer">
<div id="footer_content">
<div id="footer_content_esquerda">
Arquitetura:
<ul>
<li>MARTHA GAVIÃO</li>
<li>RICARDO FRAZZÁTO</li>
<li>SANDRA CHECHTER</li>
</ul>
<p>Perspectivas Artísticas. Material preliminar sujeito a alteração. Todas as imagens apresentadas neste site são meramente ilustrativas. As áreas comuns serão entregues conforme o Memorial Descritivo anexo ao contrato aquisitivo. O empreendimento somente será comercializado após a expedição do alvará de aprovação pela municipalidade e o registro do Memorial de Incorporação no cartório de registro de imóveis competente.</p>
</div>

<div id="footer_content_direita">
Construção, Incorporação e Vendas
<div id="footer_content_direita_logo">
  <img src="_imgs/logotipo_eko.jpg" width="160" height="74" /> </div>
</div>

</div>

</div>

 		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$('#checkboxDemo input[type=checkbox],#radioDemo input[type=radio]').prettyCheckboxes();
				$('.inlineRadios input[type=radio]').prettyCheckboxes({'display':'inline'});
			});
		</script>
    
    <script type="text/javascript">
function validaform()
{
	if(document.checkboxDemo.nome.value == 'Nome*'){
		alert("[NOME] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.nome.focus();
		return false;
	}

	if(document.checkboxDemo.ddd.value == 'DDD*'){
		alert("[DDD] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.telefone.focus();
		return false;
	}

	if(document.checkboxDemo.telefone.value == 'Telefone*'){
		alert("[TELEFONE] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.telefone.focus();
		return false;
	}
	
	if (document.checkboxDemo.email.value == 'E-mail*'){
		alert("[E-MAIL] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.email.focus();
		return false;
	}
	if (document.checkboxDemo.email.value.indexOf("@") == -1){
		alert("Digite o seu [E-MAIL] corretamente.");
		document.checkboxDemo.email.focus();
		return false;
	}
	if (document.checkboxDemo.email.value.indexOf(".") == -1){
		alert("Digite o seu [E-MAIL] corretamente.");
		document.checkboxDemo.email.focus();
		return false;
	}

	if(document.checkboxDemo.mensagem.value == 'Mensagem*'){
		alert("[MENSAGEM] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.mensagem.focus();
		return false;
	}
}
</script> 

     <script type="text/javascript">
    	$(function(){
			//inicia a navegacao
			navegation($('ul.itens_menu a'),78);
			navegation($('#logo_menu a'),78);
			});
		
		//função para o menu deslizante
		function navegation(elemento,desconto){
			elemento.bind('click',function(event){
				var $anchor = $(this);
				var calculo = $($anchor.attr('href')).offset().top;
				if(desconto){
					var goto = calculo-desconto;
				}else{
					var goto = calculo;
				}
				
				$('html, body').stop().animate({
					scrollTop: goto
				}, 900,'easeInOutExpo');
			
				event.preventDefault();
				
			});				
		}		
		
    </script> 

<script type="text/javascript">
	
	function verificaMenu()
	{
		var y = jQuery(window).scrollTop(); //console.log(y);
		
		
		if(y <= 720)
		{
			$("#flutuante li").removeClass('current');
		}
		
		
		if(y >= 721 && y <= 2840)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(0)").addClass('current');
		}
		else if(y >= 2841 && y <= 3320)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(1)").addClass('current');
		}
				else if(y >= 3321 && y <= 3960)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(2)").addClass('current');
		}
		

								else if(y >= 3961)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(3)").addClass('current');
		}								
	setTimeout('verificaMenu()', 500);
	};
</script>

<script id="addJS">jQuery(document).ready(function($) {
  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: true,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 350,
    controlNavigation: 'none',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
        autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: true,
				delay:3000,
    	},
    transitionType:'move',
    globalCaption: false,
    deeplinking: {
      enabled: true,
      change: false
    },
    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
    imgWidth: 1440,
    imgHeight: 600
  });
});
</script>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  
<script type="text/javascript">
    var meus_campos = {
        'mensagem': 'Mensagem',
        'nome': 'nome',
        'ddd': 'DDD - Telefone',
        'telefone': 'telefone',
        'email': 'email'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'Horizontes - Contato', options);  
</script>

</body>


</html>
