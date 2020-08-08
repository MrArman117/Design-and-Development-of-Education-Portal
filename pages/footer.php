<footer class="footer text-center bg-dark">
		<a href="https://www.facebook.com/ItsArman117"><img width="4%" src="/pages/img/fb.png" alt="fb"></a>
		<a href="https://twitter.com/armanhossen811"><img width="5%" src="/pages/img/twitter.png" alt="twitter"></a>
		<a href="https://www.linkedin.com/in/md-arman-hossain-655a6a123/"><img width="4%" src="/pages/img/linkedin.png" alt="linkedin"></a><br>
		<small class="">Copyright &copy; by RAMR Education
		</small>
	</footer>
	<script>
		// $('pre').hide();
		$(document).ready(function() {
			$('pre').remove();
		});
		$('.error-email-password').addClass('hidden');
		$('.error-email-teacher-password').addClass('hidden');
		var valid;

		function OpenStudentModalSignup() {
			$('#exampleModal1Student').modal('hide');
			$('#exampleModalStudent').modal('show');
		}

		function OpenTeacherModalSignup() {
			$('#exampleModal1').modal('hide');
			$('#exampleModal').modal('show');
		}
		$('#student_login_form').on('submit', function(e) {
			e.preventDefault();
			// checkemail($('#login_email'));
			$.ajax({
				url: '/ajax/check_email.php',
				type: "post",
				data: {
					email: $('#login_email').val(),
					password: $('#login_password').val()
				},
				async: false,
				success: function(ok) {
					if (ok == 't') {
						$('.error-email-password').addClass('hidden');
						valid = true;
					}
					if (ok == 'f') {
						$('.error-email-password').removeClass('hidden');
						$('.error-email-password').addClass('show');
						valid = false;
					}
				}
			});
			console.log(valid);
			if (valid) {
				$(this).get(0).submit();
			}

		});
		$('#teacher_login_form').on('submit', function(e) {
			e.preventDefault();
			// checkemail($('#login_email'));
			$.ajax({
				url: '/ajax/check_email_teacher.php',
				type: "post",
				data: {
					email: $('#exampleInputEmail1').val(),
					password: $('#exampleInputPassword1').val()
				},
				async: false,
				success: function(ok) {
					if (ok == 't') {
						$('.error-email-teacher-password').addClass('hidden');
						valid = true;
					}
					if (ok == 'f') {
						$('.error-email-teacher-password').removeClass('hidden');
						$('.error-email-teacher-password').addClass('show');
						valid = false;
					}
				}
			});
			console.log(valid);
			if (valid) {
				$(this).get(0).submit();
			}

		});
	</script>
	</body>

	</html>