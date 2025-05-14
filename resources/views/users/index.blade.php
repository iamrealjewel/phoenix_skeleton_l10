@extends('layouts.app')
@section('title','Users')

@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-6">
        <ol class="breadcrumb float-end">
            <li class="breadcrumb-item">  <a href="{{route('home')}}">Home  </a>  </li>
            <li class="breadcrumb-item active" aria-current="page">Users </li>
        </ol>
    </nav>
    <div class="content">
        <div class="card m-2 shadow-sm">
            <div class="card-header card-header-common p-3 pb-2">
                <span class="me-2 text-warning" data-feather="grid" style="stroke-width:2;"></span><b>Users</b>
                <span class="float-end">
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-phoenix-secondary rounded-pill me-0" type="button">Add New
                        <span class="fas fa-plus-circle text-success"></span>
                    </a>
                </span>
            </div>
            <div class="card-body">
                <div id="tableExample3" data-list='{"valueNames":["id","name","username", "email", "role", "phone", "remarks", "active"],"page":12,"pagination":true, "filter":{"key":"role"}}'>
                    <div class="row">
                        <div class="col-6">
                            <div class="search-box mb-3">
                                <form class="position-relative">
                                    <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>

                                </form>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row justify-content-end g-0">
                                <div class="col-auto">
                                    <select class="form-select form-select-sm mb-3" data-list-filter="data-list-filter">
                                        @php
                                            // Extract unique descriptions from $categories
                                            $uniqueRoles = [];
                                            foreach ($users as $user) {
                                                $role = $user->roles->first();
                                                if ($role) {
                                                    $uniqueRoles[] = $role->name;
                                                }
                                            }
                                            $uniqueRoles = array_unique($uniqueRoles);
                                        @endphp
                                        <option selected="" value="">Select Role</option>
                                        @foreach ($uniqueRoles as $description)
                                            <option value="{{ $description }}">{{ $description }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm fs-9 mb-0">
                            <thead>
                            <tr>
                                {{-- <th class="sort border-top border-translucent ps-3"></th> --}}
                                <th class="sort border-top" data-sort="name">Full Name</th>
                                <th class="sort border-top" data-sort="username">Username</th>
                                <th class="sort border-top" data-sort="email">Email</th>
                                <th class="sort border-top" data-sort="role">Role</th>
                                <th class="sort border-top" data-sort="phone">Phone</th>
                                <th class="sort border-top" data-sort="remarks">Site</th>
                                <th class="sort border-top" data-sort="active">Status</th>
                                <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($users as $user)
                                <tr>
                                    {{-- <td class="align-middle ps-3 id">
                                        @if(isset($user->avatar_path))
                                            <a>
                                                <img class="rounded-2 border border-secondary-subtle border-2" src="{{asset('storage/' . $user->avatar_path)}}" alt="" width="50">
                                            </a>
                                        @else
                                            <a class="">
                                                <img class="rounded-2 border border-secondary-subtle border-2" src="{{asset('assets/img/no-image.jpg')}}" alt="" width="50">
                                            </a>
                                        @endif
                                    </td> --}}
                                    <td class="align-middle name"><strong>{{ $user->name }}</strong></td>
                                    <td class="align-middle username">{{ $user->username }}</td>
                                    <td class="align-middle email">{{ $user->email }}</td>
                                    <td class="align-middle role">
                                        @if($user->roles->isNotEmpty())
                                            <span class="badge badge-phoenix fs-10 badge-phoenix-info">{{ $user->roles->first()->name }}</span>
                                        @endif
                                    </td>

                                    <td class="align-middle phone">{{ $user->phone }}</td>
                                    <td class="align-middle remarks">
                                        @if(isset($user->siteUser))
                                           {{ $user->siteUser->siteName->description }}
                                        @endif
                                    </td>
                                    <td class="align-middle active">
                                    @if($user->is_active == 1)
                                            <a href="{{route('users.statusChange', $user->id)}}"><div class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="fw-bold">Active</span><span class="ms-1 fas fa-check"></span></div></a>
                                    @else
                                            <a href="{{route('users.statusChange', $user->id)}}"><div class="badge badge-phoenix fs-10 badge-phoenix-danger"><span class="fw-bold">Inactive</span><span class="ms-1 fas fa-ban"></span></div></a>
                                    @endif
                                    </td>
                                    <td class="align-middle white-space-nowrap pe-0 text-end">
                                        <a class="text-decoration-none" href="{{ route('users.show', $user->id)}}">
                                            <span class="btn btn-sm btn-outline-success far fa-folder-open py-1 px-1 rounded-1"></span>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('users.edit', $user->id) }}">
                                            <span class="btn btn-sm btn-outline-info far fa-edit  py-1 px-1 rounded-1"></span>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('users.passwordChange', $user->id) }}">
                                            <span class="btn btn-sm btn-light border border-secondary-subtle fas fa-key py-1 px-1 rounded-1"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-between-center pt-3">
                        <div class="pagination d-none"></div>
                        <p class="mb-0 fs-9">
                            <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                            <span class="d-none d-sm-inline-block"> &mdash; </span>
                            <a class="fw-semibold" href="#!" data-list-view="*">
                                View all
                                <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                            </a><a class="fw-semibold d-none" href="#!" data-list-view="less">
                                View Less
                                <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                            </a>
                        </p>
                        <div class="d-flex">

                            <button class="btn btn-sm btn-subtle-secondary rounded-pill" type="button" data-list-pagination="prev"><span>Previous</span></button>

                            <button class="btn btn-sm btn-subtle-secondary px-4 ms-2 rounded-pill" type="button" data-list-pagination="next"><span>Next</span></button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

