<?php namespace Depcore\UserReview\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateTestimonialsTable1 extends Migration
{
    public function up()
    {
        Schema::table('depcore_testimonials_testimonials', function(Blueprint $table) {
            $table->integer( 'client_id' )->nullable(  )->unsigned(  )->after( 'author' );
        });
    }

    public function down()
    {
        Schema::table('depcore_testimonials_testimonials', function(Blueprint $table) {
            $table->dropColumn('client_id');
        });
    }
}
