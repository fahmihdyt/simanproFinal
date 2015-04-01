<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Homes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Home', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tanggal',
            'judul',
            'isi:ntext',
            'creator',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
