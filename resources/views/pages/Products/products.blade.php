@extends('layouts')
@section("content")
    @include("alerts.success")
    @include("alerts.errors")

    <div class="u-clearfix u-sheet u-sheet-1">
        <span class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1">Products with same Language of authenticatable Admin</span>
        <div class="u-expanded-width u-list u-list-1">
            <a href="{{route("Product")}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
            <div class="u-repeater u-repeater-1">
                @foreach($products as $product)
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                        <img src={{ \Illuminate\Support\Facades\URL::to('/') }}/images/{{$product->img }} alt=""
                             class="u-expanded-width u-image u-image-default u-image-3">
                        <h5 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-6">{{$product->name}}</h5>
                        <h3 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-7">$ {{$product->price}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            {{$products->links()}}

        </div>

    </div>

@endsection
