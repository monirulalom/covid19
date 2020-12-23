@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered section">
        <div class="column is-8">
            @if (session('status'))
            <div class="notification is-primary is-light">
                <button class="delete"></button>
                <p> {{ session('status') }}</p>
            </div>
            @endif

            <h2 class="title">Apply for Vaccine Trial</h2>
            </header>




            <form action="{{route('trial')}}" method="POST">
                @csrf
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control has-icons-right">
                        <input class="input  @error('email')is-danger @enderror" type="text"
                            placeholder="Enter your name here" name="name" required>
                        @error('name')
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        @enderror
                    </div>
                    @error('name')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input @error('email')is-danger @enderror" type="email"
                            placeholder="Enter your email here" name="email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        @error('email')
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        @enderror
                    </div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                





                <div class="field">
                    <label class="label">Address</label>
                    <div class="control has-icons-right">
                        <textarea class="textarea  @error('address')is-danger @enderror"
                            placeholder="Enter your address here" name="address" required></textarea>
                        @error('address')
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        @enderror
                    </div>
                @error('address')
                <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>




                <div class="field">
                    <label class="label">Your Age</label>
                    <div class="control">
                        <label class="label" for="age">
                            <input class="input" type="number" name="age" id="age">
                        </label>

                    </div>
                </div>

                <div class="field">
                    <label class="label">Your National Id No</label>
                    <div class="control">
                        <label class="label" for="nid">
                            <input class="input" type="text" name="nid" id="nid">
                        </label>

                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-link is-light">Cancel</button>
                    </div>
                </div>




            </form>





        </div>
    </div>
</div>


@endsection

@section('footer-script')

<script>
    $(document).ready(function () {
        $('select[name="division"]').on('change', function () {
            var districtId = $(this).val();
            $('.dselect').css("visibility","visible");
            if (districtId) {
                $.ajax({
                    url: 'getdistricts/' + districtId,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        $('select[name="district"]').empty();
                        $('select[name="district"]').append('<option>Select district</option>');
                        $('select[name="upazilla"]').empty();
                        $('select[name="upazilla"]').append('<option>Select upazilla</option>');
                        $.each(data, function (key, value) {
                            $('select[name="district"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                        $('.dselect').css("visibility","hidden");
                    }
                });
            }
            else {
                $('select[name="district"]').empty();
            }
        });

        $('select[name="district"]').on('change', function () {
            var districtId = $(this).val();
            $('.uselect').css("visibility","visible");
            
            if (districtId) {
                $.ajax({
                    url: 'getupazillas/' + districtId,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        $('select[name="upazilla"]').empty();
                        $('select[name="upazilla"]').append('<option>Select upazilla</option>');
                        $.each(data, function (key, value) {
                            $('select[name="upazilla"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                        $('.uselect').css("visibility","hidden");
                    }
                });
            }
            else {
                $('select[name="upazilla"]').empty();
            }
        });


    });

</script>

@endsection