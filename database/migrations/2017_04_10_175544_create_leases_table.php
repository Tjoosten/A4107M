<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLeasesTable
 */
class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            // Group info
            $table->increments('id');
            $table->integer('status_id');
            $table->string('end_date');
            $table->string('start_date');
            $table->string('email_address');
            $table->string('group_name');
            $table->string('phone_number');

            // Building information.
            $table->string('kapoenen_lokaal');
            $table->string('welpen_lokaal');
            $table->string('jonggiver_lokaal');
            $table->string('giver_lokaal');
            $table->string('jins_lokaal');
            $table->string('keuken_lokaal');
            $table->string('lokaal_wc');
            $table->string('lokaal_zaal');

            // Utility timestamps.
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
        Schema::dropIfExists('leases');
    }
}
