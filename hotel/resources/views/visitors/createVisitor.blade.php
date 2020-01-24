@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
            <form action="storeVisitor" method="POST" id="form">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="cp">Code postal</label>
                        <input onKeyPress="return sichiffre(event);" type="text" id="cp" size="5" maxlength="5" class="form-control" name="cp" required >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    @csrf()
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inscription') }}
                                </button>
                </form>
            </div>
        </div>
    </div>
@endsection