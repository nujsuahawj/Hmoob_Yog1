<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo $page_title;; ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo $page_title; ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="category-course-list-area">
    <div class="container">
        <div class="row">
            <div class="col" style="padding: 35px;">
                <?php echo get_frontend_settings('about_us'); ?>
            </div>
        </div>
    </div>
    <!-- hauv qab no yog set location nawb -->
    <div><p id="map"><iframe id="taplocation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10649.488074162105!2d102.62858835894338!3d18.036829717871893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31245d38b6cb9d2b%3A0xd933c8032521d049!2z4Lqh4Lqw4Lqr4Lqy4Lqn4Lq04LqX4Lqw4LqN4Lqy4LuE4Lql4LuB4Lqr4LuI4LqH4LqK4Lqy4LqU!5e0!3m2!1sth!2sla!4v1625194827636!5m2!1sth!2sla" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p></div>
    <!-- tag set location lawm -->
    <style>
        #map{
                    text-align: center;
                    border: 0px;
            }
        @media only screen and (max-width:768px){
            #taplocation{
                    text-align: center;
                    border: 0px;
                    font-size: 10px;
                    width: 100%;
                    height: 200px;
            }
        }
    </style>
</section>
