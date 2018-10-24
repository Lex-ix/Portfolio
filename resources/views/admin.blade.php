@extends('layouts/admin')

<?php $name = config('app.name') ?>

@section('page-title')
Admin Page | {{ $name }}
@endsection

@section('content')
    <div class="texts">
        <h2>Texts</h2>
        <table>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($texts as $text)
                <tr>
                    <td>{{ $text->title }}</td>
                    <td><p>{{ $text->content }}</p></td>
                    <td>
                        <form action="/text/update" method="post">
                            {{ csrf_field() }}

                            <input type="submit" class="button edit" value="Edit">
                            <input type="hidden" name="id" value="{{ $text->id }}">
                        </form>
                    </td>
                    <td>
                        <form action="/text/remove" method="post">
                            {{ csrf_field() }}
                            
                            <input type="submit" class="button remove" value="Remove">
                            <input type="hidden" name="id" value="{{ $text->id }}">
                        </form>
                    </td>
                </tr>  
            @endforeach
        </table>
    </div>
@endsection