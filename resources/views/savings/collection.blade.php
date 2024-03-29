@if($variable_arr['session_isset'])
    <div class="row">
        <div class="col-sm-4 offset-sm-4 text-center">
            <img src="{{asset('/images/customers/'.Session()->get('current_customer')->passport_link)}}" alt="" style="max-width: 50px;"><br>
            {{Session()->get('current_customer')->full_name}}
        </div>
    </div>
    @if(!$variable_arr['saving'])
    <div class="col-sm-12 alert alert-primary" role="alert">
        <p><strong>Create Saving First:</strong> There is no  current Saving for this customer. Create a new saving before you can add collections to it.</p>
    </div>
    @elseif(session()->has('info'))
        @include('layouts.notification')
    @else
    <form method="POST"  enctype="multipart/form-data" id='post-ad-form' action = "/savings/{{ $variable_arr['saving']->id }}/collection">
        {{ csrf_field() }}
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="amount_saved">Amount Saved (₦)*:</label>
                    <input type="number" class="form-control @error('amount_saved') is-invalid @enderror" placeholder="Amount Saved (₦)" name="amount_saved" value="{{ old('amount_saved') }}" min=50 step="50" autofocus>
                    @error('amount_saved')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="unit_amount">Unit Amount(₦)*:</label>
                    <input type="hidden"  name="unit_amount" value="{{ $variable_arr['saving']->unit_amount }}" >
                    <input type="text" class="form-control @error('unit_amount') is-invalid @enderror" placeholder="Unit Amount(₦)" name="unit_amount" value="₦{{ $variable_arr['saving']->unit_amount }}" disabled>
                    @error('unit_amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 alert alert-primary" role="alert">
                <p><strong>Amount Save</strong>  is for recording a saving that is different from the Unit Amount. Ignore it for the system to use Unit Amount of ₦{{ $variable_arr['saving']->unit_amount }} as saved amount.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-*-*">
                <button type="submit" class="btn btn-primary" id="submit-ad">Add Collection</button>
            </div>
        </div>
    </form>
    @endif
        @if(count(Session()->get('current_customer')->savings)>0)
        <h2 class="text-center">Recent Savings</h2>
        <div class="table-responsive">
            <table class="table-sm table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Customer Name</th>
                        <th>Unit Amount</th>
                        <th>No. of Collections</th>
                        <th>Saving Total</th>
                        <th>Date Started</th>
                        <!-- <th>Date Closed</th> -->
                    </tr>
                </thead>
                @foreach(Session()->get('current_customer')->savings as $saving)
                <tr class = "{!! $saving->cycle_complete? 'locked-row':'unlocked-row' !!}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{Session()->get('current_customer')->full_name}}</td>
                    <td>{{$saving->unit_amount}}</td>
                    <td>{{$saving->collection_count}} {!! $saving->cycle_complete? '<i class="fa fa-lock float-right"></i>':'<i class="fa fa-lock-open float-right"></i>' !!}</td>
                    <td>₦{{$saving->saving_cycle_peak}}</td>
                    <td>{{date('d M, Y',strtotime($saving->created_at))}}</td>
                    <!-- <td>{{date('d M, Y',strtotime($saving->updated_at))}}</td> -->
                </tr>
                @endforeach
            </table>
        </div>
        @endif
@else
    <!-- The customer object is not yet set and therefore display the form for getting customer ID -->
    @include('layouts.set_customer_session')
@endif
@section('footerLinks')
<script src="{{asset('/js/customer.js')}}" defer></script>
@endsection
