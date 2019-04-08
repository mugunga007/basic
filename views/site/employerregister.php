<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/06
 * Time: 13:18
 */

use yii\helpers\Html;

use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'names')->label('Full Names'); ?>

<?= $form->field($model,'email'); ?>

<?= $form->field($model,'phone'); ?>

<div>
    <?= Html::submitButton('Register',['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end() ?>
