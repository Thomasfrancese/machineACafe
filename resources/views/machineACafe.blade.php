@extends('template.template')

@section('titre')
    Séléction des boissons
@endsection

@section('content')
    <style>
        @media (max-width: 500px) {

            .responsive-table-line td:before {
                content: attr(data-title);
            }

            .responsive-table-line table,
            .responsive-table-line thead,
            .responsive-table-line tbody,
            .responsive-table-line th,
            .responsive-table-line td,
            .responsive-table-line tr {
                display: block;
            }

            .responsive-table-line thead tr {
                display: none;
            }

            .responsive-table-line td {
                position: relative;
                border: 0px solid transparent;
                padding-left: 50% !important;
                white-space: normal;
                text-align: right;
            }

            .responsive-table-line td:before {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 45%;
                padding-right: 15px;
                height: 100%;
                white-space: nowrap;
                text-overflow: ellipsis !important;
                overflow: hidden !important;
                text-align: left;
                background-color: #f8f8f8;
                padding: 2px;
            }

        }
    </style>
    <div class="container">
        <div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
            <table class="table table-bordered table-condensed table-body-center">
                <tr>
                    @foreach ($boissons as $drinkName)
                        <td><a href="/boisson/{{$drinkName->id}}">{{$drinkName->nomBoisson}}</a></td></br>
                    @endforeach
                </tr>
            </table>
        </div>
        <form action='/ventes' method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="choixBoisson">Selection boisson</label></br>
                <select name="drinkName" class="selectpicker">
                    @foreach ($boissons as $drinkName)
                        <option type="text" class="form-control"
                                value='{{$drinkName->id}}'>{{$drinkName->nomBoisson}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="choixBoisson">Choix sucre</label></br>
                <select name="sucre">
                    <option value="0">Sans sucre</option>
                    <option value="1">1 sucre</option>
                    <option value="2">2 sucre</option>
                    <option value="3">3 sucre</option>
                    <option value="4">4 sucre</option>
                    <option value="5">5 sucre</option>
                </select>
                {{--<input name="sucre" type="text" class="form-control">--}}
                {{--</input>--}}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
