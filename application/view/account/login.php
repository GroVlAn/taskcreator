<?
if (!$_SESSION['login']):?>
    <form method="post" action="/account/login">
        <p class="login">Логин</p>
        <? if (!empty($error1)):?>
            <span class="error"><?= $error1 ?></span>
        <? endif; ?>
        <span class='error' id="error1" style="display: none">Заполните поле</span>
        <input type="text" name="login" placeholder="login" class="form-control" id="login">
        <p class="password">Пароль</p>
        <? if (!empty($error2)):?>
            <span class="error"><?= $error2 ?></span>
        <? endif;?>
        <span class='error' id="error2" style="display: none">Заполните поле</span>
        <input type="password" name="password" class="form-control" id="login" placeholder="loginPassword"
               name="password">
        <? if (!empty($error3)):?>
            <span class="error"><?= $error3 ?></span>
        <? endif; ?>
        <br><input type="submit" class="btn btn-dark" name="submit" id="loginsubmit">
    </form>
<? endif; ?>
