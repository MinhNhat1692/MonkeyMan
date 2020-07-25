<div class="row" style="margin-top: 60px">
    <div class="col-6">
        <h3 style="padding: 10px 0px"><?=$section["title"]?></h3>
        <p style="font-size: 1.2em"><?=$section["description"]?></p>
        <ul class="list-unstyled" style="font-size: 1.2em">
        @for ($i = 0; $i < count($section["options"]); $i ++)
            <li><i class="fa fa-check" style="padding: 5px;color: #fc8006"></i> <?=$section["options"][$i]["text"]?></li>
        @endfor
        </ul>
        <a class="btn btn-primary " href="<?=$section["link"]?>">Tìm hiểu thêm</a>
    </div>
    <div class="col-6">
        <img class="section-banner" src="<?=$section["img"]?>" alt="banner">
    </div>
</div>