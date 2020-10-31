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

            <h2 class="title">Apply for Covid19 Test</h2>
            </header>




            <form action="{{route('apply')}}" method="POST">
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
                 
                    <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label" for="division">Divison: </label>
                            <div class="control">
                                <div class="select  @error('division') is-danger @enderror">
                                    <select name="division">
                                        <option>Select division</option>
                                        @foreach ($divisions as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="column">
                        <div class="field">
                            <label class="label" for="district">District: <i class="fas fa-spinner fa-spin dselect"></i> </label>
                            <div class="control">
                                <div class="select  @error('district') is-danger @enderror">
                                    <select name="district">
                                        <option>Select district</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="column">
                        <div class="field">
                            <label class="label" for="upazilla">Upazilla:  <i class="fas fa-spinner fa-spin uselect"></i>  </label>
                            <div class="control">
                                <div class="select @error('upazilla') is-danger @enderror">
                                    <select name="upazilla">
                                        <option>Select upazilla</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @if ($errors->first('division') || $errors->first('district') || $errors->first('upazilla'))
                <p class="help is-danger">Location info is incomplete</p>
                    @endif
                </div>




                <div class="field">
                    <label class="label">Have you got in contact with someone corona positive ? </label>
                    <div class="control">
                        <label class="radio" for="contact">
                            <input type="radio" name="contact" id="yes" value="yes">
                            Yes
                        </label>
                        <label class="radio">
                            <input type="radio" name="contact" id="no" value="no">
                            No
                        </label>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Do you have fever ? </label>
                    <div class="control">
                        <label class="radio" for="fever">
                            <input type="radio" name="fever" id="yes" value="yes">
                            Yes
                        </label>
                        <label class="radio">
                            <input type="radio" name="fever" id="no" value="no">
                            No
                        </label>
                    </div>
                </div>


                <div class="field">
                    <label class="label">Do you have cough ? </label>
                    <div class="control">
                        <label class="radio" for="cough">
                            <input type="radio" name="cough" id="yes" value="yes">
                            Yes
                        </label>
                        <label class="radio">
                            <input type="radio" name="cough" id="no" value="no">
                            No
                        </label>
                    </div>
                </div>

                <div class="field">
                    @if ($errors->first('contact') || $errors->first('fever') || $errors->first('cough'))
                    <p class="help is-danger">Please select symptoms correctly</p>
                    @endif
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