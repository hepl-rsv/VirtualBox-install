<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Third-website - PHP script</title>
</head>
<body>
    <h2>My first PHP script</h2>

    <!-- <?php echo "yepee!"; ?> -->
    <dl>
        <dt>Nom :</dt>
        <dd><?php echo isset( $_GET[ "lastname" ] ) ? $_GET[ "lastname" ] : "Inconnu"; ?></dt>
        <dt>Prénom :</dt>
        <dd><?php echo isset( $_GET[ "firstname" ] ) ? $_GET[ "firstname" ] : "Inconnu"; ?></dt>
    </dl>
</body>
</html>