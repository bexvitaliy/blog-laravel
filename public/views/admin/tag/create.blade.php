@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Добавление тэга</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Тэги</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h6 class="mb-3">
                        </h6>
                        <form action="{{route('admin.tag.store')}}" method="POST" class="col-4">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Название тэга">
                                @error('title')
                                <div class="text-danger">Поле обязательно для заполнения</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
