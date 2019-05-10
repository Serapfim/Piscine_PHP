<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <main class="centered">
        <form action="create.php" id="auth-form" class="auth-form" method="post">
            <h1>Авторизация</h1>

            <input id="login" class="input-field" type="text" placeholder="Логин" required minlength="3"><br>
            <input id="password" class="input-field" type="password" placeholder="Пароль" required minlength="3"><br>
            <button class="action-button accent" >Войти</button>
            <button class="action-button warn" onclick="location.pathname='parth/register.php'">Регистрация</button>
            <button class="action-button info"><a href="../index.php">Назад</a></button>
        </form>
    </main>
  </body>
</html>
