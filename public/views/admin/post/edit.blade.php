@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Посты</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <h6 class="mb-3">

                        </h6>

                        <form action="{{route('admin.post.update', $post->id)}}" method="POST" class="col-4" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Название поста" value="{{ $post->title}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="content" type="text" class="form-control" id="content" >{{$post->content}}</textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-5">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="w-2 mb-3">
                                    <img src="{{asset('storage/'.$post->preview_image)}}" alt="preview_image"  width="300" >

                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"  name="preview_image">
                                        <label class="custom-file-label"  >Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-5">
                                <label for="exampleInputFile">Добавить главное изображение</label>
                                <div class="w-2 mb-3">
                                    <img src="{{asset('storage/'.$post->main_image)}}" alt="main_image"  width="300">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"  name="main_image">
                                        <label class="custom-file-label"  >Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                                    @endforeach

                                </select>
                                <div class="form-group">
                                    <label>Тэги</label>
                                    <select class="select2" name ="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option {{is_array ($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
