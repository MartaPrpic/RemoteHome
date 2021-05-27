@extends('master')
@section("content")

<body>
    <div class="page-wrapper bg-img p-t-395 p-b-120">
        <div class="wrapper wrapper--w1070">
            <div class="card card-7">
                <div class="card-body">
                    <form class="form-src" method="POST" action="#">
                        <div class="input-group-srch input--large">
                            <label class="label-srch">going to</label>
                            <input class="input--style-1" type="text" placeholder="Destination, hotel name" name="going">
                        </div>
                        <div class="input-group-srch input--medium">
                            <label class="label-srch">Check-In</label>
                            <input class="input--style-1" type="text" name="checkin" placeholder="mm/dd/yyyy" id="input-start">
                        </div>
                        <div class="input-group-srch input--medium">
                            <label class="label-srch">Check-Out</label>
                            <input class="input--style-1" type="text" name="checkout" placeholder="mm/dd/yyyy" id="input-end">
                        </div>
                        <div class="input-group-srch input--medium">
                            <label class="label-srch">guests</label>
                            <div class="input-group-icon js-number-input">
                                <div class="icon-con">
                                    <span class="plus">+</span>
                                    <span class="minus">-</span>
                                </div>
                                <input class="input--style-1 quantity" type="text" name="guests" value="2 Guests">
                            </div>
                        </div>
                        <button class="btn-submit" type="submit">search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/js/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/js/select2/select2.min.js"></script>
    <script src="/js/jquery-validate/jquery.validate.min.js"></script>
    <script src="/js/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="/js/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="/js/datepicker/moment.min.js"></script>
    <script src="/js/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/js/global.js"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
@endsection