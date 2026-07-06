<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("index");
});

Route::get('/abouts', function () {
    return view("abouts");
});

Route::get('/blogs', function () {
    return view("blogs");
});
Route::get('/abouts', function () {
    $name = 'ขนิษฐา เทือกพุทรา';
    $date = date('6 กรกฎาคม 2026');
    return view("abouts", compact('name', 'date'));
})->name('abouts');

Route::get('/blogs', function () {
    $blogs = [
        ['title'=> 'บทความที่1',
        'content' => 'เนื้อหาบทความที่1',
        'status'=>true
        ],
        ['title'=> 'บทความที่2',
        'content' => 'เนื้อหาบทความที่2',
        'status'=>true
        ],
        ['title'=> 'บทความที่3',
        'content' => 'เนื้อหาบทความที่3',
        'status'=>false
        ],
    ];  
return view("blogs", compact("blogs"));
})->name('blogs');

Route::get('/student/{id?}', function ($id = 'ยังไม่ได้ระบุรหัส') {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});
