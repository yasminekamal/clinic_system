<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\register;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if ( Auth::user()->type=='admin')
            $reservations = Reservation::with(['department','user'])->get();


        return view('admin.reservations.index', ["reservations" => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            "deptartment_id" => "required",
            "user_id" => "required",
            "name" => "required",
            "age" => "required",
            "mobile" => "required",
            "date" => "required",
            "time" => "required",

        ]);
      //  return $data;

        $reservation=Reservation::create($data);
       Notification::send(User::where('type','admin')->get(),new \App\Notifications\reservation($reservation));
       Notification::send($reservation->user,new \App\Notifications\reservation($reservation));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
