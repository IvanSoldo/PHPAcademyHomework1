<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        <?php require ('css/styles.css')?>
    </style>
    <title>Calculator</title>
</head>
<body class="grey lighten-4">
<header>
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text left">Calculator</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <?php if ($_SERVER['REQUEST_URI'] != '/PHPAcademyHomework1/index.php') : ?>
                    <li><a href="index.php" class="btn-small brand z-depth-0">Home</a></li>
                <?php endif; ?>
                <?php if ($_SERVER['REQUEST_URI'] != '/PHPAcademyHomework1/calculator.php') : ?>
                    <li><a href="calculator.php" class="btn-small brand z-depth-0">Calculator</a></li>
                <?php endif; ?>
                <?php if ($_SERVER['REQUEST_URI'] != '/PHPAcademyHomework1/contact.php') : ?>
                    <li><a href="contact.php" class="btn-small brand z-depth-0">Contact</a></li>
                <?php endif; ?>
            </ul>
        </div>


    </nav>
</header>

<main>