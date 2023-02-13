<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Person;
use App\Models\PersonDetails;

class PersonDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Ciclo per associare ad ogni elemento di Person un elemento di Person Detail, identificato nella variabile di iterazione $p (elemento p-esimo), necessario in quanto Person e PersonDetails sono in rapporto one-to-one, quindi ad ogni elemento del primo deve corrispondere uno ed uno solo elemento del secondo 
        Person::all() -> each(function($p){

            $personDetail = PersonDetail::factory() -> make();
            
            // Qui si richiama la funzione person() definita nel model PersonDetails e si associa l'elemento p-esimo a $personDetail
            $personDetail -> person() -> associate($p);

            $personDetail -> save();
        });
    }
}
