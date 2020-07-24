<section class="section-1">
	<div class="container-header">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 header-left-col d-none d-md-block" style="margin-top: 20px">
				<div class="sub-heading"><h3><?=$section["text1"]?></h3></div>
				<div class="main-heading"><h1 class="no-margin"><?=$section["text2"]?></h1></div>
				<div class="heading-text desktop" style=""><p><?=$section["text3"]?></p></div>
				<a class="btn btn-primary " href="<?=$section["button"]["link"]?>"><?=$section["button"]["name"]?></a>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 header-right-col">
				<img class="section-banner" src="<?=$section["banner"]?>" alt="Banner">	
			</div>

			<div class="col-xs-12 d-block d-md-none text-center" style="margin-top: 10px">
				<div class="main-heading"><h1 class="no-margin"><?=$section["text2"]?></h1></div>
				<a class="btn btn-primary " href="<?=$section["button"]["link"]?>"><?=$section["button"]["name"]?></a>
			</div>
        </div>
	</div>
</section>