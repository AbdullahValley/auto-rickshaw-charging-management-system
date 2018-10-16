@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @if(session('successMsg'))
                <span class="alert alert-success alert-dismissible" role="alert">
                            {{ session('successMsg') }}.
            </span>
            @endif
            <div class="col-lg-10 offset-lg-1" id="box">
                <div class="row">

                    <div class="col-lg-8 bg-danger left-box">
                        <form action="{{ action('HomeController@store_daily_sheet') }}" method="post" enctype="multipart/form-data" class="form-group">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <p>গাড়িচালকের তালিকা:</p>
                                <select class="form-control" name="member_id" required>
                                    <option value="">Select One</option>
                                    @foreach($members as $member)
                                        <option value="{{ $member->id }}">{{ 'ID : '.$member->id.'. ' }}{{ 'Name : '. $member->driver_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <p>চার্জ এর ধরন:</p>
                                    <input type="radio" name="charge_type" value="1"> ফুল <br>
                                    <input type="radio" name="charge_type" value="2" data-toggle="collapse" data-target="#pp"> কাষ্টম/কাটা<br>
                                    <input type="text" name="" class=" collapse fade form-control" id="pp">
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>জমা নগদ: </p>
                                    <input type="text" name="in_cash" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <p>জমা বাকি: </p>
                                    <input type="text" class="form-control" readonly="Optional">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>পূর্বের বাকি: </p>
                                    <input type="text" class="form-control" readonly="Optional">
                                </div>

                                <div class="col-lg-6">
                                    <p>মোট বাকি: </p>
                                    <input type="text" class="form-control" readonly="Optional">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>বাকি পরিশধ: </p>
                                    <input type="text" name="loan_pay"  class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <p>মোট জের: </p>
                                    <input type="text" class="form-control" readonly="Optional">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <br>
                                    <button type="submit" class="btn btn-success form-control">Submit</button>
                                </div>

                            </div>

                        </form>

                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection