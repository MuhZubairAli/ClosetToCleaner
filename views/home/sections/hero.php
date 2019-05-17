<div id="video-modal">
    <div class="contents"></div>
</div>
<!--==========================
Hero Section
============================-->
<section id="hero">
    <div class="hero-container">
        <div class="container no-space-md wow fadeInDown">
            <div class="col-md-12">
                <ul class="nav-menu top-sm">
                    <li><a href="">Login</a></li>
                    <li><a href="">Product Support</a></li>
                    <li><a href="">Company</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">English</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 top-menu-container-lg margin-b-40 wow fadeInDown">
                <table border="0" width="100%">
                    <tr>
                        <td>

                            <img src="<?php $this->url('logo-only.png','img',true) ?>" alt="">
                        </td>
                        <td>
                            <ul class="nav-menu top-lg">
                                <li><a href="#hero">Home</a></li>
                                <li><a href="">Service & Pricing</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Apartment Communities</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                            </ul>

                        </td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>

            <div class="wow fadeInDown col-md-6 margin-b-40">
                <h1 class="heading">You Have Better Things to Do</h1>
                <h4 class="sub-heading">Go enjoy your time while we conveniently cancel Laundry day</h4>
                <h4 class="play video-modal"><i class="fa fa-play-circle"></i> Watch the video</h4>
            </div>
            <div class="wow fadeInLeft col-md-6 hero-img margin-b-40">
                <img src="<?php $this->url('cleaning-bag.PNG', 'img', true) ?>" alt="">
            </div>
        </div>
    </div>
</section>
<?php
$cjs = @"
$('h4.play.video-modal').on('click',function(){
    $('#video-modal').iziModal({
        'title': 'Introduction of <em>Closet to Cleaners</em>',
        'overlayClose' : true,
        'closeButton' :true,
        'closeOnEscape' :true,
        'headerColor' : '#212060',
        'fullscreen': true,
        'onOpening': function(modal){
            modal.startLoading();
            $.get('".$this->url('ajax/video_intro')."', function(data) {
                $('#video-modal .contents').html(data);
                modal.stopLoading();
            });
        },
        'onClosing' : function(modal){
            $('#video-modal .contents').html('');
        }
    }).iziModal('open');
});
";
$this->plugin->addCustomJS($cjs);
?>