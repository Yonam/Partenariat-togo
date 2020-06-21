@extends('layouts.app')


<!-- <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12 py-59">
            <div class="card">
                <!-- <div class="card-header">{{ __('Register') }}</div> --

                <div class="card-body">
                    <form method="POST" action="{{ url('request_form') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Prenom(s)') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Addresse E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __(' Addresse E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number">

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="activity" class="col-md-4 col-form-label text-md-right">{{ __('Secteur d\'activité') }}</label>

                            <div class="col-md-6">
                                <input id="activity" type="text" class="form-control @error('activity') is-invalid @enderror" name="activity" required autocomplete="activity">

                                @error('activity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Décrivez brievement votre besoin') }}</label>

                            <div class="col-md-6">
                                <input id="message" type="textarea" class="form-control" name="message" required autocomplete="message">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer ma requête') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


@section('content')
<section class="mbr-section form4 cid-rZ60nYdFx7" id="form4-w">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Contactez-nous</h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Nous sommes a votre service</h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">
                            Ready for offers and cooperation<br></h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Phone: +1 (0) 000 0000 001 <br>
                            Email: youremail@mail.com<br><br>
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form method="post" action="{{ route('demande.store') }}" class="mbr-form form-with-styler" data-form-title="Formulaire_requete">
                       @csrf
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Merci de l'interet que vous nous portez. Nous vous repondrons dans les meilleurs delais.</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>

                        <div class="dragArea row">

                            <div class="col-md-6  form-group" data-for="name">
                                <input type="text" name="nom" placeholder="{{ __('Votre nom')}}" data-form-field="nom" required="required" class="form-control input display-7 @error('nom') is-invalid @enderror" id="nom-form4-w" value="{{ old('nom') }}"  autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            



                            <div class="col-md-6  form-group" data-for="surnom">
                                <input type="text" name="prenom" placeholder="{{__('Prenom(s)')}}" data-form-field="prenom" required="required" class="form-control input display-7 @error('name') is-invalid @enderror" id="prenom-form4-w" value="{{ old('prenom') }}" autocomplete="prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6  form-group" data-for="phone">
                                <input type="number" name="phone" placeholder="{{ __('Telephone')}}" data-form-field="Phone" required="required" class="form-control input display-7 @error('phone') is-invalid @enderror" id="phone-form4-w" value="{{ old('phone') }}" autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror


                            </div>
                            <div data-for="email" class="col-md-6  form-group">
                                <input type="email" name="email" placeholder="{{ __('Email')}}" data-form-field="Email" class="form-control input display-7 @error('email') is-invalid @enderror" id="email-form4-w" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror


                            </div>
                            <div data-for="activite" class="col-md-12  form-group">
                                <input type="text" name="activite" placeholder="{{ __('Secteur d\'activité')}}" data-form-field="Activite" class="form-control input display-7 @error('activite') is-invalid @enderror" id="activite-form4-w" value="{{ old('activite') }}" autocomplete="activite">

                                @error('activite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror

                            </input>
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <textarea name="message" placeholder="{{ __('Message')}}" data-form-field="Message" class="form-control input display-7 @error('message') is-invalid @enderror" id="message-form4-w" value="{{ old('message') }}" autocomplete="message">

                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }} </strong>
                                        </span> 
                                    @enderror
                                </textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center"><button type="submit" class="btn btn-primary btn-form display-4">ENVOYER LE MESSAGE</button></div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection