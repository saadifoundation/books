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
            $table->string('title_abbr')->unique();
            $table->string('cover')->nullable();
            $table->foreignId('collection_id')->nullable()->constrained()->onDelete('cascade');
            $table->text('intro')->nullable();
            $table->foreignId('status_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('intro_video')->nullable();
            $table->string('teaching_video')->nullable();
            $table->string('elearning_link')->nullable();
            $table->string('bibliography_link')->nullable();
            $table->string('index_file')->nullable();
            $table->string('sample_file')->nullable();
            $table->string('buying_link')->nullable();
            $table->string('ebuying_link')->nullable();
            $table->string('audio_link')->nullable();
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
