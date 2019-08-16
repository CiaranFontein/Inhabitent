<?php if( strlen(trim($phone)) >0): ?>
<p class="contact-meta">
    <i class="fa fa-phone"></i><span><a href="tel:<?php echo $phone ?>"><?php echo $phone; ?></a></span>
</p>
<?php endif; ?>

<?php if( strlen(trim($email)) >0): ?>
<p class="contact-meta">
    <i class="fa fa-envelope"></i><span><a href="mailto:<?php echo $email ?>"><?php echo $email; ?></a></span>
</p>
<?php endif; ?>

<?php if( strlen(trim($location)) >0): ?>
<p class="contact-meta">
    <i class="fa fa-map-marker"></i><span><?php echo $location; ?></span>
</p>
<?php endif; ?>