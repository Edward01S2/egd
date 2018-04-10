@extends('layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <img class="img-fluid mb-4" src="{{ asset('storage/logo.png') }}" alt="">
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Thank you for submitting the ticket</div>

                <div class="card-body text-center pt-5 pb-5">
                    <p>Please download the ticket and upload to Sedona.</p>
                <p><a class="btn btn-primary" href="/{{ session('type') }}/{{ session('ticket_num') }}/download">Download PDF</a>
                    <span class="pl-3 pr-3">or</span>
                    <a class="btn btn-secondary" href="/">Create New Ticket</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section ('customjs')

<script>

</script>

@endsection
