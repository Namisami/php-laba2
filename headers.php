<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <?php
        echo '<img class="header__logo" src="images/logo.png">
            <h1 class="header__title">Задание для самостоятельной работы «Feedback form»</h1>'
    ?>
</header>
<main class="main">
    <form>
        <?php
            $url = 'https://httpbin.org/post';
            $res = get_headers($url);
        ?>
        <textarea name="" id="" cols="30" rows="10">
            <?php
                print_r($res);
            ?>
        </textarea>
    </form>
</main>
<footer class="footer">
    <?php
        echo '<p class="footer__text">Здесь могла быть ваша реклама</p>'
    ?>
</footer>
</body>
</html>