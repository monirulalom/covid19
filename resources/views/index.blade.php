@extends('layouts.app')

@section('content')

    <main class="section">
        <h2 class="title has-text-centered">All test data summary will show up here</h2>

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
            <div class="column">
              <div class="box notification">
                <div class="heading">Revenue / Expenses</div>
                <div class="title">55% / 45%</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Rev Prod $</div>
                      <div class="title is-5">30%</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Rev Serv $</div>
                      <div class="title is-5">25%</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Exp %</div>
                      <div class="title is-5">45%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box notification">
                <div class="heading">Feedback Activity</div>
                <div class="title">78% ↑</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Pos</div>
                      <div class="title is-5">1560</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Neg</div>
                      <div class="title is-5">368</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Pos/Neg %</div>
                      <div class="title is-5">77% / 23%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box notification">
                <div class="heading">Orders / Returns</div>
                <div class="title">75% / 25%</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Orders $</div>
                      <div class="title is-5">425K</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Returns $</div>
                      <div class="title is-5">106K</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Success %</div>
                      <div class="title is-5">+ 28,5%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </main>



@endsection('content')