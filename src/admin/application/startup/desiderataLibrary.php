<?php
if (__Paths::get('APPLICATION_TO_ADMIN')) {
    require __Paths::get('APPLICATION_TO_ADMIN').'startup/desiderataLibrary.php';
}

desiderataLibrary_Multisite::checkUser();


