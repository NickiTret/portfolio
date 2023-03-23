@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать сеть "{{ $social->title }}"</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ $social->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('social.update', $social->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $social->title }}"
                                placeholder="Наименование" name="title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $social->link }}" placeholder="Ссылка"
                                name="link">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" {{ $page->image_src }} class="custom-file-input" name="image_src" id="image_src">
                                <label class="custom-file-label" for="image_src">Выбрать</label>
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
