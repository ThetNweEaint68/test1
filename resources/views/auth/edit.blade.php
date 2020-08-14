<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div id="wrapper">
              <div id="page" class="container">
              <h1 class="heading has-text-weight-bold">Update Form</h1>
              <br>
              <form class="" action="{{ route('register.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PATCH')
              <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                  <input class="input" type="text" name="name" id="name" value="{{$user->name}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="age">Age</label>
                <div class="control">
                  <input class="input" type="text" name="age" id="age" value="{{$user->age}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="birthday">Birthday</label>
                <div class="control">
                  <input class="input" type="date" name="birthday" id="birthday" value="{{$user->birthday}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="email">Email</label>
                <div class="control">
                  <input class="input" type="email" name="email" id="email" value="{{$user->email}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="address">Address</label>
                <div class="control">
                  <input class="input" type="text" name="address" id="address" value="{{$user->address}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="phone">Phone</label>
                <div class="control">
                  <input class="input" type="text" name="phone" id="phone" value="{{$user->phone}}">
                </div>
              </div>

              <div class="field">
                <label class="label" for="password">Password</label>
                <div class="control">
                  <input class="input" type="password" name="password" id="password" value="{{$user->password}}">
                </div>
              </div>
              <br>
              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link" type="submit">Update</button>
                </div>
              </div>

              </form>
              </div> 
            </div>
            </body>
</html>