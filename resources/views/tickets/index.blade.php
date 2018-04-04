@extends ('layout')

@section ('content')

<div class="d-flex row justify-content-between">
    <h1>Tickets</h1>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" style="width:100%" id="sv_table">
            <thead>
                <tr>
                    <th>Ticket #</th>
                    <th>Type</th>
                    <th>Customer</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>DL</th>
                </tr>
            </thead>
            <tbody>

                @foreach($sv as $ticket)
                <tr> 
                    <td><a href="/tickets/{{ $ticket->ticket_num}}">{{ $ticket->ticket_num}}</a></td>
                    <td>{{ $ticket->tt }}</td>
                    <td>{{ $ticket->cust_name}}</td>
                    <td>{{ $ticket->city}}</td>
                    <td>{{ $ticket->state}}</td>
                    <td>{{ $ticket->phone}}</td>
                    <td>{{ $ticket->visit_date }}</td>
                    <td><a id="dl-pdf" class="" href="/tickets/{{ $ticket->ticket_num }}/download">PDF</a></td>
                </tr>
                @endforeach

                @foreach($expo as $ticket)
                <tr> 
                    <td><a href="/exposure/{{ $ticket->ticket_num}}">{{ $ticket->ticket_num}}</a></td>
                    <td>{{ $ticket->tt }}</td>
                    <td>{{ $ticket->cust_name}}</td>
                    <td>{{ $ticket->city}}</td>
                    <td>{{ $ticket->state}}</td>
                    <td>{{ $ticket->phone}}</td>
                    <td>{{ $ticket->visit_date }}</td>
                    <<td><a id="dl-pdf" class="" href="/exposure/{{ $ticket->ticket_num }}/download">PDF</a></td>
                </tr>
                @endforeach

                @foreach($addon as $ticket)
                <tr> 
                    <td><a href="/addon/{{ $ticket->ticket_num}}">{{ $ticket->ticket_num}}</a></td>
                    <td>{{ $ticket->tt }}</td>
                    <td>{{ $ticket->cust_name}}</td>
                    <td>{{ $ticket->city}}</td>
                    <td>{{ $ticket->state}}</td>
                    <td>{{ $ticket->phone}}</td>
                    <td>{{ $ticket->visit_date }}</td>
                    <td><a id="dl-pdf" class="" href="/addon/{{ $ticket->ticket_num }}/download">PDF</a></td>
                </tr>
                @endforeach

                @foreach($intr as $ticket)
                <tr> 
                    <td><a href="/intrusion/{{ $ticket->ticket_num}}">{{ $ticket->ticket_num}}</a></td>
                    <td>{{ $ticket->tt }}</td>
                    <td>{{ $ticket->cust_name}}</td>
                    <td>{{ $ticket->city}}</td>
                    <td>{{ $ticket->state}}</td>
                    <td>{{ $ticket->phone}}</td>
                    <td>{{ $ticket->visit_date }}</td>
                    <td><a id="dl-pdf" class="" href="/intrusion/{{ $ticket->ticket_num }}/download">PDF</a></td>
                </tr>
                @endforeach

                @foreach($post as $ticket)
                <tr> 
                    <td><a href="/pst/{{ $ticket->ticket_num}}">{{ $ticket->ticket_num}}</a></td>
                    <td>{{ $ticket->tt }}</td>
                    <td>{{ $ticket->cust_name}}</td>
                    <td>{{ $ticket->city}}</td>
                    <td>{{ $ticket->state}}</td>
                    <td>{{ $ticket->phone}}</td>
                    <td>{{ $ticket->date }}</td>
                    <td><a id="dl-pdf" class="" href="/pst/{{ $ticket->ticket_num }}/download">PDF</a></td>
                </tr>
                @endforeach

                @foreach($inst as $ticket)
                <tr> 
                    <td><a href="/ist/{{ $ticket->ticket_num}}">{{ $ticket->ticket_num}}</a></td>
                    <td>{{ $ticket->tt }}</td>
                    <td>{{ $ticket->cust_name}}</td>
                    <td>{{ $ticket->city}}</td>
                    <td>{{ $ticket->state}}</td>
                    <td>{{ $ticket->phone}}</td>
                    <td>{{ $ticket->visit_date }}</td>
                    <td><a id="dl-pdf" class="" href="/ist/{{ $ticket->ticket_num }}/download">PDF</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>


@endsection

@section ('customjs')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#sv_table').DataTable({
            "iDisplayLength":50
        });
    });
</script>
@endsection