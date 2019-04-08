<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/05
 * Time: 12:20
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'username'); ?>
<?= $form->field($model, 'password'); ?>

<div class="form-group">

    <?= Html::submitButton('Submitit',['class'=>'btn btn-primary']); ?>

</div>

<?php ActiveForm::end(); ?>
