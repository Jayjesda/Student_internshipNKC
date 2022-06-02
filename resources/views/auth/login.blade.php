
<!DOCTYPE html>
<html :class="{ 'theme-light': light }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Internship NKC</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"

    /> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">

</head>


  <body>
    <form method="POST" action="{{ route('login') }}" align="center">
    @csrf

    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          

          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">เข้าสู่ระบบ</h1>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>    
                    <strong>{{ $message }}</strong>
                    </div>
                @endif

              <p class="mt-1">
                <span>ลงทะเบียนก่อนเข้าใช้งานระบบ </span>
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="{{ route('register') }}" >ลงทะเบียน </a>
              </p><br>
            

              <label class="block text-sm"  >
                <span class="text-gray-700 dark:text-gray-400">อีเมล (KKU Mail)</span>
                <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">รหัสผ่าน</span>
                <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </label>

              <br>
              <div>
                <button type="submit" class="block w-full px-4 py-2 mt-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                    {{ __('เข้าสู่ระบบ') }}
                </button>
                            
            </div>

            <p class="mt-1">
                <span>ลืมรหัสผ่าน คลิก</span>
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="{{ route('password.request') }}" >Recovery password </a>
              </p>

              <hr class="my-8" />

              
             

            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>



<