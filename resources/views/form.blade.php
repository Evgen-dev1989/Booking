@extends('layouts.app')


    <div class="container mt-4 alert alert-info ">
        <form action="/home" method="post" >
            {{ csrf_field() }}
            <p>{{$data->Location}}</p>
            <div  class="container mt-4 ">@csrf
                <input type="text" class="form-control" name="volume" id="" PLACEHOLDER="объем" ><br>
                <input type="text" class="form-control" name="temperature" id="" PLACEHOLDER="температура" ><br>
                <input type="text" class="form-control" name="shelfLife " id=" " PLACEHOLDER="срок хранения" ><br>
                <button class="btn btn-success" type="submit">Calculate</button>
            </div>
            <button class="btn btn-success  mt-4" type="submit">Book blocks</button>
        </form>
    </div>

