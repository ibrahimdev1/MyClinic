<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    function save_appointment(Request $request){
        //dd($request->all());
        $appointment = DB::table('appointment')->insert([
            'name' => $request->name,
            'email'=> $request->email,
            'number'=> $request->number,
            'id_number'=> $request->id_number,
            'date'=> $request->date,
            'description'=> $request->description,
        ]);
        return view('index');
    }

    function test_app(){
        return view('test');
    }

    function penddings(Request $request){
        $reservation_from_patients = DB::table('appointment')->get();
      //  dd( $reservation_from_patients);
      if ($request->ajax()) {
        return response()->json($reservation_from_patients);
    }
        return view('reservation.penddings')->with('reservations',$reservation_from_patients);


    // return view('reservation.penddings', [
    //    'reservation_from_patients' => $reservation_from_patients
    // ]);
        // return view('reservation.penddings')->with('reservations',$reservation_from_patients);
    }
}
