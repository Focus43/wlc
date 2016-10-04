<?php  defined('C5_EXECUTE') or die("Access Denied."); 
$footer_top = new GlobalArea('FooterTop1');
$footer_top2 = new GlobalArea('FooterTop2');
$display_footer_top = (is_object($footer_top) ? ($footer_top->getTotalBlocksInArea($c) > 0) : 0) || $c->isEditMode();

?>

<footer>
    <?php  if ($display_footer_top) : ?>
    <section id="footer-top">
        <div class="container">
            <div class="row phone-footer">
                <div class="col-sm-12 col-md-6">
                    <?php $footer_top->display($c);?>   
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php $footer_top2->display($c);?>   
                </div>
            </div>
        </div>
    </section>
    <?php  endif ?>
    <section id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?php 
                    $a = new GlobalArea('Footer 1');
                    $a->display();
                    ?>        
                </div>
                <div class="col-sm-3">
                    <?php 
                    $a = new GlobalArea('Footer 2');
                    $a->display();
                    ?>        
                </div>
                <div class="col-sm-3">
                    <?php 
                    $a = new GlobalArea('Footer 3');
                    $a->display();
                    ?>        
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <?php 
                    $a = new GlobalArea('Footer 4');
                    $a->display();
                    ?>        
                </div>
                <div class="col-sm-6">
                    <?php 
                    $a = new GlobalArea('Footer 5');
                    $a->display();
                    ?>        
                </div>
                <div class="col-sm-4">
                    <?php 
                    $a = new GlobalArea('Footer 6');
                    $a->display();
                    ?>        
                </div>                
            </div>     
        </div>    
    </section>
</footer>

<footer id="concrete5-brand">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- <span class="pull-right">
                    <a href="<?php  echo URL::to('/login')?>">Login</a>
                </span> -->
            </div>
        </div>
    </div>
</footer>
<!-- This is to comunicate with Javascript Brand's colors -->
<div class="brand-primary"></div>
<div class="brand-secondary"></div>
<div class="brand-tertiary"></div>
<div class="brand-quaternary"></div>
<!-- End Color Hack -->

<?php  $this->inc('elements/footer_bottom.php');?>