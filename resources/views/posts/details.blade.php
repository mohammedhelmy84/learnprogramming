@extends('layouts.app')
<br>
<br>
<div class="container-fluid text-center mt-5 p-3" style="background-color: #fff">
    <div class="alert" role="alert">
        <h3 class="fw-bold">{{$post->title}}</h3>
        <span class="badge text-bg-secondary">{{$post->created_at}}</span>
    </div>
    <div class="row mt-5">
       <div class="col-12 col-md-6">
        <img src="{{ asset('/assets/img/'.$post->pic) }}" alt="" class="img-fluid">
    </div>
       <div class="col-12 col-md-6">
        <h3 class="fw-bold">{{$post->text}}</h3>
       </div>
       <div class="alert" role="alert">
        <a href="#"><i class="las la-thumbs-up" style="font-size:32px;"></i></a>
        <a href="#"><i class="las la-comment" style="font-size:32px;"></i></a>
       </div>
    </div>
</div>

