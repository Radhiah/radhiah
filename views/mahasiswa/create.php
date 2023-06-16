<?php
    $this->title = 'Mahasiswa Baru';
?>

<?=
    $this->render('_form', [
        'model' => $model
    ])
?>