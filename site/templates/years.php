<?php snippet('header') ?>
<?php snippet('menu') ?>


<div class="swiper mySwiper works">
  <div class="swiper-wrapper works-wrapper">
    <?php foreach($page->children() as $project) : ?>
      <div class="swiper-slide">
        <?php foreach($project->images() as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="">
        </figure>
        <?php endforeach ?>
        <h3><?= $project -> title() ?></h3>
        <p class="time"><?= $project -> when() -> toDate('Y.m') ?></p>
        <p class="size"><?= $project -> size() ?></p>
        <p class="material"><?= $project -> material() ?></p>
      </div>
    <?php endforeach ?>

  </div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

<?php snippet('footer') ?>
