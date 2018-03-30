@extends ('layout')

@section ('content')

<div class="d-flex row justify-content-between">
    <h1>Intrusion Tickets</h1>
    <form class="form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Type here to search">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default">Search</button>
            </span>
        </div>
    </form>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-hover" id="sv_table">
            <thead>
                <tr>
                    <th>Ticket #</th>
                    <th>Account #</th>
                    <th>Service Tech</th>
                    <th>Customer</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Phone</th>
                    <th>Visit Date</th>
                </tr>
            </thead>
            <tbody>

                @foreach($intrusion as $ticket)
                <tr> 
                    <td><a href="/intrusion/{{ $ticket->ticket_num}}">{{ $ticket->ticket_num}}</a></td>
                    <td>{{ $ticket->acct_num}}</td>
                    <td>{{ $ticket->serv_tech}}</td>
                    <td>{{ $ticket->cust_name}}</td>
                    <td>{{ $ticket->city}}</td>
                    <td>{{ $ticket->state}}</td>
                    <td>{{ $ticket->phone}}</td>
                    <td>{{ $ticket->visit_date}}</td>
                    <!--<td><a id="dl-pdf" class="btn btn-secondary" href="" target="_blank">Download</a></td>  -->
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>


@endsection