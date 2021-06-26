@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h4 class="text-center">Search by Name, Email, Phone, City, State or Country</h4>
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                       placeholder="Search Customers">
                            </div>
                            <div class="input-group">

                <button type="submit" class="btn btn-primary w-100">
                 Search
                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(isset($details))
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p> Results for: <b> {{ $query }} </b> area :</p>
                            <table class="table table-bordred table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State </th>
                                    <th>Country </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $Customers)
                                    <tr>
                                        <td>{{$Customers->name}}</td>
                                        <td>{{$Customers->email}}</td>
                                        <td>{{$Customers->phone}}</td>
                                        <td>{{$Customers->address}}</td>
                                        <td>{{$Customers->city}}</td>
                                        <td>{{$Customers->state}}</td>
                                        <td>{{$Customers->country}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @elseif(isset($message))
                                <h3 class="text-center">{{ $message }}</h3>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>


@endsection
