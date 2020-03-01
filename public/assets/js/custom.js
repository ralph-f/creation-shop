var cardForm = '';


$(function () {
    // $('.main-menu > li > a').each(function () {            
        
    //     console.log(window.location.pathname);
    //     if (window.location.pathname.indexOf($(this).attr('href')) > -1) {
    //         $(this).closest('li').addClass('active');
    //         return false;
    //     }
    // });
});

$(function(){



    $('.menu-tab').on('click', function( event ){
        event.preventDefault();

        var menuName = $(this).attr( 'href' );
        
        if( menuName == '#seller' || menuName == '#merchant' ){           
            window.location.href = $(this).attr('data-url');
        }
       
        

    });

});

$(function(){
    $('.product-type').on('change', function(){
        var actionType = $( this ).val();

        $('.custom-field-wrapper').fadeOut();

        if( actionType === 'file' ){

            $('.file-wrapper').fadeIn();
        }
        else if( actionType === 'code' ){
            $('.code-wrapper').fadeIn();
        }
        else if( actionType === 'service' ){
            $('.service-wrapper').fadeIn();
        }
    });

    $('.limit-quota').on('change', function(){

        if( $(this).is(':checked') ){
            if( $(this).val() == 'unlimited' ){
                $('.limit-wrapper').fadeOut();
            }
            else{
                if( $(this).val() == 'limited' ){
                    $('.limit-wrapper').fadeIn();
                }
            }
        }
    });

    $('.codes-field').on('keypress', function( e ){
        if( e.keyCode === 13 && $(this).val().length ){
            $('.added-codes-wrapper').append('<input type="text" class="form-control" value="'+$(this).val()+'"disabled>');
            $('.added-codes-main-wrapper').fadeIn();
        }
    });

   
    if( $('#data-table').length ){
        $('#data-table').DataTable();
    }
   


    $('.discount-options').on('change', function(){
        
        if( $(this).val() == 'percent' ){
            console.log($(this).val())
            $('#discount-type').html('% Off');
        }
        else if( $(this).val() == 'amount' ){
            console.log($(this).val())
            $('#discount-type').html('Amount Off');
        }

    });


    /**
     *  Logic to handle the visibility of the login form on first step of the checkout process
     */

    $('.account-checkout').on('click', function(){
        if( $(this).is(':checked') && $(this).val() == 'login' ){
            $('.login-wrapper').fadeIn();
        }
        else{
            $('.login-wrapper').fadeOut();
        }
    }); 


    $('.payment-method').ready(function(){
        
        $.each( $('.payment-method'), function(i, field){
            if( $( field ).is(':checked') ){
                localStorage.setItem('paymentMethod', $( field ).val());
                return false;
            }
        })
    });

    $('.payment-method').on('click', function(){
        
        

        if( $( this ).is(':checked') ){
            
            if( $(this).val() == 'paypal' ){
                cardForm = $('.card-payment-form').html();
                $('.card-payment-form').html( getPayPalForm() );
            }
            else{
                $('.card-payment-form').html( cardForm );
            }
        }
    });


})



function getPayPalForm(){
    var dom = '';


    dom += '<div class="form-group">';
    dom += '<label for="username">Full name <span class="text-danger">*</span></label>';
    dom += '<input type="text" class="form-control" name="" placeholder="Full name" required="">';
    dom += '</div>';
   
   
    dom += '<div class="form-group">';
    dom += '<label for="">Email Address <span class="text-danger">*</span></label>';
    dom += '<input type="email" class="form-control" name="email" placeholder="Email address" />';
    dom += '</div>';
    dom += '<div class="form-group">';
    dom += '<label for="">Confirm Email Address <span class="text-danger">*</span></label>';
    dom += '<input type="email" class="form-control" name="email" placeholder="Confirm email address" />';
    dom += '</div>';
 
    dom += '<div class="form-group">';
    dom += '<label for="">Coupon Code</label>';
    dom += '<input type="text" class="form-control" name="" placeholder="Coupon Code" />';
    dom += '</div>';
  
    return dom;
  

}