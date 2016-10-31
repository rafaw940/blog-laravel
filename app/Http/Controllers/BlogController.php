<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function arrayPosts($id = null){
        $arrayPosts = [
            array(
                'id'=>1,
                'titulo'=>'Teste 1',
                'url'=> 'teste-1',
                'autor'=>'autor 1',
                'data_criacao'=>'01/01/2016',
                'img'=>'http://mdbootstrap.com/images/slides/slide%20(11).jpg',
                'texto_curto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non soluta fugit voluptas rerum quaerat libero aliquam tempore, commodi dolores nostrum animi possimus, quis aut a saepe veritatis minima provident. Numquam.',
                'texto_longo'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p>'
            ),
            array(
                'id'=>2,
                'titulo'=>'Teste 2',
                'url'=> 'teste-2',
                'autor'=>'autor 2',
                'data_criacao'=>'01/02/2016',
                'img'=>'http://mdbootstrap.com/images/slides/slide%20(6).jpg',
                'texto_curto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non soluta fugit voluptas rerum quaerat libero aliquam tempore, commodi dolores nostrum animi possimus, quis aut a saepe veritatis minima provident. Numquam.',
                'texto_longo'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p>'
            ), 
            array(
                'id'=>3,
                'titulo'=>'Teste 3',
                'url'=> 'teste-3',
                'autor'=>'autor 3',
                'data_criacao'=>'01/03/2016',
                'img'=>'http://mdbootstrap.com/images/slides/slide%20(19).jpg',
                'texto_curto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non soluta fugit voluptas rerum quaerat libero aliquam tempore, commodi dolores nostrum animi possimus, quis aut a saepe veritatis minima provident. Numquam.',
                'texto_longo'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p>'
            ),  
            array(
                'id'=>4,
                'titulo'=>'Teste 4',
                'url'=> 'teste-4',
                'autor'=>'autor 3',
                'data_criacao'=>'01/04/2016',
                'img'=>'http://mdbootstrap.com/images/slides/slide%20(11).jpg',
                'texto_curto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non soluta fugit voluptas rerum quaerat libero aliquam tempore, commodi dolores nostrum animi possimus, quis aut a saepe veritatis minima provident. Numquam.',
                'texto_longo'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p>'
            ),
            array(
                'id'=>5,
                'titulo'=>'Teste 5',
                'url'=> 'teste-5',
                'autor'=>'autor 5',
                'data_criacao'=>'01/05/2016',
                'img'=>'http://mdbootstrap.com/images/slides/slide%20(4).jpg',
                'texto_curto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non soluta fugit voluptas rerum quaerat libero aliquam tempore, commodi dolores nostrum animi possimus, quis aut a saepe veritatis minima provident. Numquam.',
                'texto_longo'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum voluptates quo earum fuga qui laudantium, nemo impedit nesciunt molestiae aperiam similique. Iste, et, vel. Assumenda et in optio possimus.</p>'
            )
        ];
        if(!empty($id)){
            return  $arrayPosts[$id];
        }else{
            return  $arrayPosts;
        }
    }
    public function index()
    {
        $array = $this->arrayPosts();
        return view("blog/index",compact('array'));
    }
   
    public function post($post){
        $array = $this->arrayPosts();
        $key = array_search($post, array_column($array, 'url'));
        $key= $this->arrayPosts($key);
        return view("blog/post",$key);
    }


}
