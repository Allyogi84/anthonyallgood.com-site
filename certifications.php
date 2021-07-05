<?php 
/*
Template Name: Certifications Template 
*/
 get_header(); ?>
	
        <?php  if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd">
            <div class="swiper-container slider-disabled slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <!-- 
                            Custom Image
                            <img src="assets/images/bg-1.jpg" class="image-fit banner">
                        -->
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"><?php the_title(); ?></h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Single -->
        <section id="intro" class="single">
            <div class="container">
                <div class="row">
                    <main class="col-12  p-0">
                        <div class="row intro">
                            <div class="col-12 align-self-center">
                                <h2 class="featured">My Education</h2>
                                <p>With technology and programs always evolving It is very important to consistently learn new things. Below are some highlights of my education.</p>
                                <ul>
    <li>Master of Business Adminstration - Project Management- Strayer University - 2017</li>
    <li>Bachelor of Science - Marketing - Ashworth University - 2012</li>
    <li>Certification - HTML &amp; Javascript - Microsoft Advanced Analytics - 2018</li>
    <li>Certification - Front End Web Development - Udemy Academy - 2018</li>
    <li>Certification - Advanced Web Development - Udemy Academy - 2020</li>
    <li>Certification - Marketing Analytics - UC Berkeley - 2016</li>
    <li>Certification - Robotic Technology - Queensland University of Technology - 2016</li>
    <li>Certification - Data Wise - Harvard University - 2016</li>
    <li>Certification - Applied Machine Learning - Microsoft Advanced Analytics - 2016</li>
    <li>Certification - Quantum Algorithms For Cybersecurity, Chemistry &amp; Optimization - MIT - 2019</li>
    <li>Certification - Data Science and Big Data Analytics - MIT - 2019</li>
    <li>Certification - Technical Search Engine Optimization - SEMRush - 2020</li>
    <li>Certification - Social Media Marketing - SEMRush - 2020</li>
    <li>Certification - Statistical Thinking for Data Science &amp; Analytics - Columbia University - 2016</li>
    <li>Certification - Bing Ads Accredited Professional - Microsoft - 2020</li>
    <li>Certification - Google Ads Mobile Certification - Google - 2020</li>
    <li>Certification - Google Analytics Individual Qualification - Google - 2020</li>
    <li>Certification - Google Ads Display Advanced - Google - 2020</li>
</ul>
                                
                            </div>
                        </div>        
                    </main>

            </div>
        </section>



            


        <?php endwhile; ?>
        <?php endif; ?> 				
							
<?php get_footer(); ?>		