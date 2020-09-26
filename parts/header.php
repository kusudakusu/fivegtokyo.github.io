<!-- ==============================
  header
============================== -->

<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171126086-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-171126086-1');
	</script>

	<!-- もしもタグ -->
	<script src="https://r.moshimo.com/af/r/maftag.js"></script>

	<!-- ロンバートタグ -->
	<script type='text/javascript' src='https://js.crossees.com/csslp.js' async></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PHN3CCX');</script>
	<!-- End Google Tag Manager -->

	<!-- == Settings ==================== -->
	<!-- basic -->
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<title>【公式】FIVE G TOKYO | 3ヶ月で動画編集ができるようになるエディタースクール</title>
	<meta name="description" content="未経験から3ヶ月で動画編集ができるようになるエディタースクールです。5G時代到来に合わせ、今需要が高まっている動画編集スキルを身につけて、副業など活躍の場を広げましょう。">
	<meta name="keywords" content="hoge">
	<!-- ogp -->
	<meta property="og:title" content="【公式】FIVE G TOKYO | 3ヶ月で動画編集ができるようになるエディタースクール">
	<meta property="og:type" content="website">
	<meta property="og:image" content="/assets/images/common/ogp.png">
	<meta property="og:url" content="fivegtokyo.com">
	<meta property="og:site_name" content="FIVE G TOKYO">
	<meta property="og:description" content="未経験から3ヶ月で動画編集ができるようになるエディタースクールです。5G時代到来に合わせ、今需要が高まっている動画編集スキルを身につけて、副業など活躍の場を広げましょう。">
	<!-- favicon -->
	<link rel="icon" href="/assets/images/common/favicon.ico">
	<!-- == style ==================== -->
	<!-- jquery ui -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
	<!-- swiper -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
	<!-- DateTimePicker -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/jquery.datetimepicker.css">
	<!-- original -->
	<link rel="stylesheet" href="assets/styles/style.css">
	<!-- Begin Mieruca Embed Code -->
	<script type="text/javascript" id="mierucajs">
	window.__fid = window.__fid || [];__fid.push([911978468]);
	(function() {
	function mieruca(){if(typeof window.__fjsld != "undefined") return; window.__fjsld = 1; var fjs = document.createElement('script'); fjs.type = 'text/javascript'; fjs.async = true; fjs.id = "fjssync"; var timestamp = new Date;fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v='+ timestamp.getTime(); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(fjs, x); };
	setTimeout(mieruca, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
	})();
	</script>
	<!-- End Mieruca Embed Code -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHN3CCX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- == URL分岐 ==================== -->
<?php $url = $_SERVER['REQUEST_URI']; ?>

<!-- == header ==================== -->
<header class="header">
	<div class="headerInner">
		<a class="logoWrap" href="/"><img src="assets/images/common/logo_side.svg" alt="ロゴ" class="logo"></a>
		<ul class="list">
			<?php if($url == "/"){ ?>
				<li class="list__item"><a href="#section-desire" class="list__link">サービスについて<br><span class="list__en">ABOUT</span></a></li>
				<li class="list__item"><a href="#section-interview" class="list__link">卒業生インタビュー<br><span class="list__en">INTERVIEW</span></a></li>
				<li class="list__item"><a href="#section-curriculum" class="list__link">受講カリキュラム<br><span class="list__en">CURRICULUM</span></a></li>
				<li class="list__item"><a href="#section-price" class="list__link">受講料金<br><span class="list__en">PRICE</span></a></li>
				<li class="list__item"><a href="#section-form" class="btn"><span class="btn__text btn__text--icon">無料カウンセリングで相談する</span></a></li>
			<?php } else { ?>
				<li class="list__item"><a href="/#section-desire" class="list__link">サービスについて<br><span class="list__en">ABOUT</span></a></li>
				<li class="list__item"><a href="/#section-interview" class="list__link">卒業生インタビュー<br><span class="list__en">INTERVIEW</span></a></li>
				<li class="list__item"><a href="/#section-curriculum" class="list__link">受講カリキュラム<br><span class="list__en">CURRICULUM</span></a></li>
				<li class="list__item"><a href="/#section-price" class="list__link">受講料金<br><span class="list__en">PRICE</span></a></li>
				<li class="list__item"><a href="/#section-form" class="btn"><span class="btn__text btn__text--icon">無料カウンセリングで相談する</span></a></li>
			<?php } ?>
		</ul>
		<!-- menuTrigger -->
		<div class="menuTrigger">
			<div class="barWrap">
		    <span class="bar"></span>
		    <span class="bar"></span>
				<span class="bar"></span>
		  </div>
		</div>
	</div>
</header>
<!-- drawer -->
<div class="drawer">
	<ul class="list">
		<?php if($url == "/"){ ?>
			<li class="list__item"><a href="#section-desire" class="list__link">サービスについて<br><span class="list__en">ABOUT</span></a></li>
			<li class="list__item"><a href="#section-interview" class="list__link">卒業生インタビュー<br><span class="list__en">INTERVIEW</span></a></li>
			<li class="list__item"><a href="#section-curriculum" class="list__link">受講カリキュラム<br><span class="list__en">CURRICULUM</span></a></li>
			<li class="list__item"><a href="#section-price" class="list__link">受講料金<br><span class="list__en">PRICE</span></a></li>
			<li class="list__item"><a href="#section-form" class="btn btn--balloon"><img class="balloon" src="assets/images/common/btn_balloon.svg" alt="ロゴ" class="logo"><span class="btn__text btn__text--icon">無料カウンセリングで相談する</span></a></li>
		<?php } else { ?>
			<li class="list__item"><a href="/#section-desire" class="list__link">サービスについて<br><span class="list__en">ABOUT</span></a></li>
			<li class="list__item"><a href="/#section-interview" class="list__link">卒業生インタビュー<br><span class="list__en">INTERVIEW</span></a></li>
			<li class="list__item"><a href="/#section-curriculum" class="list__link">受講カリキュラム<br><span class="list__en">CURRICULUM</span></a></li>
			<li class="list__item"><a href="/#section-price" class="list__link">受講料金<br><span class="list__en">PRICE</span></a></li>
			<li class="list__item"><a href="/#section-form" class="btn btn--balloon"><img class="balloon" src="assets/images/common/btn_balloon.svg" alt="ロゴ" class="logo"><span class="btn__text btn__text--icon">無料カウンセリングで相談する</span></a></li>
		<?php } ?>
	</ul>
	<p class="suppWrap"><span class="supp">まずはお気軽にご相談ください！</span></p>
</div>

<!-- == main ==================== -->
<main class="main">
