<?php
require_once("includes/header.php");
?>

        <script>
        $(function() {
            var _SlideshowTransitions = [
            //Fade in R
            {$Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            ];

            var options = {
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                },
            };

            var jssor_sliderb = new $JssorSlider$("sliderb_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_sliderb.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_sliderb.$ScaleWidth(Math.min(parentWidth, 1200));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }

        })
        </script>

        <h2 class="sub_title" style="margin: 100px 0 50px;">Testimonials</h2>
        
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. -->
        <div id="slider_wrapper" style="margin: 0 auto 0; width: 1200px; position: relative;">
            <div id="sliderb_container" style="position: relative; width: 1200px; height: 300px; overflow: hidden;">

                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                        top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div>

                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 450px; overflow: hidden;">
                    <?php
                    $testimonials[] = array("quote"=>"Of course I appreciate the Academy for enabling me to do what I love (teach yoga). But what I took away from my time in training was much more personal than just a certificate. I kept myself in a bubble for years, afraid to try new things because I was petrified of failure and didn't trust myself to succeed. Teacher Training was a big leap of faith for me--one of the biggest I had ever taken--and when I came out on the other side with a dream accomplished, it gave me a self assurance I had never had.", "source"=>"Ginni Beam");
                    $testimonials[] = array("quote"=>"I joined Sunstone's teacher training to deepen my knowledge and to share my love of yoga with others. What I found was a supportive community of like- minded individuals-- a family. What I gained was a deep understanding of myself. My mind was opened and my horizons expanded. It is truly an experience from which I will continue to discover the multitude of rewards for a lifetime.", "source"=>"Ashley Lewelling");
                    $testimonials[] = array("quote"=>"The teacher training program at Sunstone Yoga provided me with a well-rounded, diverse and flexible learning experience into the world of yoga. For me, the training program quickly evolved from a simple certification process into a deeper understanding of myself, my body, my goals, and my lifestyle. Surrounded by a supportive staff, in a challenging yet encouraging environment, I found a beautiful learning experience that prepared me for the challenges of teaching as well as challenges in other aspects of my life. I found the experience invaluable and I would recommend Sunstone Yoga's teacher training program to anyone interested in deepening their practice and finding a new life path in a nurturing environment.", "source"=>"Jenny Childress");
                    $testimonials[] = array("quote"=>"When I decided to do the teacher training intensive, I wanted to get deeper into my practice; I never expected the life-changing experience that I ended up getting. Besides growing stronger and more knowledgeable in my own physical practice, I learned a wide range of cutting-edge information – from exercise physiology to ancient philosophy and techniques. The friends I made along the way will be my friends for life. And when I say, \"life-changing,\" I'm not exaggerating. Two weeks after training was over, I made the permanent move from LA to Dallas and completely changed my career and goals in life.", "source"=>"Alex Newell");
                    $testimonials[] = array("quote"=>"I had one intention when starting the teacher training program: to establish a mind-body connection (basically to go deeper within my own yoga practice).  Looking back now, I have achieved this and so, so much more!  The best thing that I have EVER done was to take this step and open myself up to a new realm of possibilities and self-expansion.  My body is changing.  My thought process is evolving.  My heart is opening.  I simply cannot imagine my life now without this program!", "source"=>"Paula Dzuck");
                    $testimonials[] = array("quote"=>"I reached a major transition in my life back in 2011. I was working the corporate job with high anxiety and an irregular fitness routine. I needed a change, a shift... I was able to find a home with Sunstone. A community where I felt welcomed and wanted. I was able to gain control of my life and unwanted stress. They even helped me find a new career and a whole new start through their teacher training program. I now work with an awesome Sunstone Team and I couldn't be happier.", "source"=>"Alysia Kypuros");
                    shuffle($testimonials);
                    foreach($testimonials as $t) {
                        echo '<div><div style="width: 75%; margin: 0 auto;"><p class="testimonial">'.$t['quote'].'</p><p class="testimonial_source">-'.$t['source'].'</p></div></div>';
                    }
                    ?>
                </div>
                
                <!-- Arrow Navigator Skin Begin -->
                <style>
                    /* jssor slider arrow navigator skin 05 css */
                    /*
                    .jssora05l              (normal)
                    .jssora05r              (normal)
                    .jssora05l:hover        (normal mouseover)
                    .jssora05r:hover        (normal mouseover)
                    .jssora05ldn            (mousedown)
                    .jssora05rdn            (mousedown)
                    */
                    .jssora05l, .jssora05ldn
                    {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url('images/slider/arrow_left.png') no-repeat;
                        overflow:hidden;
                    }
                    .jssora05r, .jssora05rdn
                    {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url('images/slider/arrow_right.png') no-repeat;
                        overflow:hidden;
                    }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                </span>
                <!-- Arrow Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">jquery photo gallery</a>
                <!-- Trigger -->
            </div>
            <p class="center">Sunstone Academy alumni, we would love to share your story. Please email testimonials to <a href="mailto:feedback@sunstonefit.com">feedback@sunstonefit.com</a>.</p>
        </div>
        <!-- Jssor Slider End -->

<?php
require_once("includes/footer.php");
?>