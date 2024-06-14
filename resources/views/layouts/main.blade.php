<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 

    <title>@yield('title')</title>
  </head>
  
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-white py-3" style="background-color:#555843;">
                <img src="{{ asset('storage/gambar/logo-header.png') }}" style="width: 90px;"> 
                <div class="dropdown float-right">
                    <a class="btn dropdown-toggle" style="background-color:#FFFFF0;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Account</b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#"><b>{{ Auth::user()-> name ?? "" }}</b></a>
                        <a class="dropdown-item" href="/user">Account</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-2 vh-100">
                <div class="row mt-5">
                    <div class="col-12"> 
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link {{ ($key == 'beranda') ? 'active bg-light' : '' }}" id="v-pills-beranda-tab" href="/" style="{{ ($key == 'beranda') ? 'color: #555843;' : 'color: #555843;' }}"><b>Beranda</b></a>
                            <a class="nav-link {{ ($key == 'produk') ? 'active bg-light' : '' }}" id="v-pills-profile-tab" href="/produk" style="{{ ($key == 'produk') ? 'color: #3A4D39;' : 'color: #555843;' }}">Produk</a>
                            <a class="nav-link {{ ($key == 'informasi') ? 'active bg-light' : '' }}" id="v-pills-messages-tab" href="/informasi" style="{{ ($key == 'informasi') ? 'color: #555843;' : 'color: #555843;' }}">Informasi</a>
                            <a class="nav-link {{ ($key == 'FAQ') ? 'active bg-light' : '' }}" id="v-pills-settings-tab" href="/FAQ" style="{{ ($key == 'FAQ') ? 'color: #555843;' : 'color: #555843;' }}">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 vh-90">
                <div class="card mt-5">
                    <div class="card-body">
                        @yield('artikel')
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <footer class="footer py-3 col-md-12" style="background-color:#555843; color:white; font-family: gilory, sans-serif; font-size: 13px;">
        <div class="row justify-content-center">
            <div class="text-center">
                <center>Template by  72220537 - Ifani Claudya Patanduk</center>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
  
    <script> 
        new DataTable('#example');
    </script>

</body>
</html>
