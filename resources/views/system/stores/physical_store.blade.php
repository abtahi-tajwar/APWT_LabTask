@extends('system.template.dashboard')

@section('heading')
    Physical Store
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
        <div class="row">
            <div class="col-6">
                <div class="w-100 bg-primary text-white p-2">
                    <h3>Most Saled Product</h3>
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
                        <td>Vinegar</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="row">
            <h5>Average Sales Amount: 3</h5>
        </div>
        @if(session()->has('confirmation'))
        <div class="row bg-success text-white">
            {{session()->get('confirmation')}}
        </div>
        @endif
        <h3>Sell Products</h3>
        <div class="row">
            <form action="{{route('sell-physical-store-product')}}" action="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Customer Name</label>
                  <input type="text" class="form-control" name="customer_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Address</label>
                    <input type="text" class="form-control" name="customer_address" id="customer_address" aria-describedby="emailHelp" placeholder="Customer Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Phone</label>
                    <input type="number" class="form-control" name="customer_phone" id="customer_phone" aria-describedby="emailHelp" placeholder="Customer Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product ID</label>
                    <input type="number" class="form-control" name="product_id" id="product_id" aria-describedby="emailHelp" placeholder="Product Id">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" aria-describedby="emailHelp" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unit Price</label>
                    <input type="number" class="form-control" name="unit_price" id="unite_price" aria-describedby="emailHelp" placeholder="Unit Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" name="quantity" id="product_name" aria-describedby="emailHelp" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Total Price</label>
                    <input type="number" class="form-control" name="total_price" id="unite_price" aria-describedby="emailHelp" placeholder="Total Price">
                </div>
                <select class="form-group" name="payment_type" id="payment_type">
                    <option value="cash" class="form-control">Cash</option>
                    <option value="card" class="form-control">Card</option>
                    <option value="online" class="form-control">Online</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection