<?php
session_start();
const APP_VERSION = '0.1';
const APP_ROOT = __DIR__;
const UPLOAD_ROOT = __DIR__.'/uploads/img';
const UPLOAD_URL = '/uploads/img';

require APP_ROOT.'/app/bootstrap.php';