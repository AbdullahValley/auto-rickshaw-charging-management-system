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


                <form action="{{ action('HomeController@member_update', $member->id)  }}" method="post" enctype="multipart/form-data" class="form-group">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <p> অাইডি/লাইসেন্স নং :</p>
                            <input type="number" name="licence" value="{{ $member->licence }}" min="1000" max="9999"  required class="form-control">
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-lg-6">
                            <p> ড্রইভারের নাম:</p>
                            <input type="text" name="driver_name" value="{{ $member->driver_name }}"  required class="form-control">
                        </div>

                        <div class="col-lg-6">
                            <p> মালিকের নাম:</p>
                            <input type="text" name="owner_name" value="{{ $member->owner_name }}"  required class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <p>ড্রইভারের নম্বার:</p>
                            <input type="tel" name="driver_mobile" value="{{ $member->driver_mobile }}"  required class="form-control">
                        </div>

                        <div class="col-lg-6">
                            <p> মালিকের নম্বর:</p>
                            <input type="tel" name="owner_mobile" value="{{ $member->owner_mobile }}"  required class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <p>ড্রইভারের ঠিকানা:</p>
                            <textarea type="text" name="driver_address" rows="5"  required class="form-control">{{ $member->driver_address }}</textarea>
                        </div>

                        <div class="col-lg-6">
                            <p>মালিকের ঠিকানা:</p>
                            <textarea type="text" name="owner_address" rows="5"  required class="form-control">{{ $member->owner_address }}</textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <p>গাড়ির ধরন:</p>
                            <select class="form-control" name="auto_type" required>
                                <option value="">Select One</option>
                                <option value="অটো">অটো</option>
                                <option value="মোটা চাকা রিক্সা">মোটা চাকা রিক্সা</option>
                                <option value="চিকন চাকা রিক্সা">চিকন চাকা রিক্সা</option>
                                <option value="অন্যান্য">অন্যান্য</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <p>চার্জ রেট:</p>
                            <input type="text" name="charge_rate" value="{{ $member->charge_rate }}" required class="form-control">
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-lg-6">
                            <p> বকেয়া:</p>
                            <input type="text" name="due_money" value="{{ $member->due_money }}" class=" form-control">
                        </div>

                        <div class="col-lg-6">
                            <p>স্টাটাস আপডেট করুন:</p>

                            <input type="radio" name="status" value="1" {{ $member->status == 1 ? 'checked' : '' }}> <font color="white"> Active</font>

                            <input type="radio" name="status" value="0" {{ $member->status == 0 ? 'checked' : '' }}> <font color="white"> Inactive</font>

                        </div>

                        <div class="col-lg-6">
                            <p>ছবি আপডেট করুন:</p>

                            <img src="{{ $member->photo ? asset('images/uploads/' . $member->photo) : asset('images/avatar.png') }}" alt="Member Image" width="80px;"><br><br>

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