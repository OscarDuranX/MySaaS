@extends('layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('auth.partials.register')




    <div class="register-box-body">
        <p class="login-box-msg">Payment Details</p>
    <form action="{{ url('subscription_payment') }}" method="POST" id="payment-form">

        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <span class="payment-errors"></span>

        <div class="form-row">
            <label>
                <span>Card Number</span>
                <input type="text" size="20" data-stripe="number"/>
            </label>
        </div>

        <div class="form-row">
            <label>
                <span>CVC</span>
                <input type="text" size="4" data-stripe="cvc"/>
            </label>
        </div>

        <div class="form-row">
            <label>
                <span>Expiration (MM/YYYY)</span>
                <input type="text" size="2" data-stripe="exp-month"/>
            </label>
            <span> / </span>
            <input type="text" size="4" data-stripe="exp-year"/>
        </div>

        <button type="submit">Submit Payment</button>
    </form>
</div>

    </div><!-- /.register-box -->

    @include('layouts.partials.scripts_auth')



    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>


    <script type="text/javascript">
        // This identifies your website in the createToken call below
        Stripe.setPublishableKey('sk_test_VETTeOdV24g7g3g1DtSmJG82 ');
        // ...

        jQuery(function($) {
            $('#payment-form').submit(function(event) {
                var $form = $(this);

                // Disable the submit button to prevent repeated clicks
                $form.find('button').prop('disabled', true);

                Stripe.card.createToken($form, stripeResponseHandler);

                // Prevent the form from submitting with the default action
                return false;
            });
        });

        function stripeResponseHandler(status, response) {
            var $form = $('#payment-form');

            if (response.error) {
                // Show the errors on the form
                $form.find('.payment-errors').text(response.error.message);
                $form.find('button').prop('disabled', false);
            } else {
                // response contains id and card, which contains additional card details
                var token = response.id;
                // Insert the token into the form so it gets submitted to the server
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                // and submit
                $form.get(0).submit();
            }
        };
    </script>




    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    </body>

@endsection
