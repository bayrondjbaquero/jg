<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <title>JG Ltda.</title> 
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    {{ HTML::style('styles/app.v1.css'); }}
    {{ HTML::style('styles/font.css'); }}
   <!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]-->
</head>
<body> 
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp"> 
        <a class="nav-brand" href="{{URL::to('/')}}">JG Ltda.</a> 
        <div class="row m-n"> 
            <div class="col-md-4 col-md-offset-4 m-t-lg"> 
                <section class="panel"> 
                    <header class="panel-heading text-center"> Sign in </header> 
                <form action="{{URL::to('session')}}" class="panel-body" method="POST"> 
                    <div class="form-group"> 
                    <label class="control-label">Email</label> 
                    <input type="email" name="email" placeholder="test@example.com" class="form-control"> 
                </div> 
                <div class="form-group"> 
                    <label class="control-label">Password</label> 
                    <input type="password" name="password" placeholder="Password" class="form-control"> 
                </div> 
                <!-- <div class="checkbox"> 
                    <label> 
                        <input type="checkbox"> Keep me logged in </label> 
                    </div>  -->
                    <a href="#" class="pull-right m-t-xs">
                        <small>Forgot password?</small></a> 
                        <button type="submit" class="btn btn-info">Sign in</button> 
                       <!--  <div class="line line-dashed"></div>  -->
                        <!-- <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="icon-facebook pull-left"></i>Sign in with Facebook</a> <a href="#" class="btn btn-twitter btn-block"><i class="icon-twitter pull-left"></i>Sign in with Twitter</a> 
                        <div class="line line-dashed"></div> 
                        <p class="text-muted text-center">
                            <small>Do not have an account?</small></p> 
                            <a href="signup.html" class="btn btn-white btn-block">Create an account</a>  -->

                        </form> </section>
                         </div> 
                    </div> 
                    </section> <!-- footer --> 
                        <footer id="footer"> <div class="text-center padder clearfix"> 
                            <p>
                             <small>CopyRight ALTEREGO<br>&copy; 2014</small> 
                         </p> 
                     </div> 
                     </footer> <!-- / footer -->
                      {{ HTML::script('scripts/app.v1.js'); }}  <!-- Bootstrap --> <!-- app --> 
                 </body>
                 </html>