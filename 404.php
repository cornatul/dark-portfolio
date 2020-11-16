<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package blm_basic
 */

get_header(); ?>

<main class="site__main row">
	<div class="container">
        <div class="row">
            <div class="col-lg-12" style="padding-top:3vh">

                <h1 class="text-center lead">Page not found.</h1>
                <p class="lead text-center">We've recently made changes to our website and the page you are looking for might have been deleted or moved. Please <a href="<?php echo home_url(); ?>">visit our home page instead</a>.</p>
                <p class="lead text-center">Sorry for the inconvenience.</p>

                <div class="search">
                    <?php get_search_form(); ?>
                </div>

                <div style="margin-top: 2vh">
                    <svg version="1.1" viewBox="0 0 697.6 266.4" class="line-animated">
                        <path d="M123.689,254.399V188.54H11.95v-21.089L119.249,13.903h35.149
		v149.478h33.67v25.159h-33.67v65.859H123.689z M123.689,163.381V83.092c0-12.58,0.37-25.16,1.11-37.74h-1.11
		c-7.4,14.06-13.32,24.42-19.98,35.52L44.88,162.641v0.74H123.689z

		M289.443,258.47c-46.989,0-79.179-44.029-79.918-123.578
		c0-81.029,35.149-125.059,83.988-125.059c50.319,0,79.549,45.14,79.549,121.729c0,81.769-30.709,126.908-83.249,126.908H289.443z
		 M291.293,233.31c32.93,0,48.839-38.85,48.839-100.268c0-59.199-14.8-98.049-48.839-98.049c-29.6,0-48.84,37.74-48.84,98.049
		c-0.739,62.529,18.5,100.268,48.47,100.268H291.293z

		M503.297,254.399V188.54H391.559v-21.089L498.858,13.903h35.149
		v149.478h33.67v25.159h-33.67v65.859H503.297z M503.297,163.381V83.092c0-12.58,0.37-25.16,1.11-37.74h-1.11
		c-7.399,14.06-13.319,24.42-19.979,35.52l-58.829,81.769v0.74H503.297z

		M608.543,110.556c-0.417,3.774-0.846,7.548-1.276,11.321
		c-0.308,2.701-0.629,5.4-0.933,8.101c-0.854,7.583-1.699,15.167-2.553,22.75c-0.503,4.466-1.016,8.932-1.524,13.398
		c-0.807,7.098-1.612,14.196-2.418,21.294c-0.499,4.397-0.994,8.794-1.498,13.191c-0.852,7.443-1.715,14.884-2.564,22.328
		c-0.47,4.12-0.917,8.242-1.38,12.363c-0.677,6.025-1.357,12.05-2.042,18.075c-0.039,0.344-0.133,0.683-0.201,1.025
		c0.372-0.2,0.644-0.485,0.752-0.823c1.588-4.947,3.153-9.9,4.725-14.852c3.333-10.502,6.669-21.003,10-31.506
		c3.194-10.07,6.384-20.141,9.574-30.213c3.18-10.037,6.357-20.076,9.534-30.114c0.936-2.959,1.869-5.918,2.808-8.876
		c0.104-0.327,0.234-0.646,0.393-1.081l32.979,20.608c0.163-0.93,0.314-1.701,0.431-2.477c2.157-14.33,4.308-28.662,6.465-42.992
		c2.037-13.538,4.079-27.076,6.119-40.613c2.129-14.123,4.255-28.246,6.388-42.368c0.629-4.165,1.276-8.328,1.915-12.492
		c-0.37,0.161-0.637,0.406-0.746,0.707c-2.776,7.644-5.542,15.291-8.298,22.941c-3.051,8.471-6.08,16.949-9.134,25.419
		c-4.06,11.261-8.141,22.515-12.201,33.777c-3.622,10.045-7.227,20.097-10.844,30.144c-0.123,0.341-0.294,0.666-0.481,1.086
		l-1.048-0.655c-3.283-2.051-6.567-4.102-9.849-6.155c-7.679-4.802-15.356-9.606-23.035-14.409
		C608.51,109.942,608.577,110.254,608.543,110.556z
		"
                              stroke="#fff"
                              stroke-width="1"
                              fill="none"
                              stroke-dasharray="988.01 988.01"
                              stroke-dashoffset="0"
                        ></path>
                    </svg>
                </div>

            </div>
        </div>


	</div>
</main>

<style>
    svg{

        width: 100%;
        height: 100%;

    }
    path{

        -webkit-transition: stroke-dashoffset 2s ease-in-out;
        transition: stroke-dashoffset 2s ease-in-out;
    }
</style>
<script>
    window.onload = function(){
        lineDraw();
        //repeat for demo purposes
        setInterval(lineDraw, 5000);

    };
    function lineDraw(){
        var path = document.querySelector('.line-animated path');
        var length = path.getTotalLength();
// Clear any previous transition
        path.style.transition = path.style.WebkitTransition =
            'none';

// Set up the starting positions
        path.style.strokeDasharray = length + ' ' + length;
        path.style.strokeDashoffset = length;
// Trigger a layout so styles are calculated & the browser
// picks up the starting position before animating
        path.getBoundingClientRect();
// Define our transition
        path.style.transition = path.style.WebkitTransition =
            'stroke-dashoffset 7s ease-in-out';
// Go!
        path.style.strokeDashoffset = '0';
        //0 is the image fully animated, 988.01 is the starting point.
    };

</script>
<?php get_footer(); ?>
