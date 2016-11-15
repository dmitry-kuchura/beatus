
<div class="mfiModal zoomAnim big callBack">
	<div class="pageTitle w_small">Хотите перезвоним Вам точно в:</div>
	<div data-form="true" data-ajax="wForm-demo-submit.php" class="wForm wFormDef">
		<div class="wFormRow">
			<div class="wFormSelect">
				<select name="time_pop" required="required" class="wSelect">
					<option value="">Выберите время</option>
					<option value="1">9 : 00</option>
					<option value="2">9 : 30</option>
					<option value="3">10 : 00</option>
					<option value="4">10 : 30</option>
					<option value="5">11 : 00</option>
					<option value="6">11 : 30</option>
				</select>
				<div class="inpInfo">Время</div>
			</div>
		</div>
		<div class="wFormRow">
			<div class="wFormSelect">
				<select name="day_pop" required="required" class="wSelect">
					<option value="">Выберите дату</option>
					<option value="1">09.08</option>
					<option value="2">10.08</option>
					<option value="3">11.08</option>
					<option value="4">12.08</option>
					<option value="5">13.08</option>
					<option value="6">14.08</option>
				</select>
				<div class="inpInfo">Дата</div>
			</div>
		</div>
		<div class="wFormRow">
			<div class="wFormInput">
				<input class="wInput" required="required" type="tel" name="demo_callback" id="demo_callback" placeholder="+38 (___) ___-__-__" data-rule-phoneUA="true"/>
				<div for="demo_callback" class="inpInfo">Телефон *</div>
			</div>
		</div>
		<div class="wFormRow w_last w_tac">
			<button class="wSubmit wBtn w_yellow">Жду звонка</button>
		</div>
		<div class="w_clear"></div>
	</div>
</div>