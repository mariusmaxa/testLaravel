@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="col-sm-3">
                        @include('_partials.front.menu')
                    </div>
                    <div class="col-sm-9">
                        {!! Notification::showAll() !!}
                        
                        <h1>Informatii spital</h1>
                        <hr />
                        <h3>Denumire spital: </h3>{{ $hospitalInformation->name }}
                        <h3>Judet:</h3>{{ $hospitalInformation->country }}
                        <h3>Localitate: </h3>{{ $hospitalInformation->city }}
                        <h3>Clasificare: </h3>{{ $hospitalInformation->classification }}
                        <h3>Adresa spital: </h3>{{ $hospitalInformation->address }}
                        <h3>Telefon 1: </h3>{{ $hospitalInformation->phone1 }}
                        <h3>Telefon 2: </h3>{{ $hospitalInformation->phone2 }}
                        <h3>Telefon 3: </h3>{{ $hospitalInformation->phone3 }}
                        <h3>Fax: </h3>{{ $hospitalInformation->fax }}
                        <h3>Website: </h3>{{ $hospitalInformation->website }}
                        <h3>Mail: </h3>{{ $hospitalInformation->email }}
                        
                        
                        
                        

                    </div>
                    <div class="clearfix">
                        <div class="pull-right">
                            <a href="{{ route('hospital.information.edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
