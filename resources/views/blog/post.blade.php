@extends('templateBlog')
    @section('title')
        Home | Blog Laravel
    @stop

    @section('content')
       
 @yield('content')
                        <!--Post data-->
                        <h1 class="h1-responsive">{{$titulo}} </h1>
                        <h5>Autor <a href="">{{$autor}}</a>, {{$data_criacao}}</h5>

                        <br>

                        <!--Featured image -->
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="{{$img}}" class="img-fluid " alt="">
                            <div class="mask">
                            </div>
                        </div>

                        <br>

                        <!--Post excerpt-->
                        {!!$texto_longo!!}
        
    @stop
