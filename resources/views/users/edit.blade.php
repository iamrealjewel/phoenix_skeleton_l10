@extends('layouts.app')
@section('title','Edit User')

@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-6">
        <ol class="breadcrumb float-end">
            <li class="breadcrumb-item">  <a href="{{ route('home') }}">Home  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{ route('users.index') }}">Users  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}  </a>  </li>
            <li class="breadcrumb-item active" aria-current="page">Edit </li>
        </ol>
    </nav>
    <div class="content">
        <div class="row flex-center position-relative vh-70 g-0">
            <div class="col-lg-4 col-md-6">
                <div class="card border border-translucent auth-card shadow-sm">
                    <div class="card-body">
                        <form method="post" name="requestForm" id="requestForm" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="auth-form-box-2">
                                <div class="text-center mb-7 mt-4">
                                    <div class="d-flex flex-center text-decoration-none mb-4 ">
                                        <span class="fas fa-user-edit fs-2"></span>
                                    </div>
                                    <h4 class="text-body-highlight">Edit User: <span class="text-info">{{$user->name}}</span></h4>
                                    <p class="text-body-tertiary">Please modify the following fields where required</p>
                                </div>
                                <div class="row mt-5">
                                    @if ($errors->has('error'))
                                        <div class="alert alert-danger">{{ $errors->first('error') }}</div>
                                    @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"  id="name" name="name" value="{{old('name', $user->name)}}" placeholder="EXAMPLE" required>
                                    <label for="name">User Full Name</label>

                                    @error('name')
                                    <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" type="text"  id="email" name="email" value="{{old('email', $user->email)}}" placeholder="EXAMPLE" required>
                                            <label for="email">Email</label>

                                            @error('email')
                                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('phone') is-invalid @enderror" type="text"  id="phone" name="phone" value="{{old('phone', $user->phone)}}" placeholder="EXAMPLE" required>
                                            <label for="phone">Phone</label>

                                            @error('phone')
                                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12"><h6>Select Role</h6></div>
                                </div>

                                <div class="row mt-2">
                                    @foreach($roles as $role)
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input individual-checkbox" id="role_{{ $role->id }}" name="role" type="radio" {{ $userRole && $role->id == $userRole->id ? "checked" : "" }} value="{{ $role->id }}" data-value="{{ $role->name }}" required oninput="toggleSiteField('{{$role->name}}')"/>
                                                <label class="form-check-label" for="role_{{ $role->id }}">{{ ucfirst($role->name) }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                

                                <div class="row mt-3">
                                    <div class="col-12"><h6>Status</h6></div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check mb-5">
                                            <input class="form-check-input" id="is_active" name="is_active" type="checkbox" value="1" {{$user->is_active == 1 ? 'checked': ''}}>
                                            <label class="form-check-label" for="is_active">Active</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ route('users.passwordChange', $user->id) }}" class="btn btn-outline-secondary float-start"><span class="fas fa-user-lock"> </span> Change Password</a>

                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-info float-end"><span class="fas fa-edit"></span> Update User</button>
                                    </div>
                                </div>

                            </div>
                            <div class="alert-container"></div>
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

