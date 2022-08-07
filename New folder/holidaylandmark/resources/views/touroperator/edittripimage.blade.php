@extends('layouts.toursidebar')
@section('content')
<!-- <div class="container-fluid">    -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css"
    integrity="sha256-b5ZKCi55IX+24Jqn638cP/q3Nb2nlx+MH/vMMqrId6k=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link href="{{ asset('css/mains.css') }}" rel="stylesheet">
<div class="col-xl-10 col-12 col-sm-10 col-lg-10 col-md-10 tab1">
    {{-- messsage pop up open --}}
    @if(session()->get('success'))
    <div class="alert alert-success col-xl-9 col-9 col-sm-10 col-lg-10 col-md-10">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('success') }}
    </div>
    @endif
    <div class="col-xl-10 col-12 col-sm-10 col-lg-10 col-md-10">
        @if(session()->get('danger'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session()->get('danger') }}
        </div>
        @endif
    </div>
    @if(count($errors) > 0)
    <div class="row">
        <div class="col-xl-10 col-12 col-sm-10 col-lg-10 col-md-10 error">
            <ul>
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p class="text-center"> {{$error}}</p>
                </div>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="container-fluid">
        <div class="welcome">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-11">
                                <button style="font-size:22px;margin-left:1px;border-radius:9px;" onclick="goBack()">
                                    Back</button>
                                <h2 class="header"> Update Trip </h2>
                                <div style="margin-top: 20px;" class="content">
                                    <form method="post" action="{{ route('touroperator.updatetripimage',$gallery->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <strong>Trips:</strong>
                                            <select class="form-control" id="triptitle" name="triptitle"
                                                value="{{ $gallery->trips }}"required>
                                                <option>{{ $gallery->trips }}</option>
                                                @foreach($trip as $cat)
                                                <option>{{ $cat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="row">
                                           
                                           
                                            <div class="form-group col-md-3">
                                                <img src="{{ URL::to('/') }}/public/images/{{ $gallery->image_name }}"
                                                    class="rounded-circle" width="60" />
                                                   
                                                   
                                                <input type="file" name="imag[]" multiple
                                                    value="{{ $gallery->image_name }}" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-dark" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
                        </script>
                        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
                            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
                        <script
                            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
                            integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous">
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="mobile-nav-toggle d-xl-none"><i
                class="icofont-navigation-menu  fa fa-list"></i></button>
        <!-- ======= Header ======= -->
        <div class="container">
            <div class="row">
                {{-- messsage pop up close --}}
                <br><br>
            </div>
        </div>
        <div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $(".countries").hide();
        $(".states").hide();
        $(".cities").hide();
        $(".updatecountries").change(function() {
            $(".updatecountries").hide();
            $(".countries").show();
            $('.countries').attr('name', 'country');
            $(".updatestates").hide();
            $(".states").show();
            $('.states').attr('name', 'state');
            $(".updatecities").hide();
            $(".cities").show();
            $('.cities').attr('name', 'city');
        });
    });
    </script>
    <script type="text/javascript">
    setTimeout(function() {
        $('#mydiv').fadeOut('fast');
    }, 3000); // <-- time in milliseconds
    </script>
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    @endsection