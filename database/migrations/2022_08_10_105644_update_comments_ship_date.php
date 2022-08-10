<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update the Expected Shipping Date
        $results = DB::table('sweetwater_test')->get();
    

        foreach ($results as $result){
            $results = array();
            preg_match_all('#\d{2}/\d{2}/\d{2}#', $result->comments, $dates);
            $date = isset($dates[0][0]) ? $dates[0][0] : null;
            echo $date;
            if($date){
                DB::table('sweetwater_test')
                    ->where('orderid',$result->orderid)
                    ->update([
                        "shipdate_expected" => date("Y-m-d 00:00:00", strtotime($date))
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
