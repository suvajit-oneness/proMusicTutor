@extends('layouts.master')
@section('title','Guitar Series')
@section('content')
    <section class="banner guitar_banner">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-md-5">
                    <h1>Welcome to <span class="d-block">Pro Music Tutor</span></h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <form>
                        <div class="form-group row m-0 mb-4">
                            <label class="col-md-3 col-6 col-form-label">Currencies:</label>
                            <div class="col-md-4 col-6">
                                <select class="form-control">
                                    <option>&pound; - GBP</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group row m-0">
                            <input type="text" class="form-control keyword" placeholder="Enter Keyword...">
                            <div class="input-group-append">
                                <button class="btn viewmore" type="button">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if(count($data->category) > 0)
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center title-inner">
                        <h1 class="mb-5">Choose Your Guitar Series Category</h1>
                    </div>
                </div>
                <div class="row m-0">
                    @foreach($data->category as $index => $cat)
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card border-0 ">
                                <img src="{{asset($cat->image)}}" class="card-img-top">
                                <div class="card-body p-0">
                                  <a href="{{route('guitar.series')}}?categoryId={{$cat->id}}" class="btn signbtn ">{{$cat->name}}</a>
                                </div>
                              </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if(count($data->guitarSeries) > 0)
        <section class="mt-5 mb-5 pt-5 pb-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center title-inner">
                        <h1 class="mb-5">Browse All Guitar Series</h1>
                    </div>
                </div>
                <div class="row m-0">
                    @foreach($data->guitarSeries as $key => $series)
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="card border-0 bg-transparent more-course">
                                <img src="{{asset($series->image)}}" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$series->title}}</h5>
                                    <p class="card-text">{!! $series->description !!}</p>
                                    <a href="javascript:void(0)" class="btn buyfull mb-3">BUY FULL SERIES - &pound;  {{calculateLessionPrice($series->lession)}}</a>
                                </div>
                                <div class="card-footer d-flex border-0 p-0">
                                    <a href="{{route('guitar.series.details',$series->id)}}" class="btn detail col-6">Details</a>
                                    <a href="javascript:void(0)" class="btn preview col-6">PREVIEW</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="javascript:void(0)" class="btn viewmore">EXPLORE MORE</a>
                </div>
            </div>
        </section>
    @endif
@endsection