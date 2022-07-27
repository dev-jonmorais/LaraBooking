@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('cities.create.step.two.post') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">Step 2: Population & Region</div>

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

                            {{--<div class="form-group">
                                <label for="description">Product Status</label><br/>
                                <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($product->status) && $product->status == '1') ? "checked" : "" }}}> Active</label>
                                <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($product->status) && $product->status == '0') ? "checked" : "" }}}> DeActive</label>
                            </div>--}}

                                <div class="form-group">
                                    <strong>Country:</strong>
                                    <select class="form-control input-sm " name="country">
                                        <option> ---- choice country below ---- </option>
                                        <option> Brazil </option>
                                        <option> Argentina </option>
                                        <option> Uruguay </option>
                                        <option> Paraguay </option>
                                        <option> Chile </option>
                                        <option> Peru </option>
                                        <option> Bolivia </option>
                                        <option> Colombia </option>
                                    </select>
                                </div>

                            <div class="form-group">
                                <strong>Region:</strong>
                                <select class="form-control input-sm " name="region">
                                    <option> ---- choice region below ---- </option>
                                    <option> North </option>
                                    <option> East </option>
                                    <option> West </option>
                                    <option> South </option>
                                    <option> Northeast </option>
                                    <option> Northwest </option>
                                    <option> Southeast </option>
                                    <option> Southwest </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="yearFoundation">Year Foundation</label>
                                <input type="text"  value="{{{ $city->population ?? '' }}}" class="form-control" id="yearFoundation" name="yearFoundation"/>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea type="text"  class="form-control" id="description" name="description">{{{ $city->description ?? '' }}}</textarea>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('cities.create.step.one') }}" class="btn btn-danger pull-right">Previous</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
