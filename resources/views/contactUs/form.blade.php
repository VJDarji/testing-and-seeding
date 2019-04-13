@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Us</div>

                    <div class="card-body">
                       <form action="{{route('store.contactus')}}" method="post">
                           @csrf
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="form_name">Name</label>
                                       <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name" required="required" data-error="Name is required.">
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="form_email">Email</label>
                                       <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="form_message">Message</label>
                                       <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                       <div class="help-block with-errors"></div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <input type="submit" class="btn btn-success btn-send" value="Send message">
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
