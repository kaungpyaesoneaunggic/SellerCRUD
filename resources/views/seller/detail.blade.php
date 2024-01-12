@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    
                    <div class="">
                        <div class="mb-3 mt-3">
                            <label  class="form-label">Name</label>
                            <input name="name" class="form-control " value="{{ $seller->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Township</label>
                            <input name="township" class="form-control" value="{{ $seller->township }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label" disabled>Rating</label>
                            <select name="rating">
                                <option value="none">{{ $seller->rating }}</option>
                            </select>
                        </div>
                        <div class="mb-4 text-center">
                                <a href="{{ route('seller.index') }}"  class="btn btn-lg btn-outline-dark">Back</a>
                        </div>
                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection