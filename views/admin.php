<!-- This file is used to markup the administration form of the widget. -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e("Titre :", "extra-widget-latest-comments"); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>"/>
</p>

<p>
	<label for="<?php echo $this->get_field_id('number_of_comments'); ?>"><?php _e("Nombre de commentaire :", "extra-widget-latest-comments"); ?></label>
	<input id="<?php echo $this->get_field_id('number_of_comments'); ?>" type="text" name="<?php echo $this->get_field_name('number_of_comments'); ?>" value="<?php echo $instance['number_of_comments']; ?>"/>
</p>                                                                                                                                                                                                                   