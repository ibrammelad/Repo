@extends('layouts')
@section("content")
    <br>
    <div class="row align-items-center">
        <div class="col-sm-2">
            <div class="page-title-box">
                <h4 style="font-family: 'Tajawal', sans-serif;" class="font-size-25"> Add Language </h4>
            </div>
        </div>
    </div>
    <section class="u-clearfix u-section-1" id="sec-5761">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-form u-form-1">
                <form action="{{route('saveLanguage')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <label> Title </label>
                            <div class="form-group">
                                <input type="text" name="title" placeholder="...."
                                       class="form-control"/>
                                @error('title')
                                <span class="text-danger">{{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label> slogan </label>
                            <div class="form-group">
                                <input type="text" name="slogan" placeholder="...."
                                       class="form-control"/>
                                @error('slogan')
                                <span class="text-danger">{{$message}} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <label> Image </label>
                            <div class="form-group">
                                <input type="file" name="img" placeholder="....." class="form-control"/>
                                @error('img')
                                <span class="text-danger">{{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label> </label>

                            <div>
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
