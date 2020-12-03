<!DOCTYPE HTML>
<html>
<head>
    <title>Winner Restaurants by WINNING SYSTEMS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/assets/css/main.css" />
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
    <div class="logo"><a href="/home">Winner Restaurants <span>by WINNING SYSTEMS</span></a></div>
    <a href="#menu" class="toggle"><span>Menu</span></a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="/home">Home</a></li>
        <!--<li><a href="#">Generic</a></li>
        <li><a href="#">Elements</a></li>-->
    </ul>
</nav>

<!-- Banner -->
<!--
    To use a video as your background, set data-video to the name of your video without
    its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
    formats to work correctly.
-->


@yield('trans')


<!-- Footer -->
<footer id="footer" class="wrapper">
    <div class="inner">
        <section>
            <div class="box">
                <div class="content">
                    <h2 class="align-center">Get in Touch</h2>
                    <hr />
                    <form action="#" method="post">
                        <div class="field half first">
                            <label for="name">Name</label>
                            <input name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="field">
                            <label for="dept">Department</label>
                            <div class="select-wrapper">
                                <select name="dept" id="dept">
                                    <option value="">- Category -</option>
                                    <option value="1">Manufacturing</option>
                                    <option value="1">Shipping</option>
                                    <option value="1">Administration</option>
                                    <option value="1">Human Resources</option>
                                </select>
                            </div>
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <ul class="actions align-center">
                            <li><input value="Send Message" class="button special" type="submit"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
        <div class="copyright">
            &copy;Designed by: <a href="http://winning-systems.com">WINNING SYSTEMS</a>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/assets/js/jquery.min.js"></script>
<script src="assets/assets/js/jquery.scrolly.min.js"></script>
<script src="assets/assets/js/jquery.scrollex.min.js"></script>
<script src="assets/assets/js/skel.min.js"></script>
<script src="assets/assets/js/util.js"></script>
<script src="assets/assets/js/main.js"></script>

</body>
</html>
