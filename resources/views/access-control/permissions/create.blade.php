@extends('layouts.app')
@section('title','Create New Permission')

@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-6">
        <ol class="breadcrumb float-end">
            <li class="breadcrumb-item">  <a href="{{route('home')}}">Home  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{route('permissions.index')}}">Permissions  </a>  </li>
            <li class="breadcrumb-item active" aria-current="page">Create </li>
        </ol>
    </nav>
    <div class="content">
        <div class="row flex-center position-relative vh-70 g-0">
            <div class="col-lg-4 col-md-6" style="width: 450px">
                <div class="card border border-translucent shadow-sm auth-card">
                    <div class="card-body">
                        <form method="post" name="requestForm" id="requestForm" action="{{route('permissions.store')}}">
                            @csrf
                            <div class="auth-form-box-2">
                                <div class="text-center mb-7">
                                    <div class="d-flex flex-center text-decoration-none mb-4">
                                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                            <a  href="{{ route('roles.index') }}"><span class="text-info create-form-icon fas fa-user-tie"></span></a>
                                        </div>
                                    </div>
                                    <h4 class="text-body-highlight">Create New Permission</h4>
                                    <p class="text-body-tertiary">Please fill up the following fields</p>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" maxlength="30" id="name" name="name" value="{{old('name')}}" placeholder="EXAMPLE" required>
                                            <label for="floatingInput">Permission Name</label>

                                            @error('name')
                                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-4">
                                            <input class="form-control @error('guard_name') is-invalid @enderror" type="text"  id="guard_name" name="guard_name" value="web" placeholder="EXAMPLE" required readonly>
                                            <label for="floatingInput">Guard Name (Usually web)</label>

                                            @error('guard_name')
                                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info float-end"><span class="fas fa-download"></span> Create Permission</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
