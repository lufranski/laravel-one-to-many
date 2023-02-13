<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('posts', function(Blueprint $table) {

            //Versione lunga
            $table -> bigInteger('person_id') -> unsigned();
            $table -> foreign('person_id')
                    -> references('id')
                    -> on('people');
                    
            // Versione breve
            // $table -> foreignId('person_id')
            //         -> constrained();
        });

        Schema::table('person_details', function(Blueprint $table) {

            // Qui invece bisogna specificare che la primary key deriva dalla table people
            $table -> primary('person_id');

            $table -> bigInteger('person_id') -> unsigned();
            $table -> foreign('person_id')
                    -> references('id')
                    -> on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            	
            $table->dropForeign('posts_person_id_foreign');
            $table->dropColumn('person_id');
        });

        Schema::table('person_details', function (Blueprint $table) {
            
            $table->dropForeign('person_details_person_id_foreign');
            $table->dropColumn('person_id');
        });
    }
};
