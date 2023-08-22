@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Пользователи</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">

                            <div class="post-menu mb-3">
{{--                                <a class="btn btn-primary" href="{{ route('admin.users.create') }}">Добавить</a>--}}
                            </div>

                            <table class="table table-bordered table-sm">
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <a href="{{ route('admin.users.show', $user) }}">{{ $user->email }}</a>
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
