<!doctype html> <!--langkah 16/17 buat halaman login, copy started template-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>.:Form Login! - web Katalog :.</title>
    </head>

    <body>
        <div class="container-fluid" style="margin-top:15%;" > 
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center">
                        <form action="/login" method="POST">
                                <img src="{{asset ('storage/gambar/logo-login1-transformed.png') }}" style="max-width:300px"> 
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Masukkan E-mail" class="form-control" autofocus required>
                            </div>  

                            <div class="form-group">
                                <input type="password" name="password" placeholder=" Masukan Password" class="form-control" required>
                            </div>

                                <div class="form-group text-center">
                            <button type="submit" class="btn"  style="background-color:#555843; color: white;" >Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>