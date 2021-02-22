<?php
  use yii\helpers\Html;
  use yii\widgets\LinkPager;
?>

<!-- urlparam: ?r=pais/index -->

<h1>Países</h1>
<ul>
<?php foreach ($paises as $pais): ?>
    <li>
        <?= Html::encode("{$pais->nome} ({$pais->codigo})") ?>:
        <?= $pais->populacao ?>
    </li>
<?php endforeach; ?>
</ul>

<!-- https://www.yiiframework.com/doc/api/2.0/yii-widgets-linkpager -->
<?= LinkPager::widget(['pagination' => $paginacao]) ?>