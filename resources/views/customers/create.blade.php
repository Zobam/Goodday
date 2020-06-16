<div class="card">
  <div class="card-header">
    Create A New Account
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">Fields Mark With (*) Are Required</h5>
        <form method="POST"  enctype="multipart/form-data" id='post-ad-form' action = '/customers'>
            {{ csrf_field() }}
            <div class="row">
                <div class = "col-sm-4 offset-sm-4">
                    <div style="width: 100px; height: 100px; background-color: cornflowerblue; margin: auto;">
                        <img src="{{asset('/images/male_avatar.png')}}" alt="" id="place_holder" style="max-width: 100px;max-height: 100px;">
                    </div>
                    <input type="file" class="form-control-file" id="customer_passport" name="customer_passport" hidden>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="title">First Name*:</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="surname">Surname*:</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="Surname" id="surname" name="surname" value="{{ old('surname') }}" required>
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="other_name">Other Name:</label>
                        <input type="text" class="form-control @error('other_name') is-invalid @enderror" placeholder="Other Name" id="other_name" name="other_name" value="{{ old('other_name') }}" required>
                        @error('other_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="phone_number">Phone No.*:</label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Surname" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="next_of_kin">Next of Kin*:</label>
                        <input type="text" class="form-control @error('next_of_kin') is-invalid @enderror" placeholder="Next of Kin" id="next_of_kin" name="next_of_kin" value="{{ old('next_of_kin') }}" required>
                        @error('next_of_kin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nok_relationship">Relationship*:</label>
                        <select class="form-control @error('nok_relationship') is-invalid @enderror" id="nok_relationship" name="nok_relationship" required>
                            <option value="father">Father</option>
                            <option value="husband">Husband</option>
                        </select>
                        @error('nok_relationship')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="state">State*:</label>
                        <input type="text" class="form-control @error('state') is-invalid @enderror" placeholder="State" id="state" name="state" value="{{ old('state') }}" required>
                        @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lga">LGA*:</label>
                        <select class="form-control @error('lga') is-invalid @enderror" id="lga" name="lga" required>
                            <option value="father">Father</option>
                            <option value="husband">Husband</option>
                        </select>
                        @error('lga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="community">Community*:</label>
                        <input type="text" class="form-control @error('community') is-invalid @enderror" placeholder="Community" id="community" name="community" value="{{ old('community') }}" required>
                        @error('community')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="full_address">Full Address*:</label>
                        <input type="text" class="form-control @error('full_address') is-invalid @enderror" placeholder="Full Address" id="full_address" name="full_address" value="{{ old('full_address') }}" required>
                        @error('full_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email (optional):</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="poverty_index">Poverty Index:</label>
                        <input type="text" class="form-control @error('poverty_index') is-invalid @enderror" placeholder="Poverty Index" id="poverty_index" name="poverty_index" value="{{ old('poverty_index') }}">
                        @error('poverty_index')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="gender">Gender*:</label>
                        <select class="form-control @error('gender') is-invalid @enderror" required id="gender" name="gender">
                        <option value="">--Select Category--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-*-*">
                    <button type="submit" class="btn btn-primary" id="submit-ad">Create Account</button>
                </div>
            </div>
        </form>
  </div>
</div>
@section('footerLinks')
<script src="{{asset('/js/customer.js')}}" defer></script>
@endsection