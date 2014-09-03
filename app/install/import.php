<?php

$mod_list = json_decode(file_get_contents(__DIR__ . '/../../data/modlist.json'));
$changelogs = __DIR__ . '/../../data/changelogs/';
$import = new Modlist\Import($mod_list,$changelogs);
$import->convert();