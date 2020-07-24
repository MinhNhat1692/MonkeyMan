<!-- Footer -->
<footer class="page-footer font-small pt-4">

    <!-- Footer Links -->
    <div class="container text-center">

        <!-- Grid row -->
        <div class="row">

        <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3 text-left">

                <?= 
                    view($folder."info", [
                        'info' => $footer["info"],
                        'folder' => $folder
                    ]);
                ?>

            </div>
        
            <hr class="clearfix w-100 d-md-none pb-3">
        
            @for ($i = 0; $i < count($footer["linkgroup"]); $i ++)
                <div class="col-md-3 mb-md-0 mb-3">
                <?= 
                    view($folder."link", [
                        'linkgroup' => $footer["linkgroup"][$i],
                        'folder' => $folder
                    ]);
                ?>
                </div>		
            @endfor
        <!-- Grid row -->

        </div>
    </div>
    <?= 
        view($folder."copyright", [
            'copyright' => $footer["copyright"],
            'folder' => $folder
        ]);
    ?>
</footer>