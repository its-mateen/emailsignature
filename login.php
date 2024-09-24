
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta21
* @link https://tabler.io
* Copyright 2018-2024 The Tabler Authors
* Copyright 2018-2024 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in </title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1726507346" rel="stylesheet"/>
  </head>
  <body  class=" d-flex flex-column">
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="" class="navbar-brand navbar-brand-autodark">
          <img src="logo.png" alt="Logo" style="height:80px"> 
          </a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
            <form action="index.php" method="get" autocomplete="off" novalidate>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                </label>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var passwordInput = document.querySelector('input[name="pass"]');
                        var eyeIcon = document.querySelector('.input-group-text .icon');
                        eyeIcon.addEventListener('click', function() {
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                        } else {
                            passwordInput.type = 'password';
                        }
                        });
                    });
                </script>
                <div class="input-group input-group-flat">
                    <input type="password" autocomplete="off" name="pass" class="form-control" placeholder="Password - at least 6 characters" value=""  tabindex="3">
                    <span class="input-group-text">
                        <a class="link-secondary text-info" title="Show password" data-bs-toggle="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                        </a>
                    </span>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-x w-100" style="background-color:black; color:#fff">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1726507346" defer></script>
    <script src="./dist/js/demo.min.js?1726507346" defer></script>
  </body>
</html>