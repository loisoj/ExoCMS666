<?php

Config::set('site_name', 'eXo');

Config::set('languages', array('en', 'fr', 'ru'));

//Роуты

Config::set('routes', array(
  'default' => '',
  'admin' => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'ru');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

//Соединение с БД SQL
Config::set('db.host','localhost');
Config::set('db.user','root');
Config::set('db.password','');
Config::set('db.db_name','mvc');

//Соль, соль, соль...Посолим тут все
Config::set('salt', 'stp8kwcle45me32jf6gbekr');//не забудь засыпать свою соль
