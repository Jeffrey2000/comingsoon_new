<?php get_header();?>
<body>
    <div id="container">
        <section class="main_section">
            <!-- The video -->
            <div class="video_wrapper">
                <video id="myVideo" autoplay loop muted>
                    <source src="./assets/images/bg.mp4" type="video/mp4">
                </video>
            </div>

            <div class="landing_wrapper">
                <div class="top_section">
                    <div class="logo">
                        <img src="assets/icons/b.svg" />
                    </div>

                    <div class="landing_message">
                        <span> COMING SOON</span>
                    </div>
                </div>


                <div class="stay_updated_wrapper">
                    <div class="div_updated_outer">
                        <div class="first_section">
                            <span>STAY UPDATED</span>
                        </div>
                        <div class="second_section">
                            <form action="./index.php" method="POST">
                                <input name="name" placeholder="Your Name" type="text" />
                                <input name="email" placeholder="johndoe@gmail.com" type="email" />
                                <input  name="submit" class="submit_button" type="submit" value="JOIN NOW" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</body> 

<?php get_footer();?>