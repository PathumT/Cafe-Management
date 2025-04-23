<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\shop;
use Carbon\Carbon;
use DB;
use DateTime;


class ReservationController extends Controller
{
    public function storeReservation(Request $request) {

        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'seats' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $reservation = new Reservation;

        $reservation->date=$request->date;
        $reservation->time=$request->time;
        $reservation->no_of_seats=$request->seats;
        $reservation->name=$request->name;
        $reservation->email=$request->email;
        $reservation->mobile=$request->phone;
        $reservation->special_note=$request->note;
        $reservation->table=$request->table;
        $reservation->save();


        $table = new Table;

        $table->mobile=$request->phone;
        $table->date=$request->date;
        $table->time=$request->time;
        $table->table=$request->table;
        $table->save();

        return back()->with('msg', 'The recervation was successfully added.');
        // return view('table_selection', ['mobile' => $request->phone, 'date' => $request->date, 'time' => $request->time]);
    }

    public function storeTable(Request $request) {

        $table = new Table;

        $table->mobile=$request->mobile;
        $table->date=$request->date;
        $table->time=$request->time;
        $table->table=$request->table;
        $table->save();

        return view('manage_reservations')->with('msg', 'The recervation was successfully added.');
    }

    public function checkAvailbility(Request $request) {

        $request->validate([
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $date = $request->input('date');
        $start_time = $request->input('start_time');
        $end_time = $request->input('end_time');

        // $availability = DB::select("SELECT tables.table
        // FROM reservations
        // JOIN tables ON reservations.id = tables.reservations_id
        // WHERE reservations.date = $date
        // AND reservations.time >= $start_time
        // AND reservations.end_time <= 'your_end_time_value'
        // GROUP BY tables.table;");

        $availability = DB::table('reservations')->join('tables','reservations.id','tables.reservations_id')
             ->where('date', '=', $date)
             ->where('time', '>=', $start_time)
             ->where('end_time', '<=', $end_time)
           ->groupBy('tables.table')  ->get('tables.table');

        return view('table_reservation')
        ->with( [
            'availability' =>  $availability,
            'date' => $date,
            'start_time' => $start_time,
            'end_time' => $end_time
         ]);

        if (!$availability) {
            $data = "available";
            return view('table_reservation');
        } else {
            $data = "booked";
            $tables = Table::where('date', '=', $date)->where('time', '=', $start_time)->get();
            return view('table-selection-check')->with('data', $data)->with('tables', $tables);
        }
    }

    public function manageReservations() {
        $data=Reservation::all();

        return view('manage_reservations',compact('data'));
    }

    public function deleteReservation($id){
        DB::table('reservations')->where('id',$id)->delete();
        return back()->with('msg', 'The Reservation was successfully deleted.');
    }

    public function editReservation($id){
        $data = DB::table('reservations')->where('id',$id)->first();
        return view('edit_reservation', compact('data'));
    }

    public function updateReservation(Request $request){
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'seats' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        DB::table('reservations')->where('id', $request->id)->update([
            'no_of_seats'=>$request->seats,
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile' => $request->phone,
            'special_note'=>$request->note,
        ]);

        return redirect()->to('manage-reservation')->with('message', 'The reservation was successfully updated.');

    }

    public function saveReservation(Request $request){

        $user_id=Auth::user()->id;

        $data = new Reservation([
            'date' =>$request->date,
            'user_id' =>$user_id,
            'time' =>$request->start_time,
            'end_time' =>$request->end_time,
            'no_of_seats' =>  $request->seats,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' =>  $request->mobile,
            'special_note' =>  $request->special_note,
            'table' => "",
            ]);

        $data->save();

        for($i=1 ; $i < 10 ;$i++ )
        {
           if(!empty($request->{'table_'.$i}))
           {
                $tabledata = new Table([
                            'reservations_id' =>$data->id,
                            'table' =>$request->{'table_'.$i},
                            ]);

                 $tabledata->save();
           }
        }
         return redirect ('table_selection')->with('msg', 'The Reservation was successfully Added.');

    }

    public function bocking_mg(){
        $reservations = DB::table('reservations')->get();

        return view('bocking_mg',compact('reservations'));
    }

    public function shop_menu(){


        return view('shop_menu');
    }

    public function addItems(Request $request){

        $request->validate([
            'iname' => 'required',
            'iprice' => 'required',
            'images_title.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        foreach ($request->file('images_title') as $image) {
            $filename = now()->getTimestampMs().$image->getClientOriginalName();
            $image->move(public_path().'/uploads/', $filename);




            $images = new shop([
                'iname' =>$request->iname,
                'iprice'=>$request->iprice,
                'images_title' =>$filename,

                ]);

            $images->save();

        }


        return redirect()
        ->back()
        ->with('success', 'added successfully.');
        // return redirect('dashboard_category');


    }



    public function member_manage(){


        return view('member_manage');
    }

    public function deleters($id)
  {
    // dd($id);
    DB::delete('delete from reservations where id = ?',[$id]);
    return redirect()
  ->back()
    ->with('delete', 'DELETED SUCCESS.');
  }


}
