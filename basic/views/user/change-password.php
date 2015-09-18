<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Password Change';
?>

<div class="user-change-account-settings">
    <div>
        <!-- Changing password -->
        <p>Change password</p>


        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'oldPassword')->passwordInput() ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'confirmPassword')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Update password', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>





    </div>
</div>
