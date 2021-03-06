<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link type="text/css" rel="stylesheet" href="css/simplePagination.css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <!--    <script src="jquery-1.6.1.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="jquery.tablesorter.js"></script>
    <script type="text/javascript" src="jquery-latest.js"</script>
    <
    script
    src = "/js/main.js" ></script>
    <script src="/js/form.js"></script>
    <script src="/js/register.js"></script>
    <script src='tablesort.min.js'></script>

    <!-- Include sort types you need -->



</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">Задачник</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
            </li>
            <? if ($_SESSION['login']): ?>
                <li class="nav-item" name="menu-login" style="padding-top: 7px;">
                    <a>Логин <?= $_SESSION['login'] ?></a>
                </li>
                <form method="post" action="/account/exit">
                    <input type="submit" class="btn btn-light" style="margin: 0;" value="Выйти" class="exit">
                </form>
            <? else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="/account/login/">Вход</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account/register/">Регистрация</a>
                </li>
            <? endif; ?>
        </ul>
    </div>
</nav>
</body>
</html>