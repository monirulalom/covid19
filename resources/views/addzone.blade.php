@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Affected area</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <button type="button" class="button is-small">
                    {{Carbon\Carbon::now()->isoFormat('DD MMMM YYYY')}}
                </button>
            </div>
        </div>
    </div>


    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Add</p>
        </header>

        <div class="card-content">
            <form class="register-form" method="POST" action="{{Route('addzone')}}">
                @csrf

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
                    <div class="column">
                        <div class="field">
                            <label class="label" for="zone">Zone:</label>
                            <div class="control">
                                <div class="select @error('zone') is-danger @enderror">
                                    <select name="zone">
                                        <option>Select zone</option>
                                        @foreach($zones as $zone)
                                        <option value="{{$zone->id}}">{{$zone->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @if ($errors->first('division') || $errors->first('district') || $errors->first('upazilla'))
                <div class="help is-danger">Location info is incomplete</p>
                @endif
                
                </div>





                <div class="field is-horizontal">
                                    <div class="field-body">
                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

@section('footer-script')

<script>
    $(document).ready(function () {
        $('select[name="division"]').on('change', function () {
            var districtId = $(this).val();
            $('.dselect').css("visibility","visible");
            if (districtId) {
                $.ajax({
                    url: '/getdistricts/' + districtId,
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
                    url: '/getupazillas/' + districtId,
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
