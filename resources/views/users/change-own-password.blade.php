@extends('layouts.app')
@section('title','Update user password')

@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-6">
        <ol class="breadcrumb float-end">
            <li class="breadcrumb-item">  <a href="{{ route('home') }}">Home  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{ route('users.index') }}">Users  </a>  </li>
            <li class="breadcrumb-item">  <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}  </a>  </li>
            <li class="breadcrumb-item active" aria-current="page">Change-Password </li>
        </ol>
    </nav>
    <div class="content">
        <div class="row flex-center position-relative vh-70 g-0">
            <div class="col-lg-4 col-md-6" style="width: 450px">
                <div class="card border border-translucent auth-card shadow-sm">
                    <div class="card-body">
                        <form method="post" name="requestForm" id="requestForm" action="{{route('users.updateOwnPassword', $user->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="auth-form-box-2">
                                <div class="text-center mb-7">
                                    <div class="d-flex flex-center text-decoration-none mb-4 ">
                                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                            <div class="image-upload-box2 " id="thumbnailUploadBox">
                                                @if(isset($user->avatar_path))
                                                    <img class="uploaded-image" id="uploadedThumbnail" src="{{ asset('storage/' . $user->avatar_path) }}" alt="Uploaded Image">
                                                @else
                                                    <img class="" id="uploadedThumbnail" src="{{ asset('assets/img/defaults/default-user-thumbnail.jpg') }}" alt="Uploaded Image">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="text-body-highlight">Change <span class="text-info">{{$user->name}}'s </span>Password</h4>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('current_password') is-invalid @enderror" type="password"  id="current_password" name="current_password" placeholder="EXAMPLE">
                                    <label for="phone">Enter Current Password</label>

                                    @error('current_password')
                                    <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"  id="password" name="password" placeholder="EXAMPLE">
                                    <label for="password">New Password</label>

                                    @error('password')
                                    <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-4">
                                    <input class="form-control @error('phone') is-invalid @enderror" type="password"  id="confirm-password" name="confirm-password" placeholder="EXAMPLE">
                                    <label for="confirm-password">Confirm Password</label>

                                    @error('confirm-password')
                                    <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-info float-end"><span class="fas fa-edit"></span> Update Password</button>
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
    <script>
        function categorySelect(code, description) {
            console.log("reached");
            document.getElementById('category_description').value = description;
            document.getElementById('category').value = code;
        }

        document.getElementById('supp_duty').addEventListener('input', handleNumericInput);
        document.getElementById('price_inc_vat').addEventListener('input', handleNumericInput);
    </script>
@endsection

