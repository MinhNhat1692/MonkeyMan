<!-- Copyright -->
<div class="footer-copyright text-center">
    <div class="row">
        <div class="col-sm-8 left">
            <a href="/">
                <img class="copyright-img" src="<?=$copyright["brand"]["logo"]?>">
            </a>
            <?=$copyright["brand"]["text"]?>
        </div>
        <div class="col-sm-4">
            <?= 
                view($folder."sociallink", [
                    'social' => $copyright["social"]
                ]);
            ?>
        </div>
    </div>
</div>
  <!-- Copyright -->