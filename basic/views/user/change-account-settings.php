<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Account Settings';
?>

<div class="user-change-account-settings">

    <div>
        <!-- Changing email -->
        <p>Change e-mail</p>

        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'newEmail') ?>

        <div class="form-group">
            <?= Html::submitButton('Update e-mail', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    <div>
        <!-- Changing first_name -->
        <p>Change first name</p>

        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'newFirstName') ?>

            <div class="form-group">
                <?= Html::submitButton('Update first name', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>

    <div>
        <!-- Changing last_name -->
        <p>Change first name</p>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'newLastName') ?>

        <div class="form-group">
            <?= Html::submitButton('Update last name', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    <div>
        <!-- Changing phone -->
        <p>Change first name</p>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'newPhone') ?>

        <div class="form-group">
            <?= Html::submitButton('Update phone', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    <div>
        <!-- Changing skype -->
        <p>Change first name</p>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'newSkype') ?>

        <div class="form-group">
            <?= Html::submitButton('Update skype', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
