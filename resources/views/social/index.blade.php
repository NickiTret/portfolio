@extends('layouts.main')

@section('content')
    <!-- Content Header (social header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Социальные сети</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('social.create') }}" class="btn btn-primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Тайтл</th>
                                        <th>Фотография</th>
                                        <th>Ссылка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($socials as $social)
                                    <tr>
                                        <td>{{ $social->id }}</td>
                                        <td><a href="{{ route('social.edit', $social->id) }}"> {{ $social->title }}</a></td>
                                        <td>
                                            <img width="200" src="{{ $social->getImage() }}" alt="{{ $social->title }}">
                                        </td>
                                        <td>{{ $social->link }}</td>
                                        <td>
                                            <form action="{{ route('social.delete', $social->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
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
            <!-- /.row -->
            <!-- Main row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
