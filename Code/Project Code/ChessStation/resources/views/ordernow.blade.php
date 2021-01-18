@extends ('master')

@section("content")
<div class="custom-product">        
    <div class="col-sm-10">
            <table class="table">
            
            <tbody>
            <tr>
                <td>Ammount</td>
                <td>৳ {{$total}}</td>   
            </tr>

            <tr>
                <td>VAT</td>
                <td>৳ 0</td>
            </tr>

            <tr>
                <td>Delivery</td>
                <td>৳ 30</td>
            </tr>

            <tr>
                <td>Total Amount</td>
                <td>৳ {{$total+10}}</td>
            </tr>

            </tbody>
        </table>

        <div>
        <form action="/action_page.php">
        <div class="form-group">
            <textarea type="email" placeholder="Type your address.." class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Payment Method:</label> <br>
            <input type="radio" name="payment"> <span>Online Payment</span> <br> 
            <input type="radio" name="payment"> <span>Cash on Delivery</span>
           
        </div>
       
        <button type="Submit" class="btn btn-success">Order Now</button>
        </form>
        </div>
    
    
    </div>
</div>
@endsection