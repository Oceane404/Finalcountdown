@extends('layouts.templateAccount')

@section('Content')
        <!--<p>{{--{{$movie->name}}--}}<p> -->

        <table>
            <thead>
                <tr>
                    <th colspan="8" style="text-align:center">Clients</th>
                </tr>
            </thead>
            <tbody>
                <tr class="row1">
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">Nom</th>
                    <th style="text-align:center">Prénom</th>
                    <th style="text-align:center">Telephone</th>
                    <th style="text-align:center">Email</th>
                    <th style="text-align:center">Adresse</th>
                    <th style="text-align:center">Password</th>
                @if (Auth::check())
                    @if (Auth::user()->role == 'administrator')          
                    <th style="text-align:center">Modifier</th>
                    <th style="text-align:center">Supprimer</th>
                    @endif
                @endif
                </tr>
                @foreach($visitors as $visitor)
                <tr>
                    <td style="text-align:center">{{$visitor->id}}</td>
                    <td style="text-align:center">{{$visitor->nom}}</td>
                    <td style="text-align:center">{{$visitor->prenom}}</td>
                    <td style="text-align:center">{{$visitor->telephone}}</td>
                    <td style="text-align:center">{{$visitor->email}}</td>
                    <td style="text-align:center">{{$visitor->adresse}}</td>
                    <td style="text-align:center">{{$visitor->password}}</td>    
                    <td style="text-align:center">
                        <form action="{{route('editVisitor', $visitor->id)}}" method="POST">
                            @csrf
                            {{--<input type="hidden" name="visitor_id" value="{{$visitor->id}}">--}}
                        @if (Auth::check())
                            @if (Auth::user()->role == 'administrator')
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </td>
                    <td style="text-align:center">
                        <form action="{{route('deleteVisitor', $visitor->id)}}" method="POST">
                            @csrf
                            {{--<input type="hidden" name="movie_id" value="{{$visitor->id}}">--}}
                            <button type="submit" class="btn btn-primary">Supprimer</button>
                            @endif
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br>
@endsection
