@extends('layouts.app')
@section('content')
    <div class="container-fluid app-body app-home">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                    <div class="col-md-3">  
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Group Name</th>
                        <th class="text-center">Group Type</th>
                        <th class="text-center">Account Name</th>
                        <th>Post Text</th>
                        <th class="text-center">Time</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($bufferPosts as $bufferPost)
                            <tr>
                                <td>{{$bufferPost->accountInfo->name}}</td>
                                <td class="text-center">{{$bufferPost->accountInfo->type}}</td>
                                <td class="text-center">
                                    <img class="images-circle" width="50px" height="50px" src="{{$bufferPost->accountInfo->avatar}}">
                                </td>
                                <td>{{$bufferPost->post_text}}</td>
                                <td class="text-center">{{$bufferPost->sent_at}}</td>
                                
                            </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
            <div class="card-footer">
                <div class="pagination">
              {{ $bufferPosts->links() }}
          </div>
            </div>
          </div>
        
          
          
    </div>
@endsection