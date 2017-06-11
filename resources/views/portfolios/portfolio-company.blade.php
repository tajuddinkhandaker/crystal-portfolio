@extends('layouts.app-portfolio-viewer')
@section('title', 'Portfolio')

@section('container')
    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-pencil"></i>
                        <h2>UX Design</h2>
                        <p>We design front end user experiances for more human like behaviours in feedback from applications.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i class="icon-gears"></i>
                        <h2>Development</h2>
                        <p>We follow development process of a system/ application which takes less time to create dynamic systems with scalable features.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i class="icon-tools-2"></i>
                        <h2>API</h2>
                        <p>We provide REST APIs for developers to build their own systems like the system built by ASDTechLtd.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-chat"></i>
                        <h2>Consultancy</h2>
                        <p>We provide consultancy for IT solutions to business owners and also developers following new technologies.</p>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <section class="about_us_area" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2>About Us</h2>
                        <img src="/images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4  wow fadeInLeft animated">
                    <div class="single_progress_bar">
                        <h2>DESIGN - 90%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>DEVELOPMENT - 95%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                            <span class="sr-only">95% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>MARKETING - 75%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>CONSULTANCY - 80%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>API - 10%</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                            <span class="sr-only">10% Complete</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">
                        We have started our journey from 2016. As a new born company our co-founders has outstanding skills and experiences    
                        for creating cutting edge technology implementation and building new furture for the people. We have developers who
                        are working both on site and remotely for the company. We value our people and make a fair business who wants to make
                        some difference to accept new changes and challenges.
                    </p>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">
                        This company has 3 co-founders who work very hard to keep the company values perfectly and visions to achieve.
                        We already have many requests to develop small to big systems where we make simplicity for more human like behaviours
                        from the systems.
                    </p>
                </div>
            </div>
        </div>
    </section>    

    <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
        <div class="container">
            <div class="icon">
                <i class="icon-quote"></i>
            </div>
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>They builds simple design outside and put good heart that beats inside.</p>
                    <h4>-Md. zulfiker haider biplob (Aarombor.com)</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>I did't ask for some features ...<br/>Those I found them as hidden treasures!</p>
                    <h4>-Faisal Shuvro (PayBillsBD)</h4>
                </div>
            </div>            
        </div>
    </section>


    <div class="fun_facts">
        <section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
            <div class="section_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft animated">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-toolbox"></i>
                                        <h3>6</h3>
                                        <p>Projects Done</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-clock"></i>
                                        <h3>1100+</h3>
                                        <p>Hours Worked</p>
                                    </div>                            
                                </div>
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-trophy"></i>
                                        <h3>2</h3>
                                        <p>Awards Won</p>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
                            <div class="imac">
                                <img src="/images/imac.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </section>    
    </div>
    <section class="work_area" id="WORK">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title  wow fadeInUp animated">
                        <h1>Latest Works</h1>
                        <img src="/images/shape.png" alt="">
                        <p>
                        Our most popular product is the MarketPlex - an e-commerce application that will make an owner of online super shopping complex.
                        Some of our products are business eco systems. Some web applications and REST API services are developed using Laravel framework,
                        Blade templating and Google Polymers. Laravel and Blade templating together creates dynamic web applications which are generally
                        user based systems, but if its cooked with Google Polymer then its become awesome and powerful. We have successfully created that
                        recipes and blending of technologies to our future works. Let's see how the future is designed!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/w1.jpg" alt="">
                        <div class="image_overlay">
                            <a href="http://su.ait.ac.th/" target="_blank">View Full Project</a>
                            <h2>Student Union Portfolio of AIT</h2>
                            <h4>with Laravel, Blade and Google Polymer</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/w2.jpg" alt="">
                        <div class="image_overlay">
                            <a href="http://www.aarombor.com" target="_blank">View Full Project</a>
                            <h2>Market Plex</h2>
                            <h4>with Laravel framework and Blade</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/w3.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>Film Stripes <br/> Coming soon ...</h2>
                            <h4>with Laravel and Google Polymer</h4>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row pad_top">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/w4.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>Crystal Portfolio <br/> Coming soon ...</h2>
                            <h4>with Laravel and Google Polymer</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="/images/w5.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>Chord Master <br/> Coming soon ...</h2>
                            <h4>with Laravel and Google Polymer</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image last_padding">
                        <img src="/images/w6.jpg" alt="">
                        <div class="image_overlay">
                            <a href="http://paybills.asdtechltd.com" target="_blank">View Full Project</a>
                            <h2>PayBills BD</h2>
                            <h4>with Laravel and Google Polymer</h4>
                        </div>                        
                    </div>
                </div>
            </div>           
        </div>
    </section>
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated">
                    <div class="left">
                        <h2>LOOKING FOR EXCLUSIVE IT CONSULTANCY?</h2>
                        <p>You can join our dev team forums or for saving valuable time to meet you can contact or drop your mail to our mailbox for consultancy. </p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                    <div class="baton">
                        <a href="#CONTACT">
                            <button type="button" class="btn btn-primary cs-btn">Let's Talk</button>
                        </a>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>get in touch</h1>
                        <img src="/images/shape.png" alt="">
                        <p>
                            Future web solutions of business are designed here culturing new technologies.
                            You can share your ideas or problems that you want overcome and need IT solutions you can keep us to your contact list.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @include('includes.flash')
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Us</h2>
                        <p>+88 01912 09 40 78</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Us</h2>
                        <p>asdtechltd@gmail.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Address</h2>
                        <p>20/1, East Bashaboo, Dhaka - 1214, Bangladesh</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="{{ route('public::api.v1.contacts.store') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" name="body" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="submit" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection