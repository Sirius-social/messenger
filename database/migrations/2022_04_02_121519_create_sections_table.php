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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->json('title');
            $table->json('lead')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('description')->nullable();
            $table->json('file_path')->nullable();
            $table->json('youtube_link')->nullable();
            $table->foreignIdFor(\App\Models\Page::class);
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
        Schema::dropIfExists('sections');
    }
};
