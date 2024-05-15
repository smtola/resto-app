<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationsStoreRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables = Table::where('status', TableStatus::Avaliable)->get();
        return view('admin.reservations.create',compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationsStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning', 'Please choose the table base on guests.!');
        }

        $request_date = Carbon::parse($request->res_date);

        foreach($table->reservations as $res){
            if(date('Y-m-d', strtotime($res->res_date)) == $request_date->format('Y-m-d')){
                return back()->with('warning', 'This table is reserved for this date.!');
            }
        }

        Reservation::create($request->validated());

        return to_route('admin.reservations.index')->with('success', 'Reservation created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $tables = Table::all();
        return view('admin.reservations.edit', compact('reservation','tables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationsStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table base on guests.!');
        }

        $request_date = Carbon::parse($request->res_date);

        foreach ($table->reservations as $res) {
            if (date('Y-m-d', strtotime($res->res_date)) == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reserved for this date.!');
            }
        }

        $reservation->update($request->validated());
        return to_route('admin.reservations.index')->with('warning', 'Reservation updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return to_route('admin.reservations.index')->with('danger', 'Reservation deleted successfully!');
    }
}
