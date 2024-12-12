<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10;
        if (strlen($katakunci)) {
            $data = Flight::where('nim', 'like', "%$katakunci%")
                ->orWhere('flight_number', 'like', "%$katakunci%")
                ->orWhere('airlines', 'like', "%$katakunci%");
        } else {
        $data = Flight::orderBy('flight_number', 'desc')->paginate($jumlahbaris);
        }
        return view('flight.index')->with('data', $data);
        // return view('flight.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flight.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Session::flash('flight_number', $request->flight_number);
            Session::flash('airline', $request->arline);
            Session::flash('origin', $request->origin);
            Session::flash('departure', $request->origin);

            $request->validate([
            'flight_number' => 'required|string|unique:flights,flight_number',
            'airline' => 'required|string',
            'departure_time' => 'required|date_format:Y/m/d H:i|unique:flights,departure_time',
            'arrival_time' => 'required|date_format:Y/m/d H:i|unique:flights,arrival_time',
        ]);
        $data = [
            'flight_number' => $request->flight_number,
            'airline' => $request->airline,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
        ];
        Flight::create($data);
        return redirect()->to('flight')->with('success', 'Success Add Data');
        // return 'Store Bisa Guys';
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
    public function edit(string $flight_number)
    {
        $data = Flight::where('flight_number', $flight_number)->first();
        return view('flight.edit')->with('data', $data);
        // return 'Masih Nyoba Jam 3' .$flight_number;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $flight_number)
    {
        $request->validate([
            'airline' => 'required|string',
            'departure_time' => 'required',
            'arrival_time' => 'required',
        ]);
        $data = [
            'airline' => $request->airline,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
        ];
        Flight::where('flight_number', $flight_number)->update($data);
        return redirect()->to('flight')->with('success', 'Success Add Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $flight_number)
    {
        Flight::where('flight_number', $flight_number)->delete();
        return redirect()->to('flight')->with('success', 'Success Delete Data');
    }
}
