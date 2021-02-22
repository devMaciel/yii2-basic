<?php
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
?>

<!-- ActiveForm é um WidGet -->
<!-- field campos pelo active form -->


<!-- ?r=site/registro -->
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'e_mail') ?>

    <!-- widget Form com label ao inves do placeholder-->
    <!-- $form->field($model, 'nome')->label('Seu Nome') 
    $form->field($model, 'e_mail')->label('Seu E-mail')  -->

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>