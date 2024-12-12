@extends('layout.template')

@section('isi')
<!-- START FORM -->
<form action='{{ url('flight') }}' method='post'>
@csrf
    <a href='{{ url('flight') }}' class="btn btn-secondary"><< kembali</a>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="flight_number" class="col-sm-2 col-form-label">Flight Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='flight_number' value="{{ Session::get('flight_number') }}" id="flight_number">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="airline" class="col-sm-2 col-form-label">Airline</label>
            <div class="col-sm-10">
                <select class="form-control" name="airline" id="airline">
                    <option value="">Select Airline</option>
                    <option value="Garuda Indonesia" {{ Session::get('airline') == 'Garuda Indonesia' ? 'selected' : '' }}>Garuda Indonesia</option>
                    <option value="Singapore Airlines" {{ Session::get('airline') == 'Singapore Airlines' ? 'selected' : '' }}>Singapore Airlines</option>
                    <option value="AirAsia" {{ Session::get('airline') == 'AirAsia' ? 'selected' : '' }}>AirAsia</option>
                    <option value="Lufthansa" {{ Session::get('airline') == 'Lufthansa' ? 'selected' : '' }}>Lufthansa</option>
                    <option value="Cathay Pacific" {{ Session::get('airline') == 'Cathay Pacific' ? 'selected' : '' }}>Cathay Pacific</option>
                    <option value="Japanese Airlines" {{ Session::get('airline') == 'Japanese Airlines' ? 'selected' : '' }}>Japanese Airlines</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="origin" class="col-sm-2 col-form-label">Origin</label>
            <div class="col-sm-10">
                <select class="form-control" name="origin" id="origin">
                    <option value="">Select Origin</option>
                    <option value="CGK" {{ Session::get('origin') == 'CGK' ? 'selected' : '' }}>Jakarta (CGK)</option>
                    <option value="SIN" {{ Session::get('origin') == 'SIN' ? 'selected' : '' }}>Singapore (SIN)</option>
                    <option value="KUL" {{ Session::get('origin') == 'KUL' ? 'selected' : '' }}>Kuala Lumpur (KUL)</option>
                    <option value="FRA" {{ Session::get('origin') == 'FRA' ? 'selected' : '' }}>Paris (FRA)</option>
                    <option value="HKG" {{ Session::get('origin') == 'HKG' ? 'selected' : '' }}>Hongkong (HKG)</option>
                    <option value="NRT" {{ Session::get('origin') == 'NRT' ? 'selected' : '' }}>Narita (NRT)</option>
                    <option value="DPS" {{ Session::get('origin') == 'DPS' ? 'selected' : '' }}>Denpasar (DPS)</option>
                    <option value="SYD" {{ Session::get('origin') == 'NRT' ? 'selected' : '' }}>Sydney (SYD)</option>
                    <option value="LAX" {{ Session::get('origin') == 'LAX' ? 'selected' : '' }}>Los Angeles (LAX)</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="destination" class="col-sm-2 col-form-label">Destination</label>
            <div class="col-sm-10">
                <select class="form-control" name="destination" id="destination">
                    <option value="">Select Destination</option>
                    <option value="CGK" {{ Session::get('origin') == 'CGK' ? 'selected' : '' }}>Jakarta (CGK)</option>
                    <option value="SIN" {{ Session::get('origin') == 'SIN' ? 'selected' : '' }}>Singapore (SIN)</option>
                    <option value="KUL" {{ Session::get('origin') == 'KUL' ? 'selected' : '' }}>Kuala Lumpur (KUL)</option>
                    <option value="FRA" {{ Session::get('origin') == 'FRA' ? 'selected' : '' }}>Paris (FRA)</option>
                    <option value="HKG" {{ Session::get('origin') == 'HKG' ? 'selected' : '' }}>Hongkong (HKG)</option>
                    <option value="NRT" {{ Session::get('origin') == 'NRT' ? 'selected' : '' }}>Narita (NRT)</option>
                    <option value="DPS" {{ Session::get('origin') == 'DPS' ? 'selected' : '' }}>Denpasar (DPS)</option>
                    <option value="SYD" {{ Session::get('origin') == 'NRT' ? 'selected' : '' }}>Sydney (SYD)</option>
                    <option value="LAX" {{ Session::get('origin') == 'LAX' ? 'selected' : '' }}>Los Angeles (LAX)</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="departure_time" class="col-sm-2 col-form-label">Departure Time</label>
            <div class="col-sm-10">
                {{-- <input type="datetime-local" class="form-control" name='departure_time' value="{{ Session::get('departure_time') }}" id="departure_time"> --}}
                <input type="text" class="form-control @error('departure_time') is-invalid @enderror" name='departure_time' value="{{ old('departure_time', Session::get('departure_time')) }}" id="departure_time">

            </div>
        </div>
        <div class="mb-3 row">
            <label for="arrival_time" class="col-sm-2 col-form-label">Arrival Time</label>
            <div class="col-sm-10">
                {{-- <input type="datetime-local" class="form-control" name='arrival_time' value="{{ Session::get('arrival_time') }}" id="arrival_time"> --}}
                <input type="text" class="form-control @error('arrival_time') is-invalid @enderror" name='arrival_time' value="{{ old('arrival_time', Session::get('arrival_time')) }}" id="arrival_time">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="destination" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>

    </div>

</form>
<!-- AKHIR FORM -->
@endsection
