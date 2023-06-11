<?php 
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use app\models\Mahasiswa;
    use yii\helpers\url;

?>
<div class="container" id="tombol">
    <div class="mt-5"></div>
    <?= Html::a('Mahasiswa Baru', ['mahasiswa/create'], ['class' => 'btn btn-primary']) ?>
    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id_mhs_003',
                'nim_003',
                'nama_003',
                'kelas_003',
                'status_003',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Mahasiswa $model) {
                        return Url::toRoute([$action, 'id' => $model->id_003]);
                    }
                
                ],
            ],
        ])
    ?>
    <div class="mt-5"></div>
</div>
