@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card bg-default">
        <div class="card-body">

            <h3 class="card-subtitle mb-2 text-muted">{{$card}}</h3>
            <hr />
            @include('partials.flash-messages')
            <div class="table-responsive">
                <table class="table table-condensed table-striped dataTable">
                    <tr>
                        <td>#</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Phone Number</td>
                        <td>Email</td>
                        <td>Company</td>
                        <td>#</td>
                    </tr>

                    @if(sizeof($employees) > 0)   
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->phone_number}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->name}}</td>
                            <td>
                                <a href="{{url('employee/show/'.$employee->id)}}"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;
                                <a href="{{url('employee/edit/'.$employee->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;                               
                                <a href="{{url('employee/delete/'.$employee->id)}}"><i class="fas fa-trash"></i></a> &nbsp;&nbsp;
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="7">{{ $employees->links() }}</td>
                        </tr>
                    @else 
                    <tr>
                            <td colspan="7" style="text-align: center;">No data found</td>
                    </tr> 
                    @endif
                </table>
            </div>

        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small" href="#"></a>
            <div class="small float-right"><i class="fas fa-users"></i></div>
        </div>
    </div>
</div>

@endsection