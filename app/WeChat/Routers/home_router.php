<?php
$app->map(['GET', 'POST'], '/', APP_NAME . '\\Controller\\Home:index')->setName('wechat.home.root.index');
$app->map(['GET', 'POST'], '/home/index', APP_NAME . '\\Controller\\Home:index')->setName('wechat.home.index');
$app->map(['GET', 'POST'], '/home/send', APP_NAME . '\\Controller\\Home:send')->setName('wechat.home.send');
$app->post('/console', 'RunTracy\Controllers\RunTracyConsole:index');