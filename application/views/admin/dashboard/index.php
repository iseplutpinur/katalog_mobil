<?php
function getColor(): string
{
  $a = array(
    "primary",
    "secondary",
    "success",
    "danger",
    "warning",
    "dark",
    "info"
  );
  return $a[array_rand($a)];
}

?>

<div class="row">
  <?php foreach ($datas as $data) : ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-<?= getColor() ?> shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $data['title']; ?></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['data']; ?> <?= $data['satuan']; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>