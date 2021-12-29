<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="swiper mySwiper">
  <div class="swiper-wrapper">

<?php foreach($page->children() as $exhi) : ?>

    <?php foreach($exhi->images() as $image): ?>
      <div class="swiper-slide">
        <figure>
          <img src="<?= $image->url() ?>" alt="">
        </figure>
        <div class="info">
          <div class="info_text">
            <div><?= $exhi->description()->kirbytext() ?></div>
          </div>
          <div class="info_back">
            <!-- click here to make everything go away -->
          </div>
          <button class="info_b" type="button" name="Info">info</button>
        </div>
      </div>


    <?php endforeach ?>
<?php endforeach ?>

  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>


<?php snippet('footer') ?>
