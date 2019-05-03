<?php wp_footer(); ?>

<!-- Custom scripts -->
<script>
  
$('.bookmark-icon').click(function(){
   if ($(this).hasClass('active')) {
     $(this).removeClass('active');
   } else {
     $(this).addClass('active');
   }
 });

</script>
</body>
</html>
