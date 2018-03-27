@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center print-head">Standard Service Ticket</h2>
        <form method="POST" class="" action="/tickets">

            {{ csrf_field() }}

        <div class="row">

            <div class="col">
                <img class="img-fluid mt-5" src="{{ asset('storage/logo.png') }}" alt="">
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="ticket_num">Ticket #</label>
                <input type="text" class="form-control" name="ticket_num" placeholder="" value="{{ $ticket->ticket_num }}" >
                    <div class="invalid-feedback">
                        Ticket # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="acct_num">Account #</label>
                    <input type="text" class="form-control" name="acct_num" placeholder="" value="{{ $ticket->acct_num }}" >
                    <div class="invalid-feedback">
                        Account # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="serv_tech">Service Tech</label>
                    <input type="text" class="form-control" name="serv_tech" placeholder="" value="{{ $ticket->serv_tech }}" >
                    <div class="invalid-feedback">
    
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="visit_date">Visit Date</label>
                    <input type="date" class="form-control" name="visit_date" placeholder="" value="{{ $ticket->visit_date }}" >
                    <div class="invalid-feedback">
                        Visit date is required.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="arrive_time">Arrival Time</label>
                    <input type="time" class="form-control" name="arrive_time" placeholder="" value="{{ $ticket->arrive_time }}">
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="mb-3">
                    <label>Departure Time</label>
                    <input type="time" class="form-control" name="depart_time" placeholder="" value="{{ $ticket->depart_time }}">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

        </div> 

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Customer Name</label>
                <input type="text" class="form-control" name="cust_name" placeholder="" value="{{ $ticket->cust_name}}" >
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-3 mb-3">
                <label>Site City</label>
                <input type="text" class="form-control" name="city" placeholder="" value="{{ $ticket->city}}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-2 mb-3">
                <label>Site State</label>
                <input type="text" class="form-control" name="state" placeholder="" value="{{ $ticket->state}}">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Site Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="" value="{{ $ticket->contact}}" >
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="{{ $ticket->phone}}">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="mb-3">
            <label>Reason for service/issue(s) found</label>
            <textarea class="form-control" id="svc_reason" name="svc_reason" rows="2">{{ $ticket->svc_reason}}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Corrective action taken</label>
            <textarea class="form-control" id="corr_action" name="corr_action" rows="2">{{ $ticket->corr_action}}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Recommendations for future prevention</label>
            <textarea class="form-control" id="rec_prev" name="rec_prev" rows="2">{{ $ticket->rec_prev}}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Other comments or safety concerns</label>
            <textarea class="form-control" name="other_comm" rows="2">{{ $ticket->other_comm}}</textarea>
            <div class="invalid-feedback"></div>
        </div>

        <hr />
            <h4>SYSTEM INFORMATION</h4>
        <hr />

        <div class="row">

            <div class="col">
                <div class="text-center mb-3"><b>Description</b></div>
                <label class="col-4 col-form-label mb-3">Zone 1</label>
                {{ Form::select('zone1', $sel_options[0], $ticket->zone[0], ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 2</label>
                {{ Form::select('zone2', $sel_options[0], $ticket->zone[1], ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 3</label>
                {{ Form::select('zone3', $sel_options[0], $ticket->zone[2], ['class'=> 'col-7 custom-select']) }}    
            </div>

            <div class="col">
                <div class="text-center mb-3"><b>Description</b></div>
                <label class="col-4 col-form-label mb-3">Zone 4</label>
                {{ Form::select('zone4', $sel_options[0], $ticket->zone[3], ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 5</label>
                {{ Form::select('zone5', $sel_options[0], $ticket->zone[4], ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 6</label>
                {{ Form::select('zone6', $sel_options[0], $ticket->zone[5], ['class'=> 'col-7 custom-select']) }}    
            </div>

            <div class="col">
                <div class="text-center mb-3"><b>Description</b></div>
                <label class="col-4 col-form-label mb-3">Zone 7</label>
                {{ Form::select('zone7', $sel_options[0], $ticket->zone[6], ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Zone 8</label>
                {{ Form::select('zone8', $sel_options[0], $ticket->zone[7], ['class'=> 'col-7 custom-select']) }}

                <label class="col-4 col-form-label mb-3">Key #</label>
                {{ Form::select('zone9', $sel_options[1], $ticket->zone[8], ['class'=> 'col-7 custom-select']) }}    
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Vegetation</label>
                {{ Form::select('vegetation', $sel_options[4], $ticket->vegetation, ['class'=> 'custom-select form-control']) }}    
            </div>
            <div class="col-md-4 mb-3">
                <label># Batteries:</label>
                <input type="text" class="form-control" name="batt_num" placeholder="" value="{{ $ticket->batt_num }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label># Solar Panels:</label>
                <input type="text" class="form-control" name="solar_num" placeholder="" value="{{ $ticket->solar_num }}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="form-check">
                    <input type="hidden" name="sign60" value="0">
                    {{ Form::checkbox('sign60', '1', $ticket->sign60, ['class' => 'form-check-input', 'id' => 'sign60']) }}
                    <label class="form-check-label" for="sign60">Are the signs 60ft apart?</label>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-check">
                    <input type="hidden" name="batt_charge" value="0">
                    {{ Form::checkbox('batt_charge', '1', $ticket->batt_charge, ['class' => 'form-check-input', 'id' => 'batt_charge']) }}
                    <label class="form-check-label" for="batt_charge">Did you use a battery charger?</label>
                </div>
            </div>
        </div>

        <div class="row force-break">
            <div class="col-12">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th scope="row">Zone</th>
                            <td><input type="text" class="form-control" name="sizone1" value="{{ $ticket->sizone[0] }}"></td>
                            <td><input type="text" class="form-control" name="sizone2" value="{{ $ticket->sizone[1] }}"></td>
                            <td><input type="text" class="form-control" name="sizone3" value="{{ $ticket->sizone[2] }}"></td>
                            <td><input type="text" class="form-control" name="sizone4" value="{{ $ticket->sizone[3] }}"></td>
                            <td><input type="text" class="form-control" name="sizone5" value="{{ $ticket->sizone[4] }}"></td>
                            <td><input type="text" class="form-control" name="sizone6" value="{{ $ticket->sizone[5] }}"></td>
                            <td><input type="text" class="form-control" name="sizone7" value="{{ $ticket->sizone[6] }}"></td>
                            <td><input type="text" class="form-control" name="sizone8" value="{{ $ticket->sizone[7] }}"></td>
                        </tr>

                        <tr>
                            <th scope="row">Energizer</th>
                            <td>
                                {{ Form::select('siener1', $sel_options[2], $ticket->siener[0], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener2', $sel_options[2], $ticket->siener[1], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener3', $sel_options[2], $ticket->siener[2], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener4', $sel_options[2], $ticket->siener[3], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener5', $sel_options[2], $ticket->siener[4], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener6', $sel_options[2], $ticket->siener[5], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener7', $sel_options[2], $ticket->siener[6], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                            <td>
                                {{ Form::select('siener8', $sel_options[2], $ticket->siener[7], ['class'=> 'custom-select', 'data-width'=> '100%']) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class=""/>
            <h4>SYSTEMS TEST</h4>
        <hr />

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Breaks/Gaps in exterior fence:</label>
            <input type="text" class="form-control" name="break_gap" placeholder="" value="{{ $ticket->break_gap }}">
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Voltage when controller is off:</label>
                <input type="text" class="form-control" name="volt_off" placeholder="" value="{{ $ticket->volt_off}}">
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
                        <td><input type="text" class="form-control" name="stz1" value="{{ $ticket->stz[0] }}"></td>
                        <td><input type="text" class="form-control" name="stz2" value="{{ $ticket->stz[1] }}"></td>
                        <td><input type="text" class="form-control" name="stz3" value="{{ $ticket->stz[2] }}"></td>
                        <td><input type="text" class="form-control" name="stz4" value="{{ $ticket->stz[3] }}"></td>
                        <td><input type="text" class="form-control" name="stz5" value="{{ $ticket->stz[4] }}"></td>
                        <td><input type="text" class="form-control" name="stz6" value="{{ $ticket->stz[5] }}"></td>
                        <td><input type="text" class="form-control" name="stz7" value="{{ $ticket->stz[6] }}"></td>
                        <td><input type="text" class="form-control" name="stz8" value="{{ $ticket->stz[7] }}"></td>
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
                            <td><input type="text" class="form-control" name="stv1" value="{{ $ticket->stv[0] }}"></td>
                            <td><input type="text" class="form-control" name="stv2" value="{{ $ticket->stv[1] }}"></td>
                            <td><input type="text" class="form-control" name="stv3" value="{{ $ticket->stv[2] }}"></td>
                            <td><input type="text" class="form-control" name="stv4" value="{{ $ticket->stv[3] }}"></td>
                            <td><input type="text" class="form-control" name="stv5" value="{{ $ticket->stv[4] }}"></td>
                            <td><input type="text" class="form-control" name="stv6" value="{{ $ticket->stv[5] }}"></td>
                            <td><input type="text" class="form-control" name="stv7" value="{{ $ticket->stv[6] }}"></td>
                            <td><input type="text" class="form-control" name="stv8" value="{{ $ticket->stv[7] }}"></td>
                            <td><input type="text" class="form-control" name="stv9" value="{{ $ticket->stv[8] }}"></td>
                            <td><input type="text" class="form-control" name="stv10" value="{{ $ticket->stv[9] }}"></td>
                            <td><input type="text" class="form-control" name="stv11" value="{{ $ticket->stv[10] }}"></td>
                            <td><input type="text" class="form-control" name="stv12" value="{{ $ticket->stv[11] }}"></td>
                            <td><input type="text" class="form-control" name="stv13" value="{{ $ticket->stv[12] }}"></td>
                            <td><input type="text" class="form-control" name="stv14" value="{{ $ticket->stv[13] }}"></td>
                            <td><input type="text" class="form-control" name="stv15" value="{{ $ticket->stv[14] }}"></td>
                            <td><input type="text" class="form-control" name="stv16" value="{{ $ticket->stv[15] }}"></td>

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
                            <td><input type="text" class="form-control" name="cv1" value="{{ $ticket->cv[0] }}"></td>
                            <td><input type="text" class="form-control" name="cv2" value="{{ $ticket->cv[1] }}"></td>
                            <td><input type="text" class="form-control" name="cv3" value="{{ $ticket->cv[2] }}"></td>
                            <td><input type="text" class="form-control" name="cv4" value="{{ $ticket->cv[3] }}"></td>
                            <td><input type="text" class="form-control" name="cv5" value="{{ $ticket->cv[4] }}"></td>
                            <td><input type="text" class="form-control" name="cv6" value="{{ $ticket->cv[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="cv7" value="{{ $ticket->cv[6] }}"></td>
                            <td><input type="text" class="form-control" name="cv8" value="{{ $ticket->cv[7] }}"></td>
                            <td><input type="text" class="form-control" name="cv9" value="{{ $ticket->cv[8] }}"></td>
                            <td><input type="text" class="form-control" name="cv10" value="{{ $ticket->cv[9] }}"></td>
                            <td><input type="text" class="form-control" name="cv11" value="{{ $ticket->cv[10] }}"></td>
                            <td><input type="text" class="form-control" name="cv12" value="{{ $ticket->cv[11] }}"></td>
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
                            <td><input type="text" class="form-control" name="va1" value="{{ $ticket->va[0] }}"></td>
                            <td><input type="text" class="form-control" name="va2" value="{{ $ticket->va[1] }}"></td>
                            <td><input type="text" class="form-control" name="va3" value="{{ $ticket->va[2] }}"></td>
                            <td><input type="text" class="form-control" name="va4" value="{{ $ticket->va[3] }}"></td>
                            <td><input type="text" class="form-control" name="va5" value="{{ $ticket->va[4] }}"></td>
                            <td><input type="text" class="form-control" name="va6" value="{{ $ticket->va[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="va7" value="{{ $ticket->va[6] }}"></td>
                            <td><input type="text" class="form-control" name="va8" value="{{ $ticket->va[7] }}"></td>
                            <td><input type="text" class="form-control" name="va9" value="{{ $ticket->va[8] }}"></td>
                            <td><input type="text" class="form-control" name="va10" value="{{ $ticket->va[9] }}"></td>
                            <td><input type="text" class="form-control" name="va11" value="{{ $ticket->va[10] }}"></td>
                            <td><input type="text" class="form-control" name="va12" value="{{ $ticket->va[11] }}"></td>
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
                            <td><input type="text" class="form-control" name="aa1" value="{{ $ticket->aa[0] }}"></td>
                            <td><input type="text" class="form-control" name="aa2" value="{{ $ticket->aa[1] }}"></td>
                            <td><input type="text" class="form-control" name="aa3" value="{{ $ticket->aa[2] }}"></td>
                            <td><input type="text" class="form-control" name="aa4" value="{{ $ticket->aa[3] }}"></td>
                            <td><input type="text" class="form-control" name="aa5" value="{{ $ticket->aa[4] }}"></td>
                            <td><input type="text" class="form-control" name="aa6" value="{{ $ticket->aa[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="aa7" value="{{ $ticket->aa[6] }}"></td>
                            <td><input type="text" class="form-control" name="aa8" value="{{ $ticket->aa[7] }}"></td>
                            <td><input type="text" class="form-control" name="aa9" value="{{ $ticket->aa[8] }}"></td>
                            <td><input type="text" class="form-control" name="aa10" value="{{ $ticket->aa[9] }}"></td>
                            <td><input type="text" class="form-control" name="aa11" value="{{ $ticket->aa[10] }}"></td>
                            <td><input type="text" class="form-control" name="aa12" value="{{ $ticket->aa[11] }}"></td>
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
                            <td><input type="text" class="form-control" name="ao1" value="{{ $ticket->ao[0] }}"></td>
                            <td><input type="text" class="form-control" name="ao2" value="{{ $ticket->ao[1] }}"></td>
                            <td><input type="text" class="form-control" name="ao3" value="{{ $ticket->ao[2] }}"></td>
                            <td><input type="text" class="form-control" name="ao4" value="{{ $ticket->ao[3] }}"></td>
                            <td><input type="text" class="form-control" name="ao5" value="{{ $ticket->ao[4] }}"></td>
                            <td><input type="text" class="form-control" name="ao6" value="{{ $ticket->ao[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ao7" value="{{ $ticket->ao[6] }}"></td>
                            <td><input type="text" class="form-control" name="ao8" value="{{ $ticket->ao[7] }}"></td>
                            <td><input type="text" class="form-control" name="ao9" value="{{ $ticket->ao[8] }}"></td>
                            <td><input type="text" class="form-control" name="ao10" value="{{ $ticket->ao[9] }}"></td>
                            <td><input type="text" class="form-control" name="ao11" value="{{ $ticket->ao[10] }}"></td>
                            <td><input type="text" class="form-control" name="ao12" value="{{ $ticket->ao[11] }}"></td>
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
                            <td><input type="text" class="form-control" name="fo1" value="{{ $ticket->fo[0] }}"></td>
                            <td><input type="text" class="form-control" name="fo2" value="{{ $ticket->fo[1] }}"></td>
                            <td><input type="text" class="form-control" name="fo3" value="{{ $ticket->fo[2] }}"></td>
                            <td><input type="text" class="form-control" name="fo4" value="{{ $ticket->fo[3] }}"></td>
                            <td><input type="text" class="form-control" name="fo5" value="{{ $ticket->fo[4] }}"></td>
                            <td><input type="text" class="form-control" name="fo6" value="{{ $ticket->fo[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fo7" value="{{ $ticket->fo[6] }}"></td>
                            <td><input type="text" class="form-control" name="fo8" value="{{ $ticket->fo[7] }}"></td>
                            <td><input type="text" class="form-control" name="fo9" value="{{ $ticket->fo[8] }}"></td>
                            <td><input type="text" class="form-control" name="fo10" value="{{ $ticket->fo[9] }}"></td>
                            <td><input type="text" class="form-control" name="fo11" value="{{ $ticket->fo[10] }}"></td>
                            <td><input type="text" class="form-control" name="fo12" value="{{ $ticket->fo[11] }}"></td>
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
                            <td><input type="text" class="form-control" name="fv1" value="{{ $ticket->fv[0] }}"></td>
                            <td><input type="text" class="form-control" name="fv2" value="{{ $ticket->fv[1] }}"></td>
                            <td><input type="text" class="form-control" name="fv3" value="{{ $ticket->fv[2] }}"></td>
                            <td><input type="text" class="form-control" name="fv4" value="{{ $ticket->fv[3] }}"></td>
                            <td><input type="text" class="form-control" name="fv5" value="{{ $ticket->fv[4] }}"></td>
                            <td><input type="text" class="form-control" name="fv6" value="{{ $ticket->fv[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fv7" value="{{ $ticket->fv[6] }}"></td>
                            <td><input type="text" class="form-control" name="fv8" value="{{ $ticket->fv[7] }}"></td>
                            <td><input type="text" class="form-control" name="fv9" value="{{ $ticket->fv[8] }}"></td>
                            <td><input type="text" class="form-control" name="fv10" value="{{ $ticket->fv[9] }}"></td>
                            <td><input type="text" class="form-control" name="fv11" value="{{ $ticket->fv[10] }}"></td>
                            <td><input type="text" class="form-control" name="fv12" value="{{ $ticket->fv[11] }}"></td>
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
                            <td><input type="text" class="form-control" name="alo1" value="{{ $ticket->alo[0] }}"></td>
                            <td><input type="text" class="form-control" name="alo2" value="{{ $ticket->alo[1] }}"></td>
                            <td><input type="text" class="form-control" name="alo3" value="{{ $ticket->alo[2] }}"></td>
                            <td><input type="text" class="form-control" name="alo4" value="{{ $ticket->alo[3] }}"></td>
                            <td><input type="text" class="form-control" name="alo5" value="{{ $ticket->alo[4] }}"></td>
                            <td><input type="text" class="form-control" name="alo6" value="{{ $ticket->alo[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="alo7" value="{{ $ticket->alo[6] }}"></td>
                            <td><input type="text" class="form-control" name="alo8" value="{{ $ticket->alo[7] }}"></td>
                            <td><input type="text" class="form-control" name="alo9" value="{{ $ticket->alo[8] }}"></td>
                            <td><input type="text" class="form-control" name="alo10" value="{{ $ticket->alo[9] }}"></td>
                            <td><input type="text" class="form-control" name="alo11" value="{{ $ticket->alo[10] }}"></td>
                            <td><input type="text" class="form-control" name="alo12" value="{{ $ticket->alo[11] }}"></td>
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
                            <td><input type="text" class="form-control" name="al1" value="{{ $ticket->al[0] }}"></td>
                            <td><input type="text" class="form-control" name="al2" value="{{ $ticket->al[1] }}"></td>
                            <td><input type="text" class="form-control" name="al3" value="{{ $ticket->al[2] }}"></td>
                            <td><input type="text" class="form-control" name="al4" value="{{ $ticket->al[3] }}"></td>
                            <td><input type="text" class="form-control" name="al5" value="{{ $ticket->al[4] }}"></td>
                            <td><input type="text" class="form-control" name="al6" value="{{ $ticket->al[5] }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="al7" value="{{ $ticket->al[6] }}"></td>
                            <td><input type="text" class="form-control" name="al8" value="{{ $ticket->al[7] }}"></td>
                            <td><input type="text" class="form-control" name="al9" value="{{ $ticket->al[8] }}"></td>
                            <td><input type="text" class="form-control" name="al10" value="{{ $ticket->al[9] }}"></td>
                            <td><input type="text" class="form-control" name="al11" value="{{ $ticket->al[10] }}"></td>
                            <td><input type="text" class="form-control" name="al12" value="{{ $ticket->al[11] }}"></td>
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
                <div class="form-check mb-3">
                    <input type="hidden" name="dvm" value="0">
                    {{ Form::checkbox('dvm', '1', $ticket->dvm, ['class' => 'form-check-input', 'id' => 'dvm']) }}
                    <label class="form-check-label" for="dvm">Tested DVM?</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-3">
                    <input type="hidden" name="wire_tight" value="0">
                    {{ Form::checkbox('wire_tight', '1', $ticket->wire_tight, ['class' => 'form-check-input', 'id' => 'wire_tight']) }}
                    <label class="form-check-label" for="wire_tight">Is the wire tight?</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check mb-3">
                    <input type="hidden" name="wire_hot" value="0">
                    {{ Form::checkbox('wire_hot', '1', $ticket->wire_hot, ['class' => 'form-check-input', 'id' => 'wire_hot']) }}
                    <label class="form-check-label" for="wire_hot">Second wire hot in all sections?</label>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Feed starts on wire</label>
                {{ Form::select('feed_start', $sel_options[3], $ticket->feed_start, ['class'=> 'custom-select form-control']) }}    
            </div>
            <div class="col-md-4 mb-3">
                <label>Alarm signal time:</label>
                <input type="time" class="form-control" name="alarm_time" placeholder="" value="{{ $ticket->alarm_time }}">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Monitoring online time:</label>
                <input type="time" class="form-control" name="online_time" placeholder="" value="{{ $ticket->online_time }}">
                <div class="invalid-feedback"></div>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-md-4">
                <div class="form-check">
                    <input type="hidden" name="armed_arr" value="0">
                    {{ Form::checkbox('armed_arr', '1', $ticket->armed_arr, ['class' => 'form-check-input', 'id' => 'armed_arr']) }}
                    <label class="form-check-label" for="armed_arr">Armed at arrival?</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input type="hidden" name="armed_dep" value="0">
                    {{ Form::checkbox('armed_dep', '1', $ticket->armed_dep, ['class' => 'form-check-input', 'id' => 'armed_dep']) }}
                    <label class="form-check-label" for="armed_dep">Armed at departure?</label>
                </div>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-md-4">
                <div class="form-check">
                    <input type="hidden" name="fence_arr" value="0">
                    {{ Form::checkbox('fence_arr', '1', $ticket->fence_arr, ['class' => 'form-check-input', 'id' => 'fence_arr']) }}
                    <label class="form-check-label" for="fence_arr">Fence on at arrival?</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input type="hidden" name="fence_dep" value="0">
                    {{ Form::checkbox('fence_dep', '1', $ticket->fence_dep, ['class' => 'form-check-input', 'id' => 'fence_dep']) }}
                    <label class="form-check-label" for="fence_dep">Fence on at depart?</label>
                </div>
            </div>

        </div>

        {{--  <div id="img-upload" class="row mb-3 img-upload">

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

        </div>  --}}

        <div id="sig-block" class="row mb-3 force-break">

            <div class="col-6">
                <div class="wrapper">
                <img src="{{ asset('storage/' . $ticket->ticket_num . '/signature.jpg') }}" alt="" class="img-fluid">
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
                    <input type="text" class="form-control mb-3" name="stname" value="{{ $ticket->stname }}">
                </div>
                <div >
                    <label class="col-12">Service quality rating: low(1)-high(10)</label>
                    {{ Form::select('service_qual', $sel_options[4], $ticket->service_qual, ['class'=> 'custom-select form-control mb-3']) }}    
                </div>
            </div>

        </div>

        @if(!empty($upl_one))

        <hr class=""/>
            <h4>UPLOADED IMAGES</h4>
        <hr />

        <div class="row">
            <div class="col"> 
                @foreach($upl_one as $img)
                    <img src = "{{ asset('storage/'. $ticket->ticket_num . '/' . $img) }}" alt="" class="img-fluid mb-4">
                @endforeach
            </div>
            <div class="col">
                @foreach($upl_two as $img)
                    <img src = "{{ asset('storage/'. $ticket->ticket_num . '/' . $img) }}" alt="" class="img-fluid mb-4">
                @endforeach
            </div>
        </div>

        @endif

        

    </div> <!-- col-12 -->
</div> <!-- row -->


@endsection

@section ('customjs')

@endsection