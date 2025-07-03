
<?php

use App\Mail\RegistrationRequestReviewed;
use App\Models\ItianRegistrationRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('welcome');
});
Route::any('/test', function () {
    return 'ok';
});

Route::get('/', function () {
    return response()->json(['message' => 'Laravel API Running ✅']);
});
