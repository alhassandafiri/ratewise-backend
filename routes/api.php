<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CurrencyController;

Route::get('/convert', [CurrencyController::class, 'convert']);

Route::get('/rates', [CurrencyController::class, 'getPopularRates']);

Route::get('/history', [CurrencyController::class, 'getHistory']);
?>
