						<li class="nav-item col-xs-6">
							<button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal1Student" style="border:none;color:#c0daf1;">
								Student Login
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal1Student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelStudent" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabelStudent">Student Login</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form id="student_login_form" action="authentication/Studentlogin.php" method="POST">
												<div class="mb-2 alert alert-danger error-email-password" role="alert">
													Invalid Email Or Password!
												</div>
												<div class="form-group">
													<label for="login_email">Email address</label>
													<input type="email" class="form-control" name="email" id="login_email" aria-describedby="emailHelp" placeholder="Enter email" required>
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" name="password" id="login_password" placeholder="Password">
													<input type="hidden" name="student_login">
												</div>
												<div class="form-group form-check">
													<input type="checkbox" class="form-check-input" name="remember_me" id="exampleCheck1">
													<label class="form-check-label" for="exampleCheck1">Remember Me</label>
												</div>
												<input type="submit" class="btn btn-primary btn-block" id="login_submit" value="submit" name="student_login">
												<h4>Doesn't Have An Account? </h4> <a onclick="OpenStudentModalSignup()" href="#">Sign up</a>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

										</div>

									</div>
								</div>
							</div>
						</li>