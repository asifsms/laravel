@extends('layouts.appp', ['activePage' => 'notification', 'titlePage' => __('Notification')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <section class="content">
            <div class="container-fluid">
                <p>
                    <a href="{{ route('notification.create') }}" class="btn btn-primary">Add Notification</a>
                </p>
             
              {{--  <table class="table table-bordered table-striped">
                <tr>
                  <td>ID</td>
                  <td>TITLE</td>
                  <td>ABOUT</td>
                  <td>POSTER</td>
                  <td>ACTION</td>
                </tr>
                @foreach ($notification as $p)
                <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->title }}</td>
                <td>{{ $p->about }}</td>
                <td><img src="{{ asset('/storage/notification/'.$p->poster) }}" alt="" width="10%"></td>
                {{-- {{ $p->poster }}') }} --}}
                {{--  <td></td>
                </tr>
                @endforeach
              </table>  --}}  

              <div>
                @foreach ($notification as $p )
                <div class="outset row">          
                  <div class="col-4 not-image">
                    <div>
                    <img src="{{ asset('/storage/notification/'.$p->poster) }}" alt="Hikester" style="max-width:50%;height:auto;">
                  </div>
                </div>
                <div class="col-6 ">
                  <h3>{{ $p->title }}</h3>
                  <div style="width: 100%; word-wrap: break-word;">  {{ $p->about }}.</div>
                </div>
                <div class="col "> 
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-outline-danger btn-sm ">DELETE</a>
                  <form action="{{ route('notification.destroy',$p->id) }}" method="POST">
                    @method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                  <a href="{{ route('notification.edit',$p->id) }}" class="btn btn-outline-danger btn-sm ">EDIT</a>
                </div>
              </div>
               
                @endforeach
              </div>
            </div>
          </section>
          

          {{-- <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('User information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
              </div>
            </div>
          </form> --}}
        </div>
      </div>
    </div>
  </div>
@endsection