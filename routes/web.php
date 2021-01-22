<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//mangarahkan ke karyawan
Route::group(['middleware' => ['auth','checkRole:admin,user,manager,hrd']], function()
{
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/karyawan', 'KaryawanController@index');
    Route::post('/karyawan/create', 'KaryawanController@create');
    Route::get('/karyawan/{id}/edit', 'KaryawanController@edit');
    Route::get('/karyawan/{id}/delete', 'KaryawanController@delete');
    Route::post('/karyawan/{id}/update', 'KaryawanController@update');
    // cuti
    Route::get('/leave', 'LeaveController@index');
    Route::get('/leave', 'LeaveController@laporan');
    Route::get('/leave/cuti' ,'LeaveController@cuti');
    Route::post('/leave/create', 'LeaveController@create');
    Route::get('/leave/laporan', 'LeaveController@laporan');
    Route::get('/leave/pengajuan', 'LeaveController@pengajuan');
    
    // Route::post('/leave/create', 'leaveController@create');
    Route::get('/leave/getLeave', 'LeaveController@getLeave')->name('leave.getLeave');
    
    //user setting
    Route::get('/setting/senstaff', 'SettingController@settingsenstaff');
    Route::post('/setting/create', 'SettingController@create');
    Route::get('/setting/{id}/delete', 'settingController@delete');
    Route::get('/setting/degree','SettdegreeController@settingdegree');
    Route::post('/setting/degree','SettdegreeController@tambah');
    Route::get('/setting/{id}/hapus','SettdegreeController@hapus'); 
    Route::get('/setting/staff', 'SettstaffController@settingstaff');
    Route::get('/setting/{id}/hapus','SettstaffController@hapus'); 
    Route::post('/setting/new','SettstaffController@new');


    //username
    Route::get('/user', 'UserController@index');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::post('/user/{id}/update', 'UserController@update');
    //karyawan baru
    Route::get('/nemploye', 'NewemployeController@index');
    
    //direktorat
    Route::get('/direktorat', 'DirektoratController@index');
    Route::post('/direktorat/create', 'DirektoratController@create');
    Route::get('/direktorat/{id}/delete', 'DirektoratController@delete');
    //pt
    Route::get('/pt', 'PtController@index');
    Route::post('/pt/create', 'PtController@create');
    Route::get('/pt/{id}/delete', 'PtController@delete');
    //level
    Route::get('/level', 'LevelController@index');
    Route::post('/level/create', 'LevelController@create');
    Route::get('/level/{id}/delete', 'LevelController@delete');
    //posisi
    Route::get('/jabatan', 'posisiController@index');
    Route::post('/jabatan/create', 'posisiController@create');
    Route::get('/jabatan/{id}/delete', 'posisiController@delete');
    //departement
    Route::get('/departement', 'DepartementController@index');
    Route::post('/departement/create', 'DepartementController@create');
    Route::get('/direktorat/{id}/delete', 'DepartementController@delete');
    //duty
    Route::get('/duty', 'DutyController@index');
    Route::post('/duty/create', 'DutyController@create');
    Route::get('/duty/{id}/delete', 'DutyController@delete');
    //posisi
    Route::get('/posisi', 'posisiController@index');
    Route::post('/posisi/create', 'posisiController@create');
    Route::get('/posisi/{id}/delete', 'posisiController@delete');
    //kuesioner
    // Route::get('/penilaian', 'SenstaffController@kuesioner');
    // Route::post('/penilaian/create', 'SenstaffController@create');
    Route::get('/penilaian/senstaff', 'SenstaffController@seniorstaff');
    //username
    Route::get('/user', 'UserController@index');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::post('/user/{id}/update', 'UserController@update');
    //karyawan baru
    Route::get('/nemploye', 'NewemployeController@index');
    
    //direktorat
    Route::get('/direktorat', 'DirektoratController@index');
    Route::post('/direktorat/create', 'DirektoratController@create');
    Route::get('/direktorat/{id}/delete', 'DirektoratController@delete');
    //pt
    Route::get('/pt', 'PtController@index');
    Route::post('/pt/create', 'PtController@create');
    Route::get('/pt/{id}/delete', 'PtController@delete');
    //level
    Route::get('/level', 'LevelController@index');
    Route::post('/level/create', 'LevelController@create');
    Route::get('/level/{id}/delete', 'LevelController@delete');
    //posisi
    Route::get('/jabatan', 'posisiController@index');
    Route::post('/jabatan/create', 'posisiController@create');
    Route::get('/jabatan/{id}/delete', 'posisiController@delete');
    //departement
    Route::get('/departement', 'DepartementController@index');
    Route::post('/departement/create', 'DepartementController@create');
    Route::get('/direktorat/{id}/delete', 'DepartementController@delete');
    //duty
    Route::get('/duty', 'DutyController@index');
    Route::post('/duty/create', 'DutyController@create');
    Route::get('/duty/{id}/delete', 'DutyController@delete');
    //posisi
    Route::get('/posisi', 'posisiController@index');
    Route::post('/posisi/create', 'posisiController@create');
    Route::get('/posisi/{id}/delete', 'posisiController@delete');
    //kuesioner
    Route::get('/penilaian/senstaff', 'SenstaffController@seniorstaff');
    
    //penilaian Dashboard
    Route::get('/penilaian/laporanstaff', 'StaffController@laporanstaff');
    Route::get('/penilaian/laporandegree', 'DegreeController@laporandegree');
    Route::get('/penilaian/laporansenstaff', 'SenstaffController@laporansenstaff');
    
    //menilai
    Route::get('/penilaian/{id}/degree' ,'degreeController@degree');
    Route::post('/penilaian/input' ,'Degreecontroller@input');
    
    Route::get('/penilaian/{id}/detail_degree','DegreeController@detail');
    Route::get('/penilaian/{id}/hapus', 'DegreeController@hapus');
    
    //persetujuan hasil penilaian
    Route::get('/penilaian/listapprove','SenstaffController@list');
    Route::get('/penilaian/degree', 'DegreeController@degree');

    // hrd mengisi absensi
    // Route::get('/penilaian/dasboard','');
    Route::get('/penilaian/absenstaff' ,'StaffController@absenstaff');
    Route::get('/penilaian/absenstaff' ,'DashboardController@absen');
    //pengajuan cuti
    Route::get('/leave', 'LeaveController@index');
    Route::get('/leave', 'LeaveController@laporan');
    Route::get('/leave/cuti' ,'LeaveController@cuti');
    Route::post('/leave/create', 'LeaveController@create');
    Route::get('/leave/laporan', 'LeaveController@laporan');
    Route::get('/leave/pengajuan', 'LeaveController@pengajuan');


// });

// Route::group(['middleware' => ['auth','checkRole:manager']], function()
// {
//     Route::get('/dashboard', 'DashboardController@index');
//     //update kuesioner non staff
//     Route::get('/penilaian/{id}/persetujuan', 'SenstaffController@persetujuan');
//     Route::get`('/penilaian/{id}/update', 'SenstaffController@persetujuan');
//     Route::post('/nemploye/create', 'NewemployeController@create');
//     Route::get('/nemploye/pengajuan', 'NewemployeController@pengajuan');

//     //penilaian
//     Route::get('/penilaian', 'SenstaffController@index');
//     Route::get('/penilaian/laporansenstaff', 'SenstaffController@laporansenstaff');
//     Route::post('/penilaian/tambah', 'SenstaffController@tambah');
//     Route::post('/penilaian/create', 'StaffController@create');
//     //menilai
//     Route::get('/penilaian/{id}/senstaff', 'SenstaffController@senstaff');
//     Route::get('/penilaian/{id}/staff', 'StaffController@staff');
//     Route::get('/penilaian/{id}/detail_staff', 'StaffController@detail');
//     Route::get('/penilaian/{id}/detail', 'SenstaffController@detail');
//     Route::get('/penilaian/{id}/delete', 'SenstaffController@delete');
    

//     Route::get('/penilaian/laporandegree', 'DegreeController@laporandegree');
//     Route::get('/penilaian/{id}/detail_degree','DegreeController@detail');
//     Route::get('/penilaian/{id}/hapus', 'DegreeController@hapus');

//     Route::get('/penilaian/{id}/approvesenstaff', 'SenstaffController@approve');
//     Route::post('/penilaian/{id}/update', 'SenstaffController@update');

});
