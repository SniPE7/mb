<?php
    include_once 'mb_config.php';
    include_once 'menu.php';
    include_once 'mb_path.php';
?>
    <div id="working_space">
        <div id="choise">
            <div id="main">
                <div class="slider">
                    <div class="slide-list">
                        <div class="slide-wrap">

                                <?php
                                for($i = 2 ; $i < $length; $i++) {
                                    echo "<div class='slide-item'>";
                                    echo "<img width='257' height='477' src='themes/$themesNames[$i]/preview/preview.jpg' />";
                                    echo "<button value='$themesNames[$i]' onclick='chooseTheme(this.value);'>Choose $themesNames[$i]</button>";
                                    echo "</div>";
                                }
                                ?>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="navy prev-slide"></div>
                    <div class="navy next-slide"></div>
                    <div class="auto play"></div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function chooseTheme(theme) {

            alert(theme);
        }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/slider.js"></script>
    </body>

    </html>
<?php

