
var handle_dependent_selects = function($metal) {
    var $category = document.getElementById($metal.getAttribute('data-category-id')),
        $selected = $metal.options[$metal.selectedIndex],
        metal_val = $selected.value;

    for (var i=0; i<$category.options.length; i++) {
        var $option = $category.options[i];
        if($option.value != '') {
            $option.setAttribute('hidden',true);
        }
    };

    if(metal_val) {
        var category_options = $selected.getAttribute('data-category-options'),
            category_options_array = category_options.split('|#');
        
        for (i=0; i<$category.options.length; i++) {
            var $option = $category.options[i];
            if ($option.value == "") {
                $option.innerText = "Select one";
                continue;
            }
            if(category_options_array.indexOf($option.value) != -1) {
                $option.removeAttribute('hidden');
            }
        };

    } else {
        var show_text = $category.getAttribute('data-text-if-metal-empty');
        if(!show_text) {
            show_text = 'Select ' + $metal.name;
        }
        for (i=0; i<$category.options.length; i++) {
            var $option = $category.options[$category.selectedIndex];
            if ($option.value == "") {
                $option.innerText = '- ' + show_text + ' -';
                break;
            }
        };
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var $metals = document.getElementsByClassName('dependent-selects__metal');
    for (var i=0; i<$metals.length; i++) {
        handle_dependent_selects($metals[i]);
        $metals[i].addEventListener('change', function() {
            handle_dependent_selects(this)
        })
    }
}, false);