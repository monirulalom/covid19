@extends('layouts.app')

@section('content')

    <main class="section">
        <h2 class="title has-text-centered">Latest Updates</h2>

        <section class="container">
        <div class="columns is-multiline">
            <div class="column">
              <div class="box notification">
                <div class="heading">Total Application</div>
                <div class="title">{{$no_of_application}}</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Today</div>
                      <div class="title is-5">{{$applied_today}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Yesterday</div>
                      <div class="title is-5">{{$applied_yesterday}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Up / Down</div>
                      <div class="title is-5">{{$application_increase}}@if($application_up) ↑ @else ↓ @endif</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="columns is-multiline">
            <div class="column">
              <div class="box notification">
                <div class="heading">Total Positive</div>
                <div class="title">{{$positive}}</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Today</div>
                      <div class="title is-5">{{$positive_today}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Yesterday</div>
                      <div class="title is-5">{{$positive_yesterday}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Up / Down</div>
                      <div class="title is-5">{{$positive_increase}}@if($positive_up) ↑ @else ↓ @endif</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box notification">
                <div class="heading">Toal Death</div>
                <div class="title">{{$dead_total}}</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Today</div>
                      <div class="title is-5">{{$dead_today}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Yesterday</div>
                      <div class="title is-5">{{$dead_yesterday}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Up / Down</div>
                      <div class="title is-5">{{$dead_increase}}@if($dead_up) ↑ @else ↓ @endif</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="box notification">
                <div class="heading">Toal Recovered</div>
                <div class="title">{{$recovered_total}}</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Today</div>
                      <div class="title is-5">{{$recovered_today}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Yesterday</div>
                      <div class="title is-5">{{$recovered_yesterday}}</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Up / Down</div>
                      <div class="title is-5">{{$recovered_increase}}@if($recovered_up) ↑ @else ↓ @endif</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
    </main>



@endsection('content')