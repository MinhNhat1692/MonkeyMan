<nav class="navbar navbar-expand-lg navbar-light bg-light monkeyman-navbar">  
	<?= 
		view($folder."navbar-brand", [
            'logo' => $header["logo"]
		]);
	?>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			@for ($i = 0; $i < count($header["menu"]); $i ++)
				@switch($header["menu"][$i]["type"])
					@case(0)
						<?=
							view($folder."nav-item", [
								'menu' => $header["menu"][$i]
							]);
						?>
						@break
					@case(1)
						<?=
							view($folder."nav-item-dropdown", [
								'menu' => $header["menu"][$i],
								'folder' => $folder
							]);
						?>
						@break
					@default
						<?=
							view($folder."nav-item", [
								'menu' => $header["menu"][$i]
							]);
						?>
				@endswitch		
			@endfor
		</ul>
	</div>
</nav>
