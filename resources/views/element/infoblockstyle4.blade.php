<div class="row" style="margin-top: 60px;padding: 50px 0px;">
    <div class="col-md-6">
        <h3 style="padding-bottom: 30px "><?=$section["title"]?></h3>
        <p style="font-size: 1.2em;font-weight: 400"><?=$section["description"]?></p>
        <ul class="list-unstyled" style="font-size: 1.2em">
        @for ($i = 0; $i < count($section["options"]); $i ++)
            <li><i class="fa fa-check" style="padding: 5px;color: #fc8006"></i> <?=$section["options"][$i]["text"]?></li>
        @endfor
        </ul>
    </div>
    <div class="col-md-6">
        <img class="section-banner" src="<?=$section["img"]?>" alt="banner">
    </div>
</div>