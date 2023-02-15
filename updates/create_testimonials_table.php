<?php namespace Depcore\Testimonials\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('depcore_testimonials_testimonials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('author');
            $table->string('company_position')->nullable();
            $table->string('slug')->index();
            $table->text('content');
            $table->boolean('is_published')->default(false);
            $table->integer('sort_order')->default(0);
            $table->date('issued_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('depcore_testimonials_testimonials');
    }
}
