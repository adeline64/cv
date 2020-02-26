<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
</head>

<body id="top">

    <?php
    include_once "html/navbar.php";

    if (!empty($_GET['page']) && $_GET['page'] == 'competence') {
        include_once "html/competence.php";
    } else if (!empty($_GET['page']) && $_GET['page'] == 'contact') {
        include_once "html/contact.php";
    } else if (!empty($_GET['page']) && $_GET['page'] == 'experience') {
        include_once "html/experience.php";
    } else if (!empty($_GET['page']) && $_GET['page'] == 'formation') {
        include_once "html/formation.php";
    } else if (!empty($_GET['page']) && $_GET['page'] == 'projet') {
        include_once "html/projet.php";
    } else {
        //par defaut accueil
        include_once "html/accueil.php";
    }

    include_once "html/footer.php";


    ?>

    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>