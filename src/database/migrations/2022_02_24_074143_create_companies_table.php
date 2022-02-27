<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {

            $table->text('name.companies');
            $table->text('email.companies');
            $table->text('postcode.companies');
            $table->int('prefecture_id.companies');
            $table->text('city.companies');
            $table->text('local.companies');
            $table->text('street_address.companies')->nullable();
            $table->text('busines_hour.companies')->nullable();
            $table->text('regular_holiday.companies')->nullable();
            $table->text('phone.companies')->nullable();
            $table->text('fax.companies')->nullable();
            $table->text('url.companies')->nullable();
            $table->text('license_number.companies')->nullable();
            $table->text('image.companies');

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
