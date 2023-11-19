<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    function index()
    {
        $nama = 'faisal';
        $todo = Tugas::all();
        
        
        $tugas = [
            [
                'title' => 'Membuat CRUD',
                'subject' => 'Laravel CRUD',
                'body' => 'Membuat CRUD dengan Laravel'
            ],
            [
                'title' => 'Laravel Dasar',
                'subject' => 'Laravel Dasar',
                'body' => 'Tutorial Lravel Dasar'
            ],
            [
                'title' => 'Laravel Magick',
                'subject' => 'Laravel Magick',
                'body' => 'laravel more than just a framework'
            ], 
            [
                'title' => 'Laravel 8',
                'subject' => 'Laravel 8',
                'body' => 'Laravel 8 is the latest version of Laravel'
            ]
        ];

        return view(
            'tugas.tugas',
            [
                'nama' => $nama,
                'tugas' => $tugas,
                'todo' => $todo
            ]
        );
    }
}
