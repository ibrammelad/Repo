<?php

function uploadImage($folder, $image)
{
    $new_name = \Illuminate\Support\Str::random(6).$image->getClientOriginalName();
    $image->move(public_path($folder), $new_name);
    return $new_name;
}
