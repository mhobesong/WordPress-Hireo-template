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

 $('.skill-cloud-item label input').click(function(){
   if ($(this).parent().parent().hasClass('active')) {
     $(this).parent().parent().removeClass('active');
   } else {
     $(this).parent().parent().addClass('active');
   }
 });

</script>
</body>
</html>
