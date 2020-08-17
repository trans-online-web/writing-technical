@extends('layouts.app')
@section('title')
    Blog
@stop
@section('content')
    @include('includes.transnav')
    <!--== End Header Wrapper ==-->
    <div class="justify-content-center call-to-action-landing sp-y parallax bg-img" data-parallax-speed="0.75" data-bg="img/call-to/call-to-bg-3.jpg">
        <div class="pt-5 mt-5">
            <div class="section-title section-title--white mb-0">
                <h2 class="text-center">Blog Page</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 100px;">
        <blog-user></blog-user>
    </div>
@endsection
