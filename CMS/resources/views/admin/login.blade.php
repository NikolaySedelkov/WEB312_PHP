<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <form
        method="GET"
        action="admin/login"
    >
        <table>
            <caption>Авторизация</caption>
            <tbody>
                <tr>
                    <td><label for="admin-auth_login">Логин</label></td>
                    <td><input type="text" name="login" required id="admin-auth_login"/></td>
                </tr>
                <tr>
                    <td><label for="admin-auth_pas">Пароль</label></td>
                    <td><input type="password" name="password" required id="admin-auth_pas"/></td>
                </tr>
            </tbody>
        </table>
        <button>Вход</button>
    </form>
</body>
</html>