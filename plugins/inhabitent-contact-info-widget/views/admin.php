<div class="widget-content">
    <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
            name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('phone'); ?>"><i class="fa fa-phone"></i></label>
        <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"
            name="<?php echo $this->get_field_name('phone'); ?>" type="tel" value="<?php echo $phone; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('email'); ?>"><i class="fa fa-envelope"></i></label>
        <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>"
            name="<?php echo $this->get_field_name('email'); ?>" type="email" value="<?php echo $email; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('location'); ?>"><i class="fa fa-map-marker"></i></label>
        <input class="widefat" id="<?php echo $this->get_field_id('location'); ?>"
            name="<?php echo $this->get_field_name('location'); ?>" type="text" value="<?php echo $location; ?>">
    </p>


</div>