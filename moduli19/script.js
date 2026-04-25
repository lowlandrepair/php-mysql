$(document).ready(function() {

  // Animate form elements on load
  $('.form-group').each(function(index) {
    $(this).css({
      'opacity': '0',
      'transform': 'translateX(-20px)'
    }).delay(index * 100).animate({
      'opacity': '1',
      'transform': 'translateX(0)'
    }, 400);
  });

  // Password field animations
  $('#reg_userpassword').on('focus', function() {
    $(this).closest('.form-group').addClass('focused');
  }).on('blur', function() {
    $(this).closest('.form-group').removeClass('focused');
  });

  $('#reg_userpassword').keyup(function() {
    var password = $(this).val();

    if (password.length > 0) {
      $('#reg_passwordrules').slideDown(300).removeClass('hide');
      $('#reg-password-strength').fadeIn(300).removeClass('hide');
    } else {
      $('#reg_passwordrules').slideUp(200).addClass('hide');
      $('#reg-password-quality').fadeOut(200).addClass('hide');
      $('#reg-password-quality-result').fadeOut(200).addClass('hide');
      $('#reg-password-strength').fadeOut(200).addClass('hide');
    }

    checkStrength(password);
    validateForm();
  });

  // Password confirm validation with animation
  $('#reg_userpasswordconfirm').on('input blur', function() {
    validatePasswordMatch();
  });

  function validatePasswordMatch() {
    var password = $('#reg_userpassword').val();
    var confirm = $('#reg_userpasswordconfirm').val();

    if (confirm.length > 0 && password !== confirm) {
      $('#error-confirmpassword').hide().removeClass('hide').slideDown(300);
      shakeElement($('#reg_userpasswordconfirm'));
    } else {
      $('#error-confirmpassword').slideUp(200, function() {
        $(this).addClass('hide');
      });
    }
    validateForm();
  }

  // Input field focus effects
  $('input, select').on('focus', function() {
    $(this).parent().addClass('input-focused');
  }).on('blur', function() {
    $(this).parent().removeClass('input-focused');
  });

  // Form validation
  function validateForm() {
    var password = $('#reg_userpassword').val();
    var confirm = $('#reg_userpasswordconfirm').val();
    var username = $('#reg_username').val();
    var email = $('#reg_useremail').val();

    var isPasswordValid = checkStrength(password) === 'Strong' || checkStrength(password) === 'Week';
    var isMatch = password === confirm && confirm.length > 0;
    var hasUsername = username.length > 0;
    var hasEmail = email.length > 0 && email.includes('@');

    if (isPasswordValid && isMatch && hasUsername && hasEmail) {
      $('#reg_submit').prop('disabled', false).addClass('btn-ready');
    } else {
      $('#reg_submit').prop('disabled', true).removeClass('btn-ready');
    }
  }

  // Check all fields on any input
  $('#reg_username, #reg_useremail').on('input', validateForm);

  // Submit button popover
  $('#reg_submit').hover(function() {
    if ($(this).prop('disabled')) {
      $(this).popover({
        html: true,
        trigger: 'hover',
        placement: 'bottom',
        content: function() {
          return $('#sign-up-popover').html();
        }
      }).popover('show');
    }
  }, function() {
    $(this).popover('hide');
  });

  // Shake animation helper
  function shakeElement(element) {
    element.addClass('shake-animation');
    setTimeout(function() {
      element.removeClass('shake-animation');
    }, 500);
  }

  function checkStrength(password) {
    var strength = 0;

    // Check lowercase & uppercase
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
      strength += 1;
      animateCheck($('.low-upper-case'), true);
    } else {
      animateCheck($('.low-upper-case'), false);
    }

    // Check numbers
    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
      strength += 1;
      animateCheck($('.one-number'), true);
    } else {
      animateCheck($('.one-number'), false);
    }

    // Check special characters
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
      strength += 1;
      animateCheck($('.one-special-char'), true);
    } else {
      animateCheck($('.one-special-char'), false);
    }

    // Check length
    if (password.length > 7) {
      strength += 1;
      animateCheck($('.eight-character'), true);
    } else {
      animateCheck($('.eight-character'), false);
    }

    // Animate progress bar
    var $progressBar = $('#password-strength');
    var $result = $('#reg-password-quality-result');

    if (strength < 2) {
      $progressBar.removeClass('progress-bar-warning progress-bar-success').addClass('progress-bar-danger');
      $result.removeClass().addClass('text-danger').hide().text('weak').fadeIn(300);
      $progressBar.animate({ width: '10%' }, 400);
    } else if (strength === 2 || strength === 3) {
      $progressBar.removeClass('progress-bar-danger progress-bar-success').addClass('progress-bar-warning');
      $result.removeClass().addClass('text-warning').hide().text('fair').fadeIn(300);
      $progressBar.animate({ width: '60%' }, 400);
      return 'Week';
    } else if (strength === 4) {
      $progressBar.removeClass('progress-bar-danger progress-bar-warning').addClass('progress-bar-success');
      $result.removeClass().addClass('text-success').hide().text('strong').fadeIn(300);
      $progressBar.animate({ width: '100%' }, 400);
      return 'Strong';
    }

    $('#reg-password-quality').removeClass('hide').fadeIn(300);
  }

  function animateCheck($element, isValid) {
    if (isValid) {
      if (!$element.hasClass('text-success')) {
        $element.addClass('text-success').hide().fadeIn(300);
        $element.find('i').addClass('fa-check-circle').removeClass('fa-circle-o');
      }
    } else {
      $element.removeClass('text-success');
      $element.find('i').removeClass('fa-check-circle').addClass('fa-circle-o');
    }
  }

  // Social button hover effects
  $('.btn-fb, .btn-tw').hover(function() {
    $(this).find('i').addClass('fa-bounce');
  }, function() {
    $(this).find('i').removeClass('fa-bounce');
  });

});

function togglePassword() {
  var element = document.getElementById('reg_userpassword');
  var $icon = $('#button-append1 i');

  if (element.type === 'password') {
    element.type = 'text';
    $icon.removeClass('fa-eye').addClass('fa-eye-slash');
  } else {
    element.type = 'password';
    $icon.removeClass('fa-eye-slash').addClass('fa-eye');
  }
  $icon.hide().fadeIn(200);
}

function toggleConfirmPassword() {
  var element = document.getElementById('reg_userpasswordconfirm');
  var $icon = $('#button-append2 i');

  if (element.type === 'password') {
    element.type = 'text';
    $icon.removeClass('fa-eye').addClass('fa-eye-slash');
  } else {
    element.type = 'password';
    $icon.removeClass('fa-eye-slash').addClass('fa-eye');
  }
  $icon.hide().fadeIn(200);
}
