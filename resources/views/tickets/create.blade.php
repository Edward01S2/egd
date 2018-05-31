@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center">Standard Service Ticket</h2>
        <form method="POST" id="form_ticket" action="/tickets" enctype="multipart/form-data">

            {{ csrf_field() }}

        <div class="row">

            <div class="col">
                <img class="img-fluid mt-5" src="{{ asset('storage/logo.png') }}" alt="">
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="ticket_num">Ticket #</label>
                    <input type="text" class="form-control" name="ticket_num" placeholder="" value="{{ $ticket_num or '' }}" >
                    <div class="invalid-feedback">
                        Ticket # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="acct_num">Account #</label>
                <input type="text" class="form-control" name="acct_num" placeholder="" value="{{ $alarm->Alarm_Account or ' ' }}" >
                    <div class="invalid-feedback">
                        Account # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="serv_tech">Service Tech</label>
                    <input type="text" class="form-control" name="serv_tech" placeholder="" value="{{ Auth::user()->name }}" readonly="readonly">
                    <div class="invalid-feedback">
    
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="visit_date">Visit Date</label>
                    <input type="date" class="form-control" name="visit_date" placeholder="" value="" >
                    <div class="invalid-feedback">
                        Visit date is required.
                    </div>
                </div>
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
            <div class="col-md-4 mb-3">
                <label>Site Contact</label>
            <input type="text" class="form-control" name="contact" placeholder="" value="{{ $contact->Contact_Name }}" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{ $contact->Phone }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label>Reason for service/issue(s) found</label>
            <textarea class="form-control" id="svc_reason" name="svc_reason" rows="2"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Corrective action taken</label>
            <textarea class="form-control" id="corr_action" name="corr_action" rows="2"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Recommendations for future prevention</label>
            <textarea class="form-control" id="rec_prev" name="rec_prev" rows="2"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Other comments or safety concerns</label>
            <textarea class="form-control" name="other_comm" rows="2"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <hr />
            <h4>SYSTEM INFORMATION</h4>
        <hr />

        <div class="row">

            {{-- <div class="col">
                <div class="text-center mb-3"><b>Description</b></div>
                <label class="col-4 col-form-label mb-3">Zone 1</label>
                {{ Form::select('zone1', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 2</label>
                {{ Form::select('zone2', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 3</label>
                {{ Form::select('zone3', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}    
            </div>

            <div class="col">
                <div class="text-center mb-3"><b>Description</b></div>
                <label class="col-4 col-form-label mb-3">Zone 4</label>
                {{ Form::select('zone4', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 5</label>
                {{ Form::select('zone5', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 6</label>
                {{ Form::select('zone6', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}    
            </div>

            <div class="col">
                <div class="text-center mb-3"><b>Description</b></div>
                <label class="col-4 col-form-label mb-3">Zone 7</label>
                {{ Form::select('zone7', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 8</label>
                {{ Form::select('zone8', $sel_options[0], null, ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Key #</label>
                {{ Form::select('zone9', $sel_options[1], null, ['class'=> 'col-7 custom-select']) }}    
            </div> --}}

        </div>

        <div class="row no-gutters mb-3">

            <div class="col-md-1 my-auto mr-4">
                <p class="m-0 text-center"><b>Batteries</b></p>
            </div>
            <div class="col-md-4">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <label class="col-4 col-form-label">Type</label>
                        {{ Form::select('zone7', ['6' => '6v', '12' => '12v'], null, ['class'=> 'col-7 custom-select align-top']) }}
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row m-0">
                            <label class="col-form-label col-2 mr-3" for="batt_num">#</label>
                                <input type="text" class="form-control col-7" name="batt_num" placeholder="" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 my-auto">
                <p class="m-0 text-center"><b>Solar Panels</b></p>
            </div>
            <div class="col-md-4">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <label class="col-4 col-form-label">Watt</label>
                        {{ Form::select('zone7', ['6' => '60w', '12' => '120w'], null, ['class'=> 'col-7 custom-select align-top']) }}
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row m-0">
                            <label class="col-form-label col-2 mr-3" for="batt_num">#</label>
                                <input type="text" class="form-control col-7" name="batt_num" placeholder="" value="">
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-4 mb-3">
                <label># Batteries:</label>
                <input type="text" class="form-control" name="batt_num" placeholder="" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label># Solar Panels:</label>
                <input type="text" class="form-control" name="solar_num" placeholder="" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="sign60" value="0">
                    {{ Form::checkbox('sign60', '1', null, ['class' => 'custom-control-input', 'id' => 'sign60']) }}
                    <label class="custom-control-label" for="sign60">Are the signs 60ft apart?</label>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="batt_charge" value="0">
                    {{ Form::checkbox('batt_charge', '1', null, ['class' => 'custom-control-input', 'id' => 'batt_charge']) }}
                    <label class="custom-control-label" for="batt_charge">Did you use a battery charger?</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <p><b>Customer Not Ready:</b></p>
                <div class="form-check form-check-inline">
                    <input type="hidden" name="vegetation" value="0">
                    {{ Form::checkbox('vegetation', '1', null, ['class' => 'form-check-input', 'id' => 'vegetation']) }}
                    <label class="form-check-label" for="vegetation">Vegetation</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="hidden" name="debris" value="0">
                    {{ Form::checkbox('debris', '1', null, ['class' => 'form-check-input', 'id' => 'debris']) }}
                    <label class="form-check-label" for="debris">Debris</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="hidden" name="repair" value="0">
                    {{ Form::checkbox('repair', '1', null, ['class' => 'form-check-input', 'id' => 'repair']) }}
                    <label class="form-check-label" for="repair">Repair</label>
                </div>
            </div>
            <div class="col-md-3 mb-3" id="herbicide">
                <p>Herbicide</p>
                <div class="form-check form-check-inline">
                    <input type="hidden" name="herbicide" value="0">
                    {{ Form::checkbox('herbicide', '1', null, ['class' => 'form-check-input', 'id' => 'herbicide_check']) }}
                    <label class="form-check-label" for="herbicide">Send Herbicide?</label>
                </div>
            </div>
            {{-- <div class="col-md-4 mb-3">
                <label>Follow-up needed?</label>
                {{ Form::select('followup', $sel_options[6], null, ['class'=> 'custom-select form-control', 'id'=> 'followup']) }}    
            </div>
            <div class="col-md-8 mb-3" id="follow-container">
                <label>If other, please explain:</label>
                <input type="text" class="form-control" name="other" placeholder="" value="">   
            </div>
            <div class="col-md-4 mb-3" id="herbicide">
                <label>Herbicide needed?</label>
                {{ Form::select('herbicide', $sel_options[4], null, ['class'=> 'custom-select form-control', 'id'=> 'herbicide_select']) }}    
            </div> --}}
        </div>

        {{-- <div class="row">
            <div class="col-12">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th scope="row">Zone</th>
                            <td><input type="text" class="form-control" name="sizone1"></td>
                            <td><input type="text" class="form-control" name="sizone2"></td>
                            <td><input type="text" class="form-control" name="sizone3"></td>
                            <td><input type="text" class="form-control" name="sizone4"></td>
                            <td><input type="text" class="form-control" name="sizone5"></td>
                            <td><input type="text" class="form-control" name="sizone6"></td>
                            <td><input type="text" class="form-control" name="sizone7"></td>
                            <td><input type="text" class="form-control" name="sizone8"></td>
                        </tr>

                        <tr>
                            <th scope="row">Energizer</th>
                            <td>
                                {{ Form::select('siener1', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener2', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener3', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener4', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener5', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener6', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener7', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener8', $sel_options[2], null, ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}

        <hr class=""/>
            <h4>SYSTEMS TEST</h4>
        <hr />

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Breaks/Gaps in exterior fence:</label>
                <input type="text" class="form-control" name="break_gap" placeholder="" value="">
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Voltage when controller is off:</label>
                <input type="text" class="form-control" name="volt_off" placeholder="" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-1 text-center">
                <p><b>Zone</b></p>
            </div>
            <div class="col-11">
                <table class="zone-info table table-sm mb-0">
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control" name="stz1" value=""></td>
                        <td><input type="text" class="form-control" name="stz2" value=""></td>
                        <td><input type="text" class="form-control" name="stz3" value=""></td>
                        <td><input type="text" class="form-control" name="stz4" value=""></td>
                        <td><input type="text" class="form-control" name="stz5" value=""></td>
                        <td><input type="text" class="form-control" name="stz6" value=""></td>
                        <td><input type="text" class="form-control" name="stz7" value=""></td>
                        <td><input type="text" class="form-control" name="stz8" value=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mb-3">

            <div class="col-1 text-center">
                <p><b>Voltage Regulator</b></p>
            </div>

            <div class="col-11">
                <table class="zone-info table table-sm">
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="stv1" value=""></td>
                            <td><input type="text" class="form-control" name="stv2" value=""></td>
                            <td><input type="text" class="form-control" name="stv3" value=""></td>
                            <td><input type="text" class="form-control" name="stv4" value=""></td>
                            <td><input type="text" class="form-control" name="stv5" value=""></td>
                            <td><input type="text" class="form-control" name="stv6" value=""></td>
                            <td><input type="text" class="form-control" name="stv7" value=""></td>
                            <td><input type="text" class="form-control" name="stv8" value=""></td>
                            <td><input type="text" class="form-control" name="stv9" value=""></td>
                            <td><input type="text" class="form-control" name="stv10" value=""></td>
                            <td><input type="text" class="form-control" name="stv11" value=""></td>
                            <td><input type="text" class="form-control" name="stv12" value=""></td>
                            <td><input type="text" class="form-control" name="stv13" value=""></td>
                            <td><input type="text" class="form-control" name="stv14" value=""></td>
                            <td><input type="text" class="form-control" name="stv15" value=""></td>
                            <td><input type="text" class="form-control" name="stv16" value=""></td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="cv1" value=""></td>
                            <td><input type="text" class="form-control" name="cv2" value=""></td>
                            <td><input type="text" class="form-control" name="cv3" value=""></td>
                            <td><input type="text" class="form-control" name="cv4" value=""></td>
                            <td><input type="text" class="form-control" name="cv5" value=""></td>
                            <td><input type="text" class="form-control" name="cv6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="cv7" value=""></td>
                            <td><input type="text" class="form-control" name="cv8" value=""></td>
                            <td><input type="text" class="form-control" name="cv9" value=""></td>
                            <td><input type="text" class="form-control" name="cv10" value=""></td>
                            <td><input type="text" class="form-control" name="cv11" value=""></td>
                            <td><input type="text" class="form-control" name="cv12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">Controller Voltage</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="va1" value=""></td>
                            <td><input type="text" class="form-control" name="va2" value=""></td>
                            <td><input type="text" class="form-control" name="va3" value=""></td>
                            <td><input type="text" class="form-control" name="va4" value=""></td>
                            <td><input type="text" class="form-control" name="va5" value=""></td>
                            <td><input type="text" class="form-control" name="va6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="va7" value=""></td>
                            <td><input type="text" class="form-control" name="va8" value=""></td>
                            <td><input type="text" class="form-control" name="va9" value=""></td>
                            <td><input type="text" class="form-control" name="va10" value=""></td>
                            <td><input type="text" class="form-control" name="va11" value=""></td>
                            <td><input type="text" class="form-control" name="va12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">Into Voltage Alarm</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="aa1" value=""></td>
                            <td><input type="text" class="form-control" name="aa2" value=""></td>
                            <td><input type="text" class="form-control" name="aa3" value=""></td>
                            <td><input type="text" class="form-control" name="aa4" value=""></td>
                            <td><input type="text" class="form-control" name="aa5" value=""></td>
                            <td><input type="text" class="form-control" name="aa6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="aa7" value=""></td>
                            <td><input type="text" class="form-control" name="aa8" value=""></td>
                            <td><input type="text" class="form-control" name="aa9" value=""></td>
                            <td><input type="text" class="form-control" name="aa10" value=""></td>
                            <td><input type="text" class="form-control" name="aa11" value=""></td>
                            <td><input type="text" class="form-control" name="aa12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">Alarm at</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ao1" value=""></td>
                            <td><input type="text" class="form-control" name="ao2" value=""></td>
                            <td><input type="text" class="form-control" name="ao3" value=""></td>
                            <td><input type="text" class="form-control" name="ao4" value=""></td>
                            <td><input type="text" class="form-control" name="ao5" value=""></td>
                            <td><input type="text" class="form-control" name="ao6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ao7" value=""></td>
                            <td><input type="text" class="form-control" name="ao8" value=""></td>
                            <td><input type="text" class="form-control" name="ao9" value=""></td>
                            <td><input type="text" class="form-control" name="ao10" value=""></td>
                            <td><input type="text" class="form-control" name="ao11" value=""></td>
                            <td><input type="text" class="form-control" name="ao12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">Alarm OMHS</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fo1" value=""></td>
                            <td><input type="text" class="form-control" name="fo2" value=""></td>
                            <td><input type="text" class="form-control" name="fo3" value=""></td>
                            <td><input type="text" class="form-control" name="fo4" value=""></td>
                            <td><input type="text" class="form-control" name="fo5" value=""></td>
                            <td><input type="text" class="form-control" name="fo6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fo7" value=""></td>
                            <td><input type="text" class="form-control" name="fo8" value=""></td>
                            <td><input type="text" class="form-control" name="fo9" value=""></td>
                            <td><input type="text" class="form-control" name="fo10" value=""></td>
                            <td><input type="text" class="form-control" name="fo11" value=""></td>
                            <td><input type="text" class="form-control" name="fo12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">Fence OHMS</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fv1" value=""></td>
                            <td><input type="text" class="form-control" name="fv2" value=""></td>
                            <td><input type="text" class="form-control" name="fv3" value=""></td>
                            <td><input type="text" class="form-control" name="fv4" value=""></td>
                            <td><input type="text" class="form-control" name="fv5" value=""></td>
                            <td><input type="text" class="form-control" name="fv6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fv7" value=""></td>
                            <td><input type="text" class="form-control" name="fv8" value=""></td>
                            <td><input type="text" class="form-control" name="fv9" value=""></td>
                            <td><input type="text" class="form-control" name="fv10" value=""></td>
                            <td><input type="text" class="form-control" name="fv11" value=""></td>
                            <td><input type="text" class="form-control" name="fv12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">FVA 8 or 24</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="alo1" value=""></td>
                            <td><input type="text" class="form-control" name="alo2" value=""></td>
                            <td><input type="text" class="form-control" name="alo3" value=""></td>
                            <td><input type="text" class="form-control" name="alo4" value=""></td>
                            <td><input type="text" class="form-control" name="alo5" value=""></td>
                            <td><input type="text" class="form-control" name="alo6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="alo7" value=""></td>
                            <td><input type="text" class="form-control" name="alo8" value=""></td>
                            <td><input type="text" class="form-control" name="alo9" value=""></td>
                            <td><input type="text" class="form-control" name="alo10" value=""></td>
                            <td><input type="text" class="form-control" name="alo11" value=""></td>
                            <td><input type="text" class="form-control" name="alo12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">Alarm with loop open</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-secondary text-white">Zone #</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="al1" value=""></td>
                            <td><input type="text" class="form-control" name="al2" value=""></td>
                            <td><input type="text" class="form-control" name="al3" value=""></td>
                            <td><input type="text" class="form-control" name="al4" value=""></td>
                            <td><input type="text" class="form-control" name="al5" value=""></td>
                            <td><input type="text" class="form-control" name="al6" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="al7" value=""></td>
                            <td><input type="text" class="form-control" name="al8" value=""></td>
                            <td><input type="text" class="form-control" name="al9" value=""></td>
                            <td><input type="text" class="form-control" name="al10" value=""></td>
                            <td><input type="text" class="form-control" name="al11" value=""></td>
                            <td><input type="text" class="form-control" name="al12" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold bg-light">Alarm 9 & 10</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">

            <div class="col">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="hidden" name="dvm" value="0">
                    {{ Form::checkbox('dvm', '1', null, ['class' => 'custom-control-input', 'id' => 'dvm']) }}
                    <label class="custom-control-label" for="dvm">Tested DVM?</label>
                </div>
            </div>
            <div class="col">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="hidden" name="wire_tight" value="0">
                    {{ Form::checkbox('wire_tight', '1', null, ['class' => 'custom-control-input', 'id' => 'wire_tight']) }}
                    <label class="custom-control-label" for="wire_tight">Is the wire tight?</label>
                </div>
            </div>
            <div class="col">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="hidden" name="wire_hot" value="0">
                    {{ Form::checkbox('wire_hot', '1', null, ['class' => 'custom-control-input', 'id' => 'wire_hot']) }}
                    <label class="custom-control-label" for="wire_hot">Second wire hot in all sections?</label>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Feed starts on wire</label>
                {{ Form::select('feed_start', $sel_options[3], null, ['class'=> 'custom-select form-control']) }}    
            </div>
            <div class="col-md-4 mb-3">
                <label>Alarm signal time:</label>
                <input type="time" class="form-control" name="alarm_time" placeholder="" value="">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Monitoring online time:</label>
                <input type="time" class="form-control" name="online_time" placeholder="" value="">
                <div class="invalid-feedback"></div>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-md-4">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="armed_arr" value="0">
                    {{ Form::checkbox('armed_arr', '1', null, ['class' => 'custom-control-input', 'id' => 'armed_arr']) }}
                    <label class="custom-control-label" for="armed_arr">Armed at arrival?</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="armed_dep" value="0">
                    {{ Form::checkbox('armed_dep', '1', null, ['class' => 'custom-control-input', 'id' => 'armed_dep']) }}
                    <label class="custom-control-label" for="armed_dep">Armed at departure?</label>
                </div>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-md-4">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="fence_arr" value="0">
                    {{ Form::checkbox('fence_arr', '1', null, ['class' => 'custom-control-input', 'id' => 'fence_arr']) }}
                    <label class="custom-control-label" for="fence_arr">Fence on at arrival?</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="fence_dep" value="0">
                    {{ Form::checkbox('fence_dep', '1', null, ['class' => 'custom-control-input', 'id' => 'fence_dep']) }}
                    <label class="custom-control-label" for="fence_dep">Fence on at depart?</label>
                </div>
            </div>

        </div>

        <div id="img-upload" class="row mb-3 img-upload">

            <div class="card col-12">
                <div class="card-body">
                    <h3>Please upload images</h3>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                            <input name="files[]" class="custom-file-input" type="file" id="files" multiple="multiple" />
                            <label class="custom-file-label" for="files">Choose files</label>
                        </div>
                    </div>
                    <output id="list"></output>
                    <div id="clear-btn-container" class="d-flex flex-row-reverse">
                        <button type="button" id="clear-btn" class="btn btn-danger">Clear</button>
                    </div>
                </div>
            </div>

        </div>

        <div id="sig-block" class="row mb-3">

            <div class="col-6">
                <div class="wrapper">
                    <canvas id="signature-pad" class="signature-pad"></canvas>
                    <button class="btn-sig btn btn-secondary float-right" type="button" id="clear">Clear</button>
                    <input type="hidden" id="sig_img" name="sig_img" value="none"/>
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
                <div >
                    <label class="col-12">Service quality rating: low(1)-high(10)</label>
                    {{ Form::select('service_qual', $sel_options[5], null, ['class'=> 'custom-select form-control mb-3']) }}    
                </div>
            </div>

        </div>
        
        <hr class="mb-4">
        <input type="hidden" name="ticket_type" value="{{ $ticket_type or '' }}"/>
        <input type="hidden" name="tt" value="Service"/>
        <input type="hidden" name="sq_ft" value="{{ $sq_ft->footage or '0' }}"/>
        <input type="hidden" name="ticket_created" value="{{ $svc->Creation_Date or '' }}"/>
        <input type="hidden" name="cust_num" value="{{ $cust_num->Customer_Number or '' }}"/>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>

    </div> <!-- col-12 -->
</div> <!-- row -->


@endsection

@section ('customjs')

<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

<script>
    var canvas = document.getElementById('signature-pad');

    if(canvas) {

        function resizeCanvas() {

            var ratio =  Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }

        window.onresize = resizeCanvas;
        resizeCanvas();

        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        });

        document.getElementById('clear').addEventListener('click', function () {
            signaturePad.clear();
        });
    }

function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb col-3 p-1 mt-3" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);

$('#files').change(function() {
    if(!$(this).val() == '') {
      $('#clear-btn').show();
    }
  });

  $('#clear-btn').click(function() {
    $('#files').val("");
    $('#list').empty();
    $('#clear-btn').hide();
});

$('#form_ticket').submit(function (e) {
    var self = this;
    e.preventDefault();
    if (signaturePad.isEmpty()) {
        return alert("Please provide a signature first.");
    }
    else {
        var data = signaturePad.toDataURL('image/jpeg');
        $('#sig_img').val(data);
        console.log(data);
        self.submit();
    }
});

$(document).ready(function() {

    $('#vegetation').change(function() {
    //console.log(sel);
        if(this.checked) {
            $('#herbicide').show();
        }
        else {
            $('#herbicide').hide();
        }
    });
});


</script>
@endsection