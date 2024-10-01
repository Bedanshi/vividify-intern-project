@include('partials.header')
@section('main')

    <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container bottomContainer">
            <div class="ultimateImg">
                <img class="mainImg" src="{{ asset('/assets/6.jpeg') }}">

            </div>
            <div class="allText bottomText">
                <h1 class="text-blk headingText">
                    Ramodoshan Hall
                </h1>
                <p class="text-blk description">
                    Ramsodhana is the multi-purpose menu for special events such as; wedding, social events, business
                    meetings, seminars, educational fair and AGM.
                </p>



                <a class="explore">
                    Book A Hall
                </a>

            </div>
        </div>
        <div class="responsive-container-block bigContainer">
            <div class="responsive-container-block Container bottomContainer">
                <div class="ultimateImg">
                    <img class="mainImg" src="{{ asset('/assets/7.jpeg') }}">

                </div>
                <div class="allText bottomText">
                    <p class="text-blk headingText">
                        Niji Hall
                    </p>
                    <p class="text-blk description">
                        Niji hall is a very private hall used by youngest eunterprenur like bedanshi and her friends. </p>
                    <a class="explore">
                        Book A Hall
                    </a>
                </div>
            </div>
            <div class="responsive-container-block bigContainer">
                <div class="responsive-container-block Container bottomContainer">
                    <div class="ultimateImg">
                        <img class="mainImg"src="{{ asset('/assets/gho.jpg') }}">


                    </div>
                    <div class="allText bottomText">
                        <p class="text-blk headingText">
                            Ghoda Ghodi Hall
                        </p>

                        <p class="text-blk description">
                            GhodaGhodi is the multi-purpose menu for special events such as; wedding, social events,
                            business meetings, seminars, educational fair and AGM. </p>
                        <a class="explore">
                            Book A Hall
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@include('partials.footer')
