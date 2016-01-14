<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SIA UMS';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-offset-3 col-lg-9" style="margin-bottom:20px;">
                <div><?php echo Html::img('@web/assets/ums.jpg', ['alt'=>Yii::$app->name]); ?></div>
            </div>
            <div class="col-lg-offset-4 col-lg-9">
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'form-horizontal'],
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                    <?= $form->field($model, 'username') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>

                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>
</div>
