<div class="row">
<form id="remove_form" name="remove_form" action="<?php echo site_url()?>/event/del_data" method="post">
	<input type="hidden" name="remove_data_id" id="remove_data_id" value="" />
</form>

<div class="col-md-4">
	<div class="form-group m-form__group row" style="border-bottom:unset;">
		<label class="col-md-5 col-form-label">
			number of records:
		</label>
		<div class="col-md-4">
			<select class="form-control m-input numperpage" name="num_per_page">
					<option value="10" <?php echo (isset($arr_data['num_per_page'])&&$arr_data['num_per_page'] == "10") ? "selected" : "" ?>>10</option>
					<option value="25"	<?php echo (isset($arr_data['num_per_page']) && $arr_data['num_per_page'] == "25") ? "selected" : ""?>>25</option>
					<option value="50" <?php echo (isset($arr_data['num_per_page'])&& $arr_data['num_per_page'] == "50") ? "selected" : "" ?>>50</option>
					<option value="100" <?php echo (isset($arr_data['num_per_page'])&& $arr_data['num_per_page'] == "100") ? "selected" : "" ?>>100</option>
					<option value="500" <?php echo (isset($arr_data['num_per_page'])&& $arr_data['num_per_page'] == "500") ? "selected" : "" ?>>500</option>
			</select>
		</div>
	</div>
</div>
<div class="col-md-8">
	<form id="search_sorting_form" action="<?php echo site_url() ?>/event/search" method="post">
		<div class="form-group m-form__group row">
			<div class="col-md-5">
				<div class='input-group transaction_date_range'>
					<input type='text' name="transaction_date_range" class="form-control m-input transaction-date" readonly  placeholder="Select date range" value="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['transaction_date_range']) && $arr_data['transaction_date_range'] != "") ? $arr_data['transaction_date_range'] : "" ?>"/>
					<div class="input-group-append">
						<span class="input-group-text">
							<i class="la la-calendar-check-o"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-5 ml-auto">
				<div class="form-group m-form__group">
					<div class="input-group">
						<input type="text" name="keyword_search" class="form-control" placeholder="Search" value="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['keyword_search']) && $arr_data['keyword_search'] != "") ? $arr_data['keyword_search'] : "" ?>" >
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">
								Search
							</button>
						</div>
					</div>
				</div>
				<input type="hidden" class="form-control column_name" name="column_name"  value="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['column_name']) && $arr_data['column_name'] != "") ? $arr_data['column_name'] : "" ?>">
				<input type="hidden" class="form-control sortType" name="sort_type"  value="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['sort_type']) && $arr_data['sort_type'] != "") ? $arr_data['sort_type'] : "" ?>">
				<input type="hidden" class="form-control num-perpage" name="num_per_page"  value="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['num_per_page']) && $arr_data['num_per_page'] != "") ? $arr_data['num_per_page'] : "" ?>">
			</div>
			<div class="col-md-2 ml-auto">
				<div class="form-group m-form__group">
					<button type="reset" class="btn btn-danger btnreset">
						Reset
					</button>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
<div class="row">
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>
					#
				</th>
				<th>
					<a class="sort_by" href="javascript:;" 
						data-orderbytable="" 
						data-orderbycolum="event_title"
						data-sortingby="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['sort_type']) && $arr_data['sort_type'] == "asc") ? "desc" : "asc" ?>">
						Event Title &nbsp;
						<i class="fa fa-sort<?php echo isset($arr_data)&& is_array($arr_data) && isset($arr_data['column_name']) && $arr_data['column_name'] == "event_title" && isset($arr_data['sort_type']) && $arr_data['sort_type'] != "" ? "-" . $arr_data['sort_type'] : "" ?>" style="font-size:15px;"></i>
					</a> 
				</th>
				<th>
					<a class="sort_by" href="javascript:;" 
						data-orderbytable="" 
						data-orderbycolum="event_description" 
						data-sortingby="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['sort_type']) && $arr_data['sort_type'] == "asc") ? "desc" : "asc" ?>">
						Event Description &nbsp;
						<i class="fa fa-sort<?php echo isset($arr_data)&& is_array($arr_data) && isset($arr_data['column_name']) && $arr_data['column_name'] == "event_description" && isset($arr_data['sort_type']) && $arr_data['sort_type'] != "" ? "-" . $arr_data['sort_type'] : "" ?>" style="font-size:15px;"></i>
					</a> 
				</th>
				<th>
					<a class="sort_by" href="javascript:;" 
						data-orderbytable="" 
						data-orderbycolum="event_start_datetime" 
						data-sortingby="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['sort_type']) && $arr_data['sort_type'] == "asc") ? "desc" : "asc" ?>">
						Start Date &amp; Time &nbsp;
						<i class="fa fa-sort<?php echo isset($arr_data)&& is_array($arr_data) && isset($arr_data['column_name']) && $arr_data['column_name'] == "event_start_datetime" && isset($arr_data['sort_type']) && $arr_data['sort_type'] != "" ? "-" . $arr_data['sort_type'] : "" ?>" style="font-size:15px;"></i>
					</a> 
				</th>
				<th>
					<a class="sort_by" href="javascript:;" 
						data-orderbytable="" 
						data-orderbycolum="event_end_datetime" 
						data-sortingby="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['sort_type']) && $arr_data['sort_type'] == "asc") ? "desc" : "asc" ?>">
						End Date &amp; Time &nbsp;
						<i class="fa fa-sort<?php echo isset($arr_data)&& is_array($arr_data) && isset($arr_data['column_name']) && $arr_data['column_name'] == "event_end_datetime" && isset($arr_data['sort_type']) && $arr_data['sort_type'] != "" ? "-" . $arr_data['sort_type'] : "" ?>" style="font-size:15px;"></i>
					</a> 
				</th>
				<th>
					<a class="sort_by" href="javascript:;" 
						data-orderbytable="" 
						data-orderbycolum="all_day" 
						data-sortingby="<?php echo (isset($arr_data)&& is_array($arr_data) && isset($arr_data['sort_type']) && $arr_data['sort_type'] == "asc") ? "desc" : "asc" ?>">
						All Day &amp; Time &nbsp;
						<i class="fa fa-sort<?php echo isset($arr_data)&& is_array($arr_data) && isset($arr_data['column_name']) && $arr_data['column_name'] == "all_day" && isset($arr_data['sort_type']) && $arr_data['sort_type'] != "" ? "-" . $arr_data['sort_type'] : "" ?>" style="font-size:15px;"></i>
					</a> 
				</th>
				<th>
					Action
				</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			if(isset($arr_data) AND isset($arr_data['query']) AND $arr_data['query'] !== false AND
				$arr_data['query']->num_rows() > 0
			)
			{
				$count = 0;
				
				if($this->uri->segment(3) != '' AND is_numeric($this->uri->segment(3)) AND $this->uri->segment(3) > 0)
				{
					$count = $this->uri->segment(3);
				}
				
				if($this->uri->segment(4) != '' AND is_numeric($this->uri->segment(4)) AND $this->uri->segment(4) > 0)
				{
					$count = $this->uri->segment(4);
				}
				
				foreach($arr_data['query']->result() as $rowevent)
				{
					$count++;
		?>
				<tr>
					<td>
						<?php echo $count?>
					</td>
					<td>
						<?php echo (isset($rowevent->event_title) AND $rowevent->event_title != '') ? $rowevent->event_title : '' ;?>
					</td>
					<td>
						<?php echo (isset($rowevent->event_description) AND $rowevent->event_description != '') ? $rowevent->event_description : '' ;?>
					</td>
					<td>
						<?php 
							if (isset($rowevent->event_start_datetime) AND $rowevent->event_start_datetime != '0000-00-00 00:00:00')
							{
								echo date('d/m/Y H:i', strtotime($rowevent->event_start_datetime));
							}
							else
							{
								echo "-";
							}
						?>
					</td>
					<td>
						<?php 
							if (isset($rowevent->event_end_datetime) AND $rowevent->event_end_datetime != '0000-00-00 00:00:00')												
							{
								echo date('d/m/Y H:i', strtotime($rowevent->event_end_datetime));
							}
							else
								echo "-";
						?>
					</td>
					<td>
						<?php 
							if(isset($rowevent->all_day) AND $rowevent->all_day == '1')
							{
								echo "Yes";
							}
							else
								echo "No";
						?>
					</td>
					<td>
						<a href="<?php echo site_url() ?>/event/edit/<?php echo (isset($rowevent->id) AND $rowevent->id > 0) ? $rowevent->id : ''  ?>" class="btn btn-info m-btn m-btn--icon btn-sm m-btn--icon-only  m-btn--pill">
							<i class="fa fa-edit"></i>
						</a>
						<a href="#" title="Delete this file" onclick="delete_record('<?php echo $rowevent->id?>')" class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
							<i class="fa fa-trash-o"></i>
						</a>
					</td>
				</tr>
		<?php
				}
			}
			else
			{
		?>
			<tr>
				<td colspan="7">
					<center>No data to display</center>
				</td>
			</tr>
		<?php
			}
		?>
		</tbody>
	</table>
</div>

<?php echo isset($arr_data['pagination']) ? $arr_data['pagination'] : ""; ?>
</div>