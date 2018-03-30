@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center">Intrusion Service Ticket</h2>
        <form method="POST" id="intrusion_ticket" action="/intrusion">

            {{ csrf_field() }}

        <div class="row">

            <div class="col">
                <img class="img-fluid mt-5" src="{{ asset('storage/logo.png') }}" alt="">
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="ticket_num">Ticket #</label>
                <input type="text" class="form-control" name="ticket_num" placeholder="" value="{{ $intrusion->ticket_num }}" >
                    <div class="invalid-feedback">
                        Ticket # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="acct_num">Account #</label>
                    <input type="text" class="form-control" name="acct_num" placeholder="" value="{{ $intrusion->acct_num}}" >
                    <div class="invalid-feedback">
                        Account # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="serv_tech">Service Tech</label>
                    <input type="text" class="form-control" name="serv_tech" placeholder="" value="{{ $intrusion->serv_tech }}" disabled>
                    <div class="invalid-feedback">
    
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="visit_date">Visit Date</label>
                    <input type="date" class="form-control" name="visit_date" placeholder="" value="{{ $intrusion->visit_date }}" >
                    <div class="invalid-feedback">
                        Visit date is required.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="arrive_time">Arrival Time</label>
                    <input type="time" class="form-control" name="arrive_time" placeholder="" value="{{ $intrusion->arrive_time }}">
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="mb-3">
                    <label>Departure Time</label>
                    <input type="time" class="form-control" name="depart_time" placeholder="" value="{{ $intrusion->depart_time }}">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

        </div> 

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Customer Name</label>
                <input type="text" class="form-control" name="cust_name" placeholder="" value="{{ $intrusion->cust_name }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label>Site City</label>
                <input type="text" class="form-control" name="city" placeholder="" value="{{ $intrusion->city }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label>Site State</label>
                <input type="text" class="form-control" name="state" placeholder="" value="{{ $intrusion->state }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Site Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="" value="{{ $intrusion->contact }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{ $intrusion->phone }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <hr />
            <h4>SITE INFORMATION</h4>
        <hr />

        <div class="row">

            <div class="col">

                <div class="text-center mb-3"><b>Description</b></div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 1</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone1" placeholder="" value="{{ $intrusion->zone1 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 2</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone2" placeholder="" value="{{ $intrusion->zone2 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 3</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone3" placeholder="" value="{{ $intrusion->zone3 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 4</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone4" placeholder="" value="{{ $intrusion->zone4 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 5</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone5" placeholder="" value="{{ $intrusion->zone5 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 6</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone6" placeholder="" value="{{ $intrusion->zone6 }}">
                    </div>
                </div>
  
            </div>

            <div class="col">

                <div class="text-center mb-3"><b>Description</b></div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 7</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone7" placeholder="" value="{{ $intrusion->zone7 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 8</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone8" placeholder="" value="{{ $intrusion->zone8 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 9</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone9" placeholder="" value="{{ $intrusion->zone9 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 10</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone10" placeholder="" value="{{ $intrusion->zone10 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 11</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone11" placeholder="" value="{{ $intrusion->zone11 }}">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 12</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone12" placeholder="" value="{{ $intrusion->zone12 }}">
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>System</label>
                {{ Form::select('system_type', $sel_options[1], $intrusion->system_type, ['class'=> 'custom-select form-control mb-3']) }}   
            </div>
            <div class="col-md-4 mb-3">
                <label># Keypads:</label>
                <input type="text" class="form-control" name="key_num" placeholder="" value="{{ $intrusion->key_num }}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-4 mb-3">
                <label># Partitions:</label>
                <input type="text" class="form-control" name="part_num" placeholder="" value="{{ $intrusion->part_num }}">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Battery Voltage</label>
                <input type="text" class="form-control" name="batt_volt" placeholder="" value="{{ $intrusion->batt_volt }}">   
            </div>
            <div class="col-md-4 mb-3">
                <label>GSM/Phone Line</label>
                <input type="text" class="form-control" name="gsm" placeholder="" value="{{ $intrusion->gsm }}">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="ac_power" value="0">
                    {{ Form::checkbox('ac_power', '1', $intrusion->ac_power, ['class' => 'custom-control-input', 'id' => 'ac_power']) }}
                    <label class="custom-control-label" for="ac_power">AC Power?</label>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="user_code" value="0">
                    {{ Form::checkbox('user_code', '1', $intrusion->user_code, ['class' => 'custom-control-input', 'id' => 'user_code']) }}
                    <label class="custom-control-label" for="user_code">User Code Changes?</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label>Equipment Changes & Description</label>
            <textarea class="form-control" id="equip" name="equip" rows="3">{{ $intrusion->equip }}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Monitoring Rep Name:</label>
                <input type="text" class="form-control" name="rep_name" placeholder="" value="{{ $intrusion->rep_name }}">   
            </div>
            <div class="col-md-4 mb-3">
                <label>Alarm signal time:</label>
                <input type="time" class="form-control" name="alarm_time" placeholder="" value="{{ $intrusion->alarm_time }}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Monitoring online time:</label>
                <input type="time" class="form-control" name="online_time" placeholder="" value="{{ $intrusion->online_time }}">
                <div class="invalid-feedback"></div>
            </div>

        </div>

        <div class="mb-3">
            <label>Reason for Service:</label>
            <textarea class="form-control" id="equip" name="svc_reason" rows="3">{{ $intrusion->svc_reason }}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-5">
            <label>Solution:</label>
            <textarea class="form-control" id="equip" name="solution" rows="3">{{ $intrusion->solution }}</textarea>
            <div class="invalid-feedback"></div>
        </div>


        <div id="sig-block" class="row mb-3">

            <div class="col-6">
                <div class="wrapper">
                    <img src="{{ asset('storage/' . $intrusion->ticket_num . '/intrusion_sig.jpg') }}" alt="" class="img-fluid">
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
                <input type="text" class="form-control mb-3" name="stname" value="{{ $intrusion->stname }}">
                </div>
                <div >
                    <label class="col-12">Service quality rating: low(1)-high(10)</label>
                    {{ Form::select('service_qual', $sel_options[0], $intrusion->service_qual, ['class'=> 'custom-select form-control mb-3']) }}    
                </div>
            </div>

        </div>
        
        </form>

    </div> <!-- col-12 -->
</div> <!-- row -->


@endsection

@section ('customjs')

@endsection