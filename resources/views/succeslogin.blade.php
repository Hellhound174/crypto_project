<!DOCTYPE html>
<html>
    <head>
        <title>
        Coins
         </title>


        <style type="text/css">

            .head {
                width: auto;
                height: 80px;
                background-color: #1a202c;
            }



        </style>
    </head>
    <body>
    <header class="head">


    </header>

        <br/>
        <div class="container box">
            <h3 align="center">Registreren</h3>
            <br/>
                @if(isset(Auth::user()->email))
                    <div class="Alert">
                        <strong>Welcome {{ Auth::user()->email }}</strong>
                        <br/>
                        <a href="{{ url('/main/logout') }}">Logout</a>
                    </div>
                    else
                    <script>
                        window.location="/main";</script>
                @endif
            <br/>
        </div>


    <footer>
        <div>

        </div>
    </footer>


    </body>
</html>


