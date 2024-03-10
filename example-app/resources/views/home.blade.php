@extends ('layout.navbar')
<html>
    <body>
    @section('content')
    <div class="containerfluid pt-5 pb-5">
        <div class="container text-center">
            <h4 class="welcome">Welcome to Sweet Acoustic, where the enchanting world of </br>
            melodies and harmonies comes to life!</br>
            At Sweet Acoustic, we are passionate about empowering aspiring musicians</br>
            to embark on a journey of self-discovery through</br>
            the art of acoustic playing.</h4>
        </div>
    </div>

    <div class="seccont pt-5 pb-5">
        <div class="container-fluid">
            <div class="container" id="cardcontext">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 shadow p-3 mb-5 ">
                        <img src="images/guitar.jpg" class="card-img-top" alt="This is an image of a guitar">
                        <div class="card-body">
                            <h5 class="card-title"><b>Guitar</b></h5>
                            <p class="card-text">The melodic resonance of the acoustic guitar weaves a tapestry of emotions in the quiet corners of the room</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow p-3 mb-5 ">
                        <img src="images/piano.jpg" class="card-img-top" alt="This is an image of a piano">
                        <div class="card-body">
                            <h5 class="card-title"><b>Piano</b></h5>
                            <p class="card-text">The soulful whispers of the acoustic piano keyboard fill the air with timeless elegance and musical poetry</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow p-3 mb-5 ">
                        <img src="images/violin.jpg" class="card-img-top" alt="This is an image of a Violin">
                        <div class="card-body">
                            <h5 class="card-title"><b>Violin</b></h5>
                            <p class="card-text">In the hands of a skilled musician, the acoustic violin becomes a vessel for expressing the unspoken language of the heart</p>
                        </div>
                        </div>
                    </div>
                </div>    

            </div>
        </div>
    </div>
    @endsection

    @section('contenttwo')
    <div class="secpart pt-5 pb-5 mt-5" style="background-color: #A52A2A;">
    <div class="container-fluid">
        <div class="container text-center">
            <h5 class="meetda">Meet the accomplished team of instructors behind <b class="sweet">Sweet Acoustic</b>,</br>
            each bringing a unique blend of expertise and passion to guide you on a musical journey.</br>
            With diverse backgrounds and a shared love for acoustic melodies,</br>
            our instructors are dedicated to helping you discover the joy and artistry of sweet acoustic sounds.</br>
            From seasoned professionals to emerging talents,</br>
            this talented group is here to inspire and nurture your musical aspirations.</h5>
        </div>
    </div>

    <div class="container-fluid text-center mx-auto pt-5" style="width: 1000px;">
        <div class="container row">
        <div class="containerinstructor col">
            <img src="images/guitarins.jpg" alt="Avatar" class="imageinstructor" style="width:100%">
            <div class="middleinstructor">
                <div class="textinstructor">
                <h5><b>Laura Moss</b></h5>
                <p class="belowins">Guitar Instructor</p>
                </div>
            </div>
        </div>

        <div class="containerinstructor col">
            <img src="images/pianoins.jpg" alt="Avatar" class="imageinstructor" style="width:100%">
            <div class="middleinstructor">
                <div class="textinstructor">
                <h5><b>Edward Thomson</b></h5>
                <p class="belowins">Piano Instructor</p>
                </div>
            </div>
        </div>

        <div class="containerinstructor col">
            <img src="images/violinins.jpg" alt="Avatar" class="imageinstructor" style="width:100%">
            <div class="middleinstructor">
                <div class="textinstructor">
                <h5><b>Morgan May</b></h5>
                <p class="belowins">Violin Instructor</p>
                </div>
            </div>
        </div>

        </div>
    </div>
    @endsection
    @section('contentthree')
    <div class="conthree pt-3">
        <h2>Make memories:</h2></br></br>
        <div class="container-fluid">
            <div class="container row">

                <div class="polaroid col" style="transform: rotate(20deg);">
                    <img src="images/guitarmem.jpg" style="width:100%;">
                    <div class="polcontainer">
                        <p>08-21-2022, Willowbrook</p>
                    </div>
                </div>

                <div class="polaroid col" style="transform: rotate(-10deg);">
                    <img src="images/pianomem.jpg" style="width:100%">
                    <div class="polcontainer">
                        <p>05-14-2022, Eldorado Springs</p>
                    </div>
                </div>

                <div class="polaroid col" style="transform: rotate(25deg);"> 
                    <img src="images/violinmem.jpg" style="width:100%">
                    <div class="polcontainer">
                        <p>11-30-2022, Maplewood</p>
                    </div>
                </div>

                <div class="polaroid col" style="transform: rotate(-5deg);">
                    <img src="images/instrumem.jpg" style="width:100%">
                    <div class="polcontainer">
                        <p>02-07-2022, Harborview</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="container">
                <h5 class="lastmsg text-center">At Sweet Acoustic, we believe that music is a universal language that transcends age.</br>
                Our diverse community of learners includes individuals of all ages, from children to seniors,</br>
                each embarking on a unique musical journey.</br>
                Our curriculum is designed to be flexible,</br>
                allowing students to learn at their own pace and explore</br>
                various genres and styles.</h5>
            </div>
        </div>
        <div class="container mx-auto pt-3" style="width: 110px; font-family: Lato, sans-serif; font-weight: bold;font-style: normal; ">
            <a href="#"><button type="button" class="btn btn-dark"><b>Join Us</b></button></a>
        </div>
        
        

    </div>
    </br>
    </br>


    @endsection
</body>
</html>