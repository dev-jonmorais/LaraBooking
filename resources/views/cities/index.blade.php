@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Manage City</div>

                    <div class="card-body">

                        <a href="{{ route('cities.create.step.one') }}" class="btn btn-primary pull-right">Create City</a>

                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">City Name</th>
                                <th scope="col">UF</th>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Population</th>
                                <th scope="col">Region</th>
                                <th scope="col">Country</th>
                                <th scope="col">Year Foundation</th>
                                <th scope="col">Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cities as $c)
                                <tr>
                                    <th scope="row">{{$c->id}}</th>
                                    <td>{{$c->city_name}}</td>
                                    <td>{{$c->uf}}</td>
                                    <td>{{$c->zip_code}}</td>
                                    <td>{{$c->population}}</td>
                                    <td>{{$c->region}}</td>
                                    <td>{{$c->country}}</td>
                                    <td>{{$c->yearFoundation}}</td>
                                    <td>{{$c->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
