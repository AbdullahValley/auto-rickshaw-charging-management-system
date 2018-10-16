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
                        <th>User ID</th>
                        <th>License Number</th>
                        <th>Driver Name</th>
                        <th>Owner Name</th>
                        <th>Driver Mobile</th>
                        <th>Owner Mobile</th>
                        <th>Driver Address</th>
                        <th>Owner Address</th>
                        <th>Auto Type</th>
                        <th>Charge Rate</th>
                        <th>Due Money</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->licence }}</td>
                            <td>{{ $member->driver_name }}</td>
                            <td>{{ $member->owner_name }}</td>
                            <td>{{ $member->driver_mobile }}</td>
                            <td>{{ $member->owner_mobile }}</td>
                            <td>{{ $member->driver_address }}</td>
                            <td>{{ $member->owner_address }}</td>
                            <td>{{ $member->auto_type }}</td>
                            <td>{{ $member->charge_rate }} Taka</td>
                            <td>{{ $member->due_money }} Taka</td>
                            <td>{{ $member->photo }}

                                <img src="{{ $member->photo ? asset('images/uploads/' . $member->photo) : asset('images/avatar.png') }}" alt="Member Image" width="80px;">

                            </td>
                            <td>{{ $member->status ? "Active" : "Inactive"  }}</td>
                            <td>

                                <a href="{{ action('HomeController@member_edit', $member->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>

                                <form action="{{ action('HomeController@member_destroy', $member->id) }}" method="post" style="display: inline">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('PERMANENTLY Delete this Member. Are you Sure ?')">
                                        <i class="fa fa-trash-o"> Delete</i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


        </div>

    </div>
@endsection
