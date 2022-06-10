<?php
function handleError() {
    die();
}
set_error_handler("handleError");
?>