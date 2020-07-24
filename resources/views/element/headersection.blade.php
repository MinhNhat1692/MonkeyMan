<section class="section-1 hero">
	<div class="container-header">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 header-left-col d-none d-md-block">
				<div class="sub-heading"><h3><?=$section["text1"]?></h3></div>
				<div class="main-heading"><h1 class="no-margin"><?=$section["text2"]?></h1></div>
				<div class="heading-text desktop" style=""><p><?=$section["text3"]?></p></div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 header-right-col video-container">
				 <iframe id="rvid_iframe_desktop" width="100%" height="100%" src="https://www.youtube.com/embed/<?=$section["youtubeid"]?>" frameborder="0" allowfullscreen=""></iframe>
			</div> 
        </div>
		<div class="col-xs-12 mobile d-block d-sm-none">
			<div class="heading-text"><p><?=$section["text3"]?></p></div>
		</div>
	</div>
</section>