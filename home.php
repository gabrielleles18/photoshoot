<?php

use PhotoShoot\Feedback;
use PhotoShoot\Gategoria;

$feedbacks = Feedback::getFeedback();
$categoria = Gategoria::getGategorias();
$lastpublish = Gategoria::getLastpublish();

get_header();

?>
<main>
    <div class="container-services">
        <div class="container">
            <div class="itens">
                <img src="<?= get_template_directory_uri() ?>/assets/images/service-1.jpg">
                <h1>Shooting</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt magna
                    aliqua.
                    Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="itens">
                <img src="<?= get_template_directory_uri() ?>/assets/images/service-2.jpg">
                <h1>Videos</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt magna
                    aliqua.
                    Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="itens">
                <img src="<?= get_template_directory_uri() ?>/assets/images/service-3.jpg">
                <h1>Editing</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt magna
                    aliqua.
                    Quis ipsum suspendisse ultrices gravida.</p>
            </div>
        </div>
    </div>
    <div class="container category">
        <h1 class="categories">Categorias</h1>
        <a href="" class="all">Ver Todas</a>

        <div class="swiper-container fotos">
            <div class="swiper-wrapper">
                <?php foreach ($categoria as $id => $value) { ?>
                    <a href="" class="swiper-slide">
                        <img src="<?= $value['capa'] ?>">
                        <h1 class="nome"><?= $value['title'] ?></h1>
                        <h6 class="qyantidade"><?= count($value['galeria']) ?> Imagens</h6>
                    </a>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="last-works">
        <div class="container">
            <h1 class="titulo">nossos ultimos trabalhos</h1>
            <?php if (!empty($categoria)) { ?>
                <div class="categorias">
                    <a href="#">Todas</a>
                    <?php foreach ($categoria as $i => $v) {
                        if ($id > 3)
                            break;
                        ?>
                        <a href="#"><?= $v['title'] ?></a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <?php if (!empty($lastpublish)) { ?>
            <div class="images">
                <?php foreach ($lastpublish as $id => $value) { ?>
                        <img src="<?= $value ?>" class="item-<?= ($id + 1) ?>" data-imagebox="gallery" data-imagebox-src="<?= $value ?>" alt="">
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <?php if (!empty($feedbacks)) { ?>
        <div class="feedback">
            <div class="container">
                <div class="left">
                    <h1>Client’s Feedback</h1>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure
                        voluptate velit esse.</p>
                </div>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($feedbacks as $value) { ?>
                            <a href="https://www.instagram.com/<?= $value['instagram'] ?>" target="_blank"
                               class="swiper-slide right">
                                <img src="<?= $value['foto'] ?>" class="foto">
                                <h4 class="depoimento">"<?= $value['depoimento'] ?></h4>
                                <h2 class="nome"><?= $value['nome'] ?></h2>
                                <h3 class="insta"><?= $value['instagram'] ?></h3>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>

<?php get_footer(); ?>
