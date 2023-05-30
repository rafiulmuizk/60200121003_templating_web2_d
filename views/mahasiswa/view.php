<?php 
    use yii\widgets\DetailView;
    use app\models\Mahasiswa;

?>

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