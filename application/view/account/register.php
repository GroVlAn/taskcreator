<form method="post" action="/account/register">
    <p class="login">Логин</p>
    <?if(!empty($error1)):?>
        <span class="error"><?=$error1?></span>
    <?endif;?>
    <span class='error' id="error1" style="display: none">Заполните поле</span>
    <input type="text" name="login" placeholder="login" class="form-control" id="regName">

    <p class="login">Email</p>
    <?if(!empty($error2)):?>
        <span class="error"><?=$error2?></span>
    <?endif;?>
    <span class='error' id="error2" style="display: none">Заполните поле</span>
    <input  name="email" type="email" class="form-control" id="regEmail" aria-describedby="emailHelp" placeholder="Enter email">

    <p class="password">Пароль</p>
    <?if(!empty($error3)):?>
        <span class="error"><?=$error3?></span>
    <?endif;?>
    <span class='error' id="error3" style="display: none">Заполните поле</span>
    <input type="password" name="password" class="form-control" id="regPassword" placeholder="Password" >

    <p class="RepeatPassword">Повторить пароль</p>
    <span class='error' id="error4" style="display: none">Заполните поле</span>
    <span class='error' id="errorPassword" style="display: none">Пароли не совпадают</span>
    <?if(!empty($error4)):?>
        <span class="error"><?=$error4?></span>
    <?endif;?>
    <input type="password" name="RepeatPassword" class="form-control" id="regRepeatPassword" placeholder="Password">

    <br><input type="submit" class="btn btn-dark" id="regsubmit" name="submit">
</form>