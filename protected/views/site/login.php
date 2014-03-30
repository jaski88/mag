<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Logowanie';
$this->breadcrumbs = array(
    'Logowanie',
);
?>

<div class="page-header">
<h1>Logowanie</h1>
</div>

<?php if(Yii::app()->user->hasFlash('error')): ?>
<div class="alert alert-danger">
    <strong>Wystąpił błąd!</strong> <?php echo Yii::app()->user->getFlash('error'); ?>
</div>
<?php endif; ?>

<form class="form-signin" method="post" role="form">
    <input type="text" name="LoginForm[username]" class="form-control" placeholder="Nazwa użytkownika" required autofocus>
    <input type="password" name="LoginForm[password]" class="form-control" placeholder="Hasło" required>
    <label class="checkbox">
        <input type="checkbox" name="LoginForm[rememberMe]" value="1"> Pamiętaj mnie
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj</button>
</form>

<?php /*

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
<?php echo $form->textField($model, 'username'); ?>
<?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password'); ?>
<?php echo $form->error($model, 'password'); ?>
        <p class="hint">
            Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
        </p>
    </div>

    <div class="row rememberMe">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
<?php echo $form->label($model, 'rememberMe'); ?>
<?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Login'); ?>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
 * 
 * */
  ?>
