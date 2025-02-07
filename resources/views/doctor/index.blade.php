<h3>Doctor Dashboard</h3>
<h2>{{ Session::get('user')->name }}</h2>
<h2>{{ Session::get('user')->email }}</h2>
<h3>{{ Session::get('user')->role }}</h3>
<h3>{{ Session::get('user')->password }}</h3>
<a href="/login" class="btn btn-danger btn-lg">Logout</a>