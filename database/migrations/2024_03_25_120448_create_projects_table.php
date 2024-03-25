<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->text('general')->default('a:5:{s:6:"banner";s:0:"";s:4:"logo";s:0:"";s:8:"bg-color";s:16:"rgb(212 219 227)";s:4:"text";s:17:"the title of form";s:11:"description";s:55:"the description of this form for testing waitForIt site";}');
            $table->text('input')->default('a:8:{s:8:"bg-color";s:16:"rgb(249 250 251)";s:12:"border-color";s:16:"rgb(203 213 225)";s:10:"text-color";s:16:"rgb(100 116 139)";s:11:"error-color";s:14:"rgb(153 27 27)";s:12:"border-width";s:1:"1";s:13:"border-radius";s:1:"8";s:9:"new-input";s:3:"not";s:4:"text";s:0:"";}');
            $table->text('button')->default('a:8:{s:10:"text-color";s:16:"rgb(255 255 255)";s:8:"bg-color";s:15:"rgb(109 40 217)";s:12:"border-color";s:10:"rgb(0 0 0)";s:12:"border-width";s:1:"0";s:13:"border-radius";s:1:"8";s:9:"font-size";s:2:"14";s:11:"font-weight";s:3:"400";s:4:"text";s:13:"Join Waitlist";}');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
