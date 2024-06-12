@extends('layouts.app')

@section('title')
    Treni
@endsection


@section('content')
    <h1 class="text-center py-5">Treni dal <span class="fw-bold">{{ date('d/m/Y') }}</span> al
        <span class="fw-bold">{{ date('d/m/Y', strtotime('+7 days')) }}</span>
    </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-warning table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">N. Treno</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">N. Carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $index => $train)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $train->train_code }}</td>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ date('H:i', strtotime($train->departure_time)) }}</td>
                                <td>{{ date('H:i', strtotime($train->arrival_time)) }}</td>
                                <td>{{ $train->number_of_carriages }}</td>
                                <td>
                                    @if ($train->on_time)
                                        SI
                                    @else
                                        NO
                                    @endif
                                </td>
                                <td>
                                    @if ($train->cancelled)
                                        SI
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
