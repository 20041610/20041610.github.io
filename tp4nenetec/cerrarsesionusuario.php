<?php

?>
<?php
/* session_start();
$idActual = session_id();
session_destroy();
session_start();
session_regenerate_id();
$_SESSION['original_session_id'] = $idActual; */
session_id("SessionUser");
session_start();
session_destroy();
header("Location:index.php");
?>