var $formInput = $("form .form-input");
var $toggleWarnings = $("form .toggle-warnings");
var $formSubmit = $("form input[type=submit]");
var $toggleTheme = $("form .toggle-theme");

$toggleWarnings.click(function() {
  $formInput.toggleClass("warning");
});

$toggleTheme.click(function() {
  $("body").toggleClass("dark");
});

$formInput.focusout(function() {
  if ($(this).children("input, textarea").val().length > 0) {
    $(this).addClass("focused");
  } else {
    $(this).removeClass("focused");
  }
});

$formSubmit.click(function(e) {
  e.preventDefault();
});