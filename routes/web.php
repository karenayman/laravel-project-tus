<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
//Create the model job
// class job {
//     public static function all(): array {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                  'salary' => '50000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                  'salary' => '50000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                  'salary' => '50000'
//             ]
//         ];
//     }
// }
// $jobs =  [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                  'salary' => '50000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                  'salary' => '50000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                  'salary' => '50000'
//             ]
// ];

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'Director',
                 'salary' => '50000'
            ],
            [
                'title' => 'Programmer',
                 'salary' => '50000'
            ],
            [
                'title' => 'Teacher',
                 'salary' => '50000'
            ]
        ]
    ]); //resources --> views
});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => Job:: all()
    ]); //resources --> views
});
Route::get('/jobs/{id}', function ($id) {
    //dd($id);
    $job = Job::find($id);
    return view('job', ['job' => $job]);
    //return 'about page';
});
//about page route example
Route::get('/about', function () {
    return view('about');
    //return 'about page';
});
Route::get('/contact', function () {
    return view('contact');
   
});