<?php
  use yii\helpers\Html;
?>

<ul>
  <li><label>Você</label>: <?= Html::encode($model->nome) ?></li>
      <li><label>E-mail</label>: <?= Html::encode($model->e_mail) ?></li>
</ul>