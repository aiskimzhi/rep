<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'My Account';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'first_name',
            'last_name',
            'email:email',
            'skype',
            'phone'
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model], ['class' => 'btn btn-primary']) ?>

        <a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Change password</a>

        <?= Html::a('Delete', ['delete', 'id' => $model], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
