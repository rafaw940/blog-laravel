@extends('template')
    @section('title')
        Home | Blog Laravel
    @stop

    @section('content')
        @foreach($array as $post)
   <!--First row-->
            <div class="row">
                <!--Featured image-->
                <div class="col-md-7">
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="{{$post['img']}}" class="img-fluid" alt="">
                        <div class="mask"></div>
                    </div>
                </div>
                <!--/.Featured image-->

                <!--Post excerpt-->
                <div class="col-md-5">
                    <a href="#!"><h2 class="post-title">{{$post['titulo']}}</h2></a>
                    <p class="lead">{{$post['texto_curto']}}</p>
                    <div class="read-more">
                        <a href="/{{$post['url']}}" class="btn btn-primary">Continuar lendo</a>
                    </div>
                </div>
                <!--/.Post excerpt-->
            </div>
            <!--/.First row-->
            <hr class="extra-margin">
        @endforeach
    @stop
