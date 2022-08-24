<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class publishStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('editais')->table('editais_estados')->insert([
            'id' => 1,
            'nome' => 'Em Andamento: Inscrições Abertas',
        ]);

        DB::connection('editais')->table('editais_estados')->insert([
            'id' => 2,
            'nome' => 'Em Andamento: Inscrições Fechdas',
        ]);

        DB::connection('editais')->table('editais_estados')->insert([
            'id' => 3,
            'nome' => 'Finalizados',
        ]);

    }
}
