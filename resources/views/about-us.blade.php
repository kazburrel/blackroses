@extends('layout.index')

@section('content')
    <style>
        .centered-list-container {
            text-align: center;
        }

        .numbered-list {
            counter-reset: list-counter;
            display: inline-block;
            text-align: left;
        }

        .numbered-list p {
            counter-increment: list-counter;
        }

        .numbered-list p:before {
            content: counter(list-counter) ". ";
        }

        .numbered-list span {
            display: inline-block;
            margin-right: 10px;
            /* Adjust the margin as needed */
        }

        @media (max-width: 430px) {
            .numbered-list span {
                display: block;
                /* margin-bottom: 10px; */
                margin-top: 10px;
                /* Add margin at the bottom for spacing between items */
            }
        }
    </style>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);" <div class="auto-container">
        <h1>About Us</h1>
        <div class="bread-crumb-outer">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
        </div>
    </section>


    <!--About Us-->
    <section class="about-us-section">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                {{-- <h2>ABOUT US</h2> --}}
                <div class="separator"></div>
                <div class="desc-text" style="text-align: left">
                    Our service is dedicated to supporting up to 4 looked-after children and
                    care leavers, aged 16 and 17, in a mixed-sex, ringfenced group living arrangement. We
                    welcome young people who exhibit a growing level of independence and a readiness to acquire
                    additional skills necessary for a successful transition into adulthood. Our service is
                    tailored specifically for young individuals who no longer require the level of care or the
                    specific environment provided in a children's home or foster care setting.
                    We accept young people with a range of characteristics, provided that they are compatible
                    with the existing group dynamics and their needs do not conflict with those of any current
                    residents. This compatibility will be assessed before a place is offered and will be subject
                    to a satisfactory risk assessment. The characteristics we are able to accommodate include:
                    <div class="centered-list-container">
                        <div class="numbered-list">
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Autistic spectrum disorder</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Attention deficit hyperactivity disorder (ADHD)</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Attachment disorder</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Attention deficit disorder (ADD)</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Mental health issues (mild, moderate, or severe)</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Challenging behavior</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Moderate learning disabilities</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Drug and alcohol abuse (mild, moderate, or severe, or only if in treatment)</p>
                            </span>
                            <span style="display: inline-block; margin-right: 10px;">
                                <p>Self-harming behaviors</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <p class="strong-text" style="text-align: center;">Goals and Objectives.</p>

                                <div class="numbered-list">
                                    <p>
                                        Providing exceptional care to our young residents and establishing our reputation as
                                        a compassionate and effective service in our local community.
                                    </p>
                                    <p>
                                        Ensuring our young residents feel safe, respected, and supported, so they view Black
                                        Roses as their home, not just a place where they reside.
                                    </p>
                                    <p>
                                        Recruiting high-caliber, caring staff using the safer recruitment framework,
                                        ensuring our young residents receive the best care to help them grow and overcome
                                        challenges.
                                    </p>
                                    <p>
                                        Offering customized support and establishing partnerships with local providers to
                                        equip our young residents with the skills needed to become healthy, happy,
                                        productive members of society when they leave us.
                                    </p>
                                    <p>
                                        Integrating our young residents into their local community through volunteering
                                        opportunities and shared skill sessions to foster mutual understanding and respect.
                                    </p>
                                </div>
                            </div>
                            <div class="desc-text " style="margin-top: 15px">
                                <h3 class="strong-text">Promoting Independence</h3>

                                The service is dedicated to supporting young people towards a healthy and independent future
                                through
                                various specific support programs and initiatives. The approach is collaborative, focusing
                                on
                                working closely with the young people to identify their unique goals and aspirations.
                                Individualized
                                support plans are developed together with the residents, promoting active participation in
                                decision-making processes and ensuring that existing plans are followed both in-house and by
                                other
                                agencies.

                                In-house programs and skills development opportunities are provided to enhance the young
                                people's
                                independence. These may include life skills workshops, educational sessions on budgeting,
                                cooking,
                                personal hygiene, self-care, finding suitable move-on accommodation, maintaining a tenancy,
                                and
                                managing peer pressure. Job-seeking skills, CV writing, interview techniques, and workplace
                                etiquette training are also offered. Staff and residents share their skills through
                                skill-share
                                sessions, covering areas such as craft, music, or DIY. These programs are delivered through
                                group
                                sessions or one-on-one support, depending on the needs and dynamics of the group.

                                The staff develops safe, trusting relationships with the young people to model healthy
                                relationships
                                and support their family relationships where appropriate. Advice and guidance on
                                friendships,
                                romantic, and sexual relationships are provided to help identify healthy and safe
                                connections. Group
                                work on being a good housemate or looking out for a friend is conducted when the group
                                dynamics
                                allow or when needed. Referrals to external services are made for more in-depth work, with
                                regular
                                progress reviews through support plans. The service maintains a strong relationship with
                                local
                                sexual health services, offering drop-in support every other month and targeted sessions as
                                required.

                                Education and employment are valued for fostering independence, maturity, and opportunity.
                                The
                                service actively supports young people in accessing educational opportunities or seeking
                                employment,
                                regularly reviewing progress through support plans and meetings. Assistance is provided in
                                liaising
                                with providers, exploring career options, accessing vocational training programs,
                                identifying job
                                opportunities, completing applications, and preparing for interviews. Strong links are
                                maintained
                                with local providers of apprenticeships, education, training, and volunteering opportunities
                                to
                                ensure the young people have every chance to explore and develop their interests and
                                passions.
                                Advocacy is provided with training providers where necessary to maintain placements.

                                Holistic support is offered to maintain general health and happiness. The service helps
                                young people
                                become involved in their community through events and volunteering, supporting access to
                                culturally
                                specific or religious events and celebrating these in the home. Assistance is provided in
                                registering with a GP, managing medication, identifying mood triggers, and practicing
                                self-care. The
                                service helps identify relationships and behaviors that may trigger drug and alcohol misuse
                                or
                                offending behavior. Where mental health, self-harm, problematic substance use, offending
                                behavior,
                                or risky relationships go beyond low-level issues, referrals are made to external agencies
                                such as
                                probation, YOT, sexual health services, mental health services, community or religious
                                leaders, or
                                drug and alcohol services. The service works openly with these agencies to support the young
                                person
                                with any plans put in place to help ensure a positive outcome.
                            </div>
                        </div>

                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/aims.jpg" alt=""></figure>
                    </div>

                </div>
            </div>

            <div class="row clearfix">

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-target"></span></div>
                        <h3>Our Mission</h3>
                        <div class="separator"></div>
                        <div class="text">We aim to meet the needs of every young person by carefully planning and
                            implementing holistic approaches in line with the Children Act 1989 and subsequent regulations.
                            Our mission is to ensure that each individual receives tailored support, addressing their
                            physical, emotional, and social needs comprehensively.</div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-binoculars"></span></div>
                        <h3>Our Vision</h3>
                        <div class="separator"></div>
                        <div class="text">Our vision is to work collaboratively with young people, empowering them to
                            actively participate in decisions about their support plans. We strive to promote independence,
                            dignity, and respect for all individuals, fostering a nurturing environment where every voice is
                            heard and valued. </div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-envelope"></span></div>
                        <h3>Our Message</h3>
                        <div class="separator"></div>
                        <div class="text">At our core, we believe in the inherent worth and potential of every young
                            person. Our message is one of inclusivity, compassion, and commitment to providing high-quality
                            support through trained and compassionate staff. We are dedicated to helping young people
                            overcome challenges and build brighter futures, utilizing tailored strategies and community
                            resources to support their journey towards independence and well-being. </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
