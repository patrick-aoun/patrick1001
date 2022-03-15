@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h1> <span class="fab fa-asymmetrik"> </span> <span>Patrick</span>
        </h1>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="#" class="active">
                    <span class="fas fa-tachometer-alt"></span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fas fa-users"></span>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fas fa-stream"></span>
                    <span>Projects</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fas fa-shopping-cart"></span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fas fa-boxes"></span>
                    <span>Inventory</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fas fa-user-circle"></span>
                    <span>Accounts</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fas fa-tasks"></span>
                    <span>Task</span>
                </a>
            </li>
        </ul>

    </div>
</div>

<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="fas fa-bars"></span>
            </label>
            Dashboard
        </h2>

        <div class="search-wrapper">
            <span class="fas fa-search"> </span>
            <input type="search" placeholder="Search..." />

        </div>

        <div class="user-wrapper">
            <div class="">
                <h4>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
                </h4>
            </div>
        </div>
    </header>

    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h1>50</h1>
                    <span>Customers</span>
                </div>
                <div>
                    <span class="fas fa-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>12</h1>
                    <span>Projects</span>
                </div>
                <div>
                    <span class="fas fa-clipboard-list"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>15</h1>
                    <span>Orders</span>
                </div>
                <div>
                    <span class="fas fa-shopping-cart"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>$50K</h1>
                    <span>Income</span>
                </div>
                <div>
                    <span class="fas fa-wallet"></span>
                </div>
            </div>

        </div>

        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h2>Recent Projects</h2>
                        <button>See all <span class="fas fa-arrow-right"></span> </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Project Title</td>
                                        <td>Department</td>
                                        <td>Status</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Website</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status purple"></span>
                                            Review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status orange"></span>
                                            Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            In Progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status purple"></span>
                                            Review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            In Progress
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <div class="customers">
                <div class="card">
                    <div class="card-header">
                        <h2>New Customers</h2>
                        <button>See all <span class="fas fa-arrow-right"></span> </button>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                                <div>
                                    <h4>Malik Abushabab</h4>
                                    <small>CEO</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="fas fa-user-circle"></span>
                                <span class="fas fa-comment"></span>
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                                <div>
                                    <h4>Malik Abushabab</h4>
                                    <small>CEO</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="fas fa-user-circle"></span>
                                <span class="fas fa-comment"></span>
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                                <div>
                                    <h4>Malik Abushabab</h4>
                                    <small>CEO</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="fas fa-user-circle"></span>
                                <span class="fas fa-comment"></span>
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                                <div>
                                    <h4>Malik Abushabab</h4>
                                    <small>CEO</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="fas fa-user-circle"></span>
                                <span class="fas fa-comment"></span>
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                                <div>
                                    <h4>Malik Abushabab</h4>
                                    <small>CEO</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="fas fa-user-circle"></span>
                                <span class="fas fa-comment"></span>
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                                <div>
                                    <h4>Malik Abushabab</h4>
                                    <small>CEO</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="fas fa-user-circle"></span>
                                <span class="fas fa-comment"></span>
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                                <div>
                                    <h4>Malik Abushabab</h4>
                                    <small>CEO</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="fas fa-user-circle"></span>
                                <span class="fas fa-comment"></span>
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>
</div>
@endsection