// Burger Button Menu Toggle
const toggleBtn = document.querySelector('.nav_mobile_burger_toggle');

toggleBtn.addEventListener('click', () => {
  toggleBtn.classList.toggle('active');
})


// Trade With Us PopUp
function closeForm() {
    $('.form-popup-bg').removeClass('is-visible');
  }
  
  $(document).ready(function($) {
    
    /* Contact Form Interactions */
    $('#btnOpenForm').on('click', function(event) {
      event.preventDefault();
  
      $('.form-popup-bg').addClass('is-visible');
    });
    
      //close popup when clicking x or off popup
    $('.form-popup-bg').on('click', function(event) {
      if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
        event.preventDefault();
        $(this).removeClass('is-visible');
      }
    });
         
});


// Select Country
function create_custom_dropdowns() {
    $('select').each(function (i, select) {
        if (!$(this).next().hasClass('dropdown-select')) {
            $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
            var dropdown = $(this).next();
            var options = $(select).find('option');
            var selected = $(this).find('option:selected');
            dropdown.find('.current').html(selected.data('display-text') || selected.text());
            options.each(function (j, o) {
                var display = $(o).data('display-text') || '';
                dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
            });
        }
    });

}

// Event listeners

// Open/close
$(document).on('click', '.dropdown-select', function (event) {
    if($(event.target).hasClass('dd-searchbox')){
        return;
    }
    $('.dropdown-select').not($(this)).removeClass('open');
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $(this).find('.option').attr('tabindex', 0);
        $(this).find('.selected').focus();
    } else {
        $(this).find('.option').removeAttr('tabindex');
        $(this).focus();
    }
});

// Close when clicking outside
$(document).on('click', function (event) {
    if ($(event.target).closest('.dropdown-select').length === 0) {
        $('.dropdown-select').removeClass('open');
        $('.dropdown-select .option').removeAttr('tabindex');
    }
    event.stopPropagation();
});

// Option click
$(document).on('click', '.dropdown-select .option', function (event) {
    $(this).closest('.list').find('.selected').removeClass('selected');
    $(this).addClass('selected');
    var text = $(this).data('display-text') || $(this).text();
    $(this).closest('.dropdown-select').find('.current').text(text);
    $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown-select', function (event) {
    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
    // Space or Enter
    //if (event.keyCode == 32 || event.keyCode == 13) {
    if (event.keyCode == 13) {
        if ($(this).hasClass('open')) {
            focused_option.trigger('click');
        } else {
            $(this).trigger('click');
        }
        return false;
        // Down
    } else if (event.keyCode == 40) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            focused_option.next().focus();
        }
        return false;
        // Up
    } else if (event.keyCode == 38) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
            focused_option.prev().focus();
        }
        return false;
        // Esc
    } else if (event.keyCode == 27) {
        if ($(this).hasClass('open')) {
            $(this).trigger('click');
        }
        return false;
    }
});

$(document).ready(function () {
    create_custom_dropdowns();
});


// SEND EMAIL
const constraints = {
    name: {
        presence: {allowEmpty: false}
    },
    email: {
        presence: {allowEmpty: false},
        email: true
    },
    message: {
        presence: {allowEmpty: false}
    }
};

const form = document.getElementById('contact-form');

form.addEventListener('submit', function (event) {
    const formValues = {
        name: form.elements.name.value,
        email: form.elements.email.value,
        message: form.elements.message.value
    };

    const errors = validate(formValues, constraints);

    if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function (fieldValues) {
                return fieldValues.join(', ')
            })
            .join("\n");

        alert(errorMessage);
    }
}, false);