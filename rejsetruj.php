<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Rejestracji w Jezyku PHP </title>
    <style>
    body,html{margin:0,padding:0;}
    .contener{width:500px;margin:auto;}
    </style>
</head>
<body>
<fieldset>
    <legend> Formularz Rejestracji </legend>  
    <table>
    <form action="rejestruj.php"method="post">
    <tr>
        <td>Login:</td><td><input type="text"name="login"require /></td>
    </tr>
    <tr>
        <td>Hasło:</td><td><input type="password"name="haslo1"require /></td>
    </tr>
    <tr>
        <td>Powtórz hasło:</td><td><input type="password"name="haslo2"require /></td>
    </tr>
    <tr>
        <td>Imie:</td><td><input type="text"name="imie"require /></td>
    </tr>
    <tr>
        <td>Nazwisko:</td><td><input type="text"name="nazwisko"require /></td>
    </tr>
    <tr>
        <td>Email:</td><td><input type="email"name="email"require /></td>
    </tr>
    <tr>
        <td></td><td><input type="submit"value="rejestruj"require /></td>
    </tr>

        </form>
    </table>
</fieldset>
</body>
</html>