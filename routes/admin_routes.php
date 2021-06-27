<?php

Route::get('/admin/dashboard', 'Admin\HomeController@index');

Route::resource('admin/perangkatdesa', 'Admin\PerangkatDesaController', ['parameters' => [
    'admin/perangkatdesa' => 'perangkat_desa'
]]);

Route::resource('admin/datadesa', 'Admin\DataDesaController', ['parameters' => [
    'admin/datadesa' => 'datadesa'
]]);


Route::resource('admin/kegiatandesa', 'Admin\KegiatanDesaController', ['parameters' => [
    'admin/kegiatandesa' => 'kegiatandesa'
]]);

Route::resource('admin/keuangandesa', 'Admin\KeuanganDesaController', ['parameters' => [
    'admin/keuangandesa' => 'keuangandesa'
]]);

Route::resource('admin/report', 'Admin\reportController', ['parameters' => [
    'admin/report' => 'report'
]]);

Route::resource('admin/article', 'Admin\ArticleController', ['parameters' => [
    'admin/article' => 'article'
]]);