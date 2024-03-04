<?php if (has_header_image()) : ?>
    <div class="haeder-images pt-2 px-md-2">
        <?php
        echo '<a class="d-block mb-2 mb-md-3" href="' . get_home_url() . '">';
        echo '<img class="w-100" src="' . esc_url(get_header_image()) . '" />';
        echo '</a>';
        ?>
    </div>
<?php endif; ?>

<div class="bgheaders">
    <div class="container p-md-3 p-2">
        <div class="row m-0 align-items-center">
            <div class="col-md-4 col-12 px-1">
                <?php $sitelogo = velocitytheme_option('custom_logo'); ?>
                <div class="position-relative text-md-start text-center">
                    <?php if ($sitelogo) : ?>
                        <a href="<?php get_home_url(); ?>">
                            <img src="<?php echo wp_get_attachment_image_url($sitelogo, 'full'); ?>" alt="Site Logo" loading="lazy">
                        </a>
                    <?php endif;  ?>
                </div>
            </div>
            <div class="col-md-6 col-10 px-1">
                <form action="<?php echo get_site_url(); ?>/products" class="d-flex border bg-white p-1" method="get" style="max-width:300px;">
                    <input style="font-size: 12px;" type="text" name="s" placeholder="Cari.." class="form-control form-control-sm px-2 py-1 h-auto rounded-0 border-0">
                    <button type="submit" class="border-0 btn bg-theme btn-sm py-1 h-auto rounded-0 border-0">
                        <svg class="bi text-white" fill="currentColor" width="16" height="16">
                            <use href="#search"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="col-2 text-end px-1">
                <span class="badge bg-light p-2 rounded-1"><?php echo do_shortcode('[cart]'); ?></span>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <nav id="main-nav" class="navbar navbar-expand-md bg-theme d-block navbar-light p-0" aria-labelledby="main-nav-label">

            <h2 id="main-nav-label" class="screen-reader-text">
                <?php esc_html_e('Main Navigation', 'justg'); ?>
            </h2>

            <button class="navbar-toggler text-start text-white w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
                <span class="navbar-toggler-icon bg-light pe-2"></span> Menu
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- The WordPress Menu goes here -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'offcanvas-body',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 4,
                        'walker'          => new justg_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
            </div><!-- .offcanvas -->
        </nav>
    </div>
</div>