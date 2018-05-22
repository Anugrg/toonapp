<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateARLTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ARL', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('data_collection_place');
          $table->string('data_collector_name');


          $table->integer('gender');
          $table->integer('age');
          $table->integer('education');
          $table->integer('status');
          $table->string('occupation');
          $table->integer('income');
          $table->integer('no_of_passenger');
          $table->integer('mode_access');
          $table->string('mode_access_other')->default("")->nullable(true);
          $table->integer('purpose');
          $table->string('purpose_other')->default("")->nullable(true);
          $table->integer('frequency_per_week');
          $table->integer('card_type');
          $table->integer('use_in_peak_hour');
          $table->string('first_station_morning')->nullable(true);
          $table->string('last_station_morning')->nullable(true);
          $table->integer('no_of_station_morning')->nullable(true);
          $table->float('distance_morning',5,2)->nullable(true);
          $table->float('train_fare_morning',5,2)->default(0.00)->nullable(true);
          $table->time('time_for_travel_morning')->nullable(true);

          //morning case 1 (7:00-8:30)
          $table->integer('before_7_00_morning_1')->default(0)->nullable(true);
          $table->integer('after_8_30_morning_1')->default(0)->nullable(true);
          $table->char('morning_10_precent_1',100)->default('N')->nullable(true);
          $table->integer('change_before_7_00_10_percent_morning_1')->default(0)->nullable(true);
          $table->integer('change_after_8_30_10_percent_morning_1')->default(0)->nullable(true);
          //$table->integer('not_change_time_10_percent_morning_1')->default(0);
          $table->char('morning_20_percent_1',100)->default('N');
          $table->integer('change_before_7_00_20_percent_morning_1')->default(0);
          $table->integer('change_after_8_30_20_percent_morning_1')->default(0);
          //$table->integer('not_change_time_20_percent_morning_1')->default(0);
          $table->char('morning_30_percent_1',100)->default('N')->nullable(true);
          $table->integer('change_before_7_00_30_percent_morning_1')->default(0)->nullable(true);
          $table->integer('change_after_8_30_30_percent_morning_1')->default(0)->nullable(true);
          //$table->integer('not_change_time_30_percent_morning_1')->default(0);
          $table->char('morning_40_percent_1',100)->default('N')->nullable(true);
          $table->integer('change_before_7_00_40_percent_morning_1')->default(0)->nullable(true);
          $table->integer('change_after_8_30_40_percent_morning_1')->default(0)->nullable(true);
          //$table->integer('not_change_time_40_percent_morning_1')->default(0);
          $table->integer('reason_for_not_before_7_00_morning_1')->nullable(true);
          $table->string('reason_for_not_before_7_00_morning_1_other')->default("")->nullable(true);
          $table->integer('reason_for_not_after_8_30_morning_1')->nullable(true);
          $table->string('reason_for_not_after_8_30_morning_1_other')->default("")->nullable(true);
          $table->integer('minimum_discount_morning_1')->default(0)->nullable(true);

          //morning case 2 (7:30-9:00)
          $table->integer('before_7_30_morning_2')->default(0)->nullable(true);
          $table->integer('after_9_00_morning_2')->default(0)->nullable(true);
          $table->char('morning_10_precent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_7_30_10_percent_morning_2')->default(0)->nullable(true);
          $table->integer('change_after_9_00_10_percent_morning_2')->default(0)->nullable(true);
          //$table->integer('not_change_time_10_percent_morning_2')->default(0);
          $table->char('morning_20_percent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_7_30_20_percent_morning_2')->default(0)->nullable(true);
          $table->integer('change_after_9_00_20_percent_morning_2')->default(0)->nullable(true);
          //$table->integer('not_change_time_20_percent_morning_2')->default(0);
          $table->char('morning_30_percent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_7_30_30_percent_morning_2')->default(0)->nullable(true);
          $table->integer('change_after_9_00_30_percent_morning_2')->default(0)->nullable(true);
          //$table->integer('Not_change_time_30_percent_morning_2')->default(0);
          $table->char('morning_40_percent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_7_30_40_percent_morning_2')->default(0)->nullable(true);
          $table->integer('change_after_9_00_40_percent_morning_2')->default(0)->nullable(true);
          //$table->integer('Not_change_time_40_percent_morning_2')->default(0);
          $table->integer('reason_for_not_before_7_30_morning_2')->nullable(true);
          $table->string('reason_for_not_before_7_30_morning_2_other')->default("")->nullable(true);
          $table->integer('reason_for_not_after_9_00_morning_2')->nullable(true);
          $table->string('reason_for_not_after_9_00_morning_2_other')->default("")->nullable(true);
          $table->integer('minimum_discount_morning_2')->default(0)->nullable(true);

          //evening case 1 (17:00-19:00)
          $table->string('first_station_evening')->nullable(true);
          $table->string('last_station_evening')->nullable(true);
          $table->integer('no_of_station_evening')->nullable(true);
          $table->float('distance_evening',5,2)->nullable(true);
          $table->float('train_fare_evening',5,2)->nullable(true);
          $table->time('time_for_travel_evening')->nullable(true);
          $table->integer('before_17_00_evening_1')->default(0)->nullable(true);
          $table->integer('after_19_00_evening_1')->default(0)->nullable(true);
          $table->char('evening_10_precent_1',100)->default('N')->nullable(true);
          $table->integer('change_before_17_00_10_percent_evening_1')->default(0)->nullable(true);
          $table->integer('change_after_19_00_10_percent_evening_1')->default(0)->nullable(true);
          //$table->integer('not_change_time_10_percent_evening_1')->default(0);
          $table->char('evening_20_percent_1',100)->default('N')->nullable(true);
          $table->integer('change_before_17_00_20_percent_evening_1')->default(0)->nullable(true);
          $table->integer('change_after_19_00_20_percent_evening_1')->default(0)->nullable(true);
          //$table->integer('not_change_time_20_percent_evening_1')->default('0');
          $table->char('evening_30_percent_1',100)->default('N')->nullable(true);
          $table->integer('change_before_17_00_30_percent_evening_1')->default(0)->nullable(true);
          $table->integer('change_after_19_00_30_percent_evening_1')->default(0)->nullable(true);
          //$table->integer('Not_change_time_30_percent_evening_1')->default(0);
          $table->char('evening_40_percent_1',100)->default('N')->nullable(true);
          $table->integer('change_before_17_00_40_percent_evening_1')->default(0)->nullable(true);
          $table->integer('change_after_19_00_40_percent_evening_1')->default(0)->nullable(true);
          //$table->integer('Not_change_time_40_percent_evening_1')->default('0');
          $table->integer('reason_for_not_before_17_00_evening_1')->nullable(true);
          $table->string('reason_for_not_before_17_00_evening_1_other')->default("")->nullable(true);
          $table->integer('reason_for_not_after_19_00_evening_1')->nullable(true);
          $table->string('reason_for_not_after_19_00_evening_1_other')->default("")->nullable(true);
          $table->integer('minimum_discount_evening_1')->default(0)->nullable(true);

          //evening case 2(18:00-20:00)
          $table->integer('before_18_00_evening_2')->default(0)->nullable(true);
          $table->integer('after_20_00_evening_2')->default(0)->nullable(true);
          $table->char('evening_10_precent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_18_00_10_percent_evening_2')->default(0)->nullable(true);
          $table->integer('change_after_20_00_10_percent_evening_2')->default(0)->nullable(true);
          //$table->integer('not_change_time_10_percent_evening_2')->default('0');
          $table->char('evening_20_percent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_18_00_20_percent_evening_2')->default(0)->nullable(true);
          $table->integer('change_after_20_00_20_percent_evening_2')->default(0)->nullable(true);
          //$table->integer('not_change_time_20_percent_evening_2')->default(0);
          $table->char('evening_30_percent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_18_00_30_percent_evening_2')->default(0)->nullable(true);
          $table->integer('change_after_20_00_30_percent_evening_2')->default(0)->nullable(true);
          //$table->integer('not_change_time_30_percent_evening_2')->default('0');
          $table->char('evening_40_percent_2',100)->default('N')->nullable(true);
          $table->integer('change_before_18_00_40_percent_evening_2')->default('0')->nullable(true);
          $table->integer('change_after_20_00_40_percent_evening_2')->default('0')->nullable(true);
          //$table->integer('not_change_time_40_percent_evening_2')->default('0');
          $table->integer('reason_for_not_before_18_00_evening_2')->nullable(true)->nullable(true);
          $table->string('reason_for_not_before_18_00_evening_2_other')->default("")->nullable(true);
          $table->integer('reason_for_not_after_20_00_evening_2')->nullable(true);
          $table->string('reason_for_not_after_20_00_evening_2_other')->default("")->nullable(true);
          $table->integer('minimum_discount_evening_2')->default(0)->nullable(true);

          $table->string('opinion')->default("");
          $table->integer('factor_1');
          $table->integer('factor_2');
          $table->integer('factor_3');
          $table->integer('factor_4');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ARL');
    }
}
