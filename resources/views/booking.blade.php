@extends('layouts.app')



@foreach($data as $el)

<div class="container" id="accordionExample">
    <div class="accordion-item">
        <h5 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <div><h5>{{$el->Location}}</h5></br>
               <p>Свободные блоки </p> </br>
                <p> {{$el->freeBlocks}}</p></div>

            </button>
        </h5>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">

                <div class="container mt-4 alert alert-info ">
                    <form action="/home" method="post" >
                        {{ csrf_field() }}
                        <p>{{$el->Location}}</p>
                        <div  class="container mt-4 ">@csrf
                            <input type="text" class="form-control" name="volume" id="" PLACEHOLDER="объем"><br>
                            <a href="{{\App\Http\Controllers\LocationController::class,'store'}}"><button class="btn btn-success" >Calculate</button></a>

                            <input type="text" class="form-control" name="temperature" id="" PLACEHOLDER="температура" ><br>
                            <input type="text" class="form-control" name="shelfLife " id=" " PLACEHOLDER="срок хранения" ><br>

                        </div>
                    </form>
                        <button class="btn btn-success  mt-4" type="submit">Book blocks</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endforeach

<div>
    <a href="{{route('user',$el->id)}}">All your Booking</a>
</div>

