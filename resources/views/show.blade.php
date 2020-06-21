@extends('layouts.app')

@section('content')

<section class="header9 cid-s2hkGa4paD mbr-fullscreen mbr-parallax-background" id="header9-1u">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35); background-image: url({{ Voyager::image( $post->image ) }});">
    </div>

    <div class="container">
        <div class="media-container-column mbr-white col-lg-8 col-md-10">
            <h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-1">
                {{ $post->title}}
            </h1>
            <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-2">
                <span>Publication {{ $post->created_at->format('F m Y') }}</span>
            </h3>
            
            
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section article content3 cid-s2hkND0ZH4 py-5" id="content3-1v">
      
     

    <div class="container">
        <div class="media-container-row">
            <div class="row col-12 col-md-12">
                <div class="col-12 mbr-text mbr-fonts-style col-md-12 display-5">
                     {!! $post->body !!}
                </div>
                
                
            </div>
        </div>
    </div>
</section>

<section class="cid-s2hqi0o4YL py-5" id="social-buttons1-1w">

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    SHARE THIS PAGE!
                </h2>
                <div>
                    <div class="mbr-social-likes" data-counters="false">
                        <span class="btn btn-social facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
