<div id="notLogged">
							<form onSubmit="Login.Login($('#loginUsername').val(), $('#loginPassword').val()); return false;">
								<div class="btn-red" style="width: 77px; margin: 3px 0 0 7px; float: right;">
									<div class="btn-left"></div>
									<input class="btn-center login loginbtn" style="border-radius: 0; float: left; font-size: 14px; margin: 0; padding: 0; width: 60px !important;" type="submit" tabindex=3 name="submit" value="LOGIN" />
									<div class="btn-right"></div>
								</div>
								<input id="loginPassword" tabindex=2 class="inputThis gGrey right" autocomplete="off" type="text" name="password" value="PASSWORD" placeholder="PASSWORD" onfocus="if(this.type=='text'){this.type='password';this.value='';}"  />
								<input id="loginUsername" tabindex=1 class="inputThis gGrey right" type="text" name="nickname" value="USERNAME" placeholder="USERNAME" onClick="if (this.value == 'USERNAME'){this.value = '';}" onBlur="if (this.value == ''){this.value='USERNAME';}"/>
							</form>
						</div>