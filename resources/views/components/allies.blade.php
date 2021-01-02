<style>
.row::-webkit-scrollbar {
display: none;
}

.row{
-ms-overflow-style: none;  /* IE and Edge */
scrollbar-width: none;  /* Firefox */
}

.benefit-container .row, .goals-container .row {
flex-flow: nowrap;
overflow-x: scroll;
}

.route-coaches img, .academic-coaches img, .counselors img {
    width: 224px;
    height: auto;
    padding-top: 14px;
}

.vl {
    border-left: 4px solid rgb(216 216 216);
    height: auto;
}

.hl {
    border-bottom: 4px solid rgb(216 216 216);
    width: auto;
}

.special-content{
    color: #0295D3;
    font-weight: bolder;
}

.special-content-goals {
    color: #601b96;
    font-weight: bolder;
}
</style>

<section id="goals" class="goals py-4 text-center">
    <div class="container">
    <h1 style="font-size: 40px;" class="py-3">They will be your allies in achieving your <span class="special-content-goals">goals</span></h1>
    <div class="goals-container">
            <div class="row py-4">
                <div class="col-sm-4 py-3">
                    <div class="route-coaches">
                    <h4 class="special-content font-weight-bold">ROUTE COACHES</h4>
                    <p class="text-justify">They will be your leading coaches. They will be with you through your entire journey.</p>
                    <img src="{{ asset('images/webpage/v7-17.png') }}" width="100%" alt="Set your pace">
                    </div>
                </div>
                <div class="vl"></div>
                <div class="col-sm-4 py-3">
                    <div class="academic-coaches">
                        <h4 class="special-content font-weight-bold">ACADEMIC COACHES</h4>
                        <p class="text-justify">They create and organize the content of the components and they will share with you the knowledge you need in essential study areas.</p>
                        <img src="{{ asset('images/webpage/v7-18.png') }}" width="100%" alt="Personalized coaching">
                    </div>
                </div>
                <div class="vl"></div>
                <div class="col-sm-4 py-3">
                    <div class="counselors">
                        <h4 class="special-content font-weight-bold">COUNSELORS</h4>
                        <p class="text-justify">They will offer you guidance and advice to find your vocation, set your life goals, and choose the path to a prosperous life.</p>
                        <img src="{{ asset('images/webpage/v7-19.png') }}" width="100%" alt="Innovate Programs">
                    </div>
                </div>
            </div>
        </div>
        <div class="hl"></div>
    </div>
</section>