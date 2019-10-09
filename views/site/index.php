<?php

use yii\widgets\LinkPager;

foreach ($posts as $post): ?>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href=" <?= yii\helpers\Url::to(['/admin/article/view', 'id'=> $post->id])  ?>"><?= $post->title ?></a></h3>
  </div>
  <div class="panel-body">
  <?= $post->content ?>
  </div>
</div>
<?php endforeach; ?>

<?= LinkPager::widget([
    'pagination' => $pages,
]);

?>