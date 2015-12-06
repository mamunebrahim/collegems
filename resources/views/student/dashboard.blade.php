<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Dashboard</title>
        <link href="{{asset('css/student.css')}}" rel="stylesheet" type="text/css"/>
        @yield('styles')
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="/">Uttara College</a>
            </div>
        </header>

        <aside>
            <nav>
                <ul>
                    <li><a href="/student">Student Info</a></li>
                    <li><a href="/student/exams">Result</a></li>
                    <li><a href="/student/settings">Settings</a></li>
                    <li><a href="/">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main>
            @yield('content')
        </main>

        @yield('scripts')
    </body>
</html>