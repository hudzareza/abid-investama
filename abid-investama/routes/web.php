<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthlybudgetController;
use App\Http\Controllers\PattycashController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RequestitemController;
use App\Exports\MonthlyBudgetExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('superadmin.dashboard')->middleware('auth', 'verified', 'role:superadmin');
Route::post('/admin/dashboard-store', [HomeController::class, 'store'])->name('dashboard.store')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/income/list', [IncomeController::class, 'index'])->name('income.list')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/member/list', [MemberController::class, 'index'])->name('member.list')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/schedule/list', [ScheduleController::class, 'index'])->name('schedule.list')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/absensi/list', [AbsensiController::class, 'index'])->name('absensi.list')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/monthly-budget/list', [MonthlybudgetController::class, 'index'])->name('monthly.list')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/patty-cash/list', [PattycashController::class, 'index'])->name('patty.list')->middleware('auth', 'verified', 'role:superadmin');

Route::get('/admin/location/list', [LocationController::class, 'index'])->name('location.list')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/location/add', [LocationController::class, 'add'])->name('location.add')->middleware('auth', 'verified', 'role:superadmin');
Route::post('/admin/location/store', [LocationController::class, 'store'])->name('location.store')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit')->middleware('auth', 'verified', 'role:superadmin');
Route::put('/admin/location/update', [LocationController::class, 'update'])->name('location.update')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/location/delete/{id}', [LocationController::class, 'delete'])->name('location.delete')->middleware('auth', 'verified', 'role:superadmin');

Route::get('/admin/request-item/list', [RequestitemController::class, 'index'])->name('request.list')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/request-item/add', [RequestitemController::class, 'add'])->name('request.add')->middleware('auth', 'verified', 'role:superadmin');
Route::post('/admin/request-item/store', [RequestitemController::class, 'store'])->name('request.store')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/request-item/edit/{id}', [RequestitemController::class, 'edit'])->name('request.edit')->middleware('auth', 'verified', 'role:superadmin');
Route::put('/admin/request-item/update', [RequestitemController::class, 'update'])->name('request.update')->middleware('auth', 'verified', 'role:superadmin');
Route::get('/admin/request-item/delete/{id}', [RequestitemController::class, 'delete'])->name('request.delete')->middleware('auth', 'verified', 'role:superadmin');

Route::get('/export-monthly-budget', function (Request $request) {
    return Excel::download(new MonthlyBudgetExport($request->input('search'), $request->input('sort')), 'monthly_budget.xlsx');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/income/add', [IncomeController::class, 'add'])->name('income.add')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::post('/income/store/casual', [IncomeController::class, 'store'])->name('income.store')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::post('/income/store/member', [IncomeController::class, 'storemember'])->name('income.store.member')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::get('/member-data/add', [MemberController::class, 'add'])->name('member.add')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::post('/member-data/store', [MemberController::class, 'store'])->name('member.store')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::get('/schedule/add', [ScheduleController::class, 'add'])->name('schedule.add')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::get('/absensi/add', [AbsensiController::class, 'add'])->name('absensi.add')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::post('/absensi/store', [AbsensiController::class, 'store'])->name('absensi.store')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::get('/monthly-budget/add', [MonthlybudgetController::class, 'add'])->name('monthly.add')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::post('/monthly-budget/store', [MonthlybudgetController::class, 'store'])->name('monthly.store')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::get('/patty-cash/add', [PattycashController::class, 'add'])->name('patty.add')->middleware(['auth', 'verified', 'role:superadmin,user']);
Route::post('/patty-cash/store', [PattycashController::class, 'store'])->name('patty.store')->middleware(['auth', 'verified', 'role:superadmin,user']);

Route::get('/dashboard', [HomeController::class, 'logged'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
