<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title>Login | Swift Credit Pay</title>
    <meta property="og:title" content="Swift Credit Pay">
    <meta name="author" content="Swift Credit Pay">
    <meta name="description" content="Mobile Banking, Credit Cards, Mortgages, Auto Loan">
    <meta name="keywords" content="Swift Credit Pay">
    <meta property="og:locale" content="en_US">
    <meta property="og:description" content="Mobile Banking, Credit Cards, Mortgages, Auto Loan">
    <meta name="og:keywords" content="Swift Credit Pay">
    <meta property="og:url" content="https://fccub.com">
    <meta property="og:site_name" content="Swift Credit Pay">
    <meta property="og:image" content="https://fccub.com/uploads/logo.png" />
    <link rel="canonical" href="https://fccub.com">
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon" sizes="144x144" href="https://fccub.com/uploads/logo.png">
    <link rel="shortcut icon" href="https://fccub.com/uploads/logo.png">
    <meta name="robots" content="index, follow" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#3037ff">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#3037ff" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#3037ff" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{asset('reg/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('reg/vendor/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('reg/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('reg/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('reg/vendor/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('reg/vendor/datatable/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!---**************COLORS*****************-->
    <style>
        :root {
            --primary: #3037ff;
            --secondary: #c92041;
        }
    </style>
    <!---**************COLORS*****************-->
    <link rel="stylesheet" href="{{asset('reg/stylesheets/theme.min.css')}}" data-skin="default">
    <link rel="stylesheet" href="{{asset('reg/stylesheets/theme-dark.min.css')}}" data-skin="dark">
    <link rel="stylesheet" href="{{asset('reg/stylesheets/others.css')}}">
    <!-- END THEME STYLES -->

    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script>
    <style>
        .form-control:invalid {
            border-color: #dc3545;
        }

        .form-control:valid {
            border-color: #28a745;
        }
    </style>
</head>

<body>
    <!-- .app -->
    <div class="app">
        <!-- .app-header -->
        <header class="app-header app-header-dark text-center" style="height:100px;">
            <img src="{{asset('uploads/logo.png')}}" width="150px" style="margin-top:20px">
        </header><!-- /.app-header -->
        <!--- ************ FORM*****************--->
        <main class="app-main" style="margin-top:50px">
            <div class="wrapper"> 
                <!-- .page -->
                <div class="page">
                    <!-- .page-inner -->
                    <div class="page-inner">
                        <div class="container">
                            <!-- .container -->
                            <div class="page-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            @if(session('success'))
                                            <script>
                                                toastr.success("{{ session('success') }}");
                                            </script>
                                            @endif

                                            @if(session('error'))
                                            <script>
                                                toastr.error("{{ session('error') }}");
                                            </script>
                                            @endif
                                            <div class="card-header">
                                                <h4>Login to Your Account</h4>
                                            </div>
                                            <div class="card">
                                                <form method="post" action="{{ route('auth.login') }}">
                                                    @csrf
                                                    <div class="card-body">
                                                        <!-- Login Information -->
                                                        <h5 class="text-primary mb-3">Login <span
                                                                class="text-secondary">Information</span></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-6 mb-3">
                                                                <label class="text-primary font-weight-bold">Email/ or
                                                                    Login ID</label>
                                                                <input type="email" class="form-control" name="login"
                                                                    required>
                                                                @error('login')
                                                                <div class="alert alert-danger mt-2">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label
                                                                    class="text-primary font-weight-bold">Password</label>
                                                                <input type="password" class="form-control"
                                                                    name="password" required>
                                                                @error('password')
                                                                <div class="alert alert-danger mt-2">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <!-- Submit Button -->
                                                        <div class="form-row">
                                                            <div class="col-md-3 mb-3">
                                                                <input type="submit"
                                                                    class="btn btn-primary form-control" value="LOGIN">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.page -->
                    <script>
                        // Toastr configuration
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000"
                        };
                    
                        // Display validation errors
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                toastr.error("{{ $error }}");
                            @endforeach
                        @endif
                    
                        // Form submission handling
                        document.getElementById('loginForm').addEventListener('submit', function(e) {
                            let valid = true;
                            
                            // Client-side validation
                            this.querySelectorAll('[required]').forEach(input => {
                                if (!input.value.trim()) {
                                    toastr.error(`Please fill in the ${input.labels[0].innerText} field`);
                                    valid = false;
                                }
                            });
                    
                            if (!valid) e.preventDefault();
                        });
                    </script>
                </div>
            </div>
        </main>
    </div>
    <!--- ************ FORM*****************--->
    <script src="{{asset('reg/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('reg/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('reg/vendor/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('reg/vendor/summernote/summernote-tools.js')}}"></script>
    <script src="{{asset('reg/vendor/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('reg/vendor/stacked-menu/js/stacked-menu.min.js')}}"></script>
    <script src="{{asset('reg/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('reg/javascript/theme.min.js')}}"></script> <!-- END THEME JS -->
    <script src="{{asset('reg/javascript/pages/dashboard-demo.js')}}"></script> <!-- END PAGE LEVEL JS -->

    <script src="{{asset('reg/vendor/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('reg/vendor/datatable/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('reg/vendor/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('reg/vendor/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('reg/vendor/flatpickr/flatpickr.min.js')}}"></script>

</body>

</html>