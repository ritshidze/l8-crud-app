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
                        <td>Logo</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Website</td>
                        <td>Date Created</td>
                        <td>Date Updated</td>
                        <td>#</td>
                    </tr>
                    @if(sizeof($companies) > 0)   
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>
                                @if($company->logo <> "")
                                    <img src="{{asset('storage/'.$company->logo)}}" width="50" height="50">
                                @else
                                    {{$company->name}}
                                @endif
                            </td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->website}}</td>
                            <td>{{$company->created_at}}</td>
                            <td>{{$company->updated_at}}</td>
                            <td>
                                <a href="{{url('company/show/'.$company->id)}}"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;
                                <a href="{{url('company/edit/'.$company->id)}}"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                <a href="{{url('company/delete/'.$company->id)}}"><i class="fas fa-trash"></i></a> &nbsp;&nbsp;
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="8">{{ $companies->links() }}</td>
                        </tr>
                    @else 
                    <tr>
                            <td colspan="8" style="text-align: center;">No data found</td>
                    </tr> 
                    @endif
                </table>
            </div>

        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small" href="#"></a>
            <div class="small float-right"><i class="fal fa-laptop-house"></i></div>
        </div>
    </div>
</div>

@endsection