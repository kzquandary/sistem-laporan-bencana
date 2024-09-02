@extends('templates.master')
@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>Profile</h4>
        <h6>User Profile</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="profile-set">
            <div class="profile-head">
            </div>
            <div class="profile-top">
                <div class="profile-content">
                    <div class="profile-contentimg">
                        <img src="{{ asset('assets/img/avatar/user.png') }}" alt="img" id="blah">
                        <div class="profileupload">
                            <input type="file" id="imgInp">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/edit-set.svg') }}"
                                    alt="img"></a>
                        </div>
                    </div>
                    <div class="profile-contentname">
                        <h2>William Castillo</h2>
                        <h4>Updates Your Photo and Personal Details.</h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" value="William">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" value="Castilo">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label>Email</label>
                    <input type="email" class="form-control" value="william@example.com">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label">Phone</label>
                    <input type="text" value="+1452 876 5432">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" value="William Castilo">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="input-blocks">
                    <label class="form-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="pass-input form-control">
                        <span class="fas toggle-password fa-eye-slash"></span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>

</div>
@endsection