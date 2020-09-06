<?php

$errors = array('first' => '', 'last' => '', 'subj' => '' , 'mail' => '', 'mess' =>'');

$firstName= '';
$lastName = '';
$subject = '';
$email = '';
$message = '';
$to = 'peroperic13test@gmail.com';
$sentMessage = '';



if(isset($_POST['send'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];




    if(empty($_POST['firstName'])) {
        $errors['first'] = 'First name is required.';
    }

    if(empty($_POST['lastName'])) {
        $errors['last'] = 'Last name is required.';
    }

    if(empty($_POST['subject'])) {
        $errors['subj'] = 'Subject is required.';
    }

    if(empty($_POST['email'])) {
        $errors['mail'] = 'Email is required.';
    } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['mail'] = 'Please enter a valid email adress';
    }

    if(empty($_POST['message'])) {
        $errors['mess'] = 'Message is required.';
    }

    if (empty($errors['first']) && empty($errors['last']) && empty($errors['subj']) && empty($errors['mail']) && empty($errors['mess'])) {
        mail($to,$subject,$message);
        $sentMessage = 'Thank you for contacting us, ' . $firstName . ' ' . $lastName . '. A reply will be sent shortly.';
    }


}

?>

<!doctype html>
<html lang="en">

<?php require('templates/header.php'); ?>

<section class="container grey-text">

    <h3 class="center">Contact Us</h3>
    <form class="white" action="contact.php" method="POST">
        <div class="center">
            <i class="material-icons">location_on</i>
            <h5>Address</h5>
            <p>Vrtna ulica 29,</p>
            <p>32100 Vinkovci</p>
            <br>

            <i class="material-icons">phone</i>
            <h5>Let's talk</h5>
            <a href="tel:123-456-7890">123-456-7890</a>
            <br>
            <br>
            <i class="material-icons">mail</i>
        </div>

        <div class="container">
            <div class="row">
                <div class="col m10 offset-m1 s12">
                    <h3 class="center-align">Contact Form</h3>
                    <div class="center">

                        <div class="row">

                            <div class="row">
                                <input placeholder="Pero " name="firstName" value="<?= $firstName; ?>" type="text">
                                <div class="red-text"><?= $errors['first']; ?></div>
                            </div>
                            <div class="row">
                                <input placeholder="Peric" name="lastName" value="<?= $lastName; ?>" type="text">
                                <div class="red-text"><?= $errors['last']; ?></div>
                            </div>
                            <div class="row">
                                <input placeholder="Email" name="email" value="<?= $email; ?>" type="text">
                                <div class="red-text"><?= $errors['mail']; ?></div>
                            </div>
                            <div class="row">
                                <input placeholder="Subject" name="subject" value="<?= $subject; ?>" type="text">
                                <div class="red-text"><?= $errors['subj']; ?></div>
                            </div>
                            <div class="row">
                                <input placeholder="Messasge" name="message" value="<?= $message; ?>" type="text">
                            </div>
                            <div class="red-text"><?= $errors['mess']; ?></div>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="center">
                                    <input type="submit" name="send" value="send" class="btn brand z-depth-0">
                                    <div class="green-text"><?= $sentMessage; ?></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</section>

<?php include('templates/footer.php'); ?>

</html>