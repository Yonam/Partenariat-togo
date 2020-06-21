@extends('layouts.app')

@section('content')

<section class="header12 cid-rZ8XyOY7tG mbr-fullscreen mbr-parallax-background" id="header12-14">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">LES PUBLICATIONS</h1>
                    
                    

                    <div class="icons-media-container mbr-white">
                        <div class="card col-12 col-md-6 col-lg-4">
                            <div class="icon-block">
                            <a href="#">
                                <span class="mbri-layers mbr-iconfont"></span>
                            </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Nouveautes</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-4">
                            <div class="icon-block">
                                <a href="#">
                                    <span class="mbri-sun mbr-iconfont"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Idees de projets</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-4">
                            <div class="icon-block">
                                <a href="#">
                                    <span class="mbri-cash mbr-iconfont"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Opportunites</h5>
                        </div>

                        
                    </div>
                </div>
            </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section content4 cid-rZ8Z0lbx7n" id="content4-1d">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Les articles principaux</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    Façonnez votre futur projet web avec une conception précise et affinez les fonctions codées.
                </h3>
                
            </div>
        </div>
    </div>
</section>

<section class="features11 cid-rZ91wmbCpq" id="features11-1h">

    

    

    <div class="container">   
        <div class="col-md-12">
            @foreach ($posts as $post)
            <div class="media-container-row">
                <div class="mbr-figure m-auto" style="width: 30%;">
                    <img src="{{ Voyager::image( $post->image ) }}" alt="Mobirise" title="">
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        <a href="/post/{{ $post->slug }}">{{ $post->title }}</a> </h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                        {{ $post->excerpt }}.
                        </p>
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                                            

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                   <!-- {{ \Illuminate\Support\Str::limit(strip_tags($post->body),200) }} -->
                                   <h6>Categorie <!-- {{ $post->category }} --></h6>
                                   <h6>Publication le {{ $post->created_at->format('M d Y') }}</h6>
                                </p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            <hr>
            @endforeach

            {{ $posts->links() }}
        </div> 
    </div>          
</section>

<section class="features18 popup-btn-cards cid-rZ917UoJA5" id="features18-1g">

    

    
    <!-- <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            D'autres publications de l'association</h2>
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">Quisque tellus ligula, suscipit egestas libero eu, hendrerit convallis sapien. Nullam quis ligula nulla.</h3>
        <div class="media-container-row pt-5 ">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="{{ asset('images/background1.jpg') }}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Publication 1</h4>
                        <p class="mbr-text mbr-fonts-style align-left display-7">
                            Quisque sit amet lacus in orci maximus rutrum ut quis felis. Vivamus neque justo, dictum non lacus in, dignissim efficitur elit. Vestibulum eget luctus libero. Curabitur blandit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="{{ asset('images/background2.jpg') }}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Publication 2</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           Quisque sit amet lacus in orci maximus rutrum ut quis felis. Vivamus neque justo, dictum non lacus in, dignissim efficitur elit. Vestibulum eget luctus libero. Curabitur blandit.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="{{ asset('images/background3.jpg') }}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Publication 3</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Quisque sit amet lacus in orci maximus rutrum ut quis felis. Vivamus neque justo, dictum non lacus in, dignissim efficitur elit. Vestibulum eget luctus libero. Curabitur blandit.
                        </p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="features18 popup-btn-cards cid-rZ94QodKty mbr-parallax-background" id="features18-1i">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Offres et opportunites</h2>
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">
            In browser you will see buttons when hover on cards
        </h3>
        <div class="media-container-row pt-5 ">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="{{ asset('images/background1.jpg') }}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Opportunite | partenaire</h4>
                        <p class="mbr-text mbr-fonts-style align-left display-7">
                            Quisque sit amet lacus in orci maximus rutrum ut quis felis. Vivamus neque justo, dictum non lacus in, dignissim efficitur elit. Vestibulum eget luctus libero. Curabitur blandit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="{{ asset('images/background2.jpg') }}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Opportunite | partenaire</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           Quisque sit amet lacus in orci maximus rutrum ut quis felis. Vivamus neque justo, dictum non lacus in, dignissim efficitur elit. Vestibulum eget luctus libero. Curabitur blandit.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="{{ asset('images/background3.jpg') }}" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Opportunite | partenaire</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Quisque sit amet lacus in orci maximus rutrum ut quis felis. Vivamus neque justo, dictum non lacus in, dignissim efficitur elit. Vestibulum eget luctus libero. Curabitur blandit
                        </p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="cid-rZ95rsz1ze" id="social-buttons3-1j"> -->
    
    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    PARLEZ-EN AUTOUR DE VOUS !</h2>
                <div>
                    <div class="mbr-social-likes">
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social vkontakte socicon-bg-vkontakte mx-2" title="Share link on VKontakte">
                            <i class="socicon socicon-vkontakte"></i>
                        </span>
                        <span class="btn btn-social odnoklassniki socicon-bg-odnoklassniki mx-2" title="Share link on Odnoklassniki">
                            <i class="socicon socicon-odnoklassniki"></i>
                        </span>
                        <span class="btn btn-social pinterest socicon-bg-pinterest mx-2" title="Share link on Pinterest">
                            <i class="socicon socicon-pinterest"></i>
                        </span>
                        <span class="btn btn-social mailru socicon-bg-mail mx-2" title="Share link on Mailru">
                            <i class="socicon socicon-mail"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div> -->

@endsection
