@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1" id="box">
                <div class="row">

                    <div class="col-lg-8 bg-danger left-box">
                        <form class="form-group">

                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="date" name="" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <input type="time" name="" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>গাড়ির ধরন:</p>
                                    <input type="radio" name="cust-type" value=""> অটো <br>
                                    <input type="radio" name="cust-type" value=""> মোটা চাকা রিক্সা <br>
                                    <input type="radio" name="cust-type" value=""> চিকন চাকা রিক্সা <br>
                                    <input type="radio" name="cust-type" value=""> অন্যান্য <br>
                                </div>

                                <div class="col-lg-6">
                                    <p>Picture:</p>
                                    {{--<img src="" class="w-50 h-50 img-fluid">--}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>আইডি/লাইসেন্স:</p>
                                    <input type="number" name="" min="1000" max="9999" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <p>নাম: </p>
                                    <input type="text" name="" class="form-control" readonly="Optional">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <p>চার্জ এর ধরন:</p>
                                    <input type="radio" name="charge-type" value=""> ফুল <br>
                                    <input type="radio" name="charge-type" value="" data-toggle="collapse" data-target="#pp"> কাষ্টম/কাটা<br>
                                    <input type="text" name="" class=" collapse fade form-control" id="pp">
                                </div>

                                <div class="col-lg-6">
                                    <p>চার্জ এর রেট:</p>
                                    <input type="text" name="" class="form-control" readonly="Optional">


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>জমা নগদ: </p>
                                    <input type="text" name="" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <p>জমা বাকি: </p>
                                    <input type="text" name=""  class="form-control" readonly="Optional">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>পূর্বের বাকি: </p>
                                    <input type="text" name=""  class="form-control" readonly="Optional">
                                </div>

                                <div class="col-lg-6">
                                    <p>মোট বাকি: </p>
                                    <input type="text" name=""  class="form-control" readonly="Optional">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p>বাকি পরিশধ: </p>
                                    <input type="text" name=""  class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <p>মোট জের: </p>
                                    <input type="text" name=""  class="form-control" readonly="Optional">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="submit" name="" value="Submit" class="btn btn-success form-control" >
                                </div>


                            </div>

                        </form>

                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection