<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;


$form = ActiveForm::begin(['id' => 'login-form']);

echo $form->field($model, 'category_id')->dropDownList($catList,
    [
        'prompt'   => '- Choose a Category -',
        'onchange' => '
                        $.get( "' . Url::toRoute('site/get-subcat?id=') . '", { id: $(this).val() } )
                            .done(function( data ) {
                                $( "#' . Html::getInputId($model, 'sub_cat_id') . '" ).html( data ).attr("disabled", false);
                            }
                        );
                    '
    ]);


echo $form->field($model, 'sub_cat_id')
    ->dropDownList(
        ['id' => '- Choose a Sub-category -'],
        [ 'disabled' => 'disabled']
    );

ActiveForm::end();