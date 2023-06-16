<?php
    $this->title = 'Mahasiswa baru';
?>

<?=
    $this->render('_form', [
        'model' => $model
    ])
?>