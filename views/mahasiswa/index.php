<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use yii\helpers\url;
    use app\models\Mahasiswa;
?>
<?= Html::a('Mahasiswa Baru', ['Barang/create'], ['class' => 'btn btn-primary']) ?>
<?=
    GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nim',
            'nama',
            'jurusan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa $model){
                    return url::toRoute([$action,'id' => $model->id]);
                }
            ],
        ]
    ])
?>