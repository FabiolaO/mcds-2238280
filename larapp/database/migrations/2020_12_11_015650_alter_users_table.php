<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'fullname'); 
            $table->bigInteger('phone')->after('email');          
            $table->date('birthdate')->after('phone');          
            $table->string('photo')->default('imgs/no-photo.png')->after('birthdate');
            $table->string('role')->default('Customer')->after('photo');
            $table->boolean('active')->default(1)->after('role');
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
            $table->renameColumn('fullname', 'name');
            $table->dropColumn(['phone', 'birthdate', 'photo', 'role', 'active']);

                    });
    }
}
