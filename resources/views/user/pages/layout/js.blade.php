    <!-- jQuery -->
    <script src="user/assets/js/jquery-2.1.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="user/assets/js/popper.js"></script>
    <script src="user/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="https://kit.fontawesome.com/495c8b4cb1.js" crossorigin="anonymous"></script>
    <script src="user/assets/js/owl-carousel.js"></script>
    <script src="user/assets/js/accordions.js"></script>
    <script src="user/assets/js/datepicker.js"></script>
    <script src="user/assets/js/scrollreveal.min.js"></script>
    <script src="user/assets/js/waypoints.min.js"></script>
    <script src="user/assets/js/jquery.counterup.min.js"></script>
    <script src="user/assets/js/imgfix.min.js"></script>
    <script src="user/assets/js/slick.js"></script>
    <script src="user/assets/js/lightbox.js"></script>
    <script src="user/assets/js/isotope.js"></script>
    <!-- cart -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- /cart -->
    <!-- Global Init -->
    <script src="user/assets/js/custom.js"></script>


    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>


    <script>
        function addTocart(event) {
            event.preventDefault();
            let urlCart = $(this).data('url');

            $.ajax({
                type: "GET",
                url: urlCart,
                dataType: 'json',
                success: function(data) {
                    if(data.code === 200){
                        
                    }
                },
                error: function() {

                }
            })
        }
        $(function() {
            $('.add-to-cart').on('click', addTocart)
        });
    </script>

<!-- add to cart btn -->
<script>
    const cartButtons = document.querySelectorAll('.cart-button');

cartButtons.forEach(button => {
	button.addEventListener('click', cartClick);
});

function cartClick() {
	let button = this;
	button.classList.add('clicked');
}
</script>