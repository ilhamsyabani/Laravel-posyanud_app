@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('Users') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="alert alert-info">
                <div class="alert-title">Sample table page</div>
            </div>

            <div class="card">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email Address') }}</th>
                                <th>{{ __('Role') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Created at') }}</th>
                                <th>{{ __('Updated in') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    {{-- {{ $item->status === 'kosong' ? 'disabled' : '' }} --}}
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->NIK }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="/admiDetail/{{ $user->id }}"
                                            class="btn btn-primary btn-sm text-white m-1" type="button">View</i></a>
                                        {{-- <a href="/admind/{{ $user->id }}" class="btn btn-actions">View</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($users->hasPages())
                    <div class="card-footer pb-0">
                        {{ $users->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
