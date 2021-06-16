@extends('layouts.app')

@section('content')
    <div class="sm:grid grid-cols-1 m-auto w-4/5 mb-10 pt-5 text-3xl text-extrabold text-center">
        Enquiry Form
    </div>
    
    <div class="sm:grid grid-cols-1 m-auto w-4/5 mb-10 text-left">
    <form 
            action="/contact"
            method="POST"
            >            
            @csrf
            <div class="form-group">
                <label class="pt-3 pb-3" >Name</label>
                <input type="text" class="form-control" name="name" id="name">
                @if ( $errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="pt-3 pb-3">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                @if ( $errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group">
                <label class="pt-3 pb-3">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
                @if ( $errors->has('phone'))
                    <div class="alert alert-danger">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="pt-3 pb-3">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
                @if ( $errors->has('subject'))
                    <div class="alert alert-danger">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="pt-3 pb-3">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5">
                </textarea>
                @if ( $errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif
            </div>

            <input type="submit" name="send" value="Send" class="btn btn-dark btn-block pt-3 pb-3">
    
        </form>  
        </div>
    </div>
@endsection