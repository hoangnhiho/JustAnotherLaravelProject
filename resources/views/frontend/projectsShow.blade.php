@extends('layouts.frontendApp')
@section('content')
    <link href="{{ url('css/sell.css') }}" rel="stylesheet">
    <section id="main-slider" style="margin-top: 50px">
        <div class="owl-carousel">
            @foreach (json_decode($project->img_urls) as $img_url)
                <div class="item img-responsive" style="background-image: url({{ $img_url }});">
                </div><!--/.item-->
            @endforeach
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->  

    <div class="container-fluid container-white wow fadeInDown" style="margin-bottom: 40px">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10" style="background-color: white; padding:40px 40px;">
                <div class="row" style="margin-top: 20px">
                    <div class="col-xs-12 col-sm-7">
                        <h5>Hightlights</h5>
                        <p>{!! $project->desc !!}</p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <h5>Available documents</h5>
                        <p><a href="{{ $project->floor_plan }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Floorplans</a></p>
                        <h5>Share this property</h5>
                        <p>
                            <a href="mailto:?subject={{$project->address}}&body={{ url()->current() }}" target="_blank" style="margin-right: 10px"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> 
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//homestatesgroup.com.au/projects/{{ $project->id }}" target="_blank" style="margin-right: 10px"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                            <a href="https://twitter.com/home?status=http%3A//homestatesgroup.com.au/projects/{{ $project->id }}" target="_blank" style="margin-right: 10px"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
