@extends('system.template.dashboard')

@section('heading')
    Ecommerce Store
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="w-100 bg-primary text-white p-2">
                    <h3>Today's Sale</h3>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Dairy Milk</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Hershies</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Yellow Curd</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-6">
                <div class="w-100 bg-primary text-white p-2">
                    <h3>Sale's Of Last Week</h3>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Dairy Milk</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Hershies</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Yellow Curd</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        
    </div>
@endsection