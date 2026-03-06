@extends('masterTwo')
@section('title', 'FEEDBACK')
@section('main')
<div class="admin-page">
    @if($message = Session::get('success'))
        <div class="admin-alert alert-success">
            <i class="fas fa-check-circle"></i> {{$message}}
        </div>
    @endif

    <div class="page-header-bar">
        <span class="record-info"><strong>{{count($feedBack)}}</strong> feedback entries</span>
    </div>

    <div class="admin-card" >
        <div class="admin-card-header">
            <i class="fas fa-envelope"></i>
            <h4>Customer Feedback</h4>
        </div>
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Feedback</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th width="80">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedBack as $select_feedBack)
                        <tr>
                            <td class="cell-id text-center">#{{$select_feedBack->id}}</td>
                            <td class="cell-bold">{{$select_feedBack->user->name ?? 'Unknown'}}</td>
                            <td class="cell-muted" style="max-width: 300px;">{{$select_feedBack->content}}</td>
                            <td class="cell-muted">{{$select_feedBack->user->email ?? ''}}</td>
                            <td class="cell-muted">{{$select_feedBack->created_at->format('d/m/Y H:i')}}</td>
                            <td class="text-center">
                                <a href="{{route('delete_feedBack', $select_feedBack->id)}}" class="btn-act btn-act-delete" onclick="return confirm('Delete this feedback?')">
                                    <i class="fa fa-trash"></i> Del
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if(count($feedBack) == 0)
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <p>No feedback received yet</p>
            </div>
            @endif
        </div>
    </div>
</div>
@stop
