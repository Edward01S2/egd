@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center print-top">Pre-Install Ticket</h2>
        <form method="POST" id="form_ticket" action="/ist" enctype="multipart/form-data">

            {{ csrf_field() }}

        <div class="row">

            <div class="col">
                <img class="img-fluid mt-5" src="{{ asset('storage/logo.png') }}" alt="">
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="ticket_num">Ticket #</label>
                <input type="text" class="form-control" name="ticket_num" placeholder="" value="{{ $ist->ticket_num}}" >
                    <div class="invalid-feedback">
                        Ticket # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="serv_tech">Service Tech</label>
                    <input type="text" class="form-control" name="serv_tech" placeholder="" value="{{ $ist->serv_tech }}">
                    <div class="invalid-feedback">
    
                    </div>
                </div>
                <div class="mb-3">
                    <label for="visit_date">Visit Date</label>
                    <input type="date" class="form-control" name="visit_date" placeholder="" value="{{ $ist->visit_date }}" >
                    <div class="invalid-feedback">
                        Visit date is required.
                    </div>
                </div>

            </div>

            <div class="col">
                
                <div class="mb-3">
                    <label for="arrive_time">Arrival Time</label>
                    <input type="time" class="form-control" name="arrive_time" placeholder="" value="{{ $ist->arrive_time }}">
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="mb-3">
                    <label>Departure Time</label>
                    <input type="time" class="form-control" name="depart_time" placeholder="" value="{{ $ist->depart_time }}">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label>Total Hours</label>
                    <input type="text" class="form-control" name="total_time" placeholder="" value="{{ $ist->total_time }}">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

        </div> 

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Customer Name</label>
                <input type="text" class="form-control" name="cust_name" placeholder="" value="{{ $ist->cust_name }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label>Site City</label>
                <input type="text" class="form-control" name="city" placeholder="" value="{{ $ist->city }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label>Site State</label>
                <input type="text" class="form-control" name="state" placeholder="" value="{{ $ist->state }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Site Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="" value="{{ $ist->contact }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{ $ist->phone }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Initial Contact Name</label>
                <input type="text" class="form-control" name="cont_name" placeholder="" value="{{ $ist->cont_name }}" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label>Date Contacted</label>
                <input type="date" class="form-control" name="cont_date" placeholder="" value="{{ $ist->cont_date }}" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label>Time Contacted</label>
                <input type="time" class="form-control" name="cont_time" placeholder="" value="{{ $ist->cont_time }}" >
                <div class="invalid-feedback"></div>       
            </div>

        </div>

        <hr class="mb-4">

        <div class="row">
            <div class="col-md-4 mb-3">
                <label><b>Date Site Will be Ready?</b></label>
                <input type="text" class="form-control" name="site_date" placeholder="" value="{{ $ist->site_date }}" >
                <div class="invalid-feedback"></div>       
            </div>
        </div>

        <div class="mb-3">
            <label>Site Establishment Information</label>
            <textarea class="form-control" name="site_info" rows="3">{{ $ist->site_info }}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Footage</label>
                <input type="text" class="form-control" name="footage" placeholder="" value="{{ $ist->footage }}" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Gate Panels</label>
                <input type="text" class="form-control" name="gate_panels" placeholder="" value="{{ $ist->gate_panels }}" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Electronics</label>
                <input type="text" class="form-control" name="num_elec" placeholder="" value="{{ $ist->num_elec }}" >
                <div class="invalid-feedback"></div>       
            </div>

        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label># Outdoor Boxes</label>
                <input type="text" class="form-control" name="outdoor" placeholder="" value="{{ $ist->outdoor }}" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Singles</label>
                <input type="text" class="form-control" name="num_sing" placeholder="" value="{{ $ist->num_sing }}" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label># of Doubles</label>
                <input type="text" class="form-control" name="num_dbl" placeholder="" value="{{ $ist->num_dbl }}" >
                <div class="invalid-feedback"></div>       
            </div>

        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label># of Fiberglass as Steel</label>
                <input type="text" class="form-control" name="fiberglass" placeholder="" value="{{ $ist->fiberglass }}" >
                <div class="invalid-feedback"></div>       
            </div>
            <div class="col-md-4 mb-3">
                <label>Footage of Roof Fence</label>
                <input type="text" class="form-control" name="roof_fence" placeholder="" value="{{ $ist->roof_fence }}" >
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
                            {{ Form::checkbox('pl1', '1', $ist->pl1) }}
                        </div>
                    </div>
                    <input type="text" class="form-control" name="pli1" value="{{ $ist->pli1 }}">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl2', '1', $ist->pl2) }}
                        </div>
                    </div>
                <input type="text" class="form-control" name="pli2" value="{{ $ist->pli2 }}">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl3', '1', $ist->pl3) }}
                        </div>
                    </div>
                <input type="text" class="form-control" name="pli3" value="{{ $ist->pli3 }}">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl4', '1', $ist->pl4) }}
                        </div>
                    </div>
                <input type="text" class="form-control" name="pli4" value="{{ $ist->pli4 }}">
                </div>
            </div>
            
        </div>

        <div class="row force-break">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl5', '1', $ist->pl5) }}
                        </div>
                    </div>
                <input type="text" class="form-control" name="pli5" value="{{ $ist->pli5 }}">
                </div>
            </div>
            
        </div>

        <div class="row print-top">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl6', '1', $ist->pl6) }}
                        </div>
                    </div>
                <input type="text" class="form-control" name="pli6" value="{{ $ist->pli6 }}">
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ Form::checkbox('pl7', '1', $ist->pl7) }}
                        </div>
                    </div>
                <input type="text" class="form-control" name="pli7" value="{{ $ist->pli7 }}">
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
            <input type="text" class="form-control" name="inst1" placeholder="" value="{{ $ist->inst1 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-sm-1" for="inst2"><b>B</b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="inst2" placeholder="" value="{{ $ist->inst2 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-sm-1" for="inst3"><b>C</b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="inst3" placeholder="" value="{{ $ist->inst3 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="inst4"><b>D</b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="inst4" placeholder="" value="{{ $ist->inst4 }}" >
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
                <input type="text" class="form-control" name="add1" placeholder="" value="{{ $ist->add1 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add2"><b>P2 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add2" placeholder="" value="{{ $ist->add2 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add3"><b>P3 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add3" placeholder="" value="{{ $ist->add3 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add4"><b>P4 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add4" placeholder="" value="{{ $ist->add4 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add5"><b>P5 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add5" placeholder="" value="{{ $ist->add5 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-form-label col-sm-1" for="add6"><b>P6 - </b></label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="add6" placeholder="" value="{{ $ist->add6 }}" >
                <div class="invalid-feedback"></div>
            </div>
        </div>

        
        <hr class="mb-4">

        </form>

    </div> <!-- col-12 -->
</div> <!-- row -->


@endsection

@section ('customjs')


@endsection