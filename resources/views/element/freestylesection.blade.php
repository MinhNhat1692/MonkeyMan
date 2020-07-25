<section class="section" style="background: #<?=$section["background"]?>">
	<div class="container" style="padding-top: 50px;padding-bottom: 50px">
		<div class="row text-center">
            @isset($section["title"])
            <h2 class="text-center" style="display: block;width: 100%; padding: 30px 20px;font-weight: 900;font-size: 2.4em"><?=$section["title"]?></h2>
            @endisset
		</div>
		@for ($i = 0; $i < count($section["info"]); $i ++)
			<?=
				view($folder.$section["info"][$i]["template"], [
                    'section' => $section["info"][$i],
                    'folder' => $folder
				]);
			?>		
		@endfor
	</div>
</section>