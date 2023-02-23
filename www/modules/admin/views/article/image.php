<?php

use app\assets\AppAsset;
use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>



    <div class="form-group">
        <p >11111111111111111111111111111111111111111111111111111111111111111111111111111
           </p>
        <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>
        <?= Html::submitButton('Добавить',['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

