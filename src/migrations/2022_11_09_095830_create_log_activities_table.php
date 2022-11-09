<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;

class CreateLogActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->nullableMorphs('logable');
            $table->string('subject');
            $table->json('data')->nullable();
            $table->string('crud_method')->nullable();
            $table->string('url')->nullable()->default(Request::fullUrl());
            $table->string('request_method')->nullable()->default(Request::method());
            $table->string('ip')->nullable()->default(Request::ip());
            $table->string('agent')->nullable()->default(Request::header('user-agent'));
            $table->softDeletes();
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
        Schema::dropIfExists('log_activities');
    }
}
