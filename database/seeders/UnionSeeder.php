<?php

namespace Database\Seeders;

use App\Models\Union;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UnionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $union = new Union();
        $union->name = "Abhaynagor";
        $union->uuid = Str::uuid();
        $union->slug = "abhaynagor";
        $union->address_line1 = "Abhaynagor";
        $union->district = 'Jashore';
        $union->division = 'Khulna';
        $union->save();
    }
}
