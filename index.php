<?php

require_once 'class/Message.php';
$errors = null;

if(isset($_POST['username'], $_POST['message'])){
    $message = new Message($_POST['username'], $_POST['message']);

    if($message->isValid()){

    } else{
        $errors = $message->getErrors();
    }
}

$title = "Livre d'or";
require __DIR__ . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'header.php';

?>

    <div class="container">
        <h1>Livre d'or</h1>

        <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
            Formulaire invalide
        </div>
        <?php endif ?>

        <form action="" method="post">
            <div class="form-group">
                <input value="<?= htmlentities($_POST['username'] ?? '') ?>" type="text" name="username" placeholder="Votre pseudo" class="form-control">
                <?php if(isset($errors['username'])): ?> 
                    <div class="invalid"><?= $errors['username'] ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Votre message" class="form-control"><?= htmlentities($_POST['message'] ?? '') ?></textarea>
                <?php if(isset($errors['message'])): ?> 
                    <div class="invalid"><?= $errors['message'] ?></div>
                <?php endif; ?>
            </div>
            <button class="btn btn-primary">Envoyer</button>
        </form>




    </div>



 






<?php


require __DIR__ . DIRECTORY_SEPARATOR . 'elements' . DIRECTORY_SEPARATOR . 'footer.php';


?>