vr-header-top-bar
<nav class="vr-header-nav">
  <div class="vr-header-nav-logo">
    <a href="<?= site_url(); ?>"><?= bloginfo('name'); ?></a>
    <img src="<?= get_template_directory_uri();?>/assets/images/photo-moi.png" alt="...">
  </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <?php
        wp_nav_menu([
            'menu'            => 'main-navigation',
            'theme_location'  => 'main-navigation',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav m-auto',
            'depth'           => 4,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
        ?>
</nav>
