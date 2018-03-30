@extends ('layout')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-3 text-center">Post Install Checklist</h2>
        <form method="POST" id="intrusion_ticket" action="/pst">

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

            </div>

            <div class="col">

                <div class="mb-3">
                    <label for="serv_tech">Technician</label>
                    <input type="text" class="form-control" name="tech" placeholder="" value="">
                    <div class="invalid-feedback">
    
                    </div>
                </div>

                <div class="mb-3">
                    <label for="arrive_time">Installer</label>
                    <input type="text" class="form-control" name="installer" placeholder="" value="">
                    <div class="invalid-feedback"></div>
                </div>

                <div class="mb-3">
                    <label for="visit_date">Date</label>
                    <input type="date" class="form-control" name="date" placeholder="" value="" >
                    <div class="invalid-feedback">
                        Visit date is required.
                    </div>
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


        <hr />
            <h4>CHECK BOXES TO CONFIRM SECURE INSTALLATION</h4>
        <hr />

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Check Type:</label>
                {{ Form::select('check_type', $sys_options, null, ['class'=> 'form-control mb-3 custom-select']) }}    
            </div>

        </div>

        <div class="card mb-4">
            <div class="card-body">
                <b>This list is to be used as a guideline. Make sure system is set up so it cannot be compromised. Check each item, and if not, please give details along with before/after pictures of corrections.</b>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check1" value="0">
                {{ Form::checkbox('check1', '1', null, ['class' => 'custom-control-input', 'id' => 'check1']) }}
                <label class="custom-control-label ml-3" for="check1">Metal poles are to be a minimum of 5 feet deep with a minimum 15 inch hole and larger in loose soil areas. Bottom bracket is set at ground level.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check2" value="0">
                {{ Form::checkbox('check2', '1', null, ['class' => 'custom-control-input', 'id' => 'check2']) }}
                <label class="custom-control-label ml-3" for="check2">Metal poles will have a slight back-lean to insure that once they have moved an inch or so they will still have a slight back-angle. They should not lean left or right. Please note any poles that have moved since install.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check3" value="0">
                {{ Form::checkbox('check3', '1', null, ['class' => 'custom-control-input', 'id' => 'check3']) }}
                <label class="custom-control-label ml-3" for="check3">Metal poles by gates will be turned so brackets face the chain link fence to close gap. Six inch maximum between metal pole & fiberglass pole on gate. Roll gate end pole brackets will face the direction of pull.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check4" value="0">
                {{ Form::checkbox('check4', '1', null, ['class' => 'custom-control-input', 'id' => 'check4']) }}
                <label class="custom-control-label ml-3" for="check4">No gaps are acceptable greater than 6 inches. Use fiberglass if you must step out due to concrete footing. No wire loops to fill in gaps.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check5" value="0">
                {{ Form::checkbox('check5', '1', null, ['class' => 'custom-control-input', 'id' => 'check5']) }}
                <label class="custom-control-label ml-3" for="check5">Metal poles should be free from nicks and scratches. They should be painted with Rustolium paint(light gray).</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check6" value="0">
                {{ Form::checkbox('check6', '1', null, ['class' => 'custom-control-input', 'id' => 'check6']) }}
                <label class="custom-control-label ml-3" for="check6">All fiberglass poles will be in line from metal pole to metal pole with no left or right pull and be spaced 3 to 12 inches from perimeter fence.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check7" value="0">
                {{ Form::checkbox('check7', '1', null, ['class' => 'custom-control-input', 'id' => 'check7']) }}
                <label class="custom-control-label ml-3" for="check7">Y-contact on gates should be used with an extension bracket. All contracts must have a bolt installed through fiberglass pole to secure.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check8" value="0">
                {{ Form::checkbox('check8', '1', null, ['class' => 'custom-control-input', 'id' => 'check8']) }}
                <label class="custom-control-label ml-3" for="check8">All connections from black wire to galvanized wire will be joined with joint clamps and tightened so they cannont be loosened by hand.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check9" value="0">
                {{ Form::checkbox('check9', '1', null, ['class' => 'custom-control-input', 'id' => 'check9']) }}
                <label class="custom-control-label ml-3" for="check9">All sections greater than 250 feet have all jumpers connected with joint clamps. All sections smaller than 250 feet have all jumpers connected with splices.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check10" value="0">
                {{ Form::checkbox('check10', '1', null, ['class' => 'custom-control-input', 'id' => 'check10']) }}
                <label class="custom-control-label ml-3" for="check10">All nuts on donut insulators should be tight. Insulators should spin freely.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check11" value="0">
                {{ Form::checkbox('check11', '1', null, ['class' => 'custom-control-input', 'id' => 'check11']) }}
                <label class="custom-control-label ml-3" for="check11">All jumpers must be in straight-angle "C's".</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check12" value="0">
                {{ Form::checkbox('check12', '1', null, ['class' => 'custom-control-input', 'id' => 'check12']) }}
                <label class="custom-control-label ml-3" for="check12">All electronics will be run neatly. Any communication wire outdoors will be run to PVC. If inside, run in PVC unless the wire is in rafters or hidden from view.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check13" value="0">
                {{ Form::checkbox('check13', '1', null, ['class' => 'custom-control-input', 'id' => 'check13']) }}
                <label class="custom-control-label ml-3" for="check13">Customer's yard will be left cleaner than when we arrived, this includes dirt piles from setting steel poles. All install materials should have been removed from jobsite.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check14" value="0">
                {{ Form::checkbox('check14', '1', null, ['class' => 'custom-control-input', 'id' => 'check14']) }}
                <label class="custom-control-label ml-3" for="check14">All grounds are secured tightly with tap sleeves at the end of medium sprints and crimped at back of gate springs to create a good ground connection.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check15" value="0">
                {{ Form::checkbox('check15', '1', null, ['class' => 'custom-control-input', 'id' => 'check15']) }}
                <label class="custom-control-label ml-3" for="check15">Bottom #1 wire is completely at ground level all the way around the perimter. #2nd wire stays 4 inches away from #1 wire and # 3 wire. #2 wire is hot all the way around the perimeter.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check16" value="0">
                {{ Form::checkbox('check16', '1', null, ['class' => 'custom-control-input', 'id' => 'check16']) }}
                <label class="custom-control-label ml-3" for="check16">No gaps under fence; if there are high or low spots use a full fiberglass pole.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check17" value="0">
                {{ Form::checkbox('check17', '1', null, ['class' => 'custom-control-input', 'id' => 'check17']) }}
                <label class="custom-control-label ml-3" for="check17">Signs will be on every other panel, or every sixty fee. MUST BE Sentry Supplied sign wire.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check18" value="0">
                {{ Form::checkbox('check18', '1', null, ['class' => 'custom-control-input', 'id' => 'check18']) }}
                <label class="custom-control-label ml-3" for="check18">Only use a fiberglass vs. a metal pole when fiberglass can be braced off without putting too much stree on customer's poles. Never brace off to a wooden pole. ALl bends of 170 degrees or smaller must have a steel pole. ALl braced poles should have brace points at a maximum distance of 24 inches between braces.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check19" value="0">
                {{ Form::checkbox('check19', '1', null, ['class' => 'custom-control-input', 'id' => 'check19']) }}
                <label class="custom-control-label ml-3" for="check19">Splices should be double pressed and wrapped neat and tight.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check20" value="0">
                {{ Form::checkbox('check20', '1', null, ['class' => 'custom-control-input', 'id' => 'check20']) }}
                <label class="custom-control-label ml-3" for="check20">When solar panels are installed on a roof, No screws or any type of holes ever go into customer's roof. Wrap with wire to secure to a roof structure.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check21" value="0">
                {{ Form::checkbox('check21', '1', null, ['class' => 'custom-control-input', 'id' => 'check21']) }}
                <label class="custom-control-label ml-3" for="check21">All connections in both silver box and caddx box must be secure and with wire nuts where necessary.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check22" value="0">
                {{ Form::checkbox('check22', '1', null, ['class' => 'custom-control-input', 'id' => 'check22']) }}
                <label class="custom-control-label ml-3" for="check22">ALl on-off switches must be secured to a metal pole. Cable ties are not acceptable.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check23" value="0">
                {{ Form::checkbox('check23', '1', null, ['class' => 'custom-control-input', 'id' => 'check23']) }}
                <label class="custom-control-label ml-3" for="check23">Drop clip pins are horizontal not vertical and are tight to the fiberglass pole.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check24" value="0">
                {{ Form::checkbox('check24', '1', null, ['class' => 'custom-control-input', 'id' => 'check24']) }}
                <label class="custom-control-label ml-3" for="check24">Rapid tighteners are within 3 feet from fiberglass, staggered and neatly done. Minimum of 3 wraps of wire left on each tightner for future splicing.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check25" value="0">
                {{ Form::checkbox('check25', '1', null, ['class' => 'custom-control-input', 'id' => 'check25']) }}
                <label class="custom-control-label ml-3" for="check25">All break down sections are less than 1200 feet.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check26" value="0">
                {{ Form::checkbox('check26', '1', null, ['class' => 'custom-control-input', 'id' => 'check26']) }}
                <label class="custom-control-label ml-3" for="check26">Fiberglass poles have ancors in them to preven them from being pulled up.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check27" value="0">
                {{ Form::checkbox('check27', '1', null, ['class' => 'custom-control-input', 'id' => 'check27']) }}
                <label class="custom-control-label ml-3" for="check27">Alarm panel and phone suppressor ground. Use 1 lefg of 14/2 wire under ground terminal and 2nd leg of 14/2 wire to go to ground screw on phone surge protector, then ground 14/2 to ground, other than Electric fence ground and away from other utilities or other devices already grounded.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check28" value="0">
                {{ Form::checkbox('check28', '1', null, ['class' => 'custom-control-input', 'id' => 'check28']) }}
                <label class="custom-control-label ml-3" for="check28">Battery is a sealed maintenance free battery. No water batteries.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check29" value="0">
                {{ Form::checkbox('check29', '1', null, ['class' => 'custom-control-input', 'id' => 'check29']) }}
                <label class="custom-control-label ml-3" for="check29">All PVC and wiring to electronic boxes enter into the bottom or back, not the top or sides.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check30" value="0">
                {{ Form::checkbox('check30', '1', null, ['class' => 'custom-control-input', 'id' => 'check30']) }}
                <label class="custom-control-label ml-3" for="check30">Each silver box has 3 ground rods installed 10 feet apart. Wire from ground rods to silver box is black wire and not fence wire. Alarm panel is grounded at least 10 feet from fence grounds.</label>
            </div>
        </div>

        <div class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="check31" value="0">
                {{ Form::checkbox('check31', '1', null, ['class' => 'custom-control-input', 'id' => 'check31']) }}
                <label class="custom-control-label ml-3" for="check31">Voltage through all gates only travels in one direction. No 2 contacts on one gate panel.</label>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <b>System is secure and properly installed. Please make suggestions below. We encourage positive and negative remarks.</b>
            </div>
        </div>

        <div class="mb-4">
            <label>Is the system currently working properly and have they been armin since install/addon?</label>
            <textarea class="form-control" id="quest1" name="quest1" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
            <label>Customer comments about install/add on process:</label>
            <textarea class="form-control" id="quest2" name="quest2" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
            <label>Was customer well versed on the system operation and troubleshooting?</label>
            <textarea class="form-control" id="quest3" name="quest3" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
            <label>Look over tech layout and install/add-on layout and list for differences:</label>
            <textarea class="form-control" id="quest4" name="quest4" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
            <label>Was there any work needed to be complete install/add-on? Please list:</label>
            <textarea class="form-control" id="quest5" name="quest5" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
            <label>List any security concerns and how they were fixed:</label>
            <textarea class="form-control" id="quest6" name="quest6" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
            <label>List any cosmetic concerns and how they were fixed:</label>
            <textarea class="form-control" id="quest7" name="quest7" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
            <label>Comments:</label>
            <textarea class="form-control" id="quest8" name="quest8" rows="3"></textarea>
            <div class="invalid-feedback"></div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>

    </div> <!-- col-12 -->
</div> <!-- row -->


@endsection

@section ('customjs')

@endsection