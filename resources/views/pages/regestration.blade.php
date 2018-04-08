@extends('layout')

@section('content')



<main>
            <div class="container-fluid">
                    <div class="row breadcrumbs">
                    <div class="col-sm-12">
                        <br>
                        <a href="/">Home</a>
                        <span class="seperator">></span>
                        <span class="current-page">Register</span>
                    </div>
                    </div>
                    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-2">
                <h4>Register</h4>
                <form id="reg-form" method="post" >
                @csrf
                        <div class="errors" style="">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                        </div>
                        <div class="success" style="">
                                <ul>
                            <?php
                                if (isset($_SESSION['flash']) && isset($_SESSION['flash']['errors']))
                                {
                                    foreach ($_SESSION['flash']['success'] as $error){
                                        echo "<li>$msg</li>";
                                    }
                                            unset($_SESSION['flash']['success']);
                                }

?>
                                </ul>
                            </div>
                <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username*">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password*">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Retype password*">
                    </div>
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="First name*">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fast_name" class="form-control" placeholder="Last name">
                    </div>
                    
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>  
            </div>
    </main>


@endsection