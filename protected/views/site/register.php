<?php


$this->pageTitle = Yii::app()->name . ' - Register';
$this->breadcrumbs = array(
    'Register',
);
?>

<div class="page-header">
<h1>Rejestracja</h1>
</div>

<?php if(Yii::app()->user->hasFlash('error')): ?>
<div class="alert alert-danger">
    <strong>Wystąpił błąd!</strong> <?php echo Yii::app()->user->getFlash('error'); ?>
</div>
<?php endif; ?>

<?php if(Yii::app()->user->hasFlash('success')): ?>
<div class="alert alert-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>
</div>
<?php else: ?>

<form class="form-signin" method="POST" role="form">
    <input type="text" name="username" class="form-control first" placeholder="Nazwa użytkownika" required autofocus>
    <input type="password" name="password" class="form-control" placeholder="Hasło" required>
    <input type="password" name="password_confirm" class="form-control last" placeholder="Potwierdź hasło" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Zarejestruj</button>
</form>

<?php endif; ?>
