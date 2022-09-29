<?php
session_start();

define('APP_ROOT', dirname(__DIR__));

const APP_VERSION = '0.1';
const UPLOAD_ROOT = __DIR__ . '/uploads/img';
const UPLOAD_URL = '/uploads/img';

require APP_ROOT . '/vendor/autoload.php';
require APP_ROOT . '/src/helpers.php';
require APP_ROOT . '/src/bootstrap.php';