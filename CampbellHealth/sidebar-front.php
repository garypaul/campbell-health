<?php 
/*
 *
 *
 */  
?>
<div class="container">
  <?php if (function_exists('dynamic_sidebar')) {
    dynamic_sidebar('sidebar-widgets'); ?>
  </div> <!-- .container -->  
  <?php } else { ?>
<h2>No Widgets</h2>
<p>Please add some widgets in the admin area</p>
<!-- 
  Default stuff goes here 
<div class="container">
  <div class="grid-1-2">
    <div class="module module-rounded">
      <p>Health practitioners, Set up your practice in our space.
        <a href="#">Find out more here.</a>
      </p>
    </div>
  </div>
  <div class="grid-1-2">
    <div class="module module-rounded">
      <p>Health Care Professionals who want to brush up on anatomy
        <a href="#">Learn more here.</a>
      </p>
    </div>
  </div>
</div>      
-->

<?php } // end if ?>