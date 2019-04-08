<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/29
 * Time: 0:53
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model,'firstname'); ?>
<?= $form->field($model,'lastname'); ?>
<?= $form->field($model,'position'); ?>
<?= $form->field($model,'department'); ?>

<div>
<?= Html::submitButton('Register',['class'=>'btn btn-success']); ?>
</div>

<?php ActiveForm::end(); ?>