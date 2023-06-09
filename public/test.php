<?php

$name = 'teste';
echo $name;

$name = 'teste2';

echo $name;

# para configurar o xdebug:

// launch.json:
//{
//     "name": "Listen for Sail Xdebug",
//     "type": "php",
//     "request": "launch",
//     "port": 9003,
//     "pathMappings": {
//         "/var/www/html": "${workspaceFolder}"
//     },
//     "hostname": "localhost"
// },


//.env:
// SAIL_XDEBUG_MODE=develop,debug
// e depois: run sail build --no-cache to rebuild, then sail up to run