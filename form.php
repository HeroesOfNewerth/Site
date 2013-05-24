

<form id="f2p" name="f2p" action="check.php" method="post" onsubmit=""><!--return validateForm()">-->
	<div id="theAccount" class="gDark default">
	<?if($_SESSION['registered'] == 4) {unset($_SESSION['registered']);?>
	<br><center style="color:red">Такой EMAIL уже есть!</center>
	<?}?>
	<?if($_SESSION['registered'] == 3) {unset($_SESSION['registered']);?>
	<br><center style="color:red">Такой ЛОГИН уже есть!</center>
	<?}?>
	<?if($_SESSION['registered'] == 2) {unset($_SESSION['registered']);?>
	<br><center style="color:red">Не удалось пройти регистрацию!</center>
	<?}?>
		<div id="accountID" class="subTitle">
			<p id="yourname-label">ВАШ ЛОГИН</p>
		</div>

		<input id="nickname" class="white" type="text" name="nickname"  placeholder="Логин" value="Логин" onFocus="if (this.value == 'Логин') { this.value = '';}" onblur="if (this.value == '') { this.value = 'Логин';} else{nick_func();}"/>

		<!-- Check Button 
		<div id="checkButton"><input type="submit" name="check" class="redbtn"value="CHECK"></div>-->

		<div class="fillMe">
			<p>Имя:</p>
			<input id="firstName" class="white" type="text" name="first_name" value="Имя" placeholder="Имя" onClick="if (this.value == 'Имя'){this.value = '';}" onBlur="if (this.value == ''){this.value='Имя';}" />
		</div>

		<div class="fillMe">
			<p>Фамилия:</p>
			<input id="lastName" class="white" type="text" name="last_name" value="Фамилия" placeholder="Фамилия" placeholder="Фамилия" onClick="if (this.value == 'Фамилия'){this.value = '';}" onBlur="if (this.value == ''){this.value='Фамилия';}" />
		</div>

		<div class="fillMe">
			<p>Email:</p>
			<input class="email white" type="text" id="check0"  name="email" value="EMAIL" placeholder="EMAIL" onClick="if (this.value == 'EMAIL'){this.value = '';}" onBlur="if (this.value == ''){this.value='EMAIL';}" />
		</div>

		<div class="fillMe">
			<p>Подтвердите Email:</p>
			<input class="email white" type="text" id="check1" name="email2" value="Подтвердите EMAIL" placeholder="Подтвердите EMAIL" onClick="if (this.value == 'Подтвердите EMAIL'){this.value = '';}" onBlur="if (this.value == ''){this.value='Подтвердите EMAIL';}" />
		</div>

		<div class="fillMe">
			<p>Пароль:</p>
			<input class="password white" type="text" name="password" value="Пароль" placeholder="Пароль" onClick="nick_func()" onfocus="if(this.type=='text'){this.type='password';this.value='';}" />
		</div>

		<div class="fillMe">
			<p>Подтвердите Пароль:</p>
			<input class="password white" type="text" name="password2" value="Подтвердите Пароль" placeholder="Подтвердите Пароль" onfocus="if(this.type=='text'){this.type='password';this.value='';}" />
		</div>

		<input type="hidden" id="io_HoN_BBq" name="io_HoN_BBq" >

		<div class="fillMe" style="margin: 2px 0 0 -1px">
			<p>Пригласил:</p>
			<input style="width: 730px;" class="referral white" type="text" name="referrer_nick" placeholder="Аккаунт Пользователя" />
			<p class="subTitleSM" style="width: 730px;">Если вас сюда запросил друг, укажите его аккаунт в этом поле.</p>
		</div>

		<!-- ALTERNATIVE -->
		<div id="captHolder">
			<p class="subTitleSM" style="border-top: 1px solid #333333; margin: -10px 0 10px 10px; padding-top: 10px; width: 770px;">Введите правильный ответ на заданый вопрос для регистрации на сайте.</p>
	             <div style="position: absolute; left: 100px; top: 30px;">Как расшифровать HON?:</div>
			
			<div style="position: absolute; left: 227px; top: 30px;">
				<!-- Refresh Button -->
			<br>
				<input class="white" type="text" name="txtInput" id="txtInput" size="30" style="bottom: -9px; left: 26px; position: absolute; width: 490px;" value="Введите ответ..." placeholder="Введите ответ..." onClick="if (this.value == 'Введите ответ...'){this.value = '';}" onBlur="if (this.value == ''){this.value='Введите ответ...';}" />
			</div>
		</div>

		<!-- Nick - Error -->
		<div id="NickCheckBad" name="NickCheckBad" style="position: absolute; top: 17px; left: 30px; width: 194px; height: 88px;  display: none;">
			<div id="badText" style="position: absolute; top: 6px; left: 5px; width: 146px; height: 77px; color: white; font-size: 13px; border:1px solid black; padding: 5px; background: #7e2424;">
				Awww Snap! You can't do that mister. This is probably about as long as it will get, I hope.
			</div>
		</div>

		<!-- Nick - Good -->
		<div id="NickCheckGood" name="NickCheckGood" style="position: absolute; top: 16px; left: 190px; width: 33px; height: 34px;  display: none;"></div>
	</div>

	<div id="theSignup" class="gDark">
		<input type="submit" id="button" name="Register" value="Регистрация" class="show_popup redbtn"/>
		<p class="default" style="text-align: center; padding: 6px;">By clicking the sign up button, you are agreeing to the <a href="../documents/tos/default.htm">terms of use</a>.
	</div>
</form>