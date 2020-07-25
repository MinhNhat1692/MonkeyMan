<div class="row" style="padding: 50px 0px;">
    @for ($i = 0; $i < count($section["options"]); $i ++)
        <?=
			view($folder."blockdisplay/singleblock", [
                'section' => $section["options"][$i],
                'width' => "col-4"
			]);
		?>	
    @endfor
</div>