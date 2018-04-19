@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center">Add On Quote Ticket</h2>
        <form method="POST" id="form_ticket" action="/addon" enctype="multipart/form-data">

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
            <input type="text" class="form-control" name="city" placeholder="" value="{{ $bus->GE1_Description or ' '}}">
                <div class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label>Site State</label>
                <input type="text" class="form-control" name="state" placeholder="" value="{{ $bus->GE2_Short or ' '}}">
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

        <div class="row mt-4">

            <div class="col">

                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="foot_up">Footage to Go Up</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="foot_up" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="single_up">Singles to Go Up</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="single_up" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="dbl_up">Double to Go Up</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="dbl_up" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="gates">Gates to Build</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="gates" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="elec_add">New Electronics Added</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="elec_add" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

            </div>

            <div class="col">

                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="foot_down">Footage to Come Down</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="foot_down" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="single_down">Singles to Come Down</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="single_down" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="dbl_down">Double to Come Down</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="dbl_down" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="gate_down">Gates to Come Down</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="gate_down" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="elec_move">Electronics Moved</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="elec_move" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

            </div>
            
            <div class="col">
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="trench_foot">Trenching Footage</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="trench_foot" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="pvc_foot">PVC Footage</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="pvc_foot" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="saw_foot">Saw Cut Footage</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="saw_foot" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-8" for="total_man">Total Man Hours</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="total_man" placeholder="" value="" >
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-12">NOTE MATERIAL REUSE BELOW</label>
                </div>
            </div>

        </div>

        <div class="card mb-4">
            <div class="card-body">
                <b>PLEASE INCLUDE ALL DETAILS IN THE COMMENTS SECTION AND DO NOT FORGET A CUSTOMER SIGNED LAYOUT</b>
            </div>
        </div>

        <div class="mb-4">
            <label>Comments</label>
            <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <table class="table table-bordered addon-table mb-4">
            <thead>
                <tr>
                    <th class="w-50">Tech Add-on Quote Checklist</th>
                    <th class="w-50">Customer Service & Tech Notes</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Completed Service ticket in addition to Add-on Quote ticket & new layout form</td>
                    <td><textarea name="check1"></textarea></td>
                </tr>
                <tr>
                    <td>Site should be serviced and running 100% when add on quote is completed</td>
                    <td><textarea name="check2"></textarea></td>
                </tr>
                <tr>
                    <td>Draw add-on area on new layout form using correct symbols</td>
                    <td><textarea name="check3"></textarea></td>
                </tr>
                <tr>
                    <td>Indicate with arrow, voltage path and how new section will get feed and return</td>
                    <td><textarea name="check4"></textarea></td>
                </tr>
                <tr>
                    <td>List Material for add-on and existing yard, large and small parts</td>
                    <td><textarea name="check5"></textarea></td>
                </tr>
                <tr>
                    <td>List Current Type of Alarm panel, GSM, keypad upgrade required/requested by customer</td>
                    <td><textarea name="check6"></textarea></td>
                </tr>
                <tr>
                    <td>Number of outdoor boxes to be installed at time of add-on</td>
                    <td><textarea name="check7"></textarea></td>
                </tr>
                <tr>
                    <td>Indicate Last date signal sent</td>
                    <td><textarea name="check8"></textarea></td>
                </tr>
                <tr>
                    <td>Test Phone line or cell unit to confirm operational</td>
                    <td><textarea name="check9"></textarea></td>
                </tr>
                <tr>
                    <td>Indicate Keypad or key switch operated. If keyswitch, keyswitch #</td>
                    <td><textarea name="check10"></textarea></td>
                </tr>
                <tr>
                    <td>Indicate on layout any cut off switches to be installed</td>
                    <td><textarea name="check11"></textarea></td>
                </tr>
                <tr>
                    <td>Will current controller (energizer) cover addition or require upgrade to larger size. Is this required/ requested</td>
                    <td><textarea name="check12"></textarea></td>
                </tr>
                <tr>
                    <td>Footage per zone prior to add-on</td>
                    <td><textarea name="check13"></textarea></td>
                </tr>
                <tr>
                    <td>Footage per zone after add-on</td>
                    <td><textarea name="check14"></textarea></td>
                </tr>
                <tr>
                    <td>Will additional charging system need to be added? (solar panel, voltage regulator)</td>
                    <td><textarea name="check15"></textarea></td>
                </tr>
                <tr>
                    <td>Trenching, PVC or saw cut needed for addition or to connect old to new</td>
                    <td><textarea name="check16"></textarea></td>
                </tr>
                <tr>
                    <td>Date site will be ready for add-on</td>
                    <td><textarea name="check17"></textarea></td>
                </tr>
                <tr>
                    <td>Number of phases (trips to site) to complete add-on</td>
                    <td><textarea name="check18"></textarea></td>
                </tr>
                <tr>
                    <td>Customers comments and expectations of add-on</td>
                    <td><textarea name="check19"></textarea></td>
                </tr>
                
            </tbody>
        </table>

        <hr class="mb-4">

        <table class="table table-bordered addon-table mb-4">
            <thead>
                <tr>
                    <th class="w-50">Tech Add-on Quote Check List</th>
                    <th class="w-50">Customer Service & Tech Notes</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>A = # of poles that need painted</td>
                    <td><textarea name="addon1"></textarea></td>
                </tr>
                <tr>
                    <td>B = Footage that # 1 is not flat along bottom</td>
                    <td><textarea name="addon2"></textarea></td>
                </tr>
                <tr>
                    <td class="pl-4">Cause of # 1 not being on ground</td>
                    <td><textarea name="addon3"></textarea></td>
                </tr>
                <tr>
                    <td>C = Footage of erision problem areas</td>
                    <td><textarea name="addon4"></textarea></td>
                </tr>
                <tr>
                    <td>D = Highest wire that voltage starts on</td>
                    <td><textarea name="addon5"></textarea></td>
                </tr>
                <tr>
                    <td class="pl-4">Cause of # 2 wire not hot all around yard</td>
                    <td><textarea name="addon6"></textarea></td>
                </tr>
                <tr>
                    <td>E = # of Gates that need EGD repairs</td>
                    <td><textarea name="addon7"></textarea></td>
                </tr>
                <tr>
                    <td class="pl-4">Cause of gate damages</td>
                    <td><textarea name="addon8"></textarea></td>
                </tr>
                <tr>
                    <td>F = Sets of medium springs that need to be added</td>
                    <td><textarea name="addon9"></textarea></td>
                </tr>
                <tr>
                    <td>G = # of poles that need black insultors vs porcelain insulators</td>
                    <td><textarea name="addon10"></textarea></td>
                </tr>
                <tr>
                    <td >Is system able to be armed prior to add-on, if no why</td>
                    <td><textarea name="addon11"></textarea></td>
                </tr>
                
            </tbody>
        </table>

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
                <div>
                    <label>Customer Name:</label>
                    <input type="text" class="form-control mb-3" name="customer" value="">
                </div>

            </div>

        </div>
        
        <hr class="mb-4">
        <input type="hidden" name="tt" value="Addon"/>
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