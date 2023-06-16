<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\models\Mahasiswa;
?>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'nim') ?>
    <?= $form->field($model, 'nama') ?>
    <?= $form->field($model, 'jurusan') ?>

    <?= Html::submitButton('Simpan',['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?>
    
