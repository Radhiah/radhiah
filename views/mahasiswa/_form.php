<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use app\models\Mahasiswa;
?>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'nim') ?>
    <?= $form->field($model, 'nama') ?>
    <?= $form->field($model, 'kelas')->dropDownList(
        Mahasiswa::KELAS) ?>
    <?= $form->field($model, 'status')->dropDownList(
    Mahasiswa::STATUS) 
    ?>

    <?= Html::submitButton('Simpan', [
        'class' => 'btn btn-primary'
        ]) ?>

<?php ActiveForm::end() ?>