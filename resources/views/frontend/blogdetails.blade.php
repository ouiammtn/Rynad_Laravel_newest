@extends('frontend.layout.app')
@section('title')
BlogDetails
@endsection
@section('content')

 <!-- Blog Start -->
 <div class="container-fluid blog py-5 my-5">
    <div class="container mt-5">
        <div class="text-center  pb-5 wow fadeIn" data-wow-delay=".3s" style="width: 75%; margin: auto;">
            <h1>{{ $blog->main_title }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="card col-lg-8 border-0">
            <img src="{{ Storage::url($blog->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="card col-lg-8 border-0">

            <h2 class="py-2 ">Introduction</h2>
            <p class="pb-2">{{ $blog->Introduction }}</p>

            <h2 class="pb-2">{{ $blog->sub_title_one }}</h2>
            <p class="pb-2">{{ $blog->description_one }}</p>

            <h2 class="pb-2">{{ $blog->sub_title_two }}</h2>
            <p class="pb-2">{{ $blog->description_two }}</p>

            <h2 class="pb-2">{{ $blog->sub_title_three }}</h2>
            <p class="pb-2">{{ $blog->description_three }}</p>

            <div class="mt-5 pt-5">
                <H6 class="pb-2">LEAVE A COMMENT</H6>
                <form action="" >
                    <textarea name="comment" id="" class="w-100" required placeholder="ÉCRIVEZ VOTRE COMMENTAIRE"></textarea>
                    <input type="submit" name="" value="LAISSER UN COMMENTAIRE" class="btn text-white  mt-2" style="background-color: #2e2ea3;">
                </form>
            </div>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class=""></div>
    </div>
</div>
<!-- Blog End -->

@endsection
