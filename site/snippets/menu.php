<div class="menu">

  <div class="menu-item">
    <a href="<?= $site->find('about')->url() ?>"><?= $site->title() ?></a>
  </div>
  <div class="menu-item">
    <a href="<?= $site->find('exhibitions')->url() ?>"><?= $site->find('exhibitions')->title() ?></a>
  </div>
  <?php foreach ($site->find("works")->children() as $year) : ?>
    <div class="menu-item">
      <a href="<?= $year->url() ?>"><?= $year->title() ?></a>
    </div>
  <?php endforeach; ?>

</div>
