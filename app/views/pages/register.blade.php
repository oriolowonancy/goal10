@extends('layout.master')

@section('content')

<div id="fh5co-main">
    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fh5co-page-heading-lead">
                        Register to Shop with us
                        <span class="fh5co-border"></span>
                    </h1>

                </div>
            </div>
        </div>
    </aside>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Please fill the fields below!</h3>
            </div>
            <form action="{{URL::route('store')}}" method="post" enctype="multipart/form-data">
                @foreach($errors->all() as $error)
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-danger col-md-12" role="alert" style="display:inline-block">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        {{ $error }}
                    </div>
                </div>                
                @endforeach

                

                <div class="col-md-12">
                First Name:<br>
                    <div class="form-group">
                        <label for="name" class="sr-only">First Name</label>
                        <input placeholder="Please enter your first name" name="firstname" value="" type="text" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                Last Name:<br>
                    <div class="form-group">
                        <label for="name" class="sr-only">Last Name</label>
                        <input placeholder="Please enter your last name" name="lastname" value="" type="text" >
                    </div>	
                </div>

                
                <div class="col-md-12">
                Address:<br>
                    <div class="form-group">
                        <label for="address" class="sr-only">Address</label>
                        <input placeholder="Please enter your full address " name="address" type="text">
                    </div>	
                </div>

                <div class="col-md-12">
                Phone Number:<br>
                    <div class="form-group">
                        <label for="phone_number1" class="sr-only">Phone Number</label>
                        <input placeholder="Phone number 1 " name="phone_number1" type="text">
                    </div>	
                </div>


                <div class="col-md-12">
                Phone Number2(optional):<br>
                    <div class="form-group">
                        <label for="phone_number2" class="sr-only">Phone Number2</label>
                        <input placeholder="Phone number 2 " name="phone_number2" type="text">
                    </div>	
                </div>


                <div class="col-md-12">
                Email:<br>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input placeholder="Please enter your email" name="email" value="" type="text">
                    </div>	
                </div>




                <div class="col-md-12">
                Password:<br>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input placeholder="Password" name="password" type="password" >
                    </div>	
                </div>

               
                <div class="col-md-12">
                Confirm Password:<br>
                    <div class="form-group">
                        <label for="password" class="sr-only">Confirm Password</label>
                        <input placeholder="Confirm Password" name="password_confirmation" type="password">
                    </div>	
                </div>

                


                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary " value="Register">
                        <input type="reset" class="btn btn-outline  " value="Reset">
                    </div>	
                </div>
            </form>	
  </div>
    </div>
</div>

{{-- class="form-control input-lg" --}}

@stop

{{-- array('method'=>'post','route'=>'store') --}}