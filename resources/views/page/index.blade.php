@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Страницы</h1>
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
                            <a href="{{ route('page.create') }}" class="btn btn-primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Тайтл</th>
                                        <th>Ключевые слова</th>
                                        <th>Ссылка</th>
                                        <th>Заголовок</th>
                                        <th>Описание</th>
                                        <th>Фотография</th>
                                        <th>Удалить</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $page->id }}</td>
                                        <td><a href="{{ route('page.edit', $page->id) }}"> {{ $page->title }}</a></td>
                                        <td>{{ $page->keywords }}</td>
                                        <td>{{ $page->link }}</td>
                                        <td>{{ $page->header_h1 }}</td>
                                        <td>{{ $page->description }}</td>
                                        <td>
                                            <img width="200" src="{{ $page->getImage() }}" alt="{{ $page->title }}">
                                        </td>
                                        <td>
                                            <form action="{{ route('page.delete', $page->id) }}" method="post">
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
