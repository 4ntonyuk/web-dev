<div class="card">
  <?php if ($post["featured"]) { ?>
    <a href="<?= $post["tagUrl"] ?>" class="card__tag"><?= $post["tag"] ?></a>
  <?php  } ?>
  <img class="card__photo" src="<?= $post["photoUrl"] ?>" alt="<?= $post["title"] ?>">
  <div class="card__wrapper">
    <div class="card__info">
      <a href="<?= $post["postUrl"] ?>" class="card__info-link title"><?= $post["title"] ?></a>
      <p class="description"><?= $post["description"] ?></p>
    </div>
    <div class="card__sender wrapper">
      <a href="<?= $post["authorUrl"] ?>"  class="card__sender-person wrapper">
        <img class="card__sender-person-photo" src="<?= $post["authorPhoto"] ?>" alt="<?= $post["authorName"] ?>">
        <p class="card__sender-person-name"><?= $post["authorName"] ?></p>
      </a>
      <div class="card__sender-date"><?= $post["date"] ?></div>
    </div>
  </div>
</div>