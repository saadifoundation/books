<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('cover');
            $table->foreignId('collection_id')->constranied();
            $table->text('intro');
            $table->string('intro_video');
            $table->string('teaching_video');
            $table->string('elearning_link');
            $table->string('bibliography_link');
            $table->string('index_file');
            $table->string('sample_file');
            $table->string('buying_link');
            $table->string('ebuying_link');
            $table->string('audios_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
