<?php

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/petunjuk-penggunaan', 'HomeController@usage')->name('usage');
Route::get('/pertanyaan', 'HomeController@helpdesk')->name('helpdesk');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dasboard', 'HomeController@index')->name('dashboard');
    Route::get('/akun', 'AkunController@index')->name('akun');
    Route::post('/akun', 'AkunController@update')->name('akun-update');
    Route::group(['as' => 'usaha.' , 'prefix' => 'usaha'], function () {
        Route::get('/', 'UsahaController@index')->name('index')->middleware('role:produsen'); #show and edit
        Route::post('/', 'UsahaController@update')->name('update')->middleware('role:produsen'); #store new data to db
        Route::get('/{id}', 'UsahaController@show')->name('show')->middleware('role:admin'); #
    });
    Route::group(['as' => 'website.' , 'prefix' => 'website'], function () {
        Route::post('/', 'WebsiteUsahaController@update')->name('update')->middleware('role:produsen'); #store new data to db
        Route::get('/banner', 'WebsiteUsahaController@banner')->name('banner')->middleware('role:produsen'); #show and edit
        Route::get('/lokasi', 'WebsiteUsahaController@lokasi')->name('lokasi')->middleware('role:produsen'); #
        Route::get('/kontak', 'WebsiteUsahaController@kontak')->name('kontak')->middleware('role:produsen'); #
    });
    Route::group(['as' => 'produksi.' , 'prefix' => 'produksi'], function () {
        Route::post('/', 'UsahaController@update')->name('update-bahan')->middleware('role:produsen');
        Route::get('/', 'ProdukController@index')->name('index')->middleware('role:produsen');
        Route::post('/tambah', 'ProdukController@store')->name('store')->middleware('role:produsen');
        Route::post('/sunting/{id}', 'ProdukController@update')->name('update')->middleware('role:produsen');
        Route::get('/hapus', 'ProdukController@destroy')->name('delete')->middleware('role:produsen');
    });
    Route::group(['as' => 'bahan.' , 'prefix' => 'pengajuan-bahan'], function () {
        Route::get('/', 'PengajuanBahan@index')->name('index')->middleware('role:produsen');
        Route::get('/buat-pengajuan', 'ProdukController@create')->name('create')->middleware('role:produsen');
        Route::post('/buat-pengajuan', 'ProdukController@store')->name('store')->middleware('role:produsen');
        Route::post('/{unique}/sunting', 'ProdukController@update')->name('update')->middleware('role:produsen');
        Route::post('/{unique}/batal', 'ProdukController@cancel')->name('cancel')->middleware('role:produsen');
    });
    Route::group(['as' => 'pembelian.' , 'prefix' => 'pembelian'], function () {
        Route::get('/', 'PembelianController@index')->name('index')->middleware('role:produsen');
        Route::get('/set/{status}/', 'PembelianController@update')->name('update')->middleware('role:produsen'); #set selesai/ batal
    });
    Route::group(['as' => 'belanja.' , 'prefix' => 'belanja'], function () {
        Route::get('/', 'BelanjaController@index')->name('index')->middleware('role:konsumen');
        Route::get('/set/{status}/', 'BelanjaController@update')->name('update')->middleware('role:konsumen'); #set arsip/ batal
        Route::get('/arsip', 'BelanjaController@arsip')->name('arsip')->middleware('role:konsumen');
        Route::get('/{hash}/kembalikan', 'BelanjaController@kembalikan')->name('revert')->middleware('role:konsumen');
    });
    //-tagihan supplier admin, request pengiriman, riwayat penerimaan, acc transaksi
});

Route::get('/{slug}', 'WebsiteUsahaController@show')->name('index');
Route::get('/{slug}/keranjang', 'WebsiteUsahaController@cart')->name('keranjang');
Route::get('/{slug}/{produk}', 'WebsiteUsahaController@product')->name('produk');
Route::post('/checkout', 'WebsiteUsahaController@checkout')->name('checkout');
