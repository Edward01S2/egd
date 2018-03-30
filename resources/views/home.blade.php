@extends('layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Create a New Ticket</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form id="ticket-form" name="ticket-form" method="POST" id="ticket_select" action="/tickets/create">
                        {{ csrf_field() }}
                        <div class="col-6 offset-3 mb-4 mt-4">

                            <div class="form-group row">
                                <label class="col-form-label col-sm-4" for="ticket_num">Ticket #</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="ticket_num" placeholder="" value="" >
                                    <div class="invalid-feedback">Ticket # is required.</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-sm-4">Ticket Type</label>
                                <div class="col-sm-8">
                                    <select id="ticketsel" name="ticketsel" class="custom-select form-control">
                                        <option selected="selected" value="/tickets/create">Service Ticket</option>
                                        <option value="/pst/create">Post-Install</option>
                                        <option value="/exposure/create">Exposure</option>
                                        <option value="/addon/create">Add-on Quote</option>
                                        <option value="/ist/create">IST</option>
                                        <option value="/intrusion/create">Intrusion</option>
                                    </select>
                                </div>    
                            </div>

                            <button class="btn btn-primary btn-lg btn-block mt-4" type="submit">Submit</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section ('customjs')

<script>
    document.getElementById('ticketsel').onchange = function() {
        document.getElementById('ticket-form').action = this.value;
    };
</script>

@endsection
