@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать страницу "{{ $page->title }}"</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ $page->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('page.update', $page->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $page->title }}" placeholder="Наименование" name="title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $page->keywords }}" placeholder="Ключевые слова" name="keywords">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $page->link }}" placeholder="Ссылка" name="link">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $page->header_h1 }}" placeholder="Заголвок" name="header_h1">
                        </div><div class="form-group">
                            <input type="text" class="form-control" value="{{ $page->description }}" placeholder="Описание" name="description">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" value="{{ $page->images_src }}" class="custom-file-input" name="images_src" id="images_src">
                                <label class="custom-file-label" for="images_src">Выбрать</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Сохранить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
