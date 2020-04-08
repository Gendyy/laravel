<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToUsers extends Migration
{
    /*
        There was no need to add this migration file, you can merge this fields all 
        to the same users migration file.
    */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->text('phonenumber')->unique(); // error // 
            /*
                Illuminate\Database\QueryException  : SQLSTATE[42000]: Syntax error or access violation:
                1170 BLOB/TEXT column 'phonenumber' used in key specification without a key length (SQL: 
                alter table `users` add unique `users_phonenumber_unique`(`phonenumber`))

                search about key unique length 
            */
            $table->string('phonenumber')->unique(); 
            $table->string('gender'); // MUST BE ENUM (MALE-FEMALE)  // optional
            $table->string('birth_date'); // MUST BE DATE field  // optional
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
