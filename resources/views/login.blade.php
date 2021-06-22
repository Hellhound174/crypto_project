<!DOCTYPE html>
<html>
<head>
<title>
    Coins
</title>


<style type="text/css">



</style>
</head>
<body>

<br/>
        <div class="container box">
            <h3 align="center">Login systeem</h3>
            <br/>
            @if(isset(Auth::user()->email))
                <script>window.location="/main/succeslogin";</script>
            @endif

            @if($message = Session::get('error'))
                <div class="alert alert-danger alert block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif



            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($erros->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                    </ul>
                </div>
            @endif



                </div>


             <form method="post" action="{{'/main/checklogin'}}">
                {{  csrf_field()    }}
                 <div class="form-group">
                     <label>Voer uw E-mail in</label>
                     <input type="email" name="email" class="form-control" />
                 </div>

                 <div class="form-group">
                     <label>Voer uw wachtwoord in</label>
                     <input type="password" name="password" class="form-control" />
                 </div>

                 <div class="form-group">
                     <input>
                 </div>
            </form>
        </div>
    </body>
</html>
