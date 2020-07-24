<section class="widget widget_social">
    <ul style="margin-bottom: 0px">
        @isset($social["facebook"])
            <li class="social-footer">
                <a title="Facebook" href="<?=$social["facebook"]?>" rel="nofollow" target="_blank">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </li>
        @endisset
        @isset($social["youtube"])
            <li class="social-footer">
                <a title="Youtube" href="<?=$social["youtube"]?>" rel="nofollow" target="_blank">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li>
        @endisset
    </ul>
</section>