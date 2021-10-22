

<!-- ToTop Button 
<button class="scrollup"><i class="fas fa-angle-up"></i></button>-->
<!-- Javascript Files -->
<script src="<?php echo base_url('assets/web/js/bootstrap.js')?>"></script>
<!-- Javascript Files -->

    <script src="<?php echo base_url('assets/web/assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/web/assets/js/metismenu.js');?>"></script>
    <script src="<?php echo base_url('assets/web/assets/js/active.js')?>"></script>
    <script type="text/javascript">
        
         var n = localStorage.getItem('on_load_counter');

    if (n === null) {
        n = 0;
    }

    n++;

    localStorage.setItem("on_load_counter", n);

    document.getElementById('CounterVisitor').innerHTML = n;

    </script>
</body>
</html>