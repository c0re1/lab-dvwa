<?php
// Detrás del proxy de GitHub Codespaces, Apache recibe "Host: localhost:4280" y DVWA
// emite la cookie de sesión con domain=localhost, que el navegador descarta en
// *.app.github.dev (el login vuelve siempre a login.php). Si el proxy informa el
// host público, se usa ese. En Docker local no hay cabecera y no cambia nada.
if (!empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $_SERVER['HTTP_HOST'] = trim(explode(',', $_SERVER['HTTP_X_FORWARDED_HOST'])[0]);
}
