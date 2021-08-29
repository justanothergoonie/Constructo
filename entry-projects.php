    <header>
        <?php $carousel = get_field('header_carousel'); ?>
        <div id="carousel">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active " data-bs-interval="10000000">
                        <img src="<?php echo $carousel['image_1'] ?>" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000000">
                        <img src="<?php echo $carousel['image_2'] ?>" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000000">
                        <img src="<?php echo $carousel['image_3'] ?>" alt="" class="d-block w-100">
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>



        </div>
        <?php $client = get_field('client'); ?>
        <h2>Client: <?php echo $client->post_title ?></h2>
        <span>Architect: <?php the_field('architect') ?></span>

    </header>