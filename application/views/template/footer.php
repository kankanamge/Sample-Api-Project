
<div id="footer_bottom" class="footer-bottom">
    <div class="container">
        <div >
            <div>
                <div class="copyright">2018 © <a href="#"></a> All rights reserved.</div>
            </div>
        </div>
    </div>
</div>
<!--Javascript-->

<input type="hidden" id="url" name="url" value="<?php echo base_url(); ?>"/>
<script>
    var URL = $('#url').val();
</script>
<script src="<?php echo base_url(); ?>application/public/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>application/public/jquery.sumoselect-master/jquery.sumoselect.js"></script>
<script src="<?php echo base_url(); ?>application/public/system/js/datatables.min.js"></script>



<!--Load js -->
<?php if (isset($js_to_load)) { ?>
    <?php
    foreach ($js_to_load as $row) {
        echo "<script type='text/javascript' src='" . base_url() . "application/views/" . $row . "'></script>";
    }
}
?>     
</body>
</html>