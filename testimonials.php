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
                    $TransitionsOrder: 0,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
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

        <h2 class="sub_title" style="margin: 100px 0 50px;">Testimonials &amp; Awards</h2>
        
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
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 300px; overflow: hidden;">
                    <?php
                    $testimonials[] = array("quote"=>"No matter how much stress I am under, I always leave my class feeling better than when I went in.", "source"=>"Cindy McMillin");
                    $testimonials[] = array("quote"=>"I really appreciate the service that you provide, along with the atmosphere you have created. It has been a tremendous experience for me, both physically and mentally. I've lost about 20 pounds since I started last December. My doctor initially did not recommend this activity, and said that I would be seeing a lot more of him if I did yoga. After about 6 months he told me my posture was better, the sway in my back had diminished and that my overall health had improved. He recommends it now.", "source"=>"Charles Opheim");
                    $testimonials[] = array("quote"=>"Weight loss, cellulite loss, lower stress, improved mental perspective and a healthier lifestyle are all benefits I've gained coming to Sunstone. At over 110 classes now, I can truly say that I definitely feel it in my practice when I've had a hard day at work, a confrontation with a special someone, or just an extended period of low quality sleep. This form of working out is absolutely the best program to keep me in tune with my body, and my mind and how my whole system is affected by them. Thank you! Thank you!", "source"=>"Wendi McGowan");
                    $testimonials[] = array("quote"=>"I have been taking yoga for about six months and have completed over 75 classes. I try to come at least 3 times a week. Maria, one of your instructors, commented on how she could see the change in my body. My upper body and legs are leaner and I am getting back my waistline and muscle tone. My goal is to lose all my excess body fat and to eliminate those stress toxins that have caused middle age spreading. My friends have also commented on my overall appearance, telling me that I look rested and I am walking taller. Maybe I have grown an inch from all that stretching!", "source"=>"Phyllis Whigham");
                    $testimonials[] = array("quote"=>"Yoga has changed my life more than I ever realized it could. I thought losing weight would be the most satisfying and rewarding part of it, but instead, it is how I have grown as a person. I have learned to accept things for what they are and not try to change them. I’ve learned what my body is capable of doing each day and honoring that. I have also learned to accept my body for its uniqueness. Most important is learning to breathe. I know it sounds corny, but learning the pranayama breathing has helped me maintain my composure and not get caught up in the daily drama. Thank you for opening the studio in Plano and thank you for making such a positive change in my life.", "source"=>"Theresa Gillingham");
                    $testimonials[] = array("quote"=>"I started yoga at the suggestion of my back surgeon. I was in such pain in my lower back that I could not straighten up. My doctor advised me that an operation would have a 50-50 chance of correcting the problem. I heard about the [intro offer] and decided to give it a try. I walked into the first class bent over and came out with no pain and walking straight up. I have continued with my classes ever since, trying to make at least three classes a week. Since starting yoga, I have had no back problems at all. My life has improved and so have my golf scores.", "source"=>"Bill Deloney");
                    $testimonials[] = array("quote"=>"Since I started practicing at Sunstone, I’ve noticed a shift in body composition, a more healthy approach to eating, increased flexibility, increased focus and a sense of serenity. I notice that all of these areas improve when I am able to attend classes on a more regular basis, such as 3 - 5 times a week. I am a firm believer in the benefits of practicing yoga in the hot room.", "source"=>"Michael Welch");
                    $testimonials[] = array("quote"=>"Not only has yoga shaped my appearance, it has been instrumental in shaping my heart and soul. In the year and a half that I have been practicing, I have changed for the better, grown spiritually and loved more than I ever thought possible. If you allow yourself to open up to the endless teachings of yoga by Sunstone, then you are in for a joyous ride. Thank you!", "source"=>"Rachel Davidson");
                    $testimonials[] = array("quote"=>"I did yoga in the heat for about 6 months before Sunstone and about 160 classes at Sunstone as of this writing. The benefits of increased flexibility are somewhat obvious. However, improved deep sleep, weight loss, and less cravings of bad food, as well as my worship of water intake, all sort of happened on their own. I feel relaxed all of the time. My original goals of fixing my bad shoulder, avoiding carpel tunnel surgery, and healing my painful right knee have all been solved. It takes a commitment but the reward is well worth it. Long-term goals include some more weight loss and mastering the practice. Your instructors will help me to get there.", "source"=>"Mark McDonnell");
                    $testimonials[] = array("quote"=>"I started doing yoga to ease pain I was having playing soccer. I took one month off of soccer and concentrated on Yoga. Injuries went away within weeks, muscles felt better, breathing improved. When I went back out to play I had more than a pain free game, I had much more stamina and much better body control. After the game there was no lingering discomfort. I decided to take it out three months to see any difference in skiing, an amazing difference from last season. The quality of the skiing was incredible, more control, better balance making for much better turns, stops and when safe, speed. What a complete fitness package is Yoga. Thanks Sunstone.", "source"=>"John Worden");
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
            <p class="center">Sunstone students, we would love to share your story. Please email testimonials to <a href="mailto:feedback@sunstonefit.com">feedback@sunstonefit.com</a>.</p>
        </div>
        <!-- Jssor Slider End -->

<?php
require_once("includes/footer.php");
?>