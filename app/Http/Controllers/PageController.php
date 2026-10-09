<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    // Halaman utama — Hero personal
    public function home()
    {
        $data = [
            'nama' => 'Revaldo Ginting',
            'nim' => '4253250033',
            'kelas' => 'PSIK 25B',
            'universitas' => 'Universitas Negeri Medan',
            'role' => 'Mahasiswa Ilmu Komputer',
            'tagline' => 'Belajar Laravel, membangun masa depan.',
            'skills' => [
                ['nama' => 'Laravel', 'level' => 85],
                ['nama' => 'PHP', 'level' => 80],
                ['nama' => 'MySQL', 'level' => 75],
                ['nama' => 'JavaScript', 'level' => 70],
            ],
            'stats' => [
                ['label' => 'Proyek', 'value' => '5+'],
                ['label' => 'Skill', 'value' => '8+'],
                ['label' => 'Semester', 'value' => '1'],
            ],
            'items' => [
                'Install Composer & create-project',
                'Buat DB di phpMyAdmin & konfigurasi .env',
                'artisan serve berjalan + screenshot welcome page',
                '3 route custom (/, /about, /contact) return Blade view',
                'View menampilkan data dinamis (array dari route)',
                'Gunakan make:controller & make:model -m',
                'README: langkah install + penjelasan struktur folder',
                'Repo: TugasWeb-P9-LaravelSetup',
            ],
        ];

        return view('home', $data);
    }

    // Halaman About
    public function about()
    {
        $info = [
            'nama' => 'Revaldo Ginting',
            'nim' => '4253250033',
            'kelas' => 'PSIK 25B',
            'prodi' => 'Ilmu Komputer',
            'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam',
            'universitas' => 'Universitas Negeri Medan',
            'github' => 'valdomilo',
            'skills' => [
                ['nama' => 'Laravel', 'level' => 85],
                ['nama' => 'PHP', 'level' => 80],
                ['nama' => 'MySQL', 'level' => 75],
                ['nama' => 'JavaScript', 'level' => 70],
                ['nama' => 'HTML & CSS', 'level' => 88],
                ['nama' => 'Git & GitHub', 'level' => 78],
            ],
            'interests' => [
                ['icon' => '🎮', 'nama' => 'Game Development'],
                ['icon' => '📱', 'nama' => 'Mobile App'],
                ['icon' => '🌐', 'nama' => 'Web Development'],
                ['icon' => '🎨', 'nama' => 'UI/UX Design'],
            ],
        ];

        return view('about', $info);
    }

    // Halaman Contact
    public function contact()
    {
        $kontak = [
            [
                'icon' => '📧',
                'label' => 'Email',
                'value' => 'revaldo@example.com',
                'link' => 'mailto:revaldo@example.com',
            ],
            [
                'icon' => '🐙',
                'label' => 'GitHub',
                'value' => 'github.com/valdomilo',
                'link' => 'https://github.com/valdomilo',
            ],
            [
                'icon' => '💼',
                'label' => 'LinkedIn',
                'value' => 'linkedin.com/in/revaldo',
                'link' => '#',
            ],
            [
                'icon' => '📍',
                'label' => 'Lokasi',
                'value' => 'Medan, Sumatera Utara',
                'link' => null,
            ],
        ];

        $sosmed = [
            ['nama' => 'GitHub', 'user' => '@valdomilo', 'link' => 'https://github.com/valdomilo', 'color' => '#333'],
            ['nama' => 'Instagram', 'user' => '@revaldo', 'link' => '#', 'color' => '#E1306C'],
            ['nama' => 'Twitter', 'user' => '@revaldo', 'link' => '#', 'color' => '#1DA1F2'],
        ];

        return view('contact', compact('kontak', 'sosmed'));
    }

    // Bonus: route parameter
    public function hello($nama)
    {
        return view('hello', ['nama' => $nama]);
    }
}