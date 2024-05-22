<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ asset('assets/css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

    <style>
      .form-02-main{
  /* background: url("{{ asset('assets/img/bg-01.jpg') }}"); */
  background-color: #EEF0E5; /* menggunakan nilai HEX */

      }
    </style>

  

    <title>Login</title>
  </head>
  <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="{{ asset('assets/img/Logo-1.PNG')}}">
                </div>
                <form method='post' action="{{route('user')}}">
                  @csrf
                <div class="form-group">
                  <input  id="loginUsername" name="loginUsername"  class="form-control _ge_de_ol" type="text" placeholder="Masukkan Username" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" id="loginPassword" name="loginPassword" class="form-control _ge_de_ol"  placeholder="Masukkan Password" required="" aria-required="true">
                </div>
                @if (session('error'))
                    <div id="error-message">
                        {{ session('error') }}
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('error-message').style.display = 'none';
                        }, 3000); // Menghilangkan pesan error setelah 5 detik
                    </script>
                @endif



                <div class="checkbox form-group">
                  <!-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    
                  </div> -->
                  <!-- <a href="{{route('user')}}"></a> -->
                  
                </div>

                <div class="form-group">
                  <!-- <div class="_btn_04"> -->
                    <input type="submit" value="Masuk" class="_btn_04"></a>
                  <!-- </div> -->
                </div>
    </form>
                <div class="keluar">
                <a href="../index.php" style="color: #259E73;">Keluar</a>
                </div>
                
                <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/jsLogin') }}"></script>
  </body>
</html>