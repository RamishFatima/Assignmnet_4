<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('authors')->insert(array(
            'name'=>'Ramish Fatima',
            'bio'=>'Iam so cool', 
             'created_at'=>date('Y-m-d H:m:s'),
             'updated_at'=>date('Y-m-d H:m:s'),
             ));

DB::table('authors')->insert(array(
    'name'=>'Mahnoor Fatima',
            'bio'=>'Iam so not cool', 
             'created_at'=>date('Y-m-d H:m:s'),
             'updated_at'=>date('Y-m-d H:m:s'),
             ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB:table('authors')->where('name','=','Ramish Fatima')->delete();
        DB:table('authors')->where('name','=','Mahnoor Fatima')->delete();
    }
}
