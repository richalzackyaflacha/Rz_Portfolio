{{-- Skill Section --}}
<div id="skill" class="skill-section">
    {{-- Title Section --}}
    <div class="title-skill" data-aos="fade-right" data-aos-duration="1000">
        <h2>Skill</h2>
    </div>

    {{-- Side Border --}}
    <div class="line1" data-aos="fade-down" data-aos-duration="1000"></div>

    {{-- Skill Programing --}}
    <div class="content-skill">
        <div class="skill skill-1" data-aos="zoom-in" data-aos-duration="1500"> 
            {{-- Circle Percent --}}
            <div class="outer">
                <div class="inner">
                    <h4><div id="number"> </div></h4>
                </div>
            </div>

            {{-- Circle Color --}}
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180px" height="180px">
                <defs>
                <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#AEFEFF" />
                        <stop offset="100%" stop-color="#35878d" />
                </linearGradient>
                </defs>
                <circle cx="90" cy="90" r="80" stroke-linecap="round" />
            </svg>

            <div class="skill-name">
                <h3>HTML</h3>
            </div>
        </div>

        <div class="skill skill-2" data-aos="zoom-in" data-aos-duration="1500"> 
            {{-- Circle Percent --}}
            <div class="outer">
                <div class="inner">
                    <h4><div id="number2"> </div></h4>
                </div>
            </div>

            {{-- Circle Color --}}
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180px" height="180px">
                <defs>
                <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#AEFEFF" />
                        <stop offset="100%" stop-color="#35878d" />
                </linearGradient>
                </defs>
                <circle cx="90" cy="90" r="80" stroke-linecap="round" />
            </svg>

            <div class="skill-name">
                <h3>CSS</h3>
            </div>
        </div>

        <div class="skill skill-3" data-aos="zoom-in" data-aos-duration="1500"> 
            {{-- Circle Percent --}}
            <div class="outer">
                <div class="inner">
                    <h4><div id="number3"> </div></h4>
                </div>
            </div>

            {{-- Circle Color --}}
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180px" height="180px">
                <defs>
                <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#AEFEFF" />
                        <stop offset="100%" stop-color="#35878d" />
                </linearGradient>
                </defs>
                <circle cx="90" cy="90" r="80" stroke-linecap="round" />
            </svg>

            <div class="skill-name">
                <h3>JavaScript</h3>
            </div>
        </div>
    </div>

    {{-- Side Border --}}
    <div class="line2" data-aos="fade-up" data-aos-duration="1000"></div>

    {{-- Learned More --}}
    <div class="learn-more">
        {{-- Title --}}
        <div class="title-learn" data-aos="fade-up" data-aos-duration="1000">
            <h3>I also learned this</h3>
        </div>

        {{-- Program --}}
        <div class="program-learn">
            {{-- Adobe XD --}}
            <div class="program" data-aos="flip-up" data-aos-duration="1500">
                <div class="pict-program">
                    <img src="{{ asset('img/icon/xd.png') }}" alt="Adobe XD">
                </div>

                <div class="text-program">
                    <h2>Adobe XD</h2>
                    <P>Adobe XD is a vector-based user experience design tool for web apps and mobile apps, developed and published by Adobe Inc.</P>
                    <p>I use this software to design the appearance of the website that I will make.</p>
                </div>
            </div>

            {{-- React JS --}}
            <div class="program" data-aos="flip-up" data-aos-duration="1500">
                <div class="pict-program">
                    <img src="{{ asset('img/icon/react.png') }}" alt="React JS">
                </div>

                <div class="text-program">
                    <h2>React JS</h2>
                    <p>React is a free and open-source front-end JavaScript library for building user interfaces based on UI components. It is maintained by Meta and a community of individual developers and companies.</p>
                    <p>For now i'm using React JS to learn javascript, and also to make UI.</p>
                </div>
            </div>

             {{-- Flutter --}}
             <div class="program" data-aos="flip-up" data-aos-duration="1500">
                <div class="pict-program">
                    <img src="{{ asset('img/icon/flutter.png') }}" alt="React JS">
                </div>

                <div class="text-program">
                    <h2>Flutter</h2>
                    <p>Flutter is an open-source UI software development kit created by Google. It is used to develop cross platform applications for Android, iOS, Linux, macOS, Windows, Google Fuchsia, and the web from a single codebase.</p>
                    <p>I use Flutter to learn to make Mobile UI.</p>
                </div>
            </div>
        </div>
    </div>
</div>