<?php
// Routes

$app->get('/', 'App\Action\DispatchAction:dispatchHome')
    ->setName('HomePage');

$app->get('/blank', 'App\Action\DispatchAction:dispatchBlank')
    ->setName('BlankPage');

$app->get('/buttons', 'App\Action\DispatchAction:dispatchButtons')
    ->setName('ButtonPage');

$app->get('/flot', 'App\Action\DispatchAction:dispatchFlot')
    ->setName('FlotPage');

$app->get('/forms', 'App\Action\DispatchAction:dispatchForms')
    ->setName('FormPage');

$app->get('/grid', 'App\Action\DispatchAction:dispatchGrid')
    ->setName('GridPage');

$app->get('/icons', 'App\Action\DispatchAction:dispatchIcons')
    ->setName('IconsPage');

$app->get('/login', 'App\Action\DispatchAction:dispatchLogin')
    ->setName('LoginPage');

$app->get('/morris', 'App\Action\DispatchAction:dispatchMorris')
    ->setName('MorrisPage');

$app->get('/notifications', 'App\Action\DispatchAction:dispatchNotifications')
    ->setName('NotificationsPage');

$app->get('/panels-wells', 'App\Action\DispatchAction:dispatchPanelWells')
    ->setName('PanelWellsPage');

$app->get('/tables', 'App\Action\DispatchAction:dispatchTables')
    ->setName('TablesPage');

$app->get('/typography', 'App\Action\DispatchAction:dispatchTypography')
    ->setName('TypographyPage');
