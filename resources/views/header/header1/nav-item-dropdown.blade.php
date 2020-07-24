<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="<?= $menu['name']."dropdown"?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $menu['name']?>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        @for ($i = 0; $i < count($menu["menu"]); $i ++)
            @switch($menu["menu"][$i]["type"])
                @case(0)
                    <?=
                        view($folder."dropdown-item", [
                            'menu' => $menu['menu'][$i]
                        ]);
                    ?>
                    @break
                @default
                    <?=
                        view($folder."dropdown-item", [
                            'menu' => $menu['menu'][$i]
                        ]);
                    ?>
            @endswitch		
        @endfor
    </div>
</li>