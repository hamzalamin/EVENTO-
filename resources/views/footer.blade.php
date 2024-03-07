@include('Base')
<div class="footer">
    <div class="container">
        <div class="footer-left agileits-w3layouts">
            <p>&copy; 2024 Event Planner. All Rights Reserved | Design by Hamza Lamin FHL014'</p>
        </div> 
        <div class="footer-right">
            <ul>
                <li><a href="#" class="f1"></a></li>
                <li><a href="#" class="f2"></a></li>
                <li><a href="#" class="f3"></a></li>
                <li><a href="#" class="f4"></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="header-w3left">
            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>  +212 639621650</p>
        </div>
        <div class="header-w3right">
            <ul>
                <li><a href="mailto:sample@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@example.com</a></li>
                <li>|</li>
                <li><a class="scroll" href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer --> 
<script src="js/smoothscroll.min.js"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){		
                event.preventDefault();
        
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
</script>
<!-- //end-smooth-scrolling -->	
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */
        
        $().UItoTop({ easingType: 'easeOutQuart' });
        
    });
</script>
<script src="js/bootstrap.js"></script>
</body>
</html>