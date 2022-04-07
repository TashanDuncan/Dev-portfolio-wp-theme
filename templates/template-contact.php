<?php

/*
Template Name: Contact Page
*/
?>
<?php get_header(); 

$email = get_field('email_address');
$phone_url = get_field('phone_call_booking_url');
$video_url = get_field('video_call_booking_url');
?>

<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Contact</h2>
        <div class="intro">
            <p>Interested in hiring me for your project or just want to say hi? <?php if ($phone_url || $video_url) : ?>You can book a call with me via the buttons below or<?php endif; ?> Send me an email to <a href="mailto:<?php echo $email?>"><?php echo $email?></a></p>
            <p>Want to get connected? Follow me on the social channels below.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item mb-3"><a href="https://twitter.com/codingmugen" target="_blank" rel="noopener"><i class="fab fa-twitter fa-fw fa-lg"></i></a></li>
                <li class="list-inline-item mb-3"><a href="https://www.linkedin.com/in/tashanduncan/" target="_blank" rel="noopener"><i class="fab fa-linkedin-in fa-fw fa-lg"></i></a></li>
                <li class="list-inline-item mb-3"><a href="https://github.com/TashanDuncan" target="_blank" rel="noopener"><i class="fab fa-github-alt fa-fw fa-lg"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/codingmugen/" target="_blank" rel="noopener"><i class="fab fa-instagram fa-fw fa-lg"></i></a></li>
                <li class="list-inline-item mb-3"><a href="https://stackoverflow.com/users/14390598/tay-duncan" target="_blank" rel="noopener"><i class="fab fa-stack-overflow fa-fw fa-lg"></i></a></li>
            </ul>
            <!--//social-list-->

        </div>
        <!--//container-->
</section>
<?php if ($phone_url || $video_url) : ?>
<section class="contact-section px-3 py-5 p-md-5">
    <div class="container">
        <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="">
            <h3 class="text-center mb-3">Get In Touch</h3>
            <div class="container d-flex justify-content-center">
            <?php if ($phone_url) : ?>
                <div class="mx-2"><a href="<?php echo $phone_url?>" class="btn btn-primary"><i class="fa fa-phone mr-2"></i>Book a Phone Call</a></div>
            <?php endif; ?>
            <?php if ($video_url) : ?>
                <div class="mx-2"><a href="<?php echo $video_url?>" class="btn btn-primary"><i class="fa fa-video mr-2"></i>Book a Video Call</a></div>
            <?php endif; ?>
            </div>
         
        </form>
    </div>
    <!--//container-->
</section>
<?php endif; ?>




<?php get_footer(); ?>