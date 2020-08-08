						<li class="nav-item  col-xs-6 mb-2">
							<button type="button" class="btn btn-outline-dark mr-2" data-toggle="modal" data-target="#exampleModal1" style="border:none;color:#c0daf1;">
								Teacher Login
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Teacher Login</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form id="teacher_login_form" name="login" action="authentication/Teacherlogin.php" method="POST">
												<div class="mb-2 alert alert-danger error-email-teacher-password" role="alert">
													Invalid Email Or Password!
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Email address</label>
													<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
													<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
													<input type="hidden" name="teacher_login">
												</div>
												<div class="form-group form-check">
													<input type="checkbox" class="form-check-input" name="remember_me" id="exampleCheck1">
													<label class="form-check-label" for="exampleCheck1">Remember Me</label>
												</div>
												<input type="submit" class="btn btn-primary btn-block" value="submit" name="teacher_login">
												<h5>Doesn't Have An Account?</h5> <a onclick="OpenTeacherModalSignup()" href="#">Sign up</a>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

										</div>
									</div>
								</div>
							</div>
						</li>