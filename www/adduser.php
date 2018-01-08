<?php
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 6-2-2017
 * Time: 14:26
 */
/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );
//debug
//var_dump($form_token);
/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<html>
<head>
    <title>PHPRO Login</title>
</head>

<body>
<h2>Add user</h2>
<form action="adduser_submit.php" method="post">
    <fieldset>
        <p>
            <label for="phpro_username">Username</label>
            <input type="text" id="username" name="username" value="" maxlength="20" />
        </p>
        <p>
            <label for="phpro_password">Password</label>
            <input type="text" id="password" name="password" value="" maxlength="20" />
        </p>
        <p>
            <input type="hidden" name="form_token"
                   value="<?php echo $form_token; ?>" />
            <input type="submit" value="&rarr; Login" />
        </p>
    </fieldset>
</form>
<a href="index.html">Go back</a>
</body>
</html>