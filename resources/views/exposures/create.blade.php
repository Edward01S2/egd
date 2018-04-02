@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center">Exposure Ticket</h2>
        <form method="POST" id="form_ticket" action="/exposure" enctype="multipart/form-data">

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
                    <input type="text" class="form-control" name="acct_num" placeholder="" value="" >
                    <div class="invalid-feedback">
                        Account # is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="serv_tech">Service Tech</label>
                    <input type="text" class="form-control" name="serv_tech" placeholder="" value="{{ Auth::user()->name }}">
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
                <input type="text" class="form-control" name="cust_name" placeholder="" value="" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label>Site City</label>
                <input type="text" class="form-control" name="city" placeholder="" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label>Site State</label>
                <input type="text" class="form-control" name="state" placeholder="" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mb-3">
                <label>Site Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="" value="" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="phone" placeholder="" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-7 mb-3">
                <label>Name of Person Exposed:</label>
                <input type="text" class="form-control" name="expo_name" placeholder="" value="" >
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label>Phone #</label>
                <input type="text" class="form-control" name="expo_phone" placeholder="" value="">
                <div class="invalid-feedback">
                    
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-4 mb-3">
                <label>Date of Exposure</label>
                <input type="date" class="form-control" name="expo_date" value="">
                <div class="invalid-feedback"></div>
            </div>
            <div class="col-4 mb-3">
                <label>Time of Exposure</label>
                <input type="time" class="form-control" name="expo_time" value="">
                <div class="invalid-feedback"></div>
            </div>

        </div>

        <div class="row">
          
            <div class="col-md-4 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="med_att" value="0">
                    {{ Form::checkbox('med_att', '1', null, ['class' => 'custom-control-input', 'id' => 'med_att']) }}
                    <label class="custom-control-label" for="med_att">Was medical attention sought?</label>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="workman" value="0">
                    {{ Form::checkbox('workman', '1', null, ['class' => 'custom-control-input', 'id' => 'workman']) }}
                    <label class="custom-control-label" for="workman">If yes to medical attention, was it filed as Workman's Comp?</label>
                </div>
            </div>

        </div>

        <div class="mb-3">
            <label>Description of exposure, to include location on fence:</label>
            <textarea class="form-control" id="desc_expo" name="desc_expo" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Witnesses and their contact info:</label>
            <textarea class="form-control" id="wit_info" name="wit_info" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Condition of the fence, status at the time of exposure:</label>
            <textarea class="form-control" id="cond" name="cond" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Tech assessment:</label>
            <textarea class="form-control" id="assess" name="assess" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-3">
            <label>Additional comments</label>
            <textarea class="form-control" id="add_comm" name="add_comm" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="row mb-4">
            <div class="col-8">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="fence_depart" value="0">
                    {{ Form::checkbox('fence_depart', '1', null, ['class' => 'custom-control-input', 'id' => 'fence_depart']) }}
                    <label class="custom-control-label" for="fence_depart">Is fence working properly upon tech departure:</label>
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

            </div>

        </div>
        
        <hr class="mb-4">
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
        // Adjust canvas coordinate space taking into account pixel ratio,
        // to make it look crisp on mobile devices.
        // This also causes canvas to be cleared.
        function resizeCanvas() {
            // When zoomed out to less than 100%, for some very strange reason,
            // some browsers report devicePixelRatio as less than 1
            // and only part of the canvas is cleared then.
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

</script>
@endsection