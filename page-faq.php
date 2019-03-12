<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 22:16
 */
?>
<?php get_template_part('layout/header'); ?>

<section class="container-fluid page-title">
    <div class="row align-items-center h-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 page-title__header">
                    <h1>FAQ</h1>
                    <hr class="page-title__separator"/>
                    <p>
                        Odpowiedzi na najczęściej zadawane pytania
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container faq">
    <div class="row">
        <div class="col-xl-12 py-6">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                         aria-expanded="true" aria-controls="collapseOne">
                        <div class="card-header__icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="card-header__question">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida erat
                            condimentum ante aliquet efficitur. Nunc tincidunt nisi facilisis, congue tortor
                            commodo, pretium quam. Ut ut sem augue.
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo"
                         aria-expanded="false" aria-controls="collapseTwo">
                        <div class="card-header__icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="card-header-question">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida erat
                            condimentum ante aliquet efficitur. Nunc tincidunt nisi facilisis, congue tortor
                            commodo, pretium quam. Ut ut sem augue.
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree"
                         aria-expanded="false" aria-controls="collapseThree">
                        <div class="card-header__icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="card-header-question">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida erat
                            condimentum ante aliquet efficitur. Nunc tincidunt nisi facilisis, congue tortor
                            commodo, pretium quam. Ut ut sem augue.
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/faq-accordions.js"></script>

<?php get_template_part('layout/footer'); ?>
