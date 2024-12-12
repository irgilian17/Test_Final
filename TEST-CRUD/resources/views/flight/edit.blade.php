@extends('layout.template')

@section('isi')
<!-- START FORM -->
<form action='{{ url('flight/'.$data->flight_number) }}' method='post'>
@csrf
@method('PUT')
    <a href='{{ url('flight') }}' class="btn btn-secondary"><< kembali</a>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="flight_number" class="col-sm-2 col-form-label">Flight Number</label>
            <div class="col-sm-10">
                {{ $data->flight_number }}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="airline" class="col-sm-2 col-form-label">Airline</label>
            <div class="col-sm-10">
                <select class="form-control" name="airline" id="airline">
                    <option value="">Select Airline</option>
                    <option value="Garuda Indonesia" {{ old('airline') == 'Garuda Indonesia' ? 'selected' : '' }}>Garuda Indonesia</option>
                    {{-- <option value="{{ $data->airline == 'Singapore Airlines' }}" >Singapore Airlines</option> --}}
                    <option value="Singapore Airlines" {{ old('airline') == 'Singapore Airlines' ? 'selected' : '' }}>Singapore Airlines</option>
                    <option value="AirAsia" {{ old('airline') == 'AirAsia' ? 'selected' : '' }}>AirAsia</option>
                    <option value="Luftahansa" {{ old('airline') == 'Luftahansa' ? 'selected' : '' }}>Luftahansa</option>
                    <option value="Cathay Pacific" {{ old('airline') == 'Cathay Pacific' ? 'selected' : '' }}>Cathay Pacific</option>
                    <option value="Japanese Airlines" {{ old('airline') == 'Japanese Airlines' ? 'selected' : '' }}>Japanese Airlines</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="origin" class="col-sm-2 col-form-label">Origin</label>
            <div class="col-sm-10">
                <select class="form-control" name="origin" id="origin">
                    <option value="">Select Origin</option>
                    <option value="CGK" {{ $data->origin == 'CGK' }}>Jakarta (CGK)</option>
                    <option value="SIN" {{ $data->origin == 'SIN' }}>Singapore (SIN)</option>
                    <option value="KUL" {{ $data->origin == 'KUL' }}>Kuala Lumpur (KUL)</option>
                    <option value="FRA" {{ $data->origin == 'FRA' }}>Paris (FRA)</option>
                    <option value="HKG" {{ $data->origin == 'HKG' }}>Hongkong (HKG)</option>
                    <option value="NRT" {{ $data->origin == 'NRT' }}>Narita (NRT)</option>
                    <option value="DPS" {{ $data->origin == 'DPS' }}>Denpasar (DPS)</option>
                    <option value="SYD" {{ $data->origin == 'SYD' }}>Sydney (SYD)</option>
                    <option value="LAX" {{ $data->origin == 'LAX' }}>Los Angeles (LAX)</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="destination" class="col-sm-2 col-form-label">Destination</label>
            <div class="col-sm-10">
                <select class="form-control" name="destination" id="destination">
                    <option value="">Select Destination</option>
                    <option value="CGK" {{ $data->destination == 'CGK' }}>Jakarta (CGK)</option>
                    <option value="SIN" {{ $data->destination == 'SIN' }}>Singapore (SIN)</option>
                    <option value="KUL" {{ $data->destination == 'KUL' }}>Kuala Lumpur (KUL)</option>
                    <option value="FRA" {{ $data->destination == 'FRA' }}>Paris (FRA)</option>
                    <option value="HKG" {{ $data->destination == 'HKG' }}>Hongkong (HKG)</option>
                    <option value="NRT" {{ $data->destination == 'NRT' }}>Narita (NRT)</option>
                    <option value="DPS" {{ $data->destination == 'DPS' }}>Denpasar (DPS)</option>
                    <option value="SYD" {{ $data->destination == 'SYD' }}>Sydney (SYD)</option>
                    <option value="LAX" {{ $data->destination == 'LAX' }}>Los Angeles (LAX)</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="departure_time" class="col-sm-2 col-form-label">Departure Time</label>
            <div class="col-sm-10">
                {{-- <input type="datetime-local" class="form-control" name='departure_time' value="{{ Session::get('departure_time') }}" id="departure_time"> --}}
                <input type="text" class="form-control @error('departure_time') is-invalid @enderror" name='departure_time' value="{{ $data->departure_time }}" id="departure_time">

            </div>
        </div>
        <div class="mb-3 row">
            <label for="arrival_time" class="col-sm-2 col-form-label">Arrival Time</label>
            <div class="col-sm-10">
                {{-- <input type="datetime-local" class="form-control" name='arrival_time' value="{{ Session::get('arrival_time') }}" id="arrival_time"> --}}
                <input type="text" class="form-control @error('arrival_time') is-invalid @enderror" name='arrival_time' value="{{ $data->arrival_time }}" id="arrival_time">
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
