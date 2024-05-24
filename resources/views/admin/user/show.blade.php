@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$user->name}} <a href = "{{route('admin.user.edit', $user->id )}}"><i class="fas fa-pencil-alt"></i></a></h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Пользователи</li>
                        </ol>
                    </div><!-- /.col -->

                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">

                                    <tbody>

                                    <tr>
                                        <td>ID</td>
                                        <td>{{$user->id}}</td>

                                    </tr>
                                    <tr>
                                        <td>Имя</td>
                                        <td>{{$user->name}}</td>

                                    </tr>



                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
