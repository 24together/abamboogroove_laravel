
<html>
  <head>
    <title>대나무숲::@yield('title')</title>
        <mate charset="utf-8"></mate>
        @yield('style1')
        @yield('head')
        @yield('kakao_head')
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id=@yield('form')>
  @yield('login_ check')
  @yield('nav_bar')



    <div class="container" style="margin-top:50px; @yield('container_style')">

@yield('imfor_div')

@yield('logo')
    <div class="login-form">
        <div class="@yield('main_div')" >
            @yield('content')
          @yield('pagination')
        </div>
    </div>
    </div>
  @yield('footer')
  @yield('bottom')
</body>
</html>
