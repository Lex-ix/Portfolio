@extends('layouts/admin')

<?php $name = config('app.name') ?>

@section('page-title')
Admin Page | {{ $name }}
@endsection

@section('content')
    <div class="texts">
        <div class="row">
            <h2>Texts</h2>
            <button class="button add">Add</button>
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
                        <button class="button remove" id="{{ $text->id }}">Remove</button>
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

    <div id="edit" class="modal">
        <div class="content">
            <div class="header row">
                <p>Editing: <span id="editing"></span></p>
                <p class="close">Close</p>
            </div>
            <form action="#" method="POST">
                {{ method_field('PUT') }}
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

    <div id="remove" class="modal">
        <div class="content">
            <div class="header row">
                <p>Removing: <span class="removing"></span></p>
                <p class="close">Close</p>
            </div>
            <form action="#" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <p>Are you sure you want to remove <span class="removing"></span></p>

                <input type="hidden" id="id">

                <input type="submit" value="Remove" class="button">
            </form>
        </div>
    </div>

    <div id="add" class="modal">
        <div class="content">
            <div class="header row">
                <p>Add text</p>
                <p class="close">Close</p>
            </div>
            <form action="#" method="POST">
                {{ csrf_field() }}
                <div class="column">
                    <input type="text" placeholder="Title" name="title">
                    <input type="text" placeholder="Content" name="content">
                </div>

                <input type="submit" value="Add" class="button">
            </form>
        </div>
    </div>
@endsection

