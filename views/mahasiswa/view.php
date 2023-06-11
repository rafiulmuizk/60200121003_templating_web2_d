<?php 
    use yii\widgets\DetailView;
    use app\models\Mahasiswa;

?>

<div class="container mt-5 mb-5">
    <?=  DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_mhs_003',
            'nim_003',
            'nama_003',
            'kelas_003',
            'status_003'
        ],
    ]) 
    ?>
</div>
