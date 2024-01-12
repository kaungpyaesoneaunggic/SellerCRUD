@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <form action={{ route('seller.update',$seller->id) }} id='createForm' onsubmit="disableSubmitButton()"  method="post">
                            @csrf
                            @method('put')
                        <div class="mb-3 mt-3">
                            <label  class="form-label">Name <small class="text-danger">*</small></label>
                            <input name="name" class="form-control @error('name') is-invalid @enderror " value="{{ old('name') ?? $seller->name }}">
                            @error('name')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Township<small class="text-danger">*</small></label>
                            <input name="township" class="form-control @error('township') is-invalid @enderror " value="{{ old('township') ?? $seller->township}}">
                            @error('township')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Rating<small class="text-danger">*</small></label>
                            <select name="rating" >
                                <option value="{{ old('rating') ?? $seller->rating }}">{{ old('rating') ?? $seller->rating }}</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                            </select>
                            @error('rating')
                                <div class="text-danger">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4 text-center">
                                <a href="{{ route('seller.index') }}"  class="btn btn-lg btn-outline-dark">Back</a>
                            <button id="createSubmitBtn" type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
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