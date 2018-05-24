@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h1>Dom 1</h1>

            <div class="card">
                <div class="card-header"><h2>Etap1: Zemlenye raboty</h2></div>
                <div class="card-body">

        <div>Vsego: 2500 EUR</div>

        <h3>Raboty</h3>
        <div>
            <button class="btn btn-primary">Dobavit' rabotu</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kod</th>
                    <th>Imja</th>
                    <th>Stoimost'</th>
                    <th>Kol-vo</th>
                    <th>Summa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>abc1</td>
                    <td>Diagnostica uchastka</td>
                    <td>300</td>
                    <td>2</td>
                    <td>600 EUR</td>
                </tr>
                <tr>
                    <td>0900</td>
                    <td>Proverka</td>
                    <td>300</td>
                    <td>3</td>
                    <td>900 EUR</td>
                </tr>
                <tr>
                    <td>09-AB</td>
                    <td>Proverka 2</td>
                    <td>100</td>
                    <td>3</td>
                    <td>300 EUR</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-md-right">
                        <strong>Itogo raboty</strong>
                    </td>
                    <td class="text-md-right">
                        <strong>1800 EUR</strong>
                    </td>
                </tr>
            </tfoot>
        </table>

        <h3>Materialy</h3>
        <div>
            <button class="btn btn-primary">Dobavit' material</button>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kod</th>
                    <th>Imja</th>
                    <th>Ed.iz.</th>
                    <th>Kol-vo</th>
                    <th>Tzena</th>
                    <th>Summa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>a001</td>
                    <td>Burghiu</td>
                    <td>sht</td>
                    <td>20</td>
                    <td>20 EUR</td>
                    <td>400 EUR</td>
                </tr>
                <tr>
                    <td>a005</td>
                    <td>Benzină</td>
                    <td>litri</td>
                    <td>200</td>
                    <td>1.5 EUR</td>
                    <td>300 EUR</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-md-right">
                        <strong>Itogo materialy</strong>
                    </td>
                    <td class="text-md-right">
                        <strong>700 EUR</strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<hr>

            <div class="card">
                <div class="card-header"><h2>Etap2: Stroitel'stvo</h2></div>
                <div class="card-body">

        <div>Vsego: 23000 EUR</div>

        <h3>Raboty</h3>
        <div>
            <button class="btn btn-primary">Dobavit' rabotu</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kod</th>
                    <th>Imja</th>
                    <th>Stoimost'</th>
                    <th>Kol-vo</th>
                    <th>Summa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>abc1</td>
                    <td>Diagnostica uchastka</td>
                    <td>300</td>
                    <td>2</td>
                    <td>600 EUR</td>
                </tr>
                <tr>
                    <td>0900</td>
                    <td>Proverka</td>
                    <td>300</td>
                    <td>3</td>
                    <td>900 EUR</td>
                </tr>
                <tr>
                    <td>09-AB</td>
                    <td>Proverka 2</td>
                    <td>100</td>
                    <td>3</td>
                    <td>300 EUR</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-md-right">
                        <strong>Itogo raboty</strong>
                    </td>
                    <td class="text-md-right">
                        <strong>1800 EUR</strong>
                    </td>
                </tr>
            </tfoot>
        </table>

        <h3>Materialy</h3>
        <div>
            <button class="btn btn-primary">Dobavit' material</button>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kod</th>
                    <th>Imja</th>
                    <th>Ed.iz.</th>
                    <th>Kol-vo</th>
                    <th>Tzena</th>
                    <th>Summa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>a001</td>
                    <td>Burghiu</td>
                    <td>sht</td>
                    <td>20</td>
                    <td>20 EUR</td>
                    <td>400 EUR</td>
                </tr>
                <tr>
                    <td>a005</td>
                    <td>Benzină</td>
                    <td>litri</td>
                    <td>200</td>
                    <td>1.5 EUR</td>
                    <td>300 EUR</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-md-right">
                        <strong>Itogo materialy</strong>
                    </td>
                    <td class="text-md-right">
                        <strong>700 EUR</strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


    </div>
</div>
</div>

@endsection
