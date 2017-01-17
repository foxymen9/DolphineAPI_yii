<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveApiTokenFromUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table( 'users', function ( Blueprint $table ) {
        $table->dropColumn( 'api_token' );
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table( 'users', function ( Blueprint $table ) {
        $table->string( 'api_token', 255 );
      });
    }
}
