<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 05.04.19
 * Time: 20:54
 */
?>
<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="search-form">
    <div class="form-group">
        <input type="text" class="form-control"
               name="s"
               value="<?php echo get_search_query(); ?>"
               placeholder="Szukaj">
        <button type="submit" class="btn text-center search-form__submit-button">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>
