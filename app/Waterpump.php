<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Waterpump extends Model
{
    protected $table = 'logbooks';
    protected $fillable = [
        'category',
        'model',
        'date_recorded',
        'manufacturer',
        'working_pressure',
        'working_flow',
        'max_pressure',
        'pressure_testing_date',
        'first_issue_date',
        'unit_type',
        'current_configuration',
        'inspection_date',
        'inspection_comments',
        'assested_visual',
        'inspection_by',
        'maintenance_carried',
        'maintenance_completed_date',
        'current_location',
        'location_date'
    ];

    public static function getuserData($id=0){
        
        if($id==0){
          $value=DB::table('logbook')->orderBy('id', 'asc')->get(); 
        }else{
          $value=DB::table('logbook')->where('id', $id)->first();
        }
        return $value;
      }
    
      public static function insertData($data){
        $value=DB::table('logbook')->where('id', $data['id'])->get();
        if($value->count() == 0){
          DB::table('logbook')->insert($data);
          return 1;
         }else{
           return 0;
         }
     
      }
    
      public static function updateData($id,$data){
        DB::table('logbook')
          ->where('id', $id)
          ->update($data);
      }
    
      public static function deleteData($id){
        DB::table('logbook')->where('id', '=', $id)->delete();
      }
}
