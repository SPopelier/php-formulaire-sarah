@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire #1 Utilisateur</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/user" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname">
                </div>
                                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="newsletter" value="yes"> Subscribe to newsletter
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="happy" checked>
                            Happy
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="sad">
                            Sad
                      </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
