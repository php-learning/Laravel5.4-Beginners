<?php
/**
 * Created by IntelliJ IDEA.
 * User: sam
 * Date: 07/11/17
 * Time: 20:07
 */
?>
@extends('base')
@section('section')
    <div class="mdl-card mdl-shadow--4dp" style="width: 100%;">
        <div class="mdl-card__title" style="background-color: #3f51b5;color: #fff;">
            <h2 class="mdl-card__title-text">Les articles</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <ul>
                @foreach($tableau as $article)
                    <li><a href="{{route('detailArticle', [$article->getId()])}}">{{$article->getTitre()}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection