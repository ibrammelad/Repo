@extends('layouts')
@section("content")
    @include("alerts.success")
    @include("alerts.errors")

    <div class="u-clearfix u-sheet u-sheet-1">
        <span class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1">Languages</span>
        <div class="u-expanded-width u-list u-list-1">
            <a href="{{route("Language")}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>

            <div class="u-repeater u-repeater-1">
                @foreach($languages as $language)
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                        <img src={{$language->img == null? "images/language.jpg": "images/".$language->img }} alt=""
                             class="u-expanded-width u-image u-image-default u-image-3">
                        <h5 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-6">{{$language->title}}</h5>
                        <h3 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-7">{{$language->slogan}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            {{$languages->links()}}

        </div>

    </div>

@endsection
