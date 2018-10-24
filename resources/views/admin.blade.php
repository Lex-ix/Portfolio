@extends('layouts/admin')

<?php $name = config('app.name') ?>

@section('page-title')
Admin Page | {{ $name }}
@endsection

@section('content')
    <div class="texts">
        <div class="row">
            <h2>Texts</h2>
        </div>
        <table>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($texts as $text)
                <tr>
                    <td id="title">{{ $text->title }}</td>
                    <td><p id="content">{{ $text->content }}</p></td>
                    <td>
                        <button class="button edit" id="{{ $text->id }}">Edit</button>
                        <!-- <form action="/text/update">
                            {{ method_field('put') }}
                            {{ csrf_field() }}

                            <input type="submit" class="button edit" value="Edit">
                            <input type="hidden" name="id" value="{{ $text->id }}">
                        </form> -->
                    </td>
                    <td>
                        <button class="button remove">Remove</button>
                        <!-- <form action="/text/remove">
                            {{ method_field('put') }}
                            {{ csrf_field() }}
                            
                            <input type="submit" class="button remove" value="Remove">
                            <input type="hidden" name="id" value="{{ $text->id }}">
                        </form> -->
                    </td>
                </tr>  
            @endforeach
        </table>
    </div>

    <div class="outer">
        <div class="inner">
            
        </div>
    </div>

    <div id="modalEdit">
        <div class="content">
            <div class="header row">
                <p>Editing: <span id="editing"></span></p>
                <p class="close">Close</p>
            </div>
            <form action="#" method="POST">
                {{ method_field('put') }}
                {{ csrf_field() }}

                <div class="column">
                    <input type="text" placeholder="Title" id="title" name="title">
                    <input type="text" placeholder="Content" id="content" name="content">
                </div>

                <input type="hidden" id="id">

                <input type="submit" value="Update" class="button">
            </form>
        </div>
    </div>
@endsection

