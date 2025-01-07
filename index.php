<?php
function adminer_object() {
    // Required to run any plugin.
    include_once(__DIR__ . "/plugins/plugin.php");

    // Load plugins.
    foreach (glob(__DIR__ . "/plugins/*.php") as $file) {
        include_once($file);
    }

    $plugins = [
        new AdminerLoginSqlite()
    ];

    return new AdminerPlugin($plugins);
}

// Include original Adminer or Adminer Editor.
include "./adminer.php";