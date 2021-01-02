<style>
.swiper{
background: #0597d5;
padding: 24px 20px;
border-radius: 4px;
margin-right: 18px;
min-width: auto;
}
.scroll::-webkit-scrollbar {display: none;}
</style>

<section class="advantage-list">
        <div class="container-fluid pb-4 pt-2">
        <div class="d-none d-md-flex arrow-directions row no-gutters">
                <div class="horizon-prev mr-1">
                        <button style="background: #EFC100;" class="btn btn-md shadow-sm"><i class="fas fa-arrow-left"></i></button>
                    </div>
                <div class="horizon-next ml-1">
                         <button style="background: #EFC100;" class="btn btn-md shadow-sm"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="row text-white">
                <div class="col-sm-12">
                    <div id="content" class="row scroll" style="flex-wrap: unset;flex-flow: row;overflow-x: scroll;white-space: nowrap;padding: 13px 50px 24px 50px; margin: 0 10px;">
                        <div class="col-sm swiper shadow">1. <strong>Responsibility</strong></div>
                        <div class="col-sm swiper shadow">2. <strong>Innovation</strong></div>
                        <div class="col-sm swiper shadow">3. <strong>Bullying Management</strong></div>
                        <div class="col-sm swiper shadow">4. <strong>Teamwork</strong></div>
                        <div class="col-sm swiper shadow">5. <strong>Creativity</strong></div>
                        <div class="col-sm swiper shadow">6. <strong>Highest Score in the SAT</strong></div>
                        <div class="col-sm swiper shadow">7. <strong>Money Management and Finance</strong></div>
                        <div class="col-sm swiper shadow">8. <strong>Nutrition</strong></div>
                        <div class="col-sm swiper shadow">9. <strong>Entrepreneurship</strong></div>
                        <div class="col-sm swiper shadow">10.<strong> Critical Thinking</strong></div>
                        <div class="col-sm swiper shadow">11.<strong> Awareness of Yourself</strong></div>
                        <div class="col-sm swiper shadow">12.<strong> English Improvement</strong></div>
                        <div class="col-sm swiper shadow">13.<strong> Cooperation</strong></div>
                        <div class="col-sm swiper shadow">14.<strong> Positive Habits</strong></div>
                        <div class="col-sm swiper shadow">15.<strong> Effective Use of Time</strong></div>
                        <div class="col-sm swiper shadow">16.<strong> Improve your Mathematics</strong></div>
                        <div class="col-sm swiper shadow">17.<strong> Honesty</strong></div>
                        <div class="col-sm swiper shadow">18.<strong> Career Choice</strong></div>
                        <div class="col-sm swiper shadow">19.<strong> Life Driving Force</strong></div>
                        <div class="col-sm swiper shadow">20.<strong> Environmental Awareness</strong></div>
                        <div class="col-sm swiper shadow">21.<strong> Skills Projection</strong></div>
                        <div class="col-sm swiper shadow">22.<strong> Purposes</strong></div>
                        <div class="col-sm swiper shadow">23.<strong> Sex Education</strong></div>
                        <div class="col-sm swiper shadow">24.<strong> Emotional Intelligence</strong></div>
                        <div class="col-sm swiper shadow">25.<strong> Leadership</strong></div>
                        <div class="col-sm swiper shadow">26.<strong> Ethical Values</strong></div>
                        <div class="col-sm swiper shadow">27.<strong> Initiative</strong></div>
                        <div class="col-sm swiper shadow">28.<strong> Positivism</strong></div>
                        <div class="col-sm swiper shadow">29.<strong> Skills Improvement</strong></div>
                        <div class="col-sm swiper shadow">30.<strong> Cultural Awareness</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        ( function( $ ) {
        $('.horizon-prev').click(function(event) {
        event.preventDefault();
        $('#content').animate({
            scrollLeft: "-=375px"
        }, "slow");
        });

        $('.horizon-next').click(function(event) {
        event.preventDefault();
        $('#content').animate({
            scrollLeft: "+=375px"
        }, "slow");
        });
    }( jQuery ) );
    </script>