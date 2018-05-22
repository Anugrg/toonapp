<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Arl;




class DataController extends Controller
{
    //

      public function store(Request $request)
      {
        $Arl = new Arl;
        $data = $request->json()->all();


    //return $data['minimum_discount_morning_1'];

    //$data = request->json;
    //$d = json_decode($data,true);

    //$data = $request->json()->all();
    //$id = $data['user_id'];
    //echo $id;
    //return view('welcome');


    //foreach($data as $d => $d_value)
    //{
     //starting columns
     $Arl->data_collection_place=$data['location'];
     $Arl->data_collector_name=$data['collector'];
     $Arl->gender = $data['gender'];
     $Arl->age = $data['age'];
     $Arl->education = $data['education'];
     $Arl->status = $data['status'];
     $Arl->occupation = $data['occupation'];
     $Arl->income = $data['income'];
     $Arl->no_of_passenger = $data['no_of_passenger'];
     $Arl->mode_access = $data['mode_access'];
     $Arl->mode_access_other = $data['mode_access_other'];
     $Arl->purpose = $data['purpose'];
     $Arl->purpose_other = $data['purpose_other'];
     $Arl->frequency_per_week = $data['frequency_per_week'];
     $Arl->card_type = $data['card_type'];
     $Arl->use_in_peak_hour = $data['use_in_peak_hour'];
     $Arl->first_station_morning = $data['first_station_morning'];
     $Arl->last_station_morning = $data['last_station_morning'];
     $Arl->no_of_station_morning = $data['no_of_station_morning'];
     $Arl->distance_morning = $data['distance_morning'];
     $Arl->train_fare_morning = $data['train_fare_morning'];
     $Arl->time_for_travel_morning = $data['time_for_travel_morning'];
     $Arl->before_7_00_morning_1 = $data['before_7_00_morning_1'];
     $Arl->after_8_30_morning_1 = $data['after_8_30_morning_1'];
     //7:00-8:30
     $Arl->morning_10_precent_1 = $data['morning_10_precent_1'];
     $Arl->change_before_7_00_10_percent_morning_1 = $data['change_before_7_00_10_percent_morning_1'];
     $Arl->change_after_8_30_10_percent_morning_1= $data['change_after_8_30_10_percent_morning_1'];
     //$Arl->Not_change_time_10_percent_morning_1= $data['Not_change_time_10_percent_morning_1'];
     $Arl->morning_20_percent_1 = $data['morning_20_percent_1'];
     $Arl->change_before_7_00_20_percent_morning_1 = $data['change_before_7_00_20_percent_morning_1'];
     $Arl->change_after_8_30_20_percent_morning_1 = $data['change_after_8_30_20_percent_morning_1'];
     //$Arl->Not_change_time_20_percent_morning_1 = $data['Not_change_time_20_percent_morning_1'];
     $Arl->morning_30_percent_1= $data['morning_30_percent_1'];
     $Arl->change_before_7_00_30_percent_morning_1 = $data['change_before_7_00_30_percent_morning_1'];
     $Arl->change_after_8_30_30_percent_morning_1 = $data['change_after_8_30_30_percent_morning_1'];
     //$Arl->Not_change_time_30_percent_morning_1 = $data['Not_change_time_30_percent_morning_1'];
     $Arl->morning_40_percent_1 = $data['morning_40_percent_1'];
     $Arl->change_before_7_00_40_percent_morning_1 = $data['change_before_7_00_40_percent_morning_1'];
     $Arl->change_after_8_30_40_percent_morning_1 = $data['change_after_8_30_40_percent_morning_1'];
     //$Arl->Not_change_time_40_percent_morning_1 = $data['Not_change_time_40_percent_morning_1'];
     $Arl->reason_for_not_before_7_00_morning_1 = $data['reason_for_not_before_7_00_morning_1'];
     $Arl->reason_for_not_before_7_00_morning_1_other = $data['reason_for_not_before_7_00_morning_1_other'];
     $Arl->reason_for_not_after_8_30_morning_1 = $data['reason_for_not_after_8_30_morning_1'];
     $Arl->reason_for_not_after_8_30_morning_1_other = $data['reason_for_not_after_8_30_morning_1_other'];
     $Arl->minimum_discount_morning_1 = $data['minimum_discount_morning_1'];

     //7:30-9:00
     $Arl->before_7_30_morning_2 = $data['before_7_30_morning_2'];
     $Arl->after_9_00_morning_2 = $data['after_9_00_morning_2'];
     $Arl->morning_10_precent_2= $data['morning_10_precent_2'];
     $Arl->change_before_7_30_10_percent_morning_2= $data['change_before_7_30_10_percent_morning_2'];
     $Arl->change_after_9_00_10_percent_morning_2= $data['change_after_9_00_10_percent_morning_2'];
     //$Arl->Not_change_time_10_percent_morning_2 = $data['Not_change_time_10_percent_morning_2'];
     $Arl->morning_20_percent_2 = $data['morning_20_percent_2'];
     $Arl->change_before_7_30_20_percent_morning_2 = $data['change_before_7_30_20_percent_morning_2'];
     $Arl->change_after_9_00_20_percent_morning_2 = $data['change_after_9_00_20_percent_morning_2'];
     //$Arl->Not_change_time_20_percent_morning_2 = $data['Not_change_time_20_percent_morning_2'];
     $Arl->morning_30_percent_2 = $data['morning_30_percent_2'];
     $Arl->change_before_7_30_30_percent_morning_2 = $data['change_before_7_30_30_percent_morning_2'];
     $Arl->change_after_9_00_30_percent_morning_2 = $data['change_after_9_00_30_percent_morning_2'];
     //$Arl->Not_change_time_30_percent_morning_2 = $data['Not_change_time_30_percent_morning_2'];
     $Arl->morning_40_percent_2 = $data['morning_40_percent_2'];
     $Arl->change_before_7_30_40_percent_morning_2 = $data['change_before_7_30_40_percent_morning_2'];
     $Arl->change_after_9_00_40_percent_morning_2 = $data['change_after_9_00_40_percent_morning_2'];
     //$Arl->Not_change_time_40_percent_morning_2 = $data['Not_change_time_40_percent_morning_2'];
     $Arl->reason_for_not_before_7_30_morning_2 = $data['reason_for_not_before_7_30_morning_2'];
     $Arl->reason_for_not_before_7_30_morning_2_other = $data['reason_for_not_before_7_30_morning_2_other'];
     $Arl->reason_for_not_after_9_00_morning_2= $data['reason_for_not_after_9_00_morning_2'];
     $Arl->reason_for_not_after_9_00_morning_2_other= $data['reason_for_not_after_9_00_morning_2_other'];
     $Arl->minimum_discount_morning_2 = $data['minimum_discount_morning_2'];

     //17:30-19:00
     $Arl->first_station_evening= $data['first_station_evening'];
     $Arl->last_station_evening=$data['last_station_evening'];
     $Arl->no_of_station_evening=$data['no_of_station_evening'];
     $Arl->distance_evening=$data['distance_evening'];
     $Arl->train_fare_evening=$data['train_fare_evening'];
     $Arl->time_for_travel_evening=$data['time_for_travel_evening'];
     $Arl->before_17_00_evening_1 = $data['before_17_00_evening_1'];
     $Arl->after_19_00_evening_1 = $data['after_19_00_evening_1'];
     $Arl->evening_10_precent_1= $data['evening_10_precent_1'];
     $Arl->change_before_17_00_10_percent_evening_1= $data['change_before_17_00_10_percent_evening_1'];
     $Arl->change_after_19_00_10_percent_evening_1= $data['change_after_19_00_10_percent_evening_1'];
     //$Arl->Not_change_time_10_percent_evening_1 = $data['Not_change_time_10_percent_evening_1'];
     $Arl->evening_20_percent_1= $data['evening_20_percent_1'];
     $Arl->change_before_17_00_20_percent_evening_1 = $data['change_before_17_00_20_percent_evening_1'];
     $Arl->change_after_19_00_20_percent_evening_1= $data['change_after_19_00_20_percent_evening_1'];
     //$Arl->Not_change_time_20_percent_evening_1 = $data['Not_change_time_20_percent_evening_1'];
     $Arl->evening_30_percent_1 = $data['evening_30_percent_1'];
     $Arl->change_before_17_00_30_percent_evening_1= $data['change_before_17_00_30_percent_evening_1'];
     $Arl->change_after_19_00_30_percent_evening_1= $data['change_after_19_00_30_percent_evening_1'];
     //$Arl->Not_change_time_30_percent_evening_1 = $data['Not_change_time_30_percent_evening_1'];
     $Arl->evening_40_percent_1 = $data['evening_40_percent_1'];
     $Arl->change_before_17_00_40_percent_evening_1= $data['change_before_17_00_40_percent_evening_1'];
     $Arl->change_after_19_00_40_percent_evening_1= $data['change_after_19_00_40_percent_evening_1'];
     //$Arl->Not_change_time_40_percent_evening_1 = $data['Not_change_time_40_percent_evening_1'];
     $Arl->reason_for_not_before_17_00_evening_1= $data['reason_for_not_before_17_00_evening_1'];
     $Arl->reason_for_not_before_17_00_evening_1_other = $data['reason_for_not_before_17_00_evening_1_other'];
     $Arl->reason_for_not_after_19_00_evening_1= $data['reason_for_not_after_19_00_evening_1'];
     $Arl->reason_for_not_after_19_00_evening_1_other= $data['reason_for_not_after_19_00_evening_1_other'];
     $Arl->minimum_discount_evening_1 = $data['minimum_discount_evening_1'];

     //18:00-20:00
     $Arl->before_18_00_evening_2 = $data['before_18_00_evening_2'];
     $Arl->after_20_00_evening_2 = $data['after_20_00_evening_2'];
     $Arl->evening_10_precent_2= $data['evening_10_precent_2'];
     $Arl->change_before_18_00_10_percent_evening_2= $data['change_before_18_00_10_percent_evening_2'];
     $Arl->change_after_20_00_10_percent_evening_2= $data['change_after_20_00_10_percent_evening_2'];
     //$Arl->Not_change_time_10_percent_evening_2 = $data['Not_change_time_10_percent_evening_2'];
     $Arl->evening_20_percent_2= $data['evening_20_percent_2'];
     $Arl->change_before_18_00_20_percent_evening_2 = $data['change_before_18_00_20_percent_evening_2'];
     $Arl->change_after_20_00_20_percent_evening_2 = $data['change_after_20_00_20_percent_evening_2'];
     //$Arl->Not_change_time_20_percent_evening_2 = $data['Not_change_time_20_percent_evening_2'];
     $Arl->evening_30_percent_2 = $data['evening_30_percent_2'];
     $Arl->change_before_18_00_30_percent_evening_2 = $data['change_before_18_00_30_percent_evening_2'];
     $Arl->change_after_20_00_30_percent_evening_2 = $data['change_after_20_00_30_percent_evening_2'];
     //$Arl->Not_change_time_30_percent_evening_2 = $data['Not_change_time_30_percent_evening_2'];
     $Arl->evening_40_percent_2= $data['evening_40_percent_2'];
     $Arl->change_before_18_00_40_percent_evening_2 = $data['change_before_18_00_40_percent_evening_2'];
     $Arl->change_after_20_00_40_percent_evening_2= $data['change_after_20_00_40_percent_evening_2'];
     //$Arl->Not_change_time_40_percent_evening_2 = $data['Not_change_time_40_percent_evening_2'];
     $Arl->reason_for_not_before_18_00_evening_2= $data['reason_for_not_before_18_00_evening_2'];
     $Arl->reason_for_not_before_18_00_evening_2_other= $data['reason_for_not_before_18_00_evening_2_other'];
     $Arl->reason_for_not_after_20_00_evening_2= $data['reason_for_not_after_20_00_evening_2'];
     $Arl->reason_for_not_after_20_00_evening_2_other= $data['reason_for_not_after_20_00_evening_2_other'];
     $Arl->minimum_discount_evening_2 = $data['minimum_discount_evening_2'];
     $Arl->opinion = $data['opinion'];
     $Arl->factor_1 = $data['factor_1'];
     $Arl->factor_2 = $data['factor_2'];
     $Arl->factor_3 = $data['factor_3'];
     $Arl->factor_4 = $data['factor_4'];


   //}
     $Arl->save();
     return "success";



      }








}
