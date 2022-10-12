<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_pictures', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('picture');
            $table->foreignId('album_id')->nullable()->constrained('albums')->onUpdate('cascade')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->nullOnDelete();
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
        Schema::dropIfExists('album_pictures');
    }
}
