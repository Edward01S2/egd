@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center print-top">Exposure Ticket</h2>
        <form method="POST" id="form_ticket" action="" enctype="multipart/form-data">

            {{ csrf_field() }}

        <div class="row">

            <div class="col">
                <img class="img-fluid mt-5" src="{{ asset('storage/logo.png') }}" alt="">
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="ticket_num">Ticket #</label>
                <input type="text" class="form-control" name="ticket_num" placeholder="" value="{{ $expo->ticket_num }}" >
                    <div class="invalid-feedback">
                        Ticket # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="acct_num">Account #</label>
                <input type="text" class="form-control" name="acct_num" placeholder="" value="{{ $expo->acct_num }}" >
                    <div class="invalid-feedback">
                        Account # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="serv_tech">Service Tech</label>
                    <input type="text" class="form-control" name="serv_tech" placeholder="" value="{{ $expo->serv_tech }}" disabled>
                    <div class="invalid-feedback">
    
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="visit_date">Visit Date</label>
                    <input type="date" class="form-control" name="visit_date" placeholder="" value="{{ $expo->visit_date }}" >
                    <div class="invalid-feedback">
                        Visit date is required.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="arrive_time">Arrival Time</label>
                    <input type="time" class="form-control" name="arrive_time" placeholder="" value="{{ $expo->arrive_time }}">
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="mb-3">
                    <label>Departure Time</label>
                    <input type="time" class="form-control" name="depart_time" placeholder="" value="{{ $expo->depart_time }}">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

        </div> 

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Customer Name</label>
                <input type="text" class="form-control" name="cust_name" placeholder="" value="{{ $expo->cust_name }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label>Site City</label>
                <input type="text" class="form-control" name="city" placeholder="" value="{{ $expo->city }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label>Site State</label>
                <input type="text" class="form-control" name="state" placeholder="" value="{{ $expo->state}}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Site Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="" value="{{ $expo->contact}}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{ $expo->phone }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-7 mb-3">
                <label>Name of Person Exposed:</label>
                <input type="text" class="form-control" name="expo_name" placeholder="" value=" {{ $expo->expo_name }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="expo_phone" placeholder="" value="{{ $expo->expo_phone}}">
                <div class="invalid-feedback">
                    
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-4 mb-3">
                <label>Date of Exposure</label>
                <input type="date" class="form-control" name="expo_date" value="{{ $expo->expo_date }}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-4 mb-3">
                <label>Time of Exposure</label>
                <input type="time" class="form-control" name="expo_time" value="{{ $expo->expo_time }}">
                <div class="invalid-feedback"></div>
            </div>

        </div>

        <div class="row">
          
            <div class="col-md-4 mb-3">
                <div class="form-check">
                    <input type="hidden" name="med_att" value="0">
                    {{ Form::checkbox('med_att', '1', $expo->med_att, ['class' => 'form-check-input', 'id' => 'med_att']) }}
                    <label class="form-check-label" for="med_att">Was medical attention sought?</label>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="form-check">
                    <input type="hidden" name="workman" value="0">
                    {{ Form::checkbox('workman', '1', $expo->workman, ['class' => 'form-check-input', 'id' => 'workman']) }}
                    <label class="form-check-label" for="workman">If yes to medical attention, was it filed as Workman's Comp?</label>
                </div>
            </div>

        </div>

        <div class="mb-3">
            <label>Description of exposure, to include location on fence:</label>
            <textarea class="form-control" id="desc_expo" name="desc_expo" rows="3">{{ $expo->desc_expo }}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Witnesses and their contact info:</label>
            <textarea class="form-control" id="wit_info" name="wit_info" rows="3">{{ $expo->wit_info }}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Condition of the fence, status at the time of exposure:</label>
            <textarea class="form-control" id="cond" name="cond" rows="3">{{ $expo->acct_num }}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Tech assessment:</label>
        <textarea class="form-control" id="assess" name="assess" rows="3">{{ $expo->assess }}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Additional comments</label>
        <textarea class="form-control" id="add_comm" name="add_comm" rows="3">{{ $expo->add_comm}}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="row mb-4 force-break">
            <div class="col-8">
                <div class="form-check">
                    <input type="hidden" name="fence_depart" value="0">
                    {{ Form::checkbox('fence_depart', '1', $expo->fence_depart, ['class' => 'form-check-input', 'id' => 'fence_depart']) }}
                    <label class="form-check-label" for="fence_depart">Is fence working properly upon tech departure:</label>
                </div>
            </div>
        </div>


        <div id="sig-block" class="row mb-3 print-top">

            <div class="col-6">
                    <div class="wrapper">
                        <img src="{{ asset('storage/' . $expo->ticket_num . '/expo_sig.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <span class="sig-text align-middle">Please sign in the box above:</span>
                        </div>
                    </div>
                </div>

            <div class="col-6">

                <div>
                    <label>Please print name:</label>
                    <input type="text" class="form-control mb-3" name="stname" value="">
                </div>

            </div>

        </div>
        
        <hr class="mb-4">

        </form>

    </div> <!-- col-12 -->
</div> <!-- row -->


@endsection

@section ('customjs')

@endsection