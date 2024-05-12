@extends('layout.index')

@section('content')
    <style>
        .numbered-list {
            counter-reset: list-counter;
        }

        .numbered-list p {
            counter-increment: list-counter;
        }

        .numbered-list p:before {
            content: counter(list-counter) ". ";
        }

        .roman-numerals {
            counter-reset: section;
        }

        .roman-numerals p {
            counter-increment: section;
        }

        .roman-numerals p::before {
            content: counter(section, upper-roman) ". ";
        }
    </style>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);">
        <div class="auto-container">
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ asset('home') }}">Home</a></li>
                    <li class="active">Our Service</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <section class="about-us-section">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                <h1>Our Services</h1>

                <div class="separator"></div>
                {{-- <div class="desc-text">
                    <b>Black Roses Support strives to ensure all units provide facilities to promote a
                        homely environment for the Young People, setting a platform for social
                        engagement and productive stimulation.
                    </b>
                </div> --}}
                <div>
                    <p class="desc-text">
                        Our organization is dedicated to providing comprehensive and transparent support for young
                        people between the ages of 16 and 18. We place a strong emphasis on maintaining clear and
                        open communication with local authorities to ensure a mutual understanding of the support
                        services we offer.

                        The young people in our care can expect a wide array of support, both from our on-site staff
                        and through partnerships with external agencies. Our approach is holistic, addressing
                        practical needs as well as emotional well-being. Our committed staff members work closely
                        with each individual, developing personalized care plans that encompass areas such as
                        education, employment, health, and personal goals.

                        Each young person is assigned a dedicated key worker who provides 6-8 hours of direct,
                        one-on-one support per week. This support can be delivered through planned sessions or on an
                        ad hoc basis, depending on the individual's needs. Key workers assist with tasks such as
                        registering for healthcare services, accessing benefits, exploring leisure activities,
                        budgeting, developing life skills, and connecting with specialized external support for
                        mental health or substance abuse issues. They also offer emotional support, providing a safe
                        space for young people to discuss family, relationship, or friendship concerns, and help
                        them navigate their educational or professional aspirations.

                        In addition to individual support, we organize weekly group activities, such as cooking
                        nights or skill-sharing sessions, which are tailored to the interests and needs of the young
                        people in our care. These activities foster a sense of community, helping residents feel
                        valued and settled within the home.

                        Our staff is also responsible for managing any incidents that may occur within the home,
                        such as property damage, antisocial behavior, or interpersonal conflicts, in accordance with
                        established policies and procedures.

                        To complement our on-site support, we actively collaborate with external agencies, including
                        community organizations, educational institutions, and healthcare providers. These
                        partnerships allow us to offer specialized services, such as counseling, vocational
                        training, educational assistance, and healthcare resources, further enhancing the overall
                        well-being of our young people.

                        We strongly believe in the importance of a supportive and nurturing environment. Our staff
                        members prioritize building positive relationships with residents, encouraging open
                        communication, trust, and mutual respect. By promoting daily engagement with regular staff
                        members, we aim to create a safe and inclusive space where young people feel comfortable
                        seeking guidance and forming meaningful connections with their peers and caregivers.

                        Transparency and collaboration with local authorities and other stakeholders are at the core
                        of our organization. By clearly outlining our support arrangements and staff involvement, we
                        ensure that all parties have a thorough understanding of the services we provide. This
                        clarity facilitates effective partnerships and enables local authorities to make
                        well-informed decisions regarding the placement and ongoing support of the young people in
                        our care.
                    </p>
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <p class="strong-text" style="text-align: center;">Service Facilities.</p>
                                <div class="desc-text">
                                    Our supported accommodation is housed in a spacious, secure, and well-maintained 6, 5,
                                    4, and 3-bedroom, setting. Each young person is provided with a private double room and
                                    desk space, ensuring a comfortable and personal living environment. Bathrooms are shared
                                    between residents, fostering a sense of responsibility and cooperation. The setting also
                                    features communal lounge, kitchen, study, and gaming facilities, as well as a beautiful
                                    garden and communal decking area for recreation and relaxation.

                                    Situated in a pleasant, family-friendly area of High Wycombe and Slough, our location
                                    offers a quiet and secure environment. The setting is conveniently located within a
                                    5-minute walk from essential amenities such as public transport, education facilities,
                                    community facilities, healthcare, and other relevant local services. The nearby park,
                                    complete with a skate park, biking facilities, and regular community events, along with
                                    the proximity to the local sports center, provides our young people with ample
                                    opportunities for recreation and leisure activities.

                                    Each resident's private bedroom is well-furnished, comfortable, and equipped with
                                    telephone and internet connectivity. We provide standard bedding, towels, kitchen
                                    equipment, and a welcome pack containing toiletries and essential clothing. Lockable
                                    cabinets are available in each bedroom for securing personal items and valuables. While
                                    bathrooms are shared between residents, each individual has their own designated
                                    bathroom cupboard for personal supplies. In the fully equipped kitchen, every resident
                                    has a personal cupboard for their own food, and we maintain a communal pantry stocked
                                    with everyday basics for shared meals and snacks. The large dining table serves as a
                                    gathering point for residents and staff to enjoy mealtimes together if they desire.

                                    The spacious lounge area is furnished with comfortable sofas, beanbags, a TV, and a
                                    gaming system, providing a relaxing environment for leisure time. We also maintain a
                                    well-stocked cupboard with a variety of board games and craft supplies, which residents
                                    and staff enjoy using together.

                                    To ensure staff safety in emergencies, our office space is equipped with a heavy-duty,
                                    lockable door. We prioritize the well-being of our residents and staff by ensuring that
                                    all aspects of our supported accommodation meet the necessary insurance, health, safety,
                                    and fire regulations. Regular premises reviews are conducted to maintain these
                                    standards. The use of CCTV in external and communal areas helps to maintain security and
                                    safeguarding. We are registered with the ICO and ensure that young people are informed
                                    of their data rights. An annual location assessment is carried out to verify the
                                    suitability, safety, and appropriateness of the premises.

                                    We provide each young person with a written agreement in an accessible format, outlining
                                    their rights and the terms and conditions of the supported accommodation. This agreement
                                    also includes information on how to raise concerns about the service, building, and
                                    maintenance.
                                </div>

                                <div class="numbered-list">
                                    <p style="padding-top: 25px">
                                        Black roses support units have a lounge where the young people have the
                                        use of a television and there is a varied selection of channels through
                                        Freeview. In Some placement there is Netflix available as well.
                                    </p>
                                    <p>
                                        The units have computers that have access to the Internet and the young
                                        people are encouraged to make use of this to assist with homework and their
                                        wider educational needs. Access to the Internet can be supervised and its
                                        use is monitored with internet security as part of a system of checks to
                                        ensure it is used appropriately.
                                    </p>
                                    <p>
                                        The Unit Manager and other staff members use the office. Due to issues of
                                        ensuring confidentiality young people do not have access to the office unless
                                        a member of staff is present.
                                    </p>
                                    <p>
                                        The kitchen has all the mod cons including cookers and fridge freezers in
                                        each Kitchen. There are table and chairs so the young people and staff may
                                        share mealtimes and engage in conversations.
                                    </p>
                                    <p>
                                        The Unit has plenty of storage facilities, which are used for household
                                        linen, toiletries and sports equipment, etc
                                    </p>
                                    <p>
                                        Current legislation states that smoking is prohibited in public places.
                                        Smoking is very much discouraged and the young people that do smoke are
                                        asked to smoke away from the premises.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/lounge.png" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>

        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                <h1>Range of Support</h1>

                <div class="separator"></div>
                <div class="desc-text">
                    <b>Black Roses Support aims to help young people develop their skills, on an individual
                        basis, that they may progress to greater independence, and further integrate
                        into the local community. The ways in which we support young people may include
                        providing advice, supervising and facilitating with:</b>
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                {{-- <p class="strong-text" style="text-align: center;">Service Facilities.</p> --}}

                                <div class="numbered-list">
                                    <p>
                                        Correspondence related to benefits and their accommodation
                                    </p>
                                    <p>
                                        Budgeting, paying bills and saving
                                    </p>
                                    <p>
                                        Meal planning, shopping and cooking
                                    </p>
                                    <p>
                                        Domestic upkeep of their living space
                                    </p>
                                    <p>
                                        Maintaining the security and safety of the property
                                    </p>
                                    <p>
                                        Opportunities for employment and voluntary work
                                    </p>
                                    <p>
                                        Opportunities for education and leisure
                                    </p>
                                    <p>
                                        Registering with a GP and dentist of their choice, and maintaining links with
                                        appropriate healthcare services
                                    </p>
                                    <p>
                                        Responding to their changing support needs in liaison with other agencies
                                        involved in their support.
                                    </p>
                                    <p>
                                        Maintain/developing community links and relationships
                                    </p>
                                    <p>
                                        Where appropriate foster links with family members
                                    </p>
                                    <p>
                                        General support
                                    </p>
                                    <p>
                                        Transport to educational services where needed on initial visits
                                    </p>
                                    <p>
                                        Support with identifying best transport ways/links to visit families
                                    </p>
                                    <p>
                                        Accessing Laundry facilities
                                    </p>
                                    <p>
                                        Participating and accessing Recreation facilities
                                    </p>
                                    <p>
                                        Residents meetings
                                    </p>
                                    <p>
                                        Computer and Internet access to support learning
                                    </p>
                                    <p>
                                        Use of telephone – in private or with staff available for support
                                    </p>
                                </div>
                                <p style="margin-top: 20px"><b>Black Roses Support is not normally equipped to cope with
                                        areas
                                        such as
                                        severe mental health problems, severe challenging behaviour, nursing and
                                        medical care and personal hygiene care.</b>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/support.jpeg" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>

        <div class="auto-container">

            <h2 style="text-align: center;">
                <p>Governance and Quality Assurance</p>
            </h2>

            <!--Section Title-->
            <div class="sec-title centered">
                {{-- <h2>ABOUT US</h2> --}}
                <div class="separator"></div>
                <div class="desc-text">
                    <b>In order to deliver a high quality service, weekly audits are carried out by the
                        Manager and Operations team of the service. These audits include:</b>
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                {{-- <p class="strong-text" style="text-align: center;">Service Facilities.</p> --}}


                                <div class="numbered-list">
                                    <p>
                                        young person Files
                                    </p>
                                    <p>
                                        Health and Safety
                                    </p>
                                    <p>
                                        young person Meetings
                                    </p>
                                    <p>
                                        Team Meetings
                                    </p>
                                    <p>
                                        Staff supervision
                                    </p>
                                    <p>
                                        Staff training
                                    </p>
                                    <p>
                                        The Physical Environment
                                    </p>
                                    <p>
                                        Finance
                                    </p>
                                    <div>
                                        Where possible, we involve young people in the decision making process that affects
                                        the service we provide them. At each unit there are weekly meeting
                                        house where young people have an opportunity to make staff aware of their
                                        feelings, viewpoints and ideas. There is also a suggestion box where young
                                        people and staff can submit suggestions anonymously. Team meetings for the staff
                                        team take place on a weekly basis, and regular
                                        individual supervision sessions for each team member, giving staff the
                                        opportunity to voice their opinions and feedback to the Manager about the
                                        service being offered. Black Roses support will conduct annual appraisals for
                                        all staff and minimum quarterly feedbacks of young people using our services.
                                        Young people and those involved in their support are made aware of the
                                        service’s complaints policy, and are encouraged to offer feedback through
                                        individual reviews and family/significant others forums.
                                        All staff undertakes regular training which includes a minimum of:
                                    </div>
                                    <div class="roman-numerals" style="margin-top: 10px">
                                        <p>
                                            Safeguarding
                                        </p>
                                        <p>
                                            CSE
                                        </p>
                                        <p>
                                            CHANNEL
                                        </p>
                                        <p>
                                            FGM
                                        </p>
                                        <p>
                                            VET
                                        </p>
                                        <p>
                                            Alcohol Misuse
                                        </p>
                                        <p>
                                            Challenging Behaviour
                                        </p>
                                        <p>
                                            Cognitive Behavioural Therapy
                                        </p>
                                        <p>
                                            Communicating Effectively
                                        </p>
                                        <p>
                                            Confidentiality
                                        </p>
                                        <p>
                                            COSHH
                                        </p>
                                        <p>
                                            Diversity and Equality
                                        </p>
                                        <p>
                                            Drug Misuse
                                        </p>
                                        <p>
                                            First Aid Awareness
                                        </p>
                                        <p>
                                            Fire Training
                                        </p>
                                        <p>
                                            Food Hygiene
                                        </p>
                                        <p>
                                            Hand Hygiene
                                        </p>
                                        <p>
                                            Health & Safety
                                        </p>
                                        <p>
                                            Infection Control
                                        </p>
                                        <p>
                                            Mental Capacity
                                        </p>
                                        <p>
                                            Nutrition and Diet
                                        </p>
                                        <p>
                                            Post-Traumatic Stress Disorder
                                        </p>
                                        <p>
                                            Records Keeping
                                        </p>
                                        <p>
                                            Risk Assessment
                                        </p>
                                        <p>
                                            Self-Harm
                                        </p>
                                        <p>
                                            Stress Management
                                        </p>
                                        <p>
                                            Supervisions and Appraisals (Managers only)
                                        </p>
                                        <p>
                                            Safeguarding
                                        </p>
                                    </div>
                                </div>

                                <p class="strong-text" style="text-align: center; margin-top: 10px">External Inspections by
                                    Purchasers of the
                                    Service (Local Authorities)
                                </p>

                                <p>
                                    The service is subject to inspections and reviews by Local Authorities. Staff
                                    are to cooperate when such visits take place and appropriate information
                                    made available.
                                    Local Authorities may have access to their own young people files at any time.
                                </p>

                                <p class="strong-text" style="text-align: center; margin-top: 10px">External Inspections by
                                    Who are our young people?
                                </p>

                                <p>
                                    Black Roses Support is designed to support care leavers aged 16-25 in their
                                    transition to adulthood/ independent living.
                                    The service is provided for young people leaving local authorities’ care aged
                                    16-25 and unaccompanied asylum seekers aged 16-17
                                </p>
                            </div>
                            <p><b>Our service is available to Local Authorities from all over the UK.</b></p>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/governance.jpg" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
