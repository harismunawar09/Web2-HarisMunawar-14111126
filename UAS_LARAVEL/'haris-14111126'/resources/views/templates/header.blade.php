<head>
<title>Operasi CRUD</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<style>
div.container {
	width:100%;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:#663300;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
article {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>
</head>
<body>
<div id="app">
  
<header>
	<h1>Operasi CRUD</h1>
	<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
	<script src="/js/app.js"></script>

</header>

<nav>
	<ul>
		<li><b>MENU</b></li>
		<li><a href="#">Menu 1</a></li>
		<li><a href="#">Menu 2</a></li>
		<li><a href="#">Menu 3</a></li>
	</ul>
</nav>