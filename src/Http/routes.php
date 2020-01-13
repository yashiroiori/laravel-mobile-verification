<?php

use Fouladgar\MobileVerifier\Http\Controllers\MobileVerificationController;
use Illuminate\Support\Facades\Route;

$verifyRoute = config('mobile_verifier.routes.verify', '/auth/mobile/verify');
$resendRoute = config('mobile_verifier.routes.verify', '/auth/mobile/resend');

Route::post($verifyRoute, [MobileVerificationController::class, 'verify'])->name('mobile.verified');
Route::post($resendRoute, [MobileVerificationController::class, 'resend'])->name('mobile.resend');