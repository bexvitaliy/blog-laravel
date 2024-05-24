@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Добавление поста</h1>
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

                        <form action="{{route('admin.post.store')}}" method="POST" class="col-4" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Название поста" value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                  <textarea name="content" type="text" class="form-control" id="content" >{{old('content')}}</textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-5">
                                <label for="exampleInputFile">Добавить превью</label>
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
                                        <option value="{{$category->id}}" {{$category->id == old('category_id') ? 'selected' : ''}}>{{$category->title}}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <label>Тэги</label>
                                    <select class="select2" name ="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                                      @foreach($tags as $tag)
                                            <option {{is_array (old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                        @endforeach

                                    </select>
                                    @error('tag_ids')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div>
                </div>

        </section>

    </div>
@endsection
