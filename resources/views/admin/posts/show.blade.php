@extends('admin.layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">База знаний</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <style>
                                figure.table table {
                                    width: 100%;
                                }
                                a.edit-post {
                                    vertical-align: top;
                                }
                            </style>
                            <div class="row">
                                <div class="col-12">

                                    <div class="justify-content-between pb-2 mb-3" style="border-bottom: 1px solid #ccc;">
                                        <h4 style="font-weight: bold;">{{ $post->title }}</h4>
                                        <a style="" href="{{ route('admin.posts.edit', $post) }}">изменить</a>
                                        <form action="{{ route('admin.posts.destroy', $post) }}" method="post" style="float: right;">
                                            @csrf
                                            @method('delete')
                                            <button style="border: none; background: none; text-decoration: underline;" type="submit">удалить</button>
                                        </form>
                                    </div>

                                    <div>
                                        {!! $post->id ? $post->content : '' !!}
                                    </div>




                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
