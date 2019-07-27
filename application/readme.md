# clone
# run 

        composer install
# create a database, migrate, add one user into the admins table manually
        npm install

#go to
        Vendor\Laravel\Illuminate\Foundation\Exceptions\Handler.php

# find this function

    protected function unauthenticated($request, AuthenticationException $exception)
        {
            return $request->expectsJson()
                        ? response()->json(['message' => $exception->getMessage()], 401)
                        : redirect()->guest(route('login')); 
        }

# replace the above function with this function

     protected function unauthenticated($request, AuthenticationException $exception)
        {
        

            if ($request->expectsJson()) {
                # code...
                return response()->json(['error'=>'Unauthenticated.'], 404);
            }

            $guard =array_get($exception->guards(), 0);

            switch ($guard) {
                case 'admin':
                    $login = "admin.login";
                    break;

                default:
                    $login = "login";
                    break;
            }

            return redirect()->guest(route($login));
        }
