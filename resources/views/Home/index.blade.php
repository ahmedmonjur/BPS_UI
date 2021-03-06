@extends('layouts.app')
@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bar Payment System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sign Out (Cashier Name)</a></li>
    </ul>
  </div>
</nav>
<div style="margin-top:-18px" class="container">

<div class="row">
    <div id="left" class="col col-md-4">
        <div class="row">
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                    <input style="width:320px" type="text" class="form-control" placeholder="Customer">
                    <div class="input-group-btn">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="row">
            <button style="border-radius: 100%;padding:10px" type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-plus"></span>
            </button>Select Customer
                    
        </div> -->
        <div class="row">
                <div class="col col-md-4">
                    <p><b>Balance</b></p>
                    <p>00.00</p>
                    
                </div>
                <div class="col col-md-4">
                    <p><b>Discount</b></p>
                    <p>0%</p>
                </div>
                <div class="col col-md-4">
                    <p><b>Visit</b></p>
                    <p>0</p>
                </div>

        </div>
        <div class="row">
            <div class="col col-md-12">
                    <button style="width:150px;" type="button" class="btn btn-warning btn-md">Recharge</button> 
                    <button style="width:150px;" type="button" class="btn btn-info btn-md">Purchases</button> 
            </div>
        </div>
        <div class="row">
        <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="input-group">
                <input style="width:320px"  type="text" class="form-control" placeholder="Product">
                <div class="input-group-btn">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
                </div>
            </div>
        </form>
    </div>

    <div class="row" id="item_list">
         <div class="col col-md-12">
                <table class="table table-hover">
                    <thead class="bg-info">
                    <tr>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Item 1</td>
                        <td>
                            <form>
                                <input style="padding-left:5px;width:50px;" type="number" value="2" name="qty"/>
                            </form>
                        </td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>
                            <form>
                                <input style="padding-left:5px;width:50px;" type="number" value="1" name="qty"/>
                            </form>
                        </td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td>
                            <form>
                                <input style="padding-left:5px;width:50px;" type="number" value="3" name="qty"/>
                            </form>
                        </td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>
                            <form>
                                <input style="padding-left:5px;width:50px;" type="number" value="1" name="qty"/>
                            </form>
                        </td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td>
                            <form>
                                <input style="padding-left:5px;width:50px;" type="number" value="2" name="qty"/>
                            </form>
                        </td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>
                            <form>
                                <input style="padding-left:5px;width:50px;" type="number" value="1" name="qty"/>
                            </form>
                        </td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td>
                            <form>
                                <input style="padding-left:5px;width:50px;" type="number" value="2" name="qty"/>
                            </form>
                        </td>
                        <td>50</td>
                    </tr>
                    
                    
                    
                    </tbody>
                </table>
            </div>
        </div>
        <div id="total" class="row">
            <div class="col col-md-12">
                <hr/>
                <table border="0"  style="width:100%">
                    <tbody>
                        <tr style="font-size:18px">
                            <td width="250"><b>Total</b></td>
                            <td>140.00</td>
                        </tr>
                        <tr>
                            <td><b>Tax</b></td>
                            <td>00.00</td>
                        </tr>
                        <tr>
                            <td><b>Net</b></td>
                            <td>140.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
                
    </div>

    <div id="right"  class="col col-lg-8">
        <div id="igbuttons" class="col col-lg-2">
            <button type="button" class="btn">
                <p><img src="{{ asset('/images/icons/drinks-set/drink-beer-jar.png') }}" width="35px"  /></p>
                <p>Beer</p>
            </button>
            <button type="button" class="btn  btn-default">
                <p><img src="{{ asset('/images/icons/drinks-set/cocktail-glass-from-side-view.png') }}" width="35px"  alt="img"/></p>
                <p>Cocktail</p>
            </button>
            <button type="button" class="btn btn-primary">
                <p><img src="{{ asset('/images/icons/drinks-set/hot-coffee-rounded-cup-on-a-plate-from-side-view.png') }}" width="35px"  alt="img"/></p>
                <p>Coffee</p>
            </button>
            <button type="button" class="btn btn-success">
                <p><img src="{{ asset('/images/icons/drinks-set/milk-box.png') }}" width="35px"  alt="img"/></p>
                <p>Milk</p>
            </button>
            
            <button type="button" class="btn btn-info">
                <p><img src="{{ asset('/images/icons/drinks-set/fresh-soda-glass-with-lemon-slice-and-straw.png') }}" width="35px"  alt="img"/></p>
                <p>Soda</p>
            </button>
            <button type="button" class="btn btn-warning">
                <p><img src="{{ asset('/images/icons/drinks-set/water-bottle.png') }}" width="35px"  alt="img"/></p>
                <p>Water</p>
            </button>
            <button type="button" class="btn btn-danger">
                <p><img src="{{ asset('/images/icons/drinks-set/wine-glass-full-of-drink.png') }}" width="35px"  alt="img"/></p>
                <p>Wine</p>
            </button>
            <button type="button" class="btn">
                <p><img src="{{ asset('/images/icons/drinks-set/drink-beer-jar.png') }}" width="35px"  /></p>
                <p>Beer</p>
            </button>
            <button type="button" class="btn  btn-default">
                <p><img src="{{ asset('/images/icons/drinks-set/cocktail-glass-from-side-view.png') }}" width="35px"  alt="img"/></p>
                <p>Cocktail</p>
            </button>
            <button type="button" class="btn btn-primary">
                <p><img src="{{ asset('/images/icons/drinks-set/hot-coffee-rounded-cup-on-a-plate-from-side-view.png') }}" width="35px"  alt="img"/></p>
                <p>Coffee</p>
            </button>
            <button type="button" class="btn btn-success">
                <p><img src="{{ asset('/images/icons/drinks-set/milk-box.png') }}" width="35px"  alt="img"/></p>
                <p>Milk</p>
            </button>
            
            <button type="button" class="btn btn-info">
                <p><img src="{{ asset('/images/icons/drinks-set/fresh-soda-glass-with-lemon-slice-and-straw.png') }}" width="35px"  alt="img"/></p>
                <p>Soda</p>
            </button>
            <button type="button" class="btn btn-warning">
                <p><img src="{{ asset('/images/icons/drinks-set/water-bottle.png') }}" width="35px"  alt="img"/></p>
                <p>Water</p>
            </button>
            <button type="button" class="btn btn-danger">
                <p><img src="{{ asset('/images/icons/drinks-set/wine-glass-full-of-drink.png') }}" width="35px"  alt="img"/></p>
                <p>Wine</p>
            </button>
        </div>
        <div id="gitems" class="col col-lg-10">
            <div id="items">
                @for ($i = 1; $i < 53; $i++)
                    <button type="button" class="btn btn-default">
                        Item {{ $i }}
                    </button> 
                @endfor
            </div>
            <div id="payment">
                <button style="width:153px"  type="button" class="btn btn-info btn-md">Reset</button>
                <button style="width:153px" type="button" class="btn btn-danger btn-md">Cancel</button>
                <button style="width:233px; font-size:20px" type="button" class="btn btn-success btn-lg">Pay</button>
            </div>
        </div>
            
    </div>


  </div>
  


</div>



@endsection

