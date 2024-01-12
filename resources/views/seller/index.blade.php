@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body col-md-12">
                    <h1>Here are store ratings</h1>
                </div class="">
                    <table class="table mx-5 justify-content-center">
                        <thead>
                          <tr >
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Township</th>
                            <th scope="col">Rating</th>
                            <th scope="col ">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @php
                              $temp=1;
                            @endphp
                              @foreach ($sellers as $seller)
                              <tr>
                                <th scope="row">{{$temp++}}</th>
                                <td>{{ $seller->name }}</td>
                                <td>{{ $seller->township }}</td>
                                <td>{{ $seller->rating }}</td>
                                <td>
                                  <div class="justify-content-center">
                                      <a href="{{ route('seller.edit',$seller->id) }}"  class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                      <a href="{{ route('seller.show',$seller->id) }}" type="button" class="btn btn-outline-info btn-sm"> <i class="fas fa-exclamation"></i></a>
                                      <form action="{{ route('seller.destroy',$seller->id) }}"  method="post"  class="d-inline-block">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm" >🚮</button>
                                      </form>
                                    </div>
                                  </td>
                                  
                                </tr>
                              @endforeach
                              <a href="{{ route('seller.create') }}" class="btn btn-outline-success mx-5">+</i></a>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection