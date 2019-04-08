<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/25
 * Time: 18:29
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'firstname'); ?>
<?= $form->field($model,'lastname'); ?>
<?= $form->field($model,'faculty'); ?>
<?= $form->field($model,'email');?>
<div>
    <?= Html::submitButton('Save', ['class'=>'btn btn-success']) ?>
</div>

<?php ActiveForm::end() ?>