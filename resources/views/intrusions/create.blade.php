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
                <input type="text" class="form-control" name="ticket_num" placeholder="" value="{{ $ticket_num or ' ' }}" >
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
                <input type="text" class="form-control" name="contact" placeholder="" value="" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="">
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
                        <input type="text" class="form-control" name="zone1" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 2</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone2" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 3</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone3" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 4</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone4" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 5</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone5" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 6</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone6" placeholder="" value="">
                    </div>
                </div>
  
            </div>

            <div class="col">

                <div class="text-center mb-3"><b>Description</b></div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 7</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone7" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 8</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone8" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 9</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone9" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 10</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone10" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 11</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone11" placeholder="" value="">
                    </div>
                </div>

                <div class="form-group row">      
                    <label class="col-3 col-form-label mb-2 text-right">Zone 12</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="zone12" placeholder="" value="">
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>System</label>
                {{ Form::select('system_type', $sel_options[1], null, ['class'=> 'custom-select form-control mb-3']) }}   
            </div>
            <div class="col-md-4 mb-3">
                <label># Keypads:</label>
                <input type="text" class="form-control" name="key_num" placeholder="" value="">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-4 mb-3">
                <label># Partitions:</label>
                <input type="text" class="form-control" name="part_num" placeholder="" value="">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Battery Voltage</label>
                <input type="text" class="form-control" name="batt_volt" placeholder="" value="">   
            </div>
            <div class="col-md-4 mb-3">
                <label>GSM/Phone Line</label>
                <input type="text" class="form-control" name="gsm" placeholder="" value="">
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="ac_power" value="0">
                    {{ Form::checkbox('ac_power', '1', null, ['class' => 'custom-control-input', 'id' => 'ac_power']) }}
                    <label class="custom-control-label" for="ac_power">AC Power?</label>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="user_code" value="0">
                    {{ Form::checkbox('user_code', '1', null, ['class' => 'custom-control-input', 'id' => 'user_code']) }}
                    <label class="custom-control-label" for="user_code">User Code Changes?</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label>Equipment Changes & Description</label>
            <textarea class="form-control" id="equip" name="equip" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Monitoring Rep Name:</label>
                <input type="text" class="form-control" name="rep_name" placeholder="" value="">   
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

        <div class="mb-3">
            <label>Reason for Service:</label>
            <textarea class="form-control" id="equip" name="svc_reason" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-5">
            <label>Solution:</label>
            <textarea class="form-control" id="equip" name="solution" rows="3"></textarea>
            <div class="invalid-feedback"></div>
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
                    {{ Form::select('service_qual', $sel_options[0], null, ['class'=> 'custom-select form-control mb-3']) }}    
                </div>
            </div>

        </div>
        
        <hr class="mb-4">
        <input type="hidden" name="tt" value="Intrusion"/>
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

$('#intrusion_ticket').submit(function (e) {
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

</script>
@endsection