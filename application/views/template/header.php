<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        

        <!-- CSS -->
        <script src="<?php echo base_url(); ?>application/public/system/jquery/jquery-1.11.1.min.js"></script>
        <input type="hidden" id="url" name="url" value="<?php echo base_url(); ?>"/>
        <script>
            var URL = $('#url').val();
        </script>
        
        <link rel="stylesheet" href="<?php echo base_url() . 'application/public/system/css/head_to_body.css'; ?>"></link>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/public/system/css/menubar.css'; ?>"></link>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/public/system/css/main.css'; ?>"></link>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/public/system/css/footer.css'; ?>"></link>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/public/jquery.sumoselect-master/sumoselect.css'; ?>"></link>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/public/jquery-ui-1.11.4.custom/jquery-ui.min.css'; ?>"></link>
        <link rel="stylesheet" href="<?php echo base_url() . 'application/public/system/css/datatables.min.css'; ?>"></link>
        
        <!--<sumoselect>-->
        <script type="text/javascript" src="<?php echo base_url() . 'application/public/jquery.sumoselect-master/jquery.sumoselect.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'application/public/jquery.sumoselect-master/jquery.sumoselect.min.js'; ?>"></script>
        
        <!--Messi-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'application/public/messi/messi.min.css'; ?>"/>
        <script type="text/javascript" src="<?php echo base_url() . 'application/public/messi/messi.js'; ?>"></script>
        
        <!--Sweet Alert-->
        <script src="<?php echo base_url() . 'application/public/Sweetalert/sweetalert.min.js'; ?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'application/public/Sweetalert/sweetalert.css'; ?>">
        
        <!--Load css -->
        <?php if (isset($css_to_load)){ ?>
            <?php foreach ($css_to_load as $row){ 
               echo "<link rel='stylesheet' href='" . base_url() . "application/public/system/css/" . $row . "'></link>";
            }
         }?>
        
        
        


    </head>