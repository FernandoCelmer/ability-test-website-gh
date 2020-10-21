@extends('layout.mainlayout')
@section('content')

<section id="banner" class="jumbotron text-center banner">
            <div class="row">
                <div class="col banner-top-right"> 
                <img class="banner-top-logo float-left" src="<?php echo asset('public/images/img_banner_logo.png')?>">
                </div>
                <div class="col text-left banner-top-left">
                <h1 style="font-size: 75px; color: #fab906;" class="font-weight-light">Lorem ipsum</h1>
                <h1 style="font-size: 75px; color: #fab906;" class="font-weight-bold">dolor sit amet</h1>
                <p style="font-size: 30px; color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing el</p>
                <button type="button" class="btn btn-light font-weight-bold" style="padding: 15px;">Vamos conversar?</button>
                </div>
            </div>
        </section>

        <div id="banner-business-01" class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Lorem ipsum</h5>
                    <h2>Lorem ipsum dolor sit amet,</h2>
                    <h2>consectetur adipiscing elit.</h2>
                    <p>ametLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis orci id tristique. Proin mollis arcu vel erat vulputate, feugiat volutpat nisl pellentesque. Cras laoreet consectetur lacinia. Nulla sit amet tempus justo, at blandit odio. Pellentesque habitant morbi</p>
                    <p><a class="btn btn-primary font-weight-bold" href="#" role="button">Saiba mais</a></p>
                </div>
                <div class="col-md-6">
                    <img style="width: 500px;" src="<?php echo asset('public/images/img_banner_02.jpg')?>">
                </div>
            </div>
        </div>

        <div id="banner-business-02" class="jumbotron p-3 p-md-5 text-white services-container">
            <div class="col-md-12 px-0" style="margin-bottom: 100px; margin-top: 100px;">
                <div style="margin-left: 150px; margin-right: 150px;">
                    <h5>Lorem ipsum</h5>
                    <h2 class="font-weight-bold">Lorem ipsum dolor sit amet,</h2>
                    <br>
                </div>
                <div class="row text-center" style="margin-left: 150px; margin-right: 150px;">

                    <div class="col">
                        <div class="services-block text-dark">
                            <br><i class="fa fa-bar-chart services-icon" aria-hidden="true"></i><h5>Lorem ipsum</h5><br>
                            <i class="fa fa-arrow-right font-weight-bold services-icon-arrow" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="services-block text-dark">
                            <br><i class="fa fa-area-chart services-icon" aria-hidden="true"></i><h5>Lorem ipsum</h5><br>
                            <i class="fa fa-arrow-right font-weight-bold services-icon-arrow" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="services-block text-dark">
                            <br><i class="fa fa-users services-icon" aria-hidden="true"></i><h5>Lorem ipsum</h5><br>
                            <i class="fa fa-arrow-right font-weight-bold services-icon-arrow" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="services-block text-dark">
                            <br><i class="fa fa-check-square services-icon" aria-hidden="true"></i><h5>Lorem ipsum</h5><br>   
                            <i class="fa fa-arrow-right font-weight-bold services-icon-arrow" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div id="banner-business-03" class="banner-business-03">
            <div class="row" style="padding-left: 150px;">
                <div class="col" style="padding-top: 100px; padding-bottom: 100px;">
                    <h2 style="font-size: 50px;">Lorem ipsum</h2>
                    <h2 class="font-weight-bold" style="font-size: 50px;">dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <br>
                    <p><a class="btn btn-primary font-weight-bold" href="#" role="button">Saiba mais</a></p>
                </div>
                <div class="col-md-auto">
                    <img style="width: 750px; float: right;" src="<?php echo asset('public/images/img_banner_02.jpg')?>">
                </div>
            </div>
        </div>

        <div id="banner-business-04" class="banner-business-04">
            <div class="row" style="padding-left: 150px;">
                <div class="col" style="padding-top: 100px; padding-bottom: 100px; color: #000000">
                    <h2 style="font-size: 50px;">Lorem ipsum</h2>
                    <h2 class="font-weight-bold" style="font-size: 50px;">dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <br>
                    <p><a class="btn btn-dark font-weight-bold" href="#" role="button">Saiba mais</a></p>
                </div>
                <div class="col-md-auto">
                    <img style="width: 750px; float: right;" src="<?php echo asset('public/images/img_banner_04.png')?>">
                </div>
            </div>
        </div>

        <div id="banner-business-05" class="container">
            <div class="row">
                <div class="col">
                    <h2 style="font-size: 50px;">Lorem ipsum</h2>
                    <h5 class="font-weight-bold" style="font-size: 25px; color: #fab906;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                    <br>
                    <p>luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis orci id tristique. Proin mollis arcu vel erat vulputate, feugiat volutpat nisl pellentesque. Cras laoreet</p>
                    <br>
                    <p><a class="btn btn-primary font-weight-bold" href="#" role="button">Saiba mais</a></p>
                </div>
                <div class="col">
                    <img style="width: 350px; float: left; border-radius: 50%;" src="<?php echo asset('public/images/img_banner_03.png')?>">
                </div>
            </div>
        </div>

        <div  id="banner-business-06" class="banner-business-06 py-5 bg-light">
            <div class="container">
            <div class="row" style="margin-bottom: 35px;">
                <div class="col">
                <h4 style="font-size: 45px;">Lorem ipsum</4>
                <h5>dolor sit amet</h5>
                </div>
                <div class="col">
                <p>
                <p class="text-right">Lorem ipsum dolor sit ame</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                <div class="mb-4">

                    <figure id="container">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php echo asset('public/images/img_video_01.jpg')?>"></img> 
                        <figcaption>Simulação - Capa do Vídeo</figcaption>
                    </figure>
                    
                    <div class="card-body">
                    <h5 class="font-weight-bold">Lorem ipsum dolor sit amet</h5>
                    <p class="card-text">luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis orci id 0tristique. Proin mollis arcu vel luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="mb-4">

                    <figure id="container">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php echo asset('public/images/img_video_02.jpg')?>"></img> 
                        <figcaption>Simulação - Capa do Vídeo</figcaption>
                    </figure>
                    
                    <div class="card-body">
                    <h5 class="font-weight-bold">Lorem ipsum dolor sit amet</h5>
                    <p class="card-text">luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis orci id 0tristique. Proin mollis arcu vel luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="mb-4">

                    <figure id="container">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php echo asset('public/images/img_video_03.jpg')?>"></img> 
                        <figcaption>Simulação - Capa do Vídeo</figcaption>
                    </figure>
                    
                    <div class="card-body">
                    <h5 class="font-weight-bold">Lorem ipsum dolor sit amet</h5>
                    <p class="card-text">luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis orci id 0tristique. Proin mollis arcu vel luctus ex, ac iaculis sem ultrices in. Nulla faucibus mollis</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div id="banner-business-07" class="banner-business-07 container">
        <div class="row" style="margin-bottom: 35px;">
            <div class="col">
            <h4 style="font-size: 45px; color: #fab906;">Lorem ipsum</4>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250" style="border: 0px; margin: 30px;">
                <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo asset('public/images/img_blog_01.jpg')?>" style="border-radius: 50%; width: 175px; height: 175px; margin-top: 15px;">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2">Lorem ipsum dolor sit amet</strong>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit</p>
                <p style="color: #fab906; margin-top: 5px; margin-bottom: 5px;">19 | OUT</p>
                <p style="color: #fab906; margin-bottom: 0px;" class="font-weight-bold"><i class="fa fa-list-ul" aria-hidden="true"></i> Saiba Mais</p>
                </div>
            </div>
            </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250" style="border: 0px; margin: 30px;">
                <img class="card-img-right flex-auto d-none d-md-block"src="<?php echo asset('public/images/img_blog_02.jpg')?>" style="border-radius: 50%; width: 175px; height: 175px; margin-top: 15px;">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2">Lorem ipsum dolor sit amet</strong>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit</p>
                <p style="color: #fab906; margin-top: 5px; margin-bottom: 5px;">19 | OUT</p>
                <p style="color: #fab906; margin-bottom: 0px;" class="font-weight-bold"><i class="fa fa-list-ul" aria-hidden="true"></i> Saiba Mais</p>
                </div>
            </div>
            </div><div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250" style="border: 0px; margin: 30px;">
                <img class="card-img-right flex-auto d-none d-md-block"src="<?php echo asset('public/images/img_blog_03.jpg')?>" style="border-radius: 50%; width: 175px; height: 175px; margin-top: 15px;">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2">Lorem ipsum dolor sit amet</strong>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit</p>
                <p style="color: #fab906; margin-top: 5px; margin-bottom: 5px;">19 | OUT</p>
                <p style="color: #fab906; margin-bottom: 0px;" class="font-weight-bold"><i class="fa fa-list-ul" aria-hidden="true"></i> Saiba Mais</p>
                </div>
                
            </div>
            </div><div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250" style="border: 0px; margin: 30px;">
                <img class="card-img-right flex-auto d-none d-md-block"src="<?php echo asset('public/images/img_blog_04.jpg')?>" style="border-radius: 50%; width: 175px; height: 175px; margin-top: 15px;">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2">Lorem ipsum dolor sit amet</strong>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit</p>
                <p style="color: #fab906; margin-top: 5px; margin-bottom: 5px;">19 | OUT</p>
                <p style="color: #fab906; margin-bottom: 0px;" class="font-weight-bold"><i class="fa fa-list-ul" aria-hidden="true"></i> Saiba Mais</p>
                </div>
            </div>
            </div></div>
            <hr style="border-top: 4px solid rgb(250 185 6); margin-top: 75px;">
        </div>

        <div id="banner-business-08" class="banner-business-08 container">
        <div class="row">
            <div class="col">

                <h1 class="font-weight-bold">Gostou?</h1>
                <h1 style="margin-bottom: 50px;">Fale com a gente!</h1>

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                <form action="" method="post" action="{{ route('contact.store') }}">
                    
                @csrf

                <div class="mb-3">
                    <input type="text" class="form-control contact-form {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Nome">
                    <!-- Error -->
                    @if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control contact-form {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="E-mail">
                    @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control contact-form {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Telefone">
                    @if ($errors->has('phone'))
                        <div class="error">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control contact-form {{ $errors->has('subject') ? 'error' : '' }}" name="subject"id="subject"  placeholder="Assunto">
                    @if ($errors->has('subject'))
                        <div class="error">
                            {{ $errors->first('subject') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <textarea class="form-control contact-form {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"rows="4"  placeholder="Mensagem"></textarea>
                    @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>
                <input class="btn btn-primary btn-lg btn-dark" type="submit" name="send" value="Enviar">
                </form>

            </div>
            <div class="col" style="background: #000; margin-left: 75px;">

            <div class="row">
                <div class="col">
                <div class="row">
                    <div class="col p-4 d-flex flex-column position-static">
                    <p class="card-text mb-auto"></p>
                      <div class="row row-cols-4">
                        <div class="col text-center"><i class="fa fa-facebook" style="color: #fff;" aria-hidden="true"></i></div>
                        <div class="col text-center"><i class="fa fa-twitter" style="color: #fff;" aria-hidden="true"></i></div>
                        <div class="col text-center"><i class="fa fa-linkedin" style="color: #fff;" aria-hidden="true"></i></div>
                        <div class="col text-center"><i class="fa fa-whatsapp" style="color: #fff;" aria-hidden="true"></i></div>
                    </div>
                    </div>
                    <div class="d-none d-lg-block">
                    <img class="bd-placeholder-img" width="300" height="550" preserveaspectratio="xMidYMid slice"
                    focusable="false" role="img" aria-label="Placeholder: Thumbnail" src="<?php echo asset('public/images/img_contact.jpg')?>" style="object-fit: cover; object-position: center;">
                    </div>
                </div>
                </div>
            </div>

            </div>
        </div>
        </div>

@endsection
<b></b>