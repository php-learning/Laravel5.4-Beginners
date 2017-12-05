<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 21/11/17
 * Time: 19:43
 */
?>

@extends('base')
@section('section')

    <form action="{{route('storeArticle')}}" method="post">
        {{csrf_field()}}
        <p><label>Titre : </label><input name="titre" value="{{old('titre')}}"></p>
        @if($errors->has('titre'))
            <p class="error">{{$errors->first('titre')}}</p>
        @endif
        <p><label>Description : </label><input name="description" value="{{old('description')}}"></p>
        @if($errors->has('description'))
            <p class="error">{{$errors->first('description')}}</p>
        @endif
        <p><input type="submit" value="New Article"></p>
    </form>
@endsection