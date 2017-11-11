<?php
/**
 * Created by IntelliJ IDEA.
 * User: sam
 * Date: 07/11/17
 * Time: 20:21
 */
?>
@extends('base')
@section('section')
<div class="mdl-card mdl-shadow--4dp" style="width: 100%;">
    <div class="mdl-card__title" style="background-color: #3f51b5;color: #fff;">
        <h2 class="mdl-card__title-text">{{$article->getTitre()}}</h2>
    </div>
    <div class="mdl-card__supporting-text">
        {{$article->getDescription()}}
    </div>
</div>
@endsection