<section class="section" style="background: #fff;padding: 60px 20px">
    <div class="container">
        <div class="row text-center" id="customerlist">
            <h2 style="width: 100%;font-size: 2em;padding-bottom: 50px"><?=$section["title"]?></h2>
            @for ($i = 0; $i < count($section["options"]); $i ++)
            <div class="customer-block col-3">
                <a href="<?=$section["options"][$i]["link"]?>" target="_blank">
                    <img src="<?=$section["options"][$i]["img"]?>" alt="<?=$section["options"][$i]["name"]?>">
                </a>
            </div>    
            @endfor
        </div>
    </div>
</section>