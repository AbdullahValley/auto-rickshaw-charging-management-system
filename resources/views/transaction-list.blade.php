@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row">

            @if(session('successMsg'))
                <span class="alert alert-success alert-dismissible" role="alert">
                            {{ session('successMsg') }}.
            </span>
            @endif


            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Member ID</th>
                    <th>Charge Type</th>
                    <th>In Cash</th>
                    <th>Loan Paid</th>
                    <th>Transaction Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->member_id }}</td>
                        <td>{{ $transaction->charge_type }}</td>
                        <td>{{ $transaction->in_cash }}</td>
                        <td>{{ $transaction->loan_pay }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>

    </div>
@endsection
