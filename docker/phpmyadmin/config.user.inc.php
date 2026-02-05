<?php
/**
 * phpMyAdmin configuration for automatic login
 */

// Настройки для автоматического входа
$cfg['Servers'][1]['auth_type'] = 'config';
$cfg['Servers'][1]['user'] = 'root';
$cfg['Servers'][1]['password'] = getenv('MARIADB_ROOT_PASSWORD');

// Дополнительные настройки для удобства разработки
$cfg['ShowPhpInfo'] = true;
$cfg['ShowChgPassword'] = true;
$cfg['ShowCreateDb'] = true;
$cfg['AllowUserDropDatabase'] = true;
$cfg['AllowArbitraryServer'] = false;

// Увеличенные лимиты для импорта
$cfg['ExecTimeLimit'] = 600;
$cfg['MemoryLimit'] = '256M';

// Отключение предупреждений о безопасности (для локальной разработки)
$cfg['CheckConfigurationPermissions'] = false;
$cfg['LoginCookieValidity'] = 86400; // 24 часа
$cfg['LoginCookieRecall'] = true;

// Настройки интерфейса
$cfg['MaxRows'] = 50;
$cfg['MaxDbList'] = 100;
$cfg['MaxTableList'] = 250;
$cfg['ShowStats'] = true;
$cfg['ShowServerInfo'] = true;
