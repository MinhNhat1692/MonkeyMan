<section class="section-2 bg-light">
	<div class="container" style="padding-top: 50px;padding-bottom: 50px">
		<div class="row text-center">
			<h2 class="text-center" style="display: block;width: 100%; padding: 30px 20px;font-weight: 900;font-size: 2.4em"><?=$section["title"]?></h2>
		</div>
		@for ($i = 0; $i < count($section["info"]); $i ++)
			<?=
				view($folder.$section["info"][$i]["template"], [
					'section' => $section["info"][$i]
				]);
			?>		
		@endfor
	</div>
</section>