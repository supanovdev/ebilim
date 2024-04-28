<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Meret',
            'Mekan',
            'Merdan',
            'Enejan',
            'Gaygysyz',
            'Rustem',
            'Yakub',
            'Guych',
            'Eziz',
            'Agabek',
            'Allayar',
            'Arslan',
            'Sohbet',
            'Dayanch',
            'Sapar',
            'Mergen',
            'Geldimyrat',
            'Dowlet',
            'Merjen',
            "Aygul",
            'Meryem',
            'Shirin',
            'Sheker',
            'Aisha',
            'Gozel',
        ];
        foreach ($objs as $obj) {
            $teacher = Teacher::create([
                'name' => $obj,
                'slug' => str()->random(5),
            ]);
            $teacher->update();
        }
    }
}
