<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Menampilkan halaman data pemasukan
$routes->get('pemasukan', 'Pemasukan::index');
$routes->post('pemasukan/tambah', 'Pemasukan::tambah');

//Menampilkan halaman daftar menu
$routes->get('menu', 'Menu::index');
$routes->post('menu/tambah', 'Menu::tambah');

//Menampilkan halaman data pengeluaran
$routes->get('pengeluaran', 'Pengeluaran::index');
$routes->post('pengeluaran/tambah', 'Pengeluaran::tambah');

//method hapus dalam halaman data pengeluaran
$routes->get('/pengeluaran/hapus/(:num)', 'Pengeluaran::hapus/$1');

//method ubah data
$routes->post('pengeluaran/ubah', 'Pengeluaran::ubah');
