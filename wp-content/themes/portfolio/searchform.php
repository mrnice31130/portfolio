<form role="search" method="get" class="form-inline my-2 my-lg-0" action="<?= home_url( '/' ); ?>">
    <input type="search" title="champ de recherche" class="form-control mr-sm-2" placeholder="<?= esc_attr_x( 'Recherche...', 'placeholder' ) ?>" value="<?= get_search_query() ?>" name="s" title="<?= esc_attr_x( 'Recherche pour:', 'label' ) ?>" >
    <button type="submit" title="valider la recherche" class="btn btn-outline-success my-2 my-sm-0" value=""><i class="material-icons">Recherche</i></button>
</form>