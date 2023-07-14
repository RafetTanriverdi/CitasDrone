<!--Footer-sectıons-->
<div class="footer-main container-fluid text-center text-white">
    <div class="row main-footer-row ">
        <div class="col-4 footer-logo text-start">
            <h1>Citas Drone</h1>
            <p>Niğde Ömer Halis Demir Üniversitesi Teknopark A.Ş. Merkez Yerleşke, Bor Yolu Üzeri /Niğde</p>
        </div>
        <div class="col-4 footer-pages d-flex flex-column text-end">
        <?php
    $footer_menu = wp_get_nav_menu_items('footer-menu'); 
    if ($footer_menu) {
        foreach ($footer_menu as $menu_item) {
            echo '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
        }
    }
    ?>
        </div>
    </div>
</div>

<!--copy right-->
<div class="container-fluid copyright">
    <div class="row bg-dark">
        <a href="#"> @copyright Bu Web Sitenin Tüm Hakları Citas A.Ş.'ye aittir </a>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
