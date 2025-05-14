@extends('layouts.app')
@section('title','View User')

@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-6">
        <ol class="breadcrumb float-end">
            <li class="breadcrumb-item">  <a href="{{route('home')}}">Home  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{route('users.index')}}">Users  </a>  </li>
            <li class="breadcrumb-item">  <a href="">{{ $user->name }}  </a>  </li>
            <li class="breadcrumb-item active" aria-current="page">View </li>
        </ol>
    </nav>
    <div class="content">
        <div class="row flex-center position-relative vh-70 g-0">
            <div class="col-lg-4 col-md-6">
                <div class="card border border-translucent auth-card shadow-sm">
                    <div class="card-body">
                        <div class="auth-form-box-2">
                            <div class="text-center mb-7 mt-4">
                                <div class="d-flex flex-center text-decoration-none mb-4 ">
                                    <span class="fas fa-user fs-2"></span>
                                </div>
                                <h4 class="text-body-highlight">User: <span class="text-info">{{ $user->name }}</span></h4>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text"  id="name" name="name" value="{{ $user->name }}" placeholder="EXAMPLE" readonly>
                                        <label for="name">User Full Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text"  id="name" name="name" value="{{ $user->username }}" placeholder="EXAMPLE" readonly>
                                        <label for="name">Username</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text"  id="email" name="email" value="{{ $user->email }}" placeholder="EXAMPLE" readonly>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text"  id="phone" name="phone" value="{{ $user->phone }}" placeholder="EXAMPLE" readonly>
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12"><h6>Assigned Role</h6></div>
                            </div>

                            <div class="row mt-2 mb-3">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input individual-checkbox" id="role_{{ $userRole->id }}" name="role" type="radio"  value="{{ $userRole->id }}" checked disabled />
                                        <label class="form-check-label" for="role_{{ $userRole->id }}">{{ ucfirst($userRole->name) }}</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-12"><h6>Status</h6></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check mb-5">
                                        <input class="form-check-input" id="is_active" name="is_active" type="checkbox" value="1" {{$user->is_active == 1 ? 'checked': ''}} disabled>
                                        <label class="form-check-label" for="is_active">Active</label>
                                    </div>
                                </div>
                            </div>
                            <a type="submit" class="btn btn-info float-end" href="{{ route('users.edit', $user->id) }}"><span class="far fa-edit"></span> Edit User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

