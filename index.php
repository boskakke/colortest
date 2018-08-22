<? require_once("../dummy/dummy.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BG test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
<style>
	
	article {
		position: relative;
		display: block;
		margin: 2px auto 0;
		width: 100%;
		height: 80vh;
	}
	span {
		content: '';
		width: 100%;
		height: 70%;
		background-color: red;
		position: absolute;
		left: 0;
		bottom: 0;
		z-index: 2;
	}
	
	img {
		position: absolute;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.header {
		font-size: 60px;
		color: #fff;
		font-weight: bold;
		font-family: sans-serif;
		margin: 0 0 20px;
		padding: 0 20px;
	}

	.summary {
		color: #fff;
		font-family: sans-serif;
		font-size: 15px;
		padding: 0 20px;
	}

	.content {
		position: absolute;
		bottom: 20px;
		z-index: 20;
		left: 50%;
		transform: translateX(-50%);
		text-align: center;
		max-width: 600px;
		width: 100%;

	}

	@media screen and (max-width: 992px) {
		.header {
			font-size: 30px;
			
		}
	}
	
a {
	color: #fff;

}	
</style>

<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #ae6351 100%);"></span><img src="https://images.interactives.dk/lyn2-emQFiZZpe-BV1GF8Odh8NQ.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C23%2C356%2C200&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #014d83 100%);"></span><img src="https://images.interactives.dk/haj-LxUHvTa4iBbYR3Ta1by09A.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C0%2C0&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #6a3e2c 100%);"></span><img src="https://images.interactives.dk/files/bonnier-ill/pictures/iris.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=27%2C0%2C1445%2C1000&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #6e3511 100%);"></span><img src="https://images.interactives.dk/brain-6GxCOgSpiaySnRIs6Y3Umw.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=8%2C0%2C483%2C335&w=1240" class="img"></article>


<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #8c5712 100%);"></span><img src="https://images.interactives.dk/goldnugget-AR0VjIpeXgy4JBI7EKdXMA.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C0%2C0&=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #2c3994 100%);"></span><img src="https://images.interactives.dk/mercury-Cztdw9x65MJH2ygK357zvQ.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C34%2C223%2C154&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #881401 100%);"></span><img src="https://images.interactives.dk/cancer-563gofxcq1gddiotgneulq-Sijh-t_LyM30IhALX6J1tw.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C920%2C636&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #1b4b74 100%);"></span><img src="https://images.interactives.dk/demensscan-VUGrtBXxEw_hqrJaNDplSQ.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=1%2C1%2C958%2C663&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #870429 100%);"></span><img src="https://images.interactives.dk/fliser-lspgagypzhowhpi9vcbnbq-DzQkTP30Xf-H0i-qcv_zrQ.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C920%2C636&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #67211d 100%);"></span><img src="https://images.interactives.dk/web_daarligsaed-wosghtfig0v8poacxy2jyw-df97qozk6IhS5M0mCHzrQA.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C920%2C636&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #2c3b81 100%);"></span><img src="https://images.interactives.dk/intelligens-enspaender-top-9D3jqHF51nO3VqtojANMuQ.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=29%2C1%2C1441%2C998&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #6f8f19 100%);"></span><img src="https://images.interactives.dk/dino_fjer-rP1oo2C9NC5xzVXGNlp6vQ.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #8f1816 100%);"></span><img src="https://images.interactives.dk/knaek-fingre-79zbjn2nvgiiil4orkclyq-_BC0hjt_9Cb9a6ULydk8cw.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C0%2C0&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #900a0a 100%);"></span><img src="https://images.interactives.dk/hair2-gdl02eYOWwy9zrCQV7WSjQ.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=124%2C0%2C775%2C536&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #6e3511 100%);"></span><img src="https://images.interactives.dk/brain-M9-eAFvtwFuca5VUkb-tQg.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=8%2C0%2C483%2C335&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #672806 100%);"></span><img src="https://images.interactives.dk/pesten-j_UHCCfici8qonRv4ziVLQ.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #1c3362 100%);"></span><img src="https://images.interactives.dk/meteor1-43vdMwumpVHv9MalMIJ-2Q.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=6%2C0%2C337%2C233&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #593a26 100%);"></span><img src="https://images.interactives.dk/milkyway-oJzVl7lFZ7HXMq04guzesw.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=26%2C0%2C232%2C160&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #773a01 100%);"></span><img src="https://images.interactives.dk/moon-hatched-from-earth-like-chick-from-egg-says-new-theory-136425493183202601-180228191031-aeG2jGuOEOdNKNQOyX4CQw.png?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=215%2C1%2C1838%2C1272&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #00558b 100%);"></span><img src="https://images.interactives.dk/shutterstock_239934220-til_web-jFNU4fV2f5j2tWHs-C4Prw.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C9%2C960%2C665&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #8d1a0c 100%);"></span><img src="https://images.interactives.dk/vulkaner-2-topbillede-k_NVlK_ezCk_3YSluu4Z8w.png?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=17%2C0%2C885%2C613&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #8f280e 100%);"></span><img src="https://images.interactives.dk/lava--vx3iC6HSopmPzpusoVf9w.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #04699a 100%);"></span><img src="https://images.interactives.dk/yellowstone-supervulkan-YzvWjOs8M3D6heo-ZzG_aA.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=1%2C1%2C958%2C663&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #253e85 100%);"></span><img src="https://images.interactives.dk/supervulkan-paektu-cuZm9PoYcqCWkv3kL1WvFg.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=1%2C1%2C958%2C663&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #02060c 100%);"></span><img src="https://images.interactives.dk/443_ill_960x665_netv-rksboks-tL7_VHoZn24KVfl257CK2w.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #497019 100%);"></span><img src="https://images.interactives.dk/586_ill_960x665_netv-rksboksbillede_dk-hlC45ds7By_jHN2UjlJukg.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #a84d2d 100%);"></span><img src="https://images.interactives.dk/vid_billede_960x665_dk-pilIc0ZapQeo3yauMdZi6Q.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #6b4b30 100%);"></span><img src="https://images.interactives.dk/437_docma_960x180_netv-rksboks2_dk-eAnNorEmmCGmpRD7Mmt2ig.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #5b1e1f 100%);"></span><img src="https://images.interactives.dk/farve-42VGU4dJ55RBTsEQLWZR3A.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=5%2C0%2C954%2C660&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #016bbb 100%);"></span><img src="https://images.interactives.dk/ore_for-o2eo-eh2w57xvvr38px7-a-7Hvfv3Rr0Wuuz1wj4Ba4Xw.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C0%2C0&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #643124 100%);"></span><img src="https://images.interactives.dk/handsprit-nxwLSWBeCiNRcZnXDexyeg.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=5%2C0%2C954%2C660&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #033293 100%);"></span><img src="https://images.interactives.dk/elizabeth2-3-axpnos1-5lgna-ux88wifa-Qy9bToZdal1EQ8Ml1bjBGA.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C0%2C0&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #8f1703 100%);"></span><img src="https://images.interactives.dk/domino-ympAXKxp4a_Xjzp7KGy37g.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C960%2C664&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #615319 100%);"></span><img src="https://images.interactives.dk/163035_pistolreje_web-k4rffsoorjgov0caniwqzw-_PA8kRLW0R0VP6CRHdZiBw.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C920%2C636&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #d4d3ac 100%);"></span><img src="https://images.interactives.dk/hukommelse-AL84OcvEmuvi65CzsYthRA.gif?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=0%2C0%2C0%2C0&w=1240" class="img"></article>
<article class="teaser"><div class="content"><p class="header"><? dummy("text@headline") ?></p><p class="summary"><? dummy("text@teaser") ?></p></div><span style="background: linear-gradient( hsla(0,0%,0%,0.0) 0%, #375473 100%);"></span><img src="https://images.interactives.dk/jordens-rotation-Idzf2Il9DY8GCN1v0CfkBw.jpg?auto=compress&ch=Width%2CDPR&ixjsv=2.2.4&rect=5%2C0%2C954%2C660&w=1240" class="img"></article>


</body>
</html>