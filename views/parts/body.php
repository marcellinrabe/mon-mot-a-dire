<body>
    <div class="row px-5">
    <section id="left-side" class="d-none d-md-flex align-items-md-center col-md-4">
        <div class="section-left"></div>
    </section>

    <section id="center" class="col-12 col-md-4 pt-5">
	<div class="center">
        <?php
        //handler of each component
            require("views/components/post.php");
        ?>
	</div>
    </section>

    <section id="right-side" class="d-none d-md-flex align-items-md-center col-md-4">
        <div class="section-right"></div>
    </section>
</div>
   
    <script type="text/javascript" src="assets/js/index.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>
