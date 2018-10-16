@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">

        @if(session('successMsg'))
            <span class="alert alert-success alert-dismissible" role="alert">
                            {{ session('successMsg') }}.
            </span>
        @endif

        <div class="col-lg-6 offset-lg-3" id="form">

            <h2>গাড়িচালকের তালিকা</h2>


            <form action="{{ action('HomeController@store_member') }}" method="post" enctype="multipart/form-data" class="form-group">
                @csrf
                <div class="row">

                    <div class="col-lg-12">
                        <p> অাইডি/লাইসেন্স নং :</p>
                        <input type="number" name="licence" placeholder="Id No" min="1000" max="9999"  required class="form-control">
                    </div>


                </div>


                <div class="row">

                    <div class="col-lg-6">
                        <p> ড্রইভারের নাম:</p>
                        <input type="text" name="driver_name" placeholder="Enter Driver Name"  required class="form-control">
                    </div>

                    <div class="col-lg-6">
                        <p> মালিকের নাম:</p>
                        <input type="text" name="owner_name" placeholder="Enter Owner Name"  required class="form-control">
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <p>ড্রইভারের নম্বার:</p>
                        <input type="tel" name="driver_mobile" placeholder="Enter Mobile number"  required class="form-control">
                    </div>

                    <div class="col-lg-6">
                        <p> মালিকের নম্বর:</p>
                        <input type="tel" name="owner_mobile" placeholder="Enter Mobile number"  required class="form-control">
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <p>ড্রইভারের ঠিকানা:</p>
                        <textarea type="text" name="driver_address" placeholder="Enter Full address..." rows="5"  required class="form-control"></textarea>
                    </div>

                    <div class="col-lg-6">
                        <p>মালিকের ঠিকানা:</p>
                        <textarea type="text" name="owner_address" placeholder="Enter Full address..." rows="5"  required class="form-control"></textarea>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <p>গাড়ির ধরন:</p>
                        <select class="form-control" name="auto_type">
                            <option value="">Select One</option>
                            <option value="অটো">অটো</option>
                            <option value="মোটা চাকা রিক্সা">মোটা চাকা রিক্সা</option>
                            <option value="চিকন চাকা রিক্সা">চিকন চাকা রিক্সা</option>
                            <option value="অন্যান্য">অন্যান্য</option>
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <p>চার্জ রেট:</p>
                        <input type="text" name="charge_rate" placeholder="Enter Rate in Taka" required class="form-control">
                    </div>

                </div>


                <div class="row">

                    <div class="col-lg-6">
                        <p> বকেয়া:</p>
                        <input type="text" name="due_money" placeholder="বকেয়া প্রদান করুন" class=" form-control">
                    </div>

                    <div class="col-lg-6">
                        <p>ছবি আপলোড করুন:</p>
                        <input type="file" name="photo" class="bg-light form-control" style="padding:0 0 5px; margin: 0; border: none;">
                    </div>

                </div>

                <br>

                <button type="submit" class="btn btn-danger form-control">Submit</button>


            </form>



        </div>
    </div>

</div>
@endsection

{{--@section('custom-js')

    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

@endsection--}}
