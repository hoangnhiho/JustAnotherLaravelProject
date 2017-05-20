@extends('layouts.frontendApp')
@section('content')
    <style>
        .pagination{
            margin-top: 0px;
        }
        p{
            color:black;
        }
    </style>
    <div class="container-fluid wow fadeInDown" style="background-color: white; padding:40px 40px;">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 text-center">
                <form action="{{ url('listings') }}" method="get" id="listingForm">
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-10">
                            <div class="form-group">
                                <label for="usr">Street Address, postcode, suburb:</label>
                                @if (isset($params->search))
                                    <input type="text" class="form-control" id="usr" name="search" value="{{ $params->search }}">
                                @else
                                    <input type="text" class="form-control" id="usr" name="search" value="">
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-2">
                            <div class="form-group">
                                <label for="usr">Property</label>
                                    <select class="form-control" id="sel1" name="prop_type">
                                        <option value="all" @if ($params->prop_type == 'all') selected @endif>All</option>
                                        <option value="apartment"  @if ($params->prop_type == 'apartment') selected @endif>Apartment</option>
                                        <option value="house"  @if ($params->prop_type == 'house') selected @endif>House</option>
                                        <option value="land"  @if ($params->prop_type == 'land') selected @endif>Land</option>
                                    </select>                        
                            </div>
                        </div>
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-2">
                            <div class="form-group">
                                <label for="usr">Bedroom</label>
                                <input type="number" class="form-control" id="usr" min="0" name="bed" value="{{ $params->bed }}">
                            </div>
                        </div>
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-2">
                            <div class="form-group">
                                <label for="usr">Bathroom</label>
                                <input type="number" class="form-control" id="usr" min="0" name="bath" value="{{ $params->bath }}">
                            </div>
                        </div>
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-2">
                            <div class="form-group">
                                <label for="usr">Min Price</label>
                                <input type="text" class="form-control" id="usr" name="min_price" value="{{ $params->min_price }}">
                            </div>
                        </div>
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-2">
                            <div class="form-group">
                                <label for="usr">Max Price</label>
                                <input type="text" class="form-control" id="usr" name="max_price" value="{{ $params->max_price }}">
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" name="order_type" value="{{ $params->order_type }}" id="inputOrderType">
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-1" style="margin-top:30px">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid wow fadeInDown" style="margin-top: 30px">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-xs-6 col-sm-9 pull-left">
                        We have {{ $listings->total() }} results for you.
                    </div>
                    <div class="col-xs-6 col-sm-3 pull-right">
                        <select class="form-control" id="orderBySelect">
                            <option value="asc">--- SortBy ---</option>
                            <option value="asc">Price (low to high)</option>
                            <option value="desc">Price (high to low)</option>
                        </select>
                    </div>
                </div>
                @foreach ($listings as $listing)
                    <div class="row" style="background-color: white; margin-bottom: 30px">
                        <div class="col-xs-12 col-sm-4" style="padding-left:0px">
                            <a href="{{ $listing->img_url }}" rel="prettyPhoto" title="{{ $listing->address }}"><img class="img-responsive listing-images" src="{{ $listing->img_url }}" alt="{{ $listing->address }}" /></a>
                        </div>
                        <a href="{{ url('listings/'.$listing->id) }}"><div class="col-xs-12 col-sm-8">
                            <div class="row" style="margin-top: 20px">
                                <div class="col-xs-9">
                                    <h4>{{ $listing->address }}</h4>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <h4>{{ $listing->bed_no }}</h4>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <h4>{{ $listing->bath_no }}</h4>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <h4>{{ $listing->car_no }}</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <p>{{ $listing->caption }}</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <p>Beds</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <p>Baths</p>
                                </div>
                                <div class="col-xs-1 text-center">
                                    <p>Cars</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>{!! $listing->mini_desc !!}</p>
                                </div>
                            </div>
                        </div>
                        </a>

                    </div>
                @endforeach
                <div class="row">
                    <div class="col-xs-12 text-center">
                        {{ $listings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('customjs')
    <script>
        $('#orderBySelect').change(function(){ 
            var value = $(this).val();
            $('#inputOrderType').val(value);
            $('#listingForm').submit()
        });
    </script>
@endsection
