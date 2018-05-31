@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center">Pre-Install Ticket</h2>
        <form method="POST" id="form_ticket" action="/ist" enctype="multipart/form-data">

            {{ csrf_field() }}

        <div class="row">

            <div class="col">
                <img class="img-fluid mt-5" src="{{ asset('storage/logo.png') }}" alt="">
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="ticket_num">Ticket #</label>
                <input type="text" class="form-control" name="ticket_num" placeholder="" value="{{ $ticket_num or ' ' }}" >
                    <div class="invalid-feedback">
                        Ticket # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="serv_tech">Service Tech</label>
                    <input type="text" class="form-control" name="serv_tech" placeholder="" value="{{ Auth::user()->name }}" readonly="readonly">
                    <div class="invalid-feedback">
    
                    </div>
                </div>
                <div class="mb-3">
                    <label for="visit_date">Visit Date</label>
                    <input type="date" class="form-control" name="visit_date" placeholder="" value="" >
                    <div class="invalid-feedback">
                        Visit date is required.
                    </div>
                </div>

            </div>

            <div class="col">
                
                <div class="mb-3">
                    <label for="arrive_time">Arrival Time</label>
                    <input type="time" class="form-control" name="arrive_time" placeholder="" value="">
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="mb-3">
                    <label>Departure Time</label>
                    <input type="time" class="form-control" name="depart_time" placeholder="" value="">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label>Total Hours</label>
                    <input type="text" class="form-control" name="total_time" placeholder="" value="">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

        </div> 

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Customer Name</label>
                <input type="text" class="form-control" name="cust_name" placeholder="" value="{{ $bus_name or ' ' }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label>Site City</label>
                <input type="text" class="form-control" name="city" placeholder="" value="{{ $bus->GE1_Description or ' ' }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label>Site State</label>
                <input type="text" class="form-control" name="state" placeholder="" value="{{ $bus->GE2_Short or ' ' }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Site Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="" value="{{ $contact->Contact_Name }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{ $contact->Phone }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Initial Contact Name</label>
                <input type="text" class="form-control" name="cont_name" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label>Date Contacted</label>
                <input type="date" class="form-control" name="cont_date" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label>Time Contacted</label>
                <input type="time" class="form-control" name="cont_time" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>

        </div>

        <hr class="mb-4">

        <div class="row">
            <div class="col-md-4 mb-3">
                <label><b>Date Site Will be Ready?</b></label>
                <input type="text" class="form-control" name="site_date" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
        </div>

        <div class="mb-3">
            <label>Site Establishment Information</label>
            <textarea class="form-control" id="svc_reason" name="site_info" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Footage</label>
                <input type="text" class="form-control" name="footage" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Gate Panels</label>
                <input type="text" class="form-control" name="gate_panels" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Electronics</label>
                <input type="text" class="form-control" name="num_elec" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>

        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label># Outdoor Boxes</label>
                <input type="text" class="form-control" name="outdoor" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Singles</label>
                <input type="text" class="form-control" name="num_sing" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Doubles</label>
                <input type="text" class="form-control" name="num_dbl" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>

        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label># of Fiberglass as Steel</label>
                <input type="text" class="form-control" name="fiberglass" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label>Footage of Roof Fence</label>
                <input type="text" class="form-control" name="roof_fence" placeholder="" value="" >
                <div class="invalid-feedback"></div>       
            </div>

        </div>

        <hr class="mb-4">

        <div class="card mb-4">
            <div class="card-body">
                <b>Punch List to be completed by CUSTOMER prior to install</b>
            </div>
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl1', '1', 1) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli1" value="Clear all vegetation, tree limbs and debris from fence line for an unobstructed path 10 ft wide and 15 ft high">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl2', '1', null) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli2" value="Locate and be ready to show interior lines and drains to avoid damages during installation">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl3', '1', null) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli3" value="">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl4', '1', null) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli4" value="">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl5', '1', null) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli5" value="">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl6', '1', null) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli6" value="">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl7', '1', null) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli7" value="">
                </div>
            </div>
            
        </div>

        <hr class="mb-4">

        <div class="card mb-4">
            <div class="card-body">
                <b>Installation details and/or obstacles on layout</b>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-sm-1" for="inst1"><b>A</b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="inst1" placeholder="" value="Electronics located:" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-sm-1" for="inst2"><b>B</b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="inst2" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-sm-1" for="inst3"><b>C</b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="inst3" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="inst4"><b>D</b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="inst4" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <hr class="mb-4">

        <div class="card mb-4">
            <div class="card-body">
                <b>Additional notes & picture details</b>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add1"><b>P1 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add1" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add2"><b>P2 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add2" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add3"><b>P3 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add3" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add4"><b>P4 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add4" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add5"><b>P5 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add5" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add6"><b>P6 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add6" placeholder="" value="" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        
        <hr class="mb-4">
        <input type="hidden" name="tt" value="Pre-Install"/>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>

    </div> <!-- col-12 -->
</div> <!-- row -->


@endsection

@section ('customjs')


@endsection