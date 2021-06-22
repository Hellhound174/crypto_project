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
    <header>


    </header>

        <br/>
        <div class="container box">
            <h3 align="center">login systeem</h3>
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


