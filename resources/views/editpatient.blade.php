@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered section">
        <div class="column is-5">
    

        <table class="table is-bordered">
            <tbody>
                <tr>
                    <th>
                        Name
                    </th>
                    <td>{{ $patient->name }}</td>
                    
                </tr>
                <tr>
                    <th>
                        Location
                    </th>
                <td>{{ $patient->address}} </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>

                    <form action="{{Route('editpatient',$patient->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$patient->id}}">
                    <div class="field">
                                    <p class="control">
                                    <div class="select">
                    
                    <select name="status" id="">
                        
                        <option value="In hospital">In hospital</option>
                        <option value="In quarentine">In quarentine</option>
                        <option value="Recovered">Recovered</option>
                        <option value="Dead">Dead</option>
                    </select>
                    </div>
                    </div>
                    </div>
                    
                    <input class="button is-primary" type="submit" value="Save">

                   
                    </form>
                    </td>
                </tr>
                    </tr>
            </tbody>
        </table>
 
        
        </div>
    </div>
</div>


@endsection