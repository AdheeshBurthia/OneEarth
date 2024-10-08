$(document).ready(function(){

    $('.increment-btn').click(function (e){
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if(value < 10)
        {
            value++;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });
    $('.decrement-btn').click(function (e){
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });

    $('#addToCartBtn').click(function(e){
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).val();

        $.ajax({
            url: "includes/count.php",
            type: "POST",
            success: function(data){
                $('#count').html(data); 
            }
        });

        $.ajax({
            method: "POST",
            url: "includes/handlecart.php",
            data: {
                "prod_id" : prod_id,
                "prod_qty" : qty,
                "scope" : "add"
            },
            success: function(response){
                
                if(response == 201)
                {
                    alertify.success("Product added to cart"); 
                }
                else if(response == "existing")
                {
                    alertify.success("Product already in cart!");
                }
                else if(response == 401)
                {
                    alertify.success("Login to continue!");
                }
                else if(response == 500)
                {
                    alertify.success("Something went wrong!");
                }
            }
        });
        $.ajax({
            url: "includes/count.php",
            type: "POST",
            cache: false,
            success: function(data){
                $('#count').html(data); 
            }
        });
    });
});
$(document).ready(function(){

    $('.cartBtn').click(function(e){
        e.preventDefault();

        $.ajax({
            url: "includes/cart.php",
            type: "POST",
            cache: false,
            success: function(data){
                $('#retrieveCart').html(data); 
            }
        });

        $.ajax({
            url: "includes/total.php",
            type: "POST",
            cache: false,
            success: function(data){
                $('#retrieveTotal').html(data); 
            }
        });
    });

    $('.deleteItem').click(function(e){
        e.preventDefault();
        var cart_id = $(this).val();
        $.ajax({
            method: "POST",
            url: "includes/deletecart.php",
            data: {
                "cart_id" : cart_id,
            },
            success: function(response){
                alert("Product deleted successfully");
            }
        });        
    });
    $.ajax({
        url: "includes/count.php",
        type: "POST",
        cache: false,
        success: function(data){
            $('#count').html(data); 
        }
    });
});
