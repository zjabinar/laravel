@extends('layouts.users')
@section('main')
  
 


  {{ Form::open(array('url' => 'email_send')) }}
     <!-- Contacts -->
 <div id="contacts">
   <div class="row">    
     <!-- Alignment -->
    <div class="col-sm-offset-3 col-sm-6">
       <!-- Form itself -->
         <legend>Contact me</legend>
         <div class="control-group">
                    <div class="controls">
            <input type="text" class="form-control" 
                   placeholder="Full Name" id="name" required
                       data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>
           </div>
             </div>     
                <div class="control-group">
                  <div class="controls">
            <input type="email" class="form-control" placeholder="Email" 
                            id="email" name="email" required
                       data-validation-required-message="Please enter your email" />
        </div>
    <div><p></p></div>
        </div>  
              
               <div class="control-group">
                 <div class="controls">
                 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="msg" name="msg" id="msg" required
               data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
        </div>
               </div>        
         <div id="success"> </div> <!-- For success/fail messages -->
         <p></p>
        <a href="/laravel/public/" class="btn btn-warning" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary pull-right">Send</button><br />
       </div>
      </div>
    </div>

  {{ Form::close() }}

@stop