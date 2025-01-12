<script type="text/template" id="pbc-main-tmpl">
	<div class="yrc-content" style="background:#fff;padding:.1em;margin-bottom:2em">
		<div class="yrc-content-header wpb-clr" style="padding:1em 1em 0">
			<h3 class="wpb-float-left" style="margin:0">Message from Waiting Developer</h3>
		</div>
		<div class="widefat" style="padding:0 1em 1em;margin-top:-.5em">
			<p>We're providing custom development services to fund our new projects:</p>
			<div id="pb-custom-services">
				<div>
					<p class="wpb-pointer" style="margin-bottom:0em"><i class="dashicons dashicons-arrow-down-alt2"></i> Custom plugin development</p>
					<ul class="pb-hidden" style="list-style:inside;margin-left:1em;margin-top:.5em">
						<li>Custom WordPress development led by developer with 8+ years of experience.</li>
					</ul>
				</div>
				<div>
					<p class="wpb-pointer" style="margin-bottom:0em"><i class="dashicons dashicons-arrow-down-alt2"></i> Web scraping (for leads, research and programmatic SEO)</p>
					<ul class="pb-hidden" style="list-style:inside;margin-left:1em;margin-top:.5em">
						<li>Web scraping and data enrichment. Monitor data sources and be the first to know.</li>
						<li>We can provide data never seen before by Google. Email us to see how it's possible.</li>
						<li>Import scraped data to WordPress.</li>
					</ul>
				</div>
				<div>
					<p class="wpb-pointer" style="margin-bottom:0em"><i class="dashicons dashicons-arrow-down-alt2"></i> Data visualizaion (with React, D3, OSM, Mapbox)</p>
					<ul class="pb-hidden" style="list-style:inside;margin-left:1em;margin-top:.5em">
						<li>Build dashboards with scraped or other data.</li>
						<li>Companies use public data to build dashboards which act as lead magnets.
							See <a href="https://www.adt.com/crime" target="_blank">this example</a>, email us for more.
						</li>
					</ul>
				</div>
			</div>
			<div>
				<p style="margin:1.5em auto .75em">We are based in <span id="pb-c-s-country"></span> so our services will be relatively low-cost for you.</p>
				<a class="button" target="_blank" href="mailto:enquiry@plugin.builders?subject=Custom Development" style="display:inline-flex;align-items:center">
					<i class="dashicons dashicons-email-alt" style="margin-right:.5em"></i> Ask Question
				</a>
			</div>
		</div>
	</div>
	<div class="pb-hidden" style="background:#fff;margin-bottom:1.5em">
		<div class="yrc-content-header wpb-clr">
			<h2 class="wpb-float-left" style="margin:0;padding:1em 1em 0">Waiting PRO</h2>
		</div>
		<div class="widefat" style="padding:0 1em 1em">
			<ul style="list-style:inside">
				<li>Cookies</li>
				<li>Evergreen countdowns</li>
				<li>User timezone</li>
				<li>More styles & on finish options</li>
				<div><strong>-----Also for free-----</strong></div>
				<li>
					Fast support - within hours 
					(see: <a href="https://wordpress.org/support/plugin/waiting/" target="_blank">https://wordpress.org/support/plugin/waiting/</a>)
				</li>
				<li>Custom CSS, we don't act greedy for simple customisations</li>
			</ul>
			<div>
				<a class="button button-primary"  target="_blank" href="https://plugin.builders/waiting/?from=wp&v=<?php echo WPB_Waiting::$version; ?>#pricing">Upgrade</a>
				<a class="button" href="mailto:enquiry@plugin.builders?subject=Waiting Enquiry">Pre-Purchase Question?</a>
			</div>
		</div>
	</div>
	<div id="pbc-downs" class="wpb-hidden">
		<table class="widefat">
			<thead>
				<tr>
					<th><?php _e('Name', 'waiting'); ?></th>
					<th><?php _e('To', 'waiting'); ?></th>
					<th><?php _e('Shortcode', 'waiting'); ?></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
		<button id="pbc-new-countdown" class="button button-primary"><?php _e('Add New', 'waiting'); ?></button>
	</div>
	<div id="pbc-editor"></div>
	<div id="pbc-feedback">
		<a class="button" href="mailto:suggest@plugin.builders?subject=Extend Waiting"><?php _e('Suggest Feature', 'waiting'); ?></a>
		<a class="button" href="mailto:support@plugin.builders?subject=Waiting Problem"><?php _e('Report Issue', 'waiting'); ?></a>
		<a class="button" href="https://wordpress.org/support/view/plugin-reviews/waiting?#postform" target="_blank"><?php _e('Write a review', 'waiting'); ?></a>
		<a class="button" href="http://plugin.builders/waiting/docs" target="_blank"><?php _e('Docs & Troubleshooting', 'waiting'); ?></a>
	</div>
	<div id="pbc-demos" class=""></div>
</script>

<script type="text/template" id="pbc-duration-tmpl">
	<label><input type="number" min="0" max="999999" name="pbc_insta" value="<%- parseInt(meta.insta[0]) ? (meta.occurence[0][1]/1000) : 0 %>" class="wpb-raw"/><?php _e('Seconds', 'waiting'); ?></label>
</script>

<script type="text/template" id="pbc-countdown-date-tmpl">
	<div class="pbc-field wpb-inline">
		<input name="to_date" value="<%= oto.date %>" class="wpb-raw pbc-date-picker"/>
	</div>
	<div class="pbc-field wpb-inline">
		<input name="to_hours" type="number" min="0" max="23" value="<%= oto.h %>" class="wpb-raw"/>
		<input name="to_mins" type="number" min="0" max="59" value="<%= oto.mi %>" class="wpb-raw"/>
		<input name="to_secs" type="number" min="0" max="59" value="<%= oto.s %>" class="wpb-raw"/>
	</div>
</script>

<script type="text/template" id="pbc-countdown-start-date-tmpl">
	<div class="pbc-field wpb-inline">
		<input name="start_date" value="<%= ostart.date %>" class="wpb-raw pbc-date-picker"/>
	</div>
	<div class="pbc-field wpb-inline">
		<input name="start_hours" type="number" min="0" max="23" value="<%= ostart.h %>" class="wpb-raw"/>
		<input name="start_mins" type="number" min="0" max="59" value="<%= ostart.mi %>" class="wpb-raw"/>
		<input name="start_secs" type="number" min="0" max="59" value="<%= ostart.s %>" class="wpb-raw"/>
	</div>
</script>

<script type="text/template" id="pbc-countdown-tmpl">
	<form class="pbc-pane" id="pbc-form">
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline"><?php _e('Name', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline">
				<input name="name" value="<%= down.meta.name %>" class="wpb-raw"/> <small><?php _e('Must be unique', 'waiting'); ?></small>
			</div>
		</div>
		
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline"><?php _e('Countdown', 'waiting'); ?> <?php _e('To', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline" id="cd_to">
				<% var insta = parseInt(down.meta.insta[0]); %>
				<div class="pbc-field wpb-inline">
					<label><input type="radio" name="pbc_to" value="to" <%-  insta ? '' : 'checked' %>/><?php _e('Date', 'waiting'); ?></label>
				</div>
				<div class="wpb-inline <%- insta ? 'wpb-force-hide' : '' %>" data-cd="to">
					<%= PBC.dateTemplate(oto, down.meta.coffset) %>
				</div></br>
				<div class="pbc-field wpb-inline">
					<label><input type="radio" name="pbc_to" value="insta" <%- insta ? 'checked' : '' %>/><?php _e('Duration', 'waiting'); ?></label>
				</div>
				<div class="pbc-field wpb-inline <%- insta ? '' : 'wpb-force-hide' %>" data-cd="insta">
					<%= PBC.durationTemplate(down) %>
				</div>
			</div>
		</div>
		
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline"><?php _e('Countdown', 'waiting'); ?> <?php _e('From', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline" id="cd_from">
				<div class="wpb-inline">
					<%= PBC.startDateTemplate(down.meta.occurence[0][0], down.meta.coffset) %>
				</div>
			</div>
		</div>
		
		<div class="pbc-row pbc-manual-starts <%- parseInt(down.meta.insta[0]) ? '' : 'wpb-hidden' %>" id="pbc-start-on-click">
			<div class="pbc-row-label wpb-inline"><?php _e('Start on clicking', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline">
				<div class="wpb-inline" style="width:100%">
					<input type="text" name="start_on_click" value="<%= down.meta.start_on_click %>" class="wpb-raw" style="width:100%"/>
					<p style="margin:.25em 0;">Enter CSS selectors separated by commas, countdown'll start / restart upon clicking on them.</p>
				</div>
			</div>
		</div>
		
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline"><?php _e('Timezone', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline" id="pbc-timezone-field">
				<div class="pbc-field wpb-inline">
					<label><input type="radio" name="timezone" value="WP"
						<%- down.meta.timezone === 'WP' ? 'checked' : '' %> class=""/><?php _e('WordPress', 'waiting'); ?></label>
				</div>
				<div class="pbc-field wpb-inline">
					<label><input type="radio" name="timezone" value="UTC"
						<%- down.meta.timezone === 'UTC' ? 'checked' : '' %> class=""/><?php _e('UTC', 'waiting'); ?></label>
				</div>
			</div>
		</div>
		
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline"><?php _e('Units', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline pbc-unit-field">
				<%
					units.forEach(function(unit){ %>
						<div class="pbc-field wpb-inline">
							<label><input type="checkbox" name="unit[]" value="<%= unit %>"
								<%- down.meta.units.indexOf(unit) > -1 ? 'checked' : '' %>/><%= PBCUtils.lang.units[unit] %></label>
						</div>
					<% });
				%>
			</div>
		</div>
		
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline"><?php _e('Labels', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline">
				<div class="pbc-field wpb-inline">
					<label><input type="checkbox" name="shorten_label"
						<%- parseInt(down.style.shorten_label) ? 'checked' : '' %> class="wpb-raw" /><?php _e('Shorten', 'waiting'); ?></label>
				</div>
				<div class="pbc-field wpb-inline">
					<label><input type="checkbox" name="lowercase_label"
						<%- parseInt(down.style.lowercase_label) ? 'checked' : '' %>  class="wpb-raw" /><?php _e('Lowercase', 'waiting'); ?></label>
				</div>
			</div>
		</div>
		
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline"><?php _e('Font', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline" id="pbc-fonts">
				<%= PBC.fontTemplate() %>
			</div>
		</div>
		
		<div class="pbc-row">
			<div class="pbc-row-label wpb-inline">Style
			</div><div class="pbc-row-field wpb-inline" id="pbc-styles-field">
				<a class="button pbc-choose-style" id="pbc-edit-style"><?php _e('Edit', 'waiting'); ?></a>
				<a class="button wpb-force-hide" id="pbc-toggle-style"><?php _e('Toggle', 'waiting'); ?></a>
				<div id="pbc-styles"></div>
			</div>
		</div>
		
		<% if(!PBC.free){ %>
			<div class="pbc-row">
				<div class="pbc-row-label wpb-inline"><?php _e('Resize', 'waiting'); ?></div>
				<div class="pbc-row-field wpb-inline">
					<label><input type="checkbox" name="resize" <%- parseInt(down.style.resize) ? 'checked' : '' %> class="wpb-raw"/><?php _e('Expand width to parent element\'s size.', 'waiting'); ?></label>
				</div>
			</div>
		<% } %>
				
		<% var fin = down.meta.onfinish; %>
		<div class="pbc-row" id="pbc-onfinish-row">
			<div class="pbc-row-label wpb-inline"><?php _e('On Finish', 'waiting'); ?></div>
			<div class="pbc-row-field wpb-inline" id="pbc-onfinish-field">
				<div class="pbc-option" data-name="nothing">
					<div class="pbc-option-label"><?php _e('Nothing', 'waiting'); ?></div>
				</div>
				<div class="pbc-option" data-name="hide">
					<div class="pbc-option-label"><?php _e('Hide', 'waiting'); ?> <?php _e('Countdown', 'waiting'); ?></div>
				</div>
				<div class="pbc-option" data-name="redirect">
					<div class="pbc-option-label"><?php _e('Redirect', 'waiting'); ?></div>
					<div class="pbc-option-field">
						<input type="text" value="<%- fin[0] === 'redirect' ? fin[1][0] : '' %>" placeholder="<?php _e('URL', 'waiting'); ?>"/>
					</div>
				</div>
				<div class="pbc-option" data-name="event">
					<div class="pbc-option-label"><?php _e('Trigger DOM events (click, hover etc.)', 'waiting'); ?></div>
					<div class="pbc-option-field">
						<input type="text" value="<%- fin[0] === 'event' ? fin[1][0] : '' %>" placeholder="<?php _e('selector', 'waiting'); ?>"/>
						<input type="text" value="<%- fin[0] === 'event' ? fin[1][1] : '' %>" placeholder="<?php _e('event', 'waiting'); ?>"/>
					</div>
				</div>
			</div>
		</div>
		
		<div class="pbc-form-save">
			<div class="pbc-form-message"></div>
			<button class="button button-primary"><?php _e('Save', 'waiting'); ?></button>
			<a class="button pbc-cancel-form"><?php _e('Cancel', 'waiting'); ?></a>
			<% if(down.meta.id !== 'nw'){ %>
				<a class="button" id="pbc-delete-form"><?php _e('Delete', 'waiting'); ?></a>
			<% } %>	
		</div>
	</form>
	</br>
	<small><?php _e('Some changes won\'t take effect in preview', 'waiting'); ?>.</small>
</script>

<script type="text/template" id="pbc-down-tmpl">
	<tr data-down="<%= id %>" class="pbc-down">
		<td><span><%= d.meta.name %></span></td>
		<td><span><%- parseInt(d.meta.insta[0]) ? (d.meta.occurence[0][1]/1000)+' <?php _e('seconds', 'waiting'); ?>' : (oto.date + ' ' + oto.time) %></span></td>
		<td><span>[waiting name="<%= d.meta.name %>"]</span></td>
		<td><a class="button pbc-edit" data-down="<%= id %>"><?php _e('Edit', 'waiting'); ?></a></td>
		<td><a class="button pbc-copy" data-down="<%= id %>"><?php _e('Duplicate', 'waiting'); ?></a></td>
	</tr>
</script>

<script type="text/template" id="pbc-html-styles-tmpl">
	<% var css = style.css, scl = 16; %>
	
	<div class="pbc-row" id="pbc-style-toolbar"></div>
	
	<div class="pbc-row wpb-force-hide">
		<div class="pbc-row-label wpb-inline">Wrapper</div>
		<div class="pbc-row-field wpb-inline">			
			<div class="pbc-field wpb-inline">
				<label><input name="wrapper_bg" value="#000" data-default-color="#000"
						data-keys="0-2, .pbc-shell, background, 0" class="wpb-color"/><?php _e('Background', 'waiting'); ?></label>
			</div>
		</div>
	</div>
	<% if(style.type[1] && !PBC.free){ %>
	<div class="pbc-row">
		<div class="pbc-row-field wpb-inline">			
			<div class="pbc-field wpb-inline">
				<label><input type="radio" name="3do" value="1" data-keys="type-3,  , , 1"
						<%- style.type[3] ? 'checked' : '' %>/><?php _e('Horizontal', 'waiting'); ?></label>
			</div>
			<div class="pbc-field wpb-inline">
				<label><input type="radio" name="3do" value="0" data-keys="type-3,  , , 1"
						<%- style.type[3] ? '' : 'checked' %>/><?php _e('Vertical', 'waiting'); ?></label>
			</div>
		</div>
	</div>
	<% } %>
	
	<div class="pbc-row">
		<div class="pbc-row-label wpb-inline"><?php _e('Unit', 'waiting'); ?></div>
		<div class="pbc-row-field wpb-inline">
			<div class="pbc-field wpb-inline">
				<label><input name="unit_color" value="<%= css.num[2] %>" data-default-color='#000' "
						data-keys="num-2, .pbc-num, color, 0" class="wpb-color"/><?php _e('Color', 'waiting'); ?></label>
			</div>
						
			<div class="pbc-field wpb-inline">
				<label><input name="unit_bg"  value="<%= css.num[1] %>"
						data-keys="num-1, .pbc-num,.pbc-unit-content, background, 0" class="wpb-color"/><?php _e('Background', 'waiting'); ?></label>
			</div>
			
			<div class="pbc-field wpb-inline">
				<label><input name="unit_height" readonly data-range="[0, 150]" value="<%= css.content[0] * scl %>"
						data-keys="content-0, .pbc-unit-content, height, 1" class="wpb-number-input"/><?php _e('Height', 'waiting'); ?></label>
			</div>
			<% if(style.type[0] !== 'canvas'){ %>
			<div class="pbc-field wpb-inline">
				<label><input name="unit_height" readonly data-range="[0, 150]" value="<%= css.unit[1] * scl %>"
						data-keys="unit-1, .pbc-unit, width, 1" class="wpb-number-input"/><?php _e('Width', 'waiting'); ?></label>
			</div>
			<% } %>
			
			<div class="pbc-field wpb-inline">
				<label><input name="unit_font_size" readonly data-range="[0, 100]" value="<%= css.num[0] * scl %>"
						data-keys="num-0, .pbc-num, font-size, 1" class="wpb-number-input"/><?php _e('Font size', 'waiting'); ?></label>
			</div>
			
			<div class="pbc-field wpb-inline">
				<label><input name="unit_margin_right" readonly data-range="[0, 25]" value="<%= css.unit[2] * scl %>"
						data-keys="unit-2, .pbc-unit, margin-right, 1" class="wpb-number-input"/><?php _e('Margin', 'waiting'); ?>-<?php _e('Right', 'waiting'); ?></label>
			</div>
			
			<% if(!style.type[1]){ %>
			<div class="pbc-field wpb-inline">
				<label><input name="unit_border_radius" readonly data-range="[0, 50]" value="<%= css.unit[4] * scl %>"
						data-keys="unit-4, .pbc-unit, border-radius, 1" class="wpb-number-input"/><?php _e('Rounded corners', 'waiting'); ?></label>
			</div>
			<% } %>
			
			<div class="pbc-field wpb-inline">
				<label><input type="checkbox" name="label_show" <%- parseInt(css.unit[5]) ? 'checked' : '' %>
						data-keys="unit-5, .pbc-unit, display, 0"/><?php _e('Hide if Zero', 'waiting'); ?> <small>(<?php _e('except last one', 'waiting'); ?>)</small></label>
			</div>
		</div>
	</div>
	
	<div class="pbc-row">
		<div class="pbc-row-label wpb-inline"><?php _e('Label', 'waiting'); ?></div>
		<div class="pbc-row-field wpb-inline">
			<div class="pbc-field wpb-inline">
				<label><input name="" readonly data-range="[0, 50]" value="<%= css.label[0] * scl %>"
						data-keys="label-0, .pbc-label, font-size, 1" class="wpb-number-input"/><?php _e('Font-size', 'waiting'); ?></label>
			</div>
			
			<div class="pbc-field wpb-inline">
				<label><input name="" value="<%= css.label[2] %>"
						data-keys="label-2, .pbc-label, color, 0" class="wpb-color"/><?php _e('Color', 'waiting'); ?></label>
			</div>
			<% if(style.type[0] !== 'canvas'){ %>
			<div class="pbc-field wpb-inline">
				<label><input name="" value="<%= css.label[1] %>"
						data-keys="label-1, .pbc-label, background, 0" class="wpb-color"/><?php _e('Background', 'waiting'); ?></label>
			</div>
			<% } %>
			
			<div class="pbc-field wpb-inline">
				<label><input name="" readonly data-range="[0, 10]" value="<%= css.label[3] * scl %>"
						data-keys="label-3, .pbc-label, margin-top, 1" class="wpb-number-input"/><?php _e('Margin', 'waiting'); ?></label>
			</div>
			
			<% if(style.type[0] === 'html'){ %>
				<div class="pbc-field wpb-inline">
					<label><input type="checkbox" name="" <%- parseInt(css.label[5]) ? 'checked' : '' %>
							data-keys="label-5, .pbc-label, display, 0"/><?php _e('Top', 'waiting'); ?></label>
				</div>
			<% } %>
			
			<div class="pbc-field wpb-inline">
				<label><input type="checkbox" name="label_show" <%- parseInt(css.label[4]) ? 'checked' : '' %>
						data-keys="label-4, .pbc-label, display, 0"/><?php _e('Show', 'waiting'); ?></label>
			</div>
		</div>
	</div>
	
	<div class="pbc-row">
		<div class="pbc-row-label wpb-inline"><?php _e('Align', 'waiting'); ?></div>
		<div class="pbc-row-field wpb-inline">
			<div class="pbc-field wpb-inline">
				<label><input type="radio" name="pbc_align" value="left" <%- (css.unit[7] === 'left') ? 'checked' : '' %>
						data-keys="unit-7, .pbc-shell, text-align, 0"/><?php _e('Left', 'waiting'); ?></label>
			</div>
			<div class="pbc-field wpb-inline">
				<label><input type="radio" name="pbc_align" value="center" <%- (css.unit[7] === 'center') ? 'checked' : '' %>
						data-keys="unit-7, .pbc-shell, text-align, 0"/><?php _e('Center', 'waiting'); ?></label>
			</div>
			<div class="pbc-field wpb-inline">
				<label><input type="radio" name="pbc_align" value="right" <%- (css.unit[7] === 'right') ? 'checked' : '' %>
						data-keys="unit-7, .pbc-shell, text-align, 0"/><?php _e('Right', 'waiting'); ?></label>
			</div>
		</div>
	</div>	
</script>

<script type="text/template" id="pbc-font-tmpl">
	<select>
		<% for(var font in PBC.fonts){ %>
			<option value="<%= PBC.fonts[font] %>" <%- chosen_font === PBC.fonts[font] ? 'selected' : '' %>><%= font %></option>
		<% } %>
	</select>
</script>

<script type="text/template" id="pbc-lang-form-tmpl">
	<form id="pbc-lang-form" class="pbc-front-form">
		<h2 class="pbc-front-form-header wpb-pointer"><?php _e('Quick Translation', 'waiting'); ?></h2>
		<div class="pbc-front-form-inputs wpb-zero">
			<% for(var term in units){ %>
				<div class="pbc-field wpb-inline">
					<label><%= PBC.lang.unit_labels[term] %><input type="text" name="<%= term %>" value="<%= units[term] %>"/></label>
				</div>
			<% } %>
			<div><button class="button button-primary"><?php _e('Save', 'waiting'); ?></button></div>
		</div>
	</form>
	
	<form id="pbc-other-settings" class="pbc-front-form">
		<h2 class="pbc-front-form-header wpb-pointer"><?php _e('On Uninstall', 'waiting'); ?></h2>
		<div class="wpb-zero pbc-front-form-inputs ">
			<div class="pbc-row-field wpb-inline">
				<div class="pbc-field wpb-inline">
					<label><input type="checkbox" name="clean_on_uninstall" class="wpb-raw" 
						<?php echo get_option('waiting_clean_on_uninstall') ? 'checked' : '' ?> /><?php _e('Delete countdowns on Uninstall', 'waiting'); ?></label>
				</div>
			</div>
			<div><button class="button button-primary"><?php _e('Save', 'waiting'); ?></button></div>
		</div>
	</form>
	
	<div id="pbc-do-upgrade" style="background:#fff;padding:1em;margin-top:1.5em">
		<h3>Pro version features:</h3>
		<ul>
			<li>Multiple kind of circular styles.</li>
			<li>3D flip styles (calendar & book).</li>
			<li>User's timezone.</li>
			<li>Start / Restart countdown when clicking on a button etc. <b>New</b></li>
			<li>Set cookie to not restart countdown on page reload ( While counting down to seconds. ).</li>
			<li>Literally countless animation directions.</li>
			<li>Multiple countdowns on same page.</li>
			<li>On finish options: Replace countdown with HTML, play YouTube video, play sound.</li>
			<li>Send emails on countdown finish. <b>New</b></li>
			<li>Start / restart coundown on clicking on elements, beep on finish. <b>New</b></li>
			<li>Evergreen countdowns (sticky on top or bottom of the screen).</li>
			<li>Fast effective support (also for the free version :) ).</li>
		</ul>
		<a class="button button-primary"  target="_blank" href="https://plugin.builders/waiting/?from=wp&v=<?php echo WPB_Waiting::$version; ?>#pricing">Upgrade</a>
		<a class="button" href="mailto:enquiry@plugin.builders?subject=Waiting Enquiry">Pre-Purchase Question?</a>
	</div>
</script>

<script type="text/javascript">
	<?php
		$terms = WPB_Waiting::$terms;
		$terms['aui'] = array(
			'saving' => __('Saving', 'waiting'),
			'deleting' => __('Deleting', 'waiting')
		);
	?>
	var pbc_translated_terms = <?php echo json_encode( $terms ); ?>
</script>
