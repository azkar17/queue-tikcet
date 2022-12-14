<?php

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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

// Route::get('/patients', function () {
//     // return view('welcome');
// $title ='Setapak';
//     $jan=DB::table('patients')
//             ->whereMonth('created_at', '01')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $feb=DB::table('patients')
//             ->whereMonth('created_at', '02')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $marc=DB::table('patients')
//             ->whereMonth('created_at', '03')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $april=DB::table('patients')
//             ->whereMonth('created_at', '04')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $mei=DB::table('patients')
//             ->whereMonth('created_at', '05')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $jun=DB::table('patients')
//             ->whereMonth('created_at', '06')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $july=DB::table('patients')
//             ->whereMonth('created_at', '07')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $augt=DB::table('patients')
//             ->whereMonth('created_at', '08')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $sep=DB::table('patients')
//             ->whereMonth('created_at', '09')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $oct=DB::table('patients')
//             ->whereMonth('created_at', '10')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $nov=DB::table('patients')
//             ->whereMonth('created_at', '11')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $dec=DB::table('patients')
//             ->whereMonth('created_at', '12')
//             ->whereYear('created_at', '2022')
//             ->get()->count();


//             // dd(compact('jan','feb','marc','april','mei','june','july','aug','sep','oct','nov','dec'));
//             return view('patient',compact('jan','feb','marc','april','mei','jun','july','augt','sep','oct','nov','dec','title'));
// });
// Route::get('/appointment', function () {
   
//     $title ='Setapak';
//     $jan=DB::table('appointments')
//             ->whereMonth('created_at', '01')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $feb=DB::table('appointments')
//             ->whereMonth('created_at', '02')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $marc=DB::table('appointments')
//             ->whereMonth('created_at', '03')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $april=DB::table('appointments')
//             ->whereMonth('created_at', '04')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $mei=DB::table('appointments')
//             ->whereMonth('created_at', '05')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $jun=DB::table('appointments')
//             ->whereMonth('created_at', '06')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $july=DB::table('appointments')
//             ->whereMonth('created_at', '07')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $augt=DB::table('appointments')
//             ->whereMonth('created_at', '08')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $sep=DB::table('appointments')
//             ->whereMonth('created_at', '09')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $oct=DB::table('appointments')
//             ->whereMonth('created_at', '10')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $nov=DB::table('appointments')
//             ->whereMonth('created_at', '11')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $dec=DB::table('appointments')
//             ->whereMonth('created_at', '12')
//             ->whereYear('created_at', '2022')
//             ->get()->count();


//             return view('appointment',compact('jan','feb','marc','april','mei','jun','july','augt','sep','oct','nov','dec','title'));
// });


// Route::get('/ca',function(){
// // Check if an item with the key 'key' exists in the cache
// if (Cache::has('patient-jan')) {
//     // Get the cached value
//     $value = Cache::get('patient-jan');

//     // Return a response with the cached value
//     return response($value);
// } else {
//     // Return a 404 not found error
//     return response()->json(['error' => 'Item not found'], 404);
// }
// });
// Route::get('/p',function(){
//     // $title ='Setapak';
//     $data=Cache::get('patient-jan',100,function(){
//         return Patient::whereMonth('created_at', '01')
//         ->whereYear('created_at', '2022')
//         ->get()->count();
//     });
//     return response()->json(compact('data'));
//     // $jan=Patient::whereMonth('created_at', '01')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $feb=Patient::whereMonth('created_at', '02')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $marc=Patient::whereMonth('created_at', '03')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $april=Patient::whereMonth('created_at', '04')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $mei=Patient::whereMonth('created_at', '05')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $jun=Patient::whereMonth('created_at', '06')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $july=Patient::whereMonth('created_at', '07')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $augt=Patient::whereMonth('created_at', '08')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $sep=Patient::whereMonth('created_at', '09')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $oct=Patient::whereMonth('created_at', '10')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $nov=Patient::whereMonth('created_at', '11')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();

//     // $dec=Patient::whereMonth('created_at', '12')
//     //         ->whereYear('created_at', '2022')
//     //         ->get()->count();


//             // dd(compact('jan','feb','marc','april','mei','june','july','aug','sep','oct','nov','dec'));
//             // return response()->json(compact('jan','feb','marc','april','mei','jun','july','augt','sep','oct','nov','dec','title'));
// });
// Route::get('/p1', function () {
//     // return view('welcome');
// $title ='Setapak';
//     $jan=DB::table('patients')
//             ->whereMonth('created_at', '01')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $feb=DB::table('patients')
//             ->whereMonth('created_at', '02')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $marc=DB::table('patients')
//             ->whereMonth('created_at', '03')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $april=DB::table('patients')
//             ->whereMonth('created_at', '04')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $mei=DB::table('patients')
//             ->whereMonth('created_at', '05')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $jun=DB::table('patients')
//             ->whereMonth('created_at', '06')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $july=DB::table('patients')
//             ->whereMonth('created_at', '07')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $augt=DB::table('patients')
//             ->whereMonth('created_at', '08')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $sep=DB::table('patients')
//             ->whereMonth('created_at', '09')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $oct=DB::table('patients')
//             ->whereMonth('created_at', '10')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $nov=DB::table('patients')
//             ->whereMonth('created_at', '11')
//             ->whereYear('created_at', '2022')
//             ->get()->count();

//     $dec=DB::table('patients')
//             ->whereMonth('created_at', '12')
//             ->whereYear('created_at', '2022')
//             ->get()->count();


//             return response()->json(compact('jan','feb','marc','april','mei','jun','july','augt','sep','oct','nov','dec','title'));
// });
Route::get('/test',function(){
        $appointment = Cache::rememberForever('first-app', function () {
                return Appointment::first();
            });
            return response()->json($appointment);
        });

 Route::get('/test2',function(){
                if ($appointment = json_decode(Redis::get('app-1'))) {
                        return $appointment;
                    }
                        $appointment = Appointment::all();
                        Redis::set('app-1',json_encode($appointment));
                
                return $appointment;
       

});
Route::get('/',function(){
        $visit = Redis::incr('visit');
            return response()->json($visit);
});
Route::get('/set',function(){
        $visit = Redis::set('one',json_encode(Appointment::first()));
            return response()->json($visit);
});
Route::get('/get',function(){
        if(Redis::exists('one')){
          return json_decode(Redis::get('one'));
        }
        return 'no value';
});