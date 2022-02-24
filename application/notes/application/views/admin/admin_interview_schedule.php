<!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/myremotedevelopers/60min?name=<?php echo $developer->first_name . ' ' . $developer->last_name; ?>&email=<?php echo $this->session->userdata('email'); ?>&a1=<?php echo $developer->mobile_country_code.''.$developer->mobile; ?>&a2=<?php echo $developer->mobile; ?>" style="min-width:320px;height:580px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->
