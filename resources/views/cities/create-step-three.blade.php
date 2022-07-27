@extends('layout.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('cities.create.step.three.post') }}" method="post" >
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">Step 3: Review Details</div>

                        <div class="card-body">

                            <table class="table">
                                <tr>
                                    <td>City Name:</td>
                                    <td><strong>{{$city->city_name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>UF:</td>
                                    <td><strong>{{$city->uf}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Zipcode:</td>
                                    <td><strong>{{$city->zip_code}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Population:</td>
                                    <td><strong>{{$city->population}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Region:</td>
                                    <td><strong>{{$city->region}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Country:</td>
                                    <td><strong>{{$city->country}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td><strong>{{$city->description}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Year Foundation:</td>
                                    <td><strong>{{$city->yearFoundation}}</strong></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('cities.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
