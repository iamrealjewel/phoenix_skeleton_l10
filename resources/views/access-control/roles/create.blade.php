@extends('layouts.app')
@section('title','Create New Role')

@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-6">
        <ol class="breadcrumb float-end">
            <li class="breadcrumb-item">  <a href="{{route('home')}}">Home  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{route('roles.index')}}">Roles  </a>  </li>
            <li class="breadcrumb-item active" aria-current="page">Create </li>
        </ol>
    </nav>
    <div class="content">
        <div class="row flex-center position-relative g-0">
            <div class="col-xxl-9">
                <div class="card border border-translucent shadow-sm auth-card">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <form method="post" name="requestForm" id="requestForm" action="{{route('roles.store')}}">
                                    @csrf
                                    <div class="auth-form-box-2">
                                        <div class="text-center mb-7">
                                            <div class="d-flex flex-center text-decoration-none mb-4">
                                                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                                    <a  href="{{ route('roles.index') }}"><span class="text-info create-form-icon fas fa-user-tie"></span></a>
                                                </div>
                                            </div>
                                            <h4 class="text-body-highlight">Create New Role</h4>
                                            <p class="text-body-tertiary">Please fill up the following fields</p>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="card h-100">
                                                <div class="card-body">
                                                        <div class="form-floating mb-3">
                                                            <input class="form-control @error('name') is-invalid @enderror" type="text" maxlength="30" id="name" name="name" value="{{old('name')}}" placeholder="EXAMPLE" required>
                                                            <label for="floatingInput">Role Name</label>
    
                                                            @error('name')
                                                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input class="form-control @error('guard_name') is-invalid @enderror" type="text"  id="guard_name" name="guard_name" value="web" placeholder="web" required readonly>
                                                            <label for="floatingInput">Guard Name (Usually web)</label>
    
                                                            @error('guard_name')
                                                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7">
                                                <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="row mt-3 mb-1">
                                                        <div class="col-12"><h6>Select Permissions</h6></div>
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
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="checkAll" name="checkAll" type="checkbox" />
                                                                <label class="form-check-label text-primary" for="checkAll"><strong>Select All</strong></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2 mb-3">
                                                        @foreach($permissions as $index => $permission)
                                                            <div class="col-md-6 col-lg-4 col-sm-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input individual-checkbox" id="permissions_{{$index}}" name="permissions[]" type="checkbox" value="{{ $permission->id }}" />
                                                                    <label class="form-check-label" for="permissions_{{$index}}">{{ ucwords(str_replace('-',' ',$permission->name)) }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info float-end my-4 mx-2"><span class="fas fa-download"></span> Create Role</button>
                                    </div>
                                </form>
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
    <script src="{{ asset('assets/js/check-all.js') }}"></script>
@endsection
