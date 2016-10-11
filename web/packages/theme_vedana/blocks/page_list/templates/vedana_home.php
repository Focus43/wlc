<?php 
  defined('C5_EXECUTE') or die("Access Denied.");
  $th = Loader::helper('text');
?>

<div class="page-list cta-page-list">
  <?php  if(is_array($pages) && count($pages)) : ?>
  <?php  foreach ($pages as $key => $page):
    $title = $th->entities($page->getCollectionName());
    $url = $nh->getLinkToCollection($page);
    $date = date('M / d / Y',strtotime($page->getCollectionDatePublic())); 
    $target = ($page->getCollectionPointerExternalLink() != '' && $page->openCollectionPointerExternalLinkInNewWindow()) ? '_blank' : $page->getAttribute('nav_target');
    $target = empty($target) ? '_self' : $target;
    if($key == 0) {$style = 'landscape';}
    if($key == 1) {$style = 'fire';}
    if($key == 2) {$style = 'maint';}
  ?>
  <!-- <a href="<?php  echo $url?>" target="<?php  echo $target ?>">
    <span class="cta-button <?php echo $style; ?>">
      <?php  echo $title ?>
    </span>
  </a>  -->   
  <a class="outline-button tertiary <?php echo $style; ?>" href="<?php  echo $url?>" data-concrete5-link-type="image">
    <?php  echo $title ?>
  </a>    

  <?php  endforeach; ?>

    <?php  else: ?>
        <div class="ccm-block-page-list-no-pages"><?php  echo $noResultsMessage?></div>
    <?php  endif;?>
 
 
</div><!-- end .ccm-block-page-list -->
