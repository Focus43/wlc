<?php 
defined('C5_EXECUTE') or die("Access Denied.");

// -- Set a few page vars -- \\
$page = Page::getCurrentPage();

// -- Include different elements of the page -- \\

$this->inc('elements/head.php'); 
$this->inc('elements/header.php');  
?>
<div class="container main-container">
    <div class="row">
        <div class="col-md-7 main">
        <h1><?php echo $page->getCollectionName();?></h1>
            <?php 
            $a = new Area('Main');
            $a->setAreaGridMaximumColumns(12);
            $a->display($c);
            ?>          
        </div>
        <aside class="col-md-4 col-sm-offset-1 right-sidebar sidebar">
            <?php 
            $a = new Area('Sidebar');
            $a->display($c);
            ?>                
        </aside>        
    </div>
</div>

<?php   $this->inc('elements/main_footer.php'); ?>
<?php   $this->inc('elements/footer.php'); ?>