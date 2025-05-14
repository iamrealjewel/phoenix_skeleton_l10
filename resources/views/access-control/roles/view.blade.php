@extends('layouts.app')
@section('title','Edit Role')

@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-6">
        <ol class="breadcrumb float-end">
            <li class="breadcrumb-item">  <a href="{{ route('home') }}">Home  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{ route('roles.index') }}">Roles  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{ route('roles.show', $role->id) }}">{{ $role->name }}  </a>  </li>
            <li class="breadcrumb-item active" aria-current="page">View </li>
        </ol>
    </nav>
    <div class="content">
        <div class="row flex-center position-relative vh-70 g-0 py-5">
            <div class="col-xxl-9">
                <div class="card border border-translucent shadow-sm auth-card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0 gy-7">
                            <div class="col mx-auto">
                                <div class="col-12 p-5 pt-0">
                                    <div class="auth-form-box-2">
                                        <div class="text-center mb-7">
                                            <div class="d-flex flex-center text-decoration-none mb-4">
                                                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                                    <a  href="{{ route('roles.index') }}"><span class="text-info create-form-icon fas fa-user-tie"></span></a>
                                                </div>
                                            </div>
                                            <h4 class="text-body-highlight">Role: <span class="text-info">{{$role->name}}</span></h4>
                                            <p class="text-body-tertiary">Contents of this page cannot be edited in view mode</p>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="card h-100">
                                                <div class="card-body">
                                                        <div class="form-floating mb-3">
                                                            <input class="form-control" type="text" value="{{old('name', $role->name)}}" readonly>
                                                            <label for="floatingInput">Role Name</label>
                                                           
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input class="form-control" type="text"  value="{{old('guard_name', $role->guard_name)}}" readonly>
                                                            <label for="floatingInput">Guard Name (Usually web)</label>
                                                        </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="row mt-3 mb-1">
                                                        <div class="col-12"><h6>Allowed Permissions</h6></div>
                                                    </div>
                                                    @if ($errors->has('permissions'))
                                                        <div class="row">
                                                            <div class="alert alert-outline-warning d-flex align-items-center" role="alert">
                                                                <span class="fas fa-info-circle text-warning fs-5 me-3"></span>
                                                                <p class="mb-0 flex-1">{{ $errors->first('permissions') }}</p>
                                                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="row mt-2 mb-3">
                                                        @foreach($permissions as $index => $permission)
                                                            <div class="col-md-6 col-lg-4 col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input individual-checkbox" type="checkbox" value="{{ $permission->id }}" {{ in_array($permission->id, $rolePermissions) ? "checked" : "" }} disabled/>
                                                                    <label class="form-check-label">{{ ucwords(str_replace('-',' ',$permission->name)) }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a type="submit" class="btn btn-info float-end mt-5" href="{{ route('roles.edit', $role->id) }}"><span class="far fa-edit"></span> Edit Role</a>
                                    </div>
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

@section('scripts')
@endsection

