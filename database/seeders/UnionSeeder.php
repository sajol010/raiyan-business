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
        $union->name = "৭ নং পলাশপুর";
        $union->uuid = Str::uuid();
        $union->slug = "7-palashpur";
        $union->address_line1 = "Palashpur";
        $union->district = 'Jashore';
        $union->division = 'Khulna';
        $union->save();
    }
}
