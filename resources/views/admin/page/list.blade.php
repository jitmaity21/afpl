@extends('admin.layouts.master')
@section('title', 'All Pages')
@section('header_content')
  <h1>Pages <a class="btn btn-primary btn-mini" href="{{route('page.add')}}">Add New Page</a></h1>
@endsection

@section('content')
  <div class="row-fluid">
    <div class="span12">
      <div class="inline-item">
        <p class="text-left"><strong>Total {{$pages->total()}} Page{{$pages->total() > 1 ? 's' : '' }}</strong></p>
      </div>
      <div class="widget-box">
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Template</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th style="width: 120px;">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pages as $page)
                <tr>
                  <td>1</td>
                  <td><a href="{{route('page.edit',$page->id)}}"><strong>{{$page->title}}</strong></a></td>
                  <td>{{$page->template}}</td>
                  <td>{{$page->status}}</td>
                  <td>12/04/18</td>
                  <td class="center text-center" >
                    <a target="_blank" class="btn btn-mini btn-success" href="{{route('page.single',$page->slug)}}">View</a>
                    <a class="btn btn-mini btn-danger" href="#">Delete</a>
                    <a class="btn btn-mini btn-primary" href="{{route('page.edit',$page->id)}}">Edit</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <nav class="page navigation pull-right">
          {{ $pages->links() }}
        </nav>
    </div>
  </div>
@endsection
