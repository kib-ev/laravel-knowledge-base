@extends('admin.layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">База знаний</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ $post->id ? route('admin.posts.update', $post) : route('admin.posts.store') }}" method="post">
                                @csrf

                                @if($post->id)
                                    @method('patch')
                                @else
                                    @method('post')
                                @endif

                                {{--        <input type="hidden" name="_redirect" value="{{ route('admin.posts.index') }}">--}}

                                <div class="form-group">
                                    <label for="postTitle">Заголовок</label>
                                    <input class="form-control" type="text" name="title" autocomplete="off" value="{{ $post->id ? $post->title : '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="postTitle">Текст</label>

                                    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>

                                    <textarea id="editor" class="form-control" name="content" autocomplete="off">{{ $post->id ? $post->content : '' }}</textarea>

                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>

                                </div>

                                {{--                    <div class="form-group">--}}
                                {{--                        <label for="postTitle">Заголовок</label>--}}
                                {{--                        <input class="form-control" type="text" name="title" autocomplete="off">--}}
                                {{--                    </div>--}}

                                <div class="form-group">
                                    @if($post->id)
                                        <button type="submit">Сохранить</button>
                                    @else
                                        <button type="submit">Добавить</button>
                                    @endif

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
