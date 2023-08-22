@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">База знаний</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">

                            <div class="post-menu mb-3">
                                <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Добавить</a>
                            </div>

                            <table class="table table-bordered table-sm">
                                @foreach($posts->sortBy('title') as $post)
                                    <tr>
                                        <td>
                                            <a href="{{ route('admin.posts.show', $post) }}">{{ $post->title }}</a>
                                        </td>

{{--                                        <td class="min">--}}
{{--                                            <a href="{{ route('admin.posts.edit', $post) }}"><span class="fa fa-edit"></span></a>--}}
{{--                                        </td>--}}

                                        <td class="min">
                                            <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <button type="submit" name="delete" value="delete" style="border: none; background: none;">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
