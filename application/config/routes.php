<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['dashboard'] = 'home/index';

// Route for User Logout
$route['user/logout'] = 'login/logout';

$route['guru'] = 'guru/index';

$route['user'] = 'user/index';
$route['user/tambah_user'] = 'user/tambah_data_user';

// Route for Siswa
$route['siswa/semua_siswa'] = 'siswa/index';
$route['siswa/kelas_vii'] = 'siswa/kelas_vii';
$route['siswa/kelas_viii'] = 'siswa/kelas_viii';
$route['siswa/kelas_ix'] = 'siswa/kelas_ix';

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
