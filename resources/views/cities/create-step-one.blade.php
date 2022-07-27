@extends('layout.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('cities.create.step.one.post') }}" method="POST">
                    @csrf

                    <div class="card">
                        <div class="card-header">Step 1: Basic Info</div>

                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="city_name">City Name:</label>
                                <input type="text" value="{{ $city->city_name ?? '' }}" class="form-control" id="city_name"  name="city_name">
                            </div>
                            <div class="form-group">
                                <label for="uf">UF:</label>
                                <input type="text"  value="{{{ $city->uf ?? '' }}}" class="form-control" id="uf" name="uf"/>
                            </div>
                            <div class="form-group">
                                <label for="zip_code">Zip Code:</label>
                                <input type="text"  value="{{{ $city->zip_code ?? '' }}}" class="form-control" id=zip_code" name="zip_code"/>
                            </div>
                            <div class="form-group">
                                <label for="population">Population</label>
                                <input type="text"  value="{{{ $city->population ?? '' }}}" class="form-control" id="population" name="population"/>
                            </div>

                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
