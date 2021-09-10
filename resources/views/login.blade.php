<!DOCTYPE html>
<html>
<head>

<title>
    Coins
</title>


    <style type="text/css">


        .input-group {
            margin: 10px 0px 10px 0px;
        }
        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        form {
            width: 30%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #B0C4DE;
            background: #8b0000;
            border-radius: 0px 0px 10px 10px;
            margin-left: 140px;
        }






        .header-left
        {
            display: block;
            position: fixed;
            left: 0;
            top: 0;
            height: 60px;
            width: 100%;
            background-color: #000000;
        }



        .btn
        {
            height: 45px;
            width: 100px;
            margin: 5px;
        }



        .header-right
        {
            position: fixed;
            top: 0;
            right: 0;
            color: white;
            margin-right: 25px;
        }



        .dropbtn {
            background-color: white;
            color: black;
            margin: 5px;
            height: 45px;
            width: 100%;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }



        .dropbtn:hover, .dropbtn:focus {
            background-color: white;
        }



        .dropdown {
            position: relative;
            display: inline-block;
        }


       


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }



        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }



        .dropdown a:hover {background-color: #ddd;}



        .show {display: block;}




        .site-footer
        {
            background-color:#26272b;
            padding:45px 0 20px;
            font-size:15px;
            line-height:24px;
            color:#737373;
        }
        .site-footer hr
        {
            border-top-color:#bbb;
            opacity:0.5
        }
        .site-footer hr.small
        {
            margin:20px 0
        }
        .site-footer h6
        {
            color:#fff;
            font-size:16px;
            text-transform:uppercase;
            margin-top:5px;
            letter-spacing:2px
        }
        .site-footer a
        {
            color:#737373;
        }
        .site-footer a:hover
        {
            color:#3366cc;
            text-decoration:none;
        }
        .footer-links
        {
            padding-left:0;
            list-style:none
        }
        .footer-links li
        {
            display:block
        }
        .footer-links a
        {
            color:#737373
        }
        .footer-links a:active,.footer-links a:focus,.footer-links a:hover
        {
            color:#3366cc;
            text-decoration:none;
        }
        .footer-links.inline li
        {
            display:inline-block
        }
        .site-footer .social-icons
        {
            text-align:right
        }
        .site-footer .social-icons a
        {
            width:40px;
            height:40px;
            line-height:40px;
            margin-left:6px;
            margin-right:0;
            border-radius:100%;
            background-color:#33353d
        }
        .copyright-text
        {
            margin:0
        }
        @media (max-width:991px)
        {
            .site-footer [class^=col-]
            {
                margin-bottom:30px
            }
        }
        @media (max-width:767px)
        {
            .site-footer
            {
                padding-bottom:0
            }
            .site-footer .copyright-text,.site-footer .social-icons
            {
                text-align:center
            }
        }
        .social-icons
        {
            padding-left:0;
            margin-bottom:0;
            list-style:none
        }
        .social-icons li
        {
            display:inline-block;
            margin-bottom:4px
        }
        .social-icons li.title
        {
            margin-right:15px;
            text-transform:uppercase;
            color:#96a2b2;
            font-weight:700;
            font-size:13px
        }
        .social-icons a{
            background-color:#eceeef;
            color:#818a91;
            font-size:16px;
            display:inline-block;
            line-height:44px;
            width:44px;
            height:44px;
            text-align:center;
            margin-right:8px;
            border-radius:100%;
            -webkit-transition:all .2s linear;
            -o-transition:all .2s linear;
            transition:all .2s linear
        }
        .social-icons a:active,.social-icons a:focus,.social-icons a:hover
        {
            color:#fff;
            background-color:#29aafe
        }
        .social-icons.size-sm a
        {
            line-height:34px;
            height:34px;
            width:34px;
            font-size:14px
        }
        .social-icons a.facebook:hover
        {
            background-color:#3b5998
        }
        .social-icons a.twitter:hover
        {
            background-color:#00aced
        }
        .social-icons a.linkedin:hover
        {
            background-color:#007bb6
        }
        .social-icons a.dribbble:hover
        {
            background-color:#ea4c89
        }
        @media (max-width:767px)
        {
            .social-icons li.title
            {
                display:block;
                margin-right:0;
                font-weight:600
            }
        }

        .header {
            width: 30%;
            margin: 50px auto 0px;
            color: white;
            background: #000000;
            text-align: center;
            border: 1px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding: 20px;
            margin-left: 140px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>                                                                                                                                                                                                                                                                                                                                                                                                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>







</head>

<body>
<br/>
<br/>
<br/>
<div class="container box">

    <br/>


    @if($message = Session::get('error'))
        <div class="alert alert-danger alert block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif



    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



</div>

<div class="header-left">
    <img
        alt="Logo"
        style="color: white;
                margin: 5px;
                background-color: red;
                height: 100px;
                width: 100px;">
    <button class="btn">Munten</button>
    <button class="btn">Koers</button>
</div>

<div class="header-right">
    <button onclick="myFunction()" class="dropbtn">
        Mijn profiel
    </button>
    <div id="myDropdown" class="dropdown-content">
        <a href="#Registreren">Registreren</a>
        <a href="#about">Inloggen</a>
    </div>
</div>
<div class="header">
    <h2>Login</h2>
</div>



             <form method="post" action="{{'/login'}}">
                {{  csrf_field()    }}
                 <div class="input-group">
                     <label>E-mail:</label>
                     <input type="email" name="email" >
                 </div>
                 <div class="input-group">
                     <label>Password</label>
                     <input type="password" name="password">
                 </div>
                 <div class="input-group">
                     <button type="submit" class="btn" name="login" value="login">Login</button>
                 </div>
                 <p>
                     Not yet a member? <a href="http://localhost/main/register">Sign up</a>
                 </p>
            </form>

<br/>
<br/>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">This site is build for an initiative buissnes man to help the upcoming traders trade with one of the best platforms to keep up with your currencys. This website focuses on providing the most efficient coin or coins as the trade wants to be simple. We will help beginning traider build up concepts in different coin  that include bitcoin, ethereum, dogecoin and binance coin.</p>
            </div>



            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a href="">Coin</a></li>
                    <li><a href="">Bitcoin</a></li>
                </ul>
            </div>



            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                    <a href="#">Jonna B</a>.
                </p>
            </div>



            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


    </body>
</html>
