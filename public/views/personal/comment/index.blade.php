@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-3">Комментарии</h1>
                <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Название</th>
                                                <th colspan="3" class="text-center">Действия</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($comments as $comment)
                                                <tr>
                                                    <td>{{$comment->id}}</td>
                                                    <td>{{$comment->message}}</td>
                                                    <td><a href="{{route('personal.comment.edit', $comment->id )}}"><i
                                                                class="fas fa-pencil-alt"></i></a></td>

                                                    <td class="text-center">
                                                        <form action="{{route('personal.comment.delete', $comment->id)}}"
                                                              method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="border-0 bg-transparent">
                                                                <a class="text-danger"><i class="fas fa-trash"
                                                                                          role="button"></i></a>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
@endsection
