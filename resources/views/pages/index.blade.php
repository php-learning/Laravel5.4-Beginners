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
    <ul>
        @foreach($tableau as $article)
        <li><a href="{{route('detailArticle', [$article->getId()])}}">{{$article->getTitre()}}</a></li>
        @endforeach
    </ul>
@endsection