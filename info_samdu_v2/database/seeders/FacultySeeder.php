<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vodepartment_id
     */
    public function run()
    {
        $faculties = [
            ["department_id" => 145, "name" => "Magistratura markazi"],
            ["department_id" => 1, "name" => "Matematika fakulteti",],
            ["department_id" => 6, "name" => "Biologiya fakulteti",],
            ["department_id" => 7, "name" => "Geografiya va ekologiya fakulteti",],
            ["department_id" => 8, "name" => "Psixologiya va ijtimoiy-siyosiy fanlar fakulteti",],
            ["department_id" => 9, "name" => "Sport faoliyati va san'at fakulteti",],
            ["department_id" => 10, "name" => "Tarix fakulteti",],
            ["department_id" => 12, "name" => "Filologiya fakulteti"],
            ["department_id" => 13, "name" => "Intellektual tizimlar va kompyuter texnologiyalari fakulteti",],
            ["department_id" => 14, "name" => "Yuridik fakulteti",],
            ["department_id" => 15, "name" => "Kimyo fakulteti",],
            ["department_id" => 16, "name" => "Maktabgacha va boshlang'ich ta'lim fakulteti",],
            ["department_id" => 19, "name" => "Inson resurslarini boshqarish fakulteti",],
            ["department_id" => 20, "name" => "Xalqaro ta’lim dasturlari markazi",],
            ["department_id" => 99, "name" => "Sirtqi(maxsus sirtqi) bo'limi",],
            ["department_id" => 131, "name" => "Muxandislik fizikasi instituti",],
            ["department_id" => 132, "name" => "Agrobiotexnologiyalar va oziq-ovqat xavfsizligi instituti",]
        ];

        foreach($faculties as $faculty){
            Faculty::create($faculty);
        }


    }
}
