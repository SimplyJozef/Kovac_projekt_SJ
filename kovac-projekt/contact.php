<?php include('partials/head.php') ?>





    <div class="page-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="header-text">
                        <h2><em>Contact</em> Us</h2>
                        <p><?php include('partials/page_quotes.php') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page-map">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-12">
                
                	<!-- You can easily copy and paste your own map point from Google Maps -> Share -> Embed a map -->
                
                    <div id="map">
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2508.587823326947!2d18.091441!3d48.308376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3ee43b2f6763%3A0x75a567f979f5bed3!2sConstantine%20the%20Philosopher%20University!5e1!3m2!1sen!2ssk!4v1684165768167!5m2!1sen!2ssk" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-page">
        <div class="container">
            <div class="col-lg-12">
                <div class="contact-page-form">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                        <?php include('partials/contact_forum.php') ?>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-info">
                                <ul>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg></div>
                                        <h6>Mailing Address</h6>
                                        <span>Sunny Isles Beach, Florida 33160, USA</span>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="44" viewBox="0 0 24 24" width="44"><g><rect fill="none" height="24" width="24"/><path d="M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h9v-2H4V8l8,5l8-5v5h2V6C22,4.9,21.1,4,20,4z M12,11L4,6h16L12,11z M19,15l4,4 l-4,4v-3h-4v-2h4V15z"/></g></svg></div>
                                        <h6>Email Address</h6>
                                        <span>contact@company.com</span>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="48" viewBox="0 0 24 24" width="48"><g><rect fill="none" height="24" width="24"></rect></g><g><g><path class="icon" d="M21,12.22C21,6.73,16.74,3,12,3c-4.69,0-9,3.65-9,9.28C2.4,12.62,2,13.26,2,14v2c0,1.1,0.9,2,2,2h1v-6.1 c0-3.87,3.13-7,7-7s7,3.13,7,7V19h-8v2h8c1.1,0,2-0.9,2-2v-1.22c0.59-0.31,1-0.92,1-1.64v-2.3C22,13.14,21.59,12.53,21,12.22z"></path><circle class="icon" cx="9" cy="13" r="1"></circle><circle class="icon" cx="15" cy="13" r="1"></circle><path class="icon" d="M18,11.03C17.52,8.18,15.04,6,12.05,6c-3.03,0-6.29,2.51-6.03,6.45c2.47-1.01,4.33-3.21,4.86-5.89 C12.19,9.19,14.88,11,18,11.03z"></path></g></g></svg></div>
                                        <h6>Chat With Us</h6>
                                        <span>chat@company.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Hire us to Work on a Project?</h2>
                </div>
                <div class="col-lg-4">
                    <div class="white-button">
                        <a href="#">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('partials/footer.php')?>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->



  <script>
    setTimeout(function(){
        $('.loader').fadeToggle();
    }, 2000);
	$("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
		
    </script>

</body>
</html>