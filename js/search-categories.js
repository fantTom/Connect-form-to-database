$(document).ready(function () {

    //Категории рубрик
    function formatState (state) {
        if (!state.id) {
            return state.text;
        }
        var $state = $(
            '<span>' + state.text + ' <span class="parents">/ ' + state.parent1 + ',&nbsp;' + state.parent2 + '</span>' + '</span>'
        );
        return $state;
    }

    if ($(".select2").length) {
        $(".select2").select2({
            ajax: {
                url: 'controller/searchcategories.php',
                dataType: 'json',
                delay: 250,
                processResults: function (data, params) {
                    return  {
                        results: data
                    };
                },
                cache: true
            },
            language: "ru",
            minimumInputLength: 3,
            placeholder: "Выберите рубрику",
            multiple: true,
            templateResult: formatState,
        });

    }
});

