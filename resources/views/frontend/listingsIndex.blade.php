@extends('layouts.frontendApp')
@section('content')
    <div class="container-fluid wow fadeInDown" style="background-color: white; padding:40px 40px;">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 text-center">
                <h1>Talk to a local Homestates agent</h1>
                <p>Request a complementary listing consultation for your home</p>
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-6">
                        <div class="form-group">
                            <label for="usr">Street Address:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                    </div>

                    <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-4">
                        <div class="form-group">
                            <label for="usr">Postcode:</label>
                            <input type="text" class="form-control" id="usr">
                            
                        </div>
                    </div>
                    <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-2" style="margin-top:30px">
                        <button type="button" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($listings as $listing)
        <p>Title: {{ $listing->title }}, room: {{ $listing->room_no }}, bath: {{ $listing->bath_no }}, car: {{ $listing->car_no }}</p>
    @endforeach

@endsection
@section('customjs')
    <script>
        // listing-preview
        $( ".listing-preview" ).hover(
            function() {
                $( this ).find(".overlayer-info").fadeIn( "slow" );
            }, function() {
                $( this ).find(".overlayer-info").fadeOut( "slow" );
            }
        );
    </script>
@endsection
