<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->text('postcode');
            $table->integer('prefecture_id');
            $table->text('city');
            $table->text('local');
            $table->text('street_address')->nullable();
            $table->text('business_hour')->nullable();
            $table->text('regular_holiday')->nullable();
            $table->text('phone')->nullable();
            $table->text('fax')->nullable();
            $table->text('url')->nullable();
            $table->text('license_number')->nullable();
            $table->text('image');
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
        Schema::dropIfExists('companies');
    }
}
