@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>
                                        <h5 class="font-weight-bold">{{ $book->title }}</h5>
                                        <div>by {{ $book->author }}</div>
                                        <div>ISBN13: {{ $book->isbn13 }}</div>
                                        <br>
                                        <a href="#" class="btn btn-success btn-sm">Want to Read</a>
                                        <a href="#" class="btn btn-primary btn-sm">Read</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">{{ $books->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
