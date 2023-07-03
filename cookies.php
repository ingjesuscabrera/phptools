<?php
// Establece una cookie con un tiempo de expiración en el pasado para eliminarla
setcookie('miCookie', '', time() - 3600, '/');

echo 'Cookie eliminada';
?>
