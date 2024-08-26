<?php

$addon = rex_addon::get('schwooops');

if(rex_config::get('schwooops', 'name', '') == '') {
    rex_config::set('schwooops', 'name', rex::getServerName());
}
if(rex_config::get('schwooops', 'email', '') == '') {
    rex_config::set('schwooops', 'email', rex::getErrorEmail());
}
