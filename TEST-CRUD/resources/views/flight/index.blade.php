@extends('layout.template')

@section('isi')

        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                    <form class="d-flex" action="{{ url('flight') }}" method="get">
                        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Insert Keyword" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Find</button>
                    </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('flight/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Flight Number</th>
                            <th class="col-md-4">Airlines</th>
                            <th class="col-md-2">Origin</th>
                            <th class="col-md-2">Destination</th>
                            <th class="col-md-2">Depature Time</th>
                            <th class="col-md-2">Arrival Time</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $i = $data->firstItem() ?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->flight_number }}</td>
                                <td>{{ $item->airline }}</td>
                                <td>{{ $item->origin }}</td>
                                <td>{{ $item->destination }}</td>
                                <td>{{ $item->departure_time }}</td>
                                <td>{{ $item->arrival_time }}</td>
                                <td>
                                    {{-- <a href='' class="btn btn-success btn-sm">Create</a> --}}
                                    <a href='{{ url('flight/'.$item->flight_number.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                    <form onsubmit="return confirm('are you sure you deleted the data?')" class='d-inline' action="{{ url('flight/'.$item->flight_number) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
                            <?php $i++ ?>
                            </tr>
                            @endforeach

                    </tbody>
                </table>

          </div>
          <!-- AKHIR DATA -->
@endsection

