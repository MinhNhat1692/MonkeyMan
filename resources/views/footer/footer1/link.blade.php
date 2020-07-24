<h5 class="text-uppercase"><?=$linkgroup["name"]?></h5>
    <ul class="list-unstyled" style="margin-top:10px">
        @for ($i = 0; $i < count($linkgroup["list"]); $i ++)
            <li>
                <a href="<?=$linkgroup["list"][$i]["link"]?>"><?=$linkgroup["list"][$i]["name"]?></a>
            </li>			
		@endfor