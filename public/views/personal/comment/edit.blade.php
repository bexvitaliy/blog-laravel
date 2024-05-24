@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-3">Комментарии</h1>
                <div class="row">
                    <div class="col-12">
                        <h6 class="mb-3">
                        </h6>
                        <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" class="col-4">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <textarea class="form-control" name="message" cols="30" rows="10">{{$comment->message}}</textarea>
                                @error('message')
                                <div class="text-danger">Поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
@endsection
