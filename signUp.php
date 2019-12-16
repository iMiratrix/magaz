<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Регистрация</title>
</head>
<body>
<header>
    <div class="wrap-logo">
        <a href="index.php" class="logo">Magaz</a>
    </div>
    <nav>
        <a class="" href="index.php">Главная</a>
        <a href="signUp.php">Регистрация</a>
        <a href="">Корзина</a>
    </nav>
</header>
<div class="reg">
    <form action="lib/reg.php" method="post">
        <input type="text" name="login" placeholder="login" class="form-control">
        <input type="password" name="password" placeholder="password" class="form-control">
        <input type="email" name="email" placeholder="email" class="form-control">
        <button type="submit" name="btn" class="btn btn-lg btn-primary btn-block">Зарегистрироваться</button>
        <a href="signIn.php">Авторзация</a>
    </form>
</div>
</body>
</html>

