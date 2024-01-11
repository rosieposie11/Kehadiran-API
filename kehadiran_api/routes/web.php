<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


// Show ALL absensi
$router->get('/absensi', 'AbsensiController@index');

//show Each absensi By ID
$router->get('/absensi/{id}', 'AbsensiController@show');

//store absensi
$router->post('/absensi/create', 'AbsensiController@store');

//update absensi
$router->post('/absensi/update/{id}', 'AbsensiController@update');

// Delete
$router->delete('/absensi/delete/{id}', 'AbsensiController@destroy');



// Show ALL cuti
$router->get('/cuti', 'CutiController@index');

//show Each cuti By ID
$router->get('/cuti/{id}', 'CutiController@show');

//store cuti
$router->post('/cuti/create', 'CutiController@store');

//update cuti
$router->post('/cuti/update/{id}', 'CutiController@update');

// Delete
$router->delete('/cuti/delete/{id}', 'CutiController@destroy');



// Show ALL jadwal_kerja
$router->get('/jadwal_kerja', 'Jadwal_KerjaController@index');

//show Each jadwal_kerja By ID
$router->get('/jadwal_kerja/{id}', 'Jadwal_KerjaController@show');

//store jadwal_kerja
$router->post('/jadwal_kerja/create', 'Jadwal_KerjaController@store');

//update jadwal_kerja
$router->post('/jadwal_kerja/update/{id}', 'Jadwal_KerjaController@update');

// Delete
$router->delete('/jadwal_kerja/delete/{id}', 'Jadwal_KerjaController@destroy');



// Show ALL jenis_kehadiran
$router->get('/jenis_kehadiran', 'Jenis_KehadiranController@index');

//show Each jenis_kehadiran By ID
$router->get('/jenis_kehadiran/{id}', 'Jenis_KehadiranController@show');

//store jenis_kehadiran
$router->post('/jenis_kehadiran/create', 'Jenis_KehadiranController@store');

//update jenis_kehadiran
$router->post('/jenis_kehadiran/update/{id}', 'Jenis_KehadiranController@update');

// Delete
$router->delete('/jenis_kehadiran/delete/{id}', 'Jenis_KehadiranController@destroy');



// Show ALL pegawai
$router->get('/pegawai', 'PegawaiController@index');

//show Each pegawai By ID
$router->get('/pegawai/{id}', 'PegawaiController@show');

//store pegawai
$router->post('/pegawai/create', 'PegawaiController@store');

//update pegawai
$router->post('/pegawai/update/{id}', 'PegawaiController@update');

// Delete
$router->delete('/pegawai/delete/{id}', 'PegawaiiController@destroy');



// Show ALL rekap_kehadiran
$router->get('/rekap_kehadiran', 'Rekap_KehadiranController@index');

//show Each rekap_kehadiran By ID
$router->get('/rekap_kehadiran/{id}', 'Rekap_KehadiranController@show');

//store rekap_kehadiran
$router->post('/rekap_kehadiran/create', 'Rekap_KehadiranController@store');

//update rekap_kehadiran
$router->post('/rekap_kehadiran/update/{id}', 'Rekap_KehadiranController@update');

// Delete
$router->delete('/rekap_kehadiran/delete/{id}', 'Rekap_KehadiranController@destroy');


$router->get('/', function () use ($router) {
    return $router->app->version();
});
