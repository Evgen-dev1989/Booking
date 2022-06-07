@extends('layouts.app')


    @foreach($data as $el)
        <div class=" container alert alert-info mt-5">
            <h4>{{$el->Location}}</br></h4>
            <p>Свободные блоки</br> {{$el->freeBlocks}}</p>
            <a href="{{route('form',$el->id)}}"><button class="btn btn-warning">Calculate blocks</button></a>
        </div>
    @endforeach





