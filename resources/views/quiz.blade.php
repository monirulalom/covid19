@extends('layouts.app')

@section('content')

    <main class="section">
        <h2 class="title has-text-centered">Awareness Quiz</h2>
    </main>
    <section class="container" id="progress_meter">
        <span class="selected">1</span>
        <span class="unanswered">2</span>
        <span class="unanswered">3</span>
        <span class="unanswered">4</span>
        <span class="unanswered">5</span>
        <span class="unanswered">6</span>
        <span class="unanswered">7</span>
        <span class="unanswered">8</span>
        <span class="unanswered">9</span>
        <span class="unanswered">10</span>
        <span class="unanswered">11</span>
        <span class="unanswered">12</span>
        <span class="unanswered">13</span>
        <span class="unanswered">14</span>
        <span class="unanswered">15</span>
    </section>
    <section id="myths">
          <div class="container">
              <div class="myth unanswered" id="myth_1" style="display: block;">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Coronavirus (COVID-19) does not transmit in areas with hot and humid climate.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>From the evidence so far, the COVID-19 virus can be transmitted in ALL AREAS, including areas with hot and humid weather. Regardless of climate, adopt protective measures if you live in, or travel to an area reporting COVID-19.<br><br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/myth-busters" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_2">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Vaccines against pneumonia do not protect you against the new coronavirus (COVID-19).</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>Vaccines against pneumonia, such as pneumococcal vaccine and Haemophilus influenzae type B (Hib) vaccine, do not provide protection against the new coronavirus. The virus is so new and different that it needs its own vaccine. Researchers are trying to develop a vaccine against 2019-nCoV.<br><br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/myth-busters" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">y</span>
              </div>

              <div class="myth unanswered" id="myth_3">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Coronavirus does not affect young people.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>People of all ages can be infected by the new coronavirus (2019-nCoV).. Younger people have less chance of developing symptoms, however they can still transmit the disease to others.<br><br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/myth-busters" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_4">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Antibiotics do not work on the new coronavirus (COVID-19).</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>Antibiotics do not work on any virus, including COVID-19. They are only effective against bacteria.<br><br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/myth-busters" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">y</span>
              </div>

              <div class="myth unanswered" id="myth_5">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Eating Thankuni leaves can make you resistant to the new coronavirus (COVID-19).</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>There is no evidence that consuming Thankuni leaves can help grow a resistance against the new coronavirus.<br><br><a href="https://www.sangbadpratidin.in/bangladesh/rumours-making-rounds-in-bangladesh-on-coronavirus/" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_6">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">It is essential to wear a mask even when you are healthy.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>Wear a mask if you are taking care of someone who is sick, or you are coughing or sneezing. However, there is no harm in wearing a mask, but make sure you use it PROPERLY. Look at the source for instructions on how to wear masks.<br><br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/when-and-how-to-use-masks" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_7">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">You can test for Coronavirus at local clinics/hospitals.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>As of right now, only the Institute of Epidemiology, Disease Control and Research (IEDCR) can test for coronavirus in Bangladesh. To get in touch with them. Find hotline numbers in source<br><br><a href="https://unb.com.bd/category/Business/banglalink-announces-coronavirus-hotline-numbers-toll-free/46650" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_8">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">You can test for Coronavirus by holding your breath for 10 seconds to check for discomfort.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>There is no evidence that this test works and no health expert has recommended doing this.<br><br><a href="https://fullfact.org/online/coronavirus-water-breath-test-bad-advice/" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_9">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Coronavirus CANNOT spread from mosquito bites.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>The coronavirus (COVID-19) spreads via respiratory droplets and contaminated surfaces, NOT blood. However, mosquitoes can spread dengue, malaria and other deadly diseases.<br><br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/myth-busters" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">y</span>
              </div>

              <div class="myth unanswered" id="myth_10">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Hand Sanitizers should have at least 60% alcohol to be effective against coronavirus.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>Laboratory data demonstrate that 60% ethanol and 70% isopropanol, the active ingredients in CDC-recommended alcohol-based hand sanitizers, inactivates viruses that are genetically related to, and with similar physical properties as, the 2019-nCoV. However, if you don’t have access to hand sanitizer, don’t worry! Soap is just as effective. <br><br><a href="https://www.cdc.gov/coronavirus/2019-ncov/infection-control/hcp-hand-sanitizer.html" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">y</span>
              </div>

              <div class="myth unanswered" id="myth_11">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">The new coronavirus can be transmitted through goods manufactured in China or any country reporting Coronavirus COVID-19 cases.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>Even though the new coronavirus can stay on surfaces for a few hours or up to several days (depending on the type of surface), it is very unlikely that the virus will persist on a surface after being moved, travelled, and exposed to different conditions and temperatures.<br><br><a href="https://edition.cnn.com/interactive/2020/health/coronavirus-questions-answers/" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_12">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Thermal Scanners can accurately detect if someone has Coronavirus (Covid-19).</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>Thermal scanners are effective in detecting people who have developed a fever (ie have a higher than normal body temperature). However, they cannot detect people who are infected but are not yet sick with fever.<br><br><a href="https://www.newagebd.net/article/102089/coronavirus-myth-busters" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_13">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Eating Garlic reduces your chances of getting infected by Coronavirus (Covid-19).</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>There is no evidence to suggest this is true. According to the World Health Organization (WHO) there is no specific cure yet for the new Coronavirus.<br><br><a href="https://www.reuters.com/article/uk-factcheck-coronavirus-alkaline/false-claim-bicarbonate-soda-and-lemon-juice-can-help-prevent-coronavirus-infection-idUSKBN20X2BV" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_14">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Drinking/gurgling hot water mixed with salt/vinegar helps prevent infection with the new coronavirus.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>There is no evidence that regularly rinsing the nose with saline has protected people from infection with the new coronavirus.<br><br><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/myth-busters" target="_blank">[source]</a></p>

                      <button class="next_question">Next Question <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>

              <div class="myth unanswered" id="myth_15">

                  <div class="right_or_wrong">
                      <h2 class="the_myth">Since I am not a doctor/health professional there’s nothing I can do to help improve the situation.</h2>

                      <a href="#" class="right_button">Right</a> <a href="#" class="wrong_button">Wrong</a>
                  </div>

                  <div class="the_answer">
                      <h2 class="right_answer">You are <strong>Right</strong></h2>
                      <h2 class="wrong_answer">You are <strong>Wrong</strong></h2>

                      <p>Simply by taking proper precautions and safety measures, you are helping by slowing down the spread of the disease. Remember - if you spread the virus among 10 other people, they will EACH in turn spread it among 10 other people, making a total of 110 infected people, and they all will infect 10 people each, making the total 1210 - and on and on it goes. So if you can prevent the infection of the first 10 people, you will be responsible for preventing the virus from infecting thousands of people.<br><br><a href="https://www.winknews.com/2020/03/13/preventing-spread-of-coronavirus-a-matter-of-social-responsibility/" target="_blank">[source]</a></p>

                      <button class="next_question">See Results <span></span></button>
                  </div>

                  <span class="ns">n</span>
              </div>


          </div>
      </section>
      <section id="result">
          <div class="container">
              <h2 class="congrats">Well done!</h2>
              <h2 class="good_job">Good Job!</h2>
              <h2 class="good_start">That's a start!</h2>

              <h3 class="success_rate">You have correctly answered <span>0</span> out of 15 questions.</h3>

              <br><br>
              <br><br>
              <a href="{{Route('quiz')}}" id="repeat"><i class="fas fa-redo"></i> Play Again</a>
          </div>
      </section>
    </div>


@endsection('content')

@section('footer-script')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript">
        var name, email, ns, ca;

        $("#repeat").click(function () {
            $('#progress_meter span.right_answer').each(function () {
                $(this).removeClass('right_answer').addClass('unanswered');
            });
            $('#progress_meter span.wrong_answer').each(function () {
                $(this).removeClass('wrong_answer').addClass('unanswered');
            });

            $('#myths div.right_answer').each(function () {
                $(this).removeClass('right_answer').removeClass('answered').addClass('unanswered');
            });
            $('#myths div.wrong_answer').each(function () {
                $(this).removeClass('wrong_answer').removeClass('answered').addClass('unanswered');
            });
            $('#myths div.the_answer').each(function () {
                $(this).hide();
            });
            $('#myths div.right_or_wrong').each(function () {
                $(this).show();
            });
            $('#myths div.the_answer h2').each(function () {
                $(this).hide();
            });
            $('#result h2').each(function () {
                $(this).hide();
            });
            $('#result .progress').each(function () {
                $(this).width('0%');
            });
            $('#result').hide();
            $('#login').fadeIn();
        });

        function show_result() {
            var correct = $('div.right_answer').length;
            var rank;

            if (correct > 11) {rank = 'expert';}
            if (correct <= 11) {rank = 'intermediate';}
            if (correct < 7) {rank = 'beginner';}

            if (rank === 'expert') {
                $('#result h2.congrats').show();
                $('#result h2.congrats span').html(name);
                $('#result a.download_your_certificate').show();
                $('#result a.share_on_fb').show();
                $('#result a.invest').show();
            }

            if (rank === 'intermediate') {
                $('#result h2.good_job').show();
                $('#result h2.good_job span').html(name);
            }

            if (rank === 'beginner') {
                $('#result h2.good_start').show();
                $('#result h2.good_start span').html(name);
            }

            $("#result .indicator").addClass(rank);
            $("#result .indicator span").html(correct);
            $("#result h3.success_rate span").html(correct);
            $("#result h3#" + rank).show();

            $('#myths').hide();
            $('#result').fadeIn();

            var date = new Date();

            var time = new Date($.now());

            // $.post('/api/myths/users?validation_token=sdfbh435t64e5tdhjrftje5ye324r23klhgrsw2', {name: name, email: email, correct_answers: correct, level: rank, time: time});


            return false;
        }

        $("form#login_form").submit(function () {
            name = $("#login_form #login_form_name").val();
            // contact_number = $("#login_form #login_form_contact_number").val();
            email = $("#login_form #login_form_email").val();

            $("#progress_meter").slideDown();
            $("#progress_meter span.unanswered:first").removeClass('unanswered').addClass('selected');

            $("#login").hide();
            $("#myths .unanswered:first").show();
            $("#myths").fadeIn();

            let variableJSON = JSON.parse($('#variableJSON').text());

            $('#variableJSON').remove();

            $.post('/api/myths/users?validation_token=' + variableJSON, {name: name, email: email, newsletter_subscription_status: false});

            variableJSON = null;

            return false;
        });

        $("#myths .right_button").click(function () {
            ns = $(this).parent().parent().find('span.ns').text();

            if(ns === 'n') {
                ca = 'wrong_answer';
            } else {
                ca = 'right_answer';
            }

            $("#progress_meter span.selected").removeClass('selected').addClass(ca);

            $(this).parent().hide();
            $(this).parent().parent().addClass(ca);
            $(this).parent().parent().find('.the_answer h2.'+ca).show();
            $(this).parent().parent().find('.the_answer').fadeIn();

            return false;
        });

        $("#myths .wrong_button").click(function () {
            ns = $(this).parent().parent().find('span.ns').text();

            if(ns === 'y') {
                ca = 'wrong_answer';
            } else {
                ca = 'right_answer';
            }

            $("#progress_meter span.selected").removeClass('selected').addClass(ca);

            $(this).parent().hide();
            $(this).parent().parent().addClass(ca);
            $(this).parent().parent().find('.the_answer h2.'+ca).show();
            $(this).parent().parent().find('.the_answer').fadeIn();

            return false;
        });

        $("#myths button.next_question").click(function () {
            $(this).parent().parent().removeClass('unanswered').addClass('answered').hide();

            if($("#myths .unanswered").length) {
                $("#myths .unanswered:first").fadeIn("slow");
                $("#progress_meter span.unanswered:first").removeClass('unanswered').addClass('selected');
            } else {
                show_result();
            }
        });




    </script>
    @endsection