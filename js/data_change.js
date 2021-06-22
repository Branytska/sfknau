/* ---------------------------------------------------------------------- */
/* ------------------------------- group_type add ----------------------- */
/* ---------------------------------------------------------------------- */

$("#add_group_type").on('click', function() {
    var type_name = $('input[name=type_name]').val();
    var proceed = true;
    if (type_name == "") {
        $('#input_data').addClass('has-error');
        proceed = false;
    }

    if (proceed) {
        //data to be sent to server
        var post_data = {
            'type_name': type_name
        };
        var output;
            //Ajax post data to server
        $.post('../dovidka_db/add_group_type.php', post_data, function(response){
            if (response == "error") {
                output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
            } else{
                output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                setTimeout(function(){location.href="group_type.php"} , 1000);
            }
        }, 'json');
    }
});
/* ---------------------------------------------------------------------- */
/* ------------------------------- group_type del ----------------------- */
/* ---------------------------------------------------------------------- */

$("#del_group_type").on('click', function() {
    var arr = new Array();
    
    $("input[name=del]:checked").each(function () {
        arr.push($(this).attr("value"));
    });
    var proceed = true;
    
    if (arr.length == "") {
        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Для видалення потрібно обрати хоча б один запис! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
        proceed = false;
    }
    const result = confirm('Видалити записи?');
    if (result) {
        if (proceed) {
            for (var i = arr.length - 1; i >= 0; i--) {
            //data to be sent to server
                var post_data = {
                    'id': arr[i]
                };
                var output;

            //Ajax post data to server
                $.post('../dovidka_db/del_group_type.php', post_data, function(response){
                    if (response == 'error') {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Виникла помилка при видаленні! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно видалено! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                        setTimeout(function(){location.href="group_type.php"} , 1000);
                    }
                }, 'json');
            }
        }
    }
});
/* ---------------------------------------------------------------------- */
/* ----------------------- types_of_activities add ---------------------- */
/* ---------------------------------------------------------------------- */

$("#add_types_of_activities").on('click', function() {
    var activitie_name = $('input[name=activitie_name]').val();
    var proceed = true;
    if (activitie_name == "") {
        $('#input_data').addClass('has-error');
        proceed = false;
    }

    if (proceed) {
            //data to be sent to server
        var post_data = {
            'activitie_name': activitie_name
        };
        var output;
            //Ajax post data to server
        $.post('../dovidka_db/add_types_of_activities.php', post_data, function(response){
            if (response == 'error') {
                output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
            } else{
                output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                setTimeout(function(){location.href="types_of_activities.php"} , 1000);
            }
        }, 'json');
    }
});
/* ---------------------------------------------------------------------- */
/* ----------------------- types_of_activities dell ---------------------- */
/* ---------------------------------------------------------------------- */

$("#del_types_of_activities").on('click', function() {
    var arr = new Array();
    $("input[name=del]:checked").each(function () {
        arr.push($(this).attr("value"));
    });
    var proceed = true;
    
    if (arr.length == "") {
            output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Для видалення потрібно обрати хоча б один запис! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
            proceed = false;
    }
    const result = confirm('Видалити записи?');
        if (result) {
        if (proceed) {
            for (var i = arr.length - 1; i >= 0; i--) {
            //data to be sent to server
                var post_data = {
                    'id': arr[i]
                };
                var output;

            //Ajax post data to server
                $.post('../dovidka_db/del_types_of_activities.php', post_data, function(response){
                    if (response == 'error') {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Виникла помилка при видаленні! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно видалено! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                        setTimeout(function(){location.href="types_of_activities.php"} , 1000);
                    }
                }, 'json');
            }
        }
    }

});
/* ---------------------------------------------------------------------- */
/* ----------------- types_of_additional_activities add ----------------- */
/* ---------------------------------------------------------------------- */

$("#add_types_of_additional_activities").on('click', function() {
    var additional_name = $('input[name=additional_name]').val();coefficient
    var coefficient = $('input[name=coefficient]').val();
    var proceed = true;
    if (additional_name == "") {
        $('#input_data').addClass('has-error');
        proceed = false;
    }
    if (coefficient == "") {
        $('#input_data').addClass('has-error');
        proceed = false;
    }

    if (proceed) {
            //data to be sent to server
        var post_data = {
            'additional_name': additional_name,
            'coefficient': coefficient
        };
        var output;
            //Ajax post data to server
        $.post('../dovidka_db/add_types_of_additional_activities.php', post_data, function(response){
            if (response == 'error') {
                output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
            } else{
                output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                setTimeout(function(){location.href="types_of_additional_activities.php"} , 1000);
            }
        }, 'json');
    }
});
/* ---------------------------------------------------------------------- */
/* ----------------- types_of_additional_activities dell ---------------- */
/* ---------------------------------------------------------------------- */

$("#del_types_of_additional_activities").on('click', function() {
    var arr = new Array();
    $("input[name=del]:checked").each(function () {
        arr.push($(this).attr("value"));
    });
    var proceed = true;
    
    if (arr.length == "") {
            output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Для видалення потрібно обрати хоча б один запис! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
            proceed = false;
    }
    const result = confirm('Видалити записи?');
    if (result) {
        if (proceed) {
            for (var i = arr.length - 1; i >= 0; i--) {
            //data to be sent to server
                var post_data = {
                    'id': arr[i]
                };
                var output;

            //Ajax post data to server
                $.post('../dovidka_db/del_types_of_additional_activities.php', post_data, function(response){
                    if (response == 'error') {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Виникла помилка при видаленні! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно видалено! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                        setTimeout(function(){location.href="types_of_additional_activities.php"} , 1000);
                    }
                }, 'json');
            }
        }
    }

});

/* ---------------------------------------------------------------------- */
/* ------------------------------- subject add -------------------------- */
/* ---------------------------------------------------------------------- */

$("#add_subjects").on('click', function() {
    var subject_name = $('input[name=subject_name]').val();
    var proceed = true;
    if (subject_name == "") {
        $('#input_data').addClass('has-error');
        proceed = false;
    }

    if (proceed) {
            //data to be sent to server
        var post_data = {
            'subject_name': subject_name
        };
        var output;
            //Ajax post data to server
        $.post('../dovidka_db/add_subjects.php', post_data, function(response){
            if (response == 'error') {
                output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
            } else{
                output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
                setTimeout(function(){location.href="subjects.php"} , 1000);
            }
        }, 'json');
    }
});

/* ---------------------------------------------------------------------- */
/* ------------------------------- subject add add ---------------------- */
/* ---------------------------------------------------------------------- */

$("#add_subjects_add").on('click', function() {
    var subject_name = $('input[name=subject_name]').val();
    var proceed = true;
    if (subject_name == "") {
        $('#input_data').addClass('has-error');
        proceed = false;
    }

    if (proceed) {
            //data to be sent to server
        var post_data = {
            'subject_name': subject_name
        };
        var output;
            //Ajax post data to server
        $.post('../dovidka_db/add_subjects.php', post_data, function(response){
            if (response == 'error') {
                output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
            } else{
                output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                $("#result_add").hide().html(output).slideDown().delay(500).slideUp();
            }
        }, 'json');
    }
});

/* ---------------------------------------------------------------------- */
/* ------------------------------- subject del -------------------------- */
/* ---------------------------------------------------------------------- */

$("#del_subjects").on('click', function() {
    var arr = new Array();
    $("input[name=del]:checked").each(function () {
        arr.push($(this).attr("value"));
    });
    var proceed = true;
    
    if (arr.length == "") {
            output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Для видалення потрібно обрати хоча б один запис! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
            proceed = false;
    }
    const result = confirm('Видалити записи?');
    if (result) {
        if (proceed) {
            for (var i = arr.length - 1; i >= 0; i--) {
            //data to be sent to server
                var post_data = {
                    'id': arr[i]
                };
                var output;

            //Ajax post data to server
                $.post('../dovidka_db/del_subjects.php', post_data, function(response){
                    if (response == 'error') {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Виникла помилка при видаленні! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно видалено! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                        setTimeout(function(){location.href="subjects.php"} , 2000);
                    }
                }, 'json');
            }
        }
    }

});

/* ---------------------------------------------------------------------- */
/* ------------------------------- study_groups add --------------------- */
/* ---------------------------------------------------------------------- */

$("#add_study_groups").on('click', function() {
        var group_name = $('input[name=group_name]').val();
        var group_type = document.getElementById("group_type").value;
        var proceed = true;
        if (group_name == "") {
            $('#input_data').addClass('has-error');
            proceed = false;
        }

        if (proceed) {
            //data to be sent to server
            var post_data = {
                'group_name': group_name,
                'group_type': group_type
            };
            var output;
            //Ajax post data to server
            $.post('../dovidka_db/add_study_groups.php', post_data, function(response){
                    if (response == "error") {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                        setTimeout(function(){location.href="study_groups.php"}, 2000);
                    }
            }, 'json');
        }
    });

/* ---------------------------------------------------------------------- */
/* ------------------------------- study_groups del --------------------- */
/* ---------------------------------------------------------------------- */
$("#del_study_groups").on('click', function() {
    var arr = new Array();
    $("input[name=del]:checked").each(function () {
        arr.push($(this).attr("value"));
    });
    var proceed = true;
    
    if (arr.length == "") {
            output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Для видалення потрібно обрати хоча б один запис! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
            proceed = false;
    }
    const result = confirm('Видалити записи?');
    if (result) {
        if (proceed) {
            for (var i = arr.length - 1; i >= 0; i--) {
            //data to be sent to server
                var post_data = {
                    'id': arr[i]
                };
                var output;

            //Ajax post data to server
                $.post('../dovidka_db/del_study_groups.php', post_data, function(response){
                    if (response == 'error') {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Виникла помилка при видаленні! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно видалено! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                        setTimeout(function(){location.href="study_groups.php"} , 2000);
                    }
                }, 'json');
            }
        }
    }

});


/* ---------------------------------------------------------------------- */
/* --------------------------------- teachers add ----------------------- */
/* ---------------------------------------------------------------------- */

$("#add_teachers").on('click', function() {
        var teacher_name = $('input[name=teacher_name]').val();
        var proceed = true;
        if (teacher_name == "") {
            $('#input_data').addClass('has-error');
            proceed = false;
        }

        if (proceed) {
            //data to be sent to server
            var post_data = {
                'teacher_name': teacher_name
            };
            var output;
            //Ajax post data to server
            $.post('../dovidka_db/add_teachers.php', post_data, function(response){
                    if (response == "error") {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                        setTimeout(function(){location.href="teachers.php"}, 2000);
                    }
            }, 'json');
        }
    });

/* ---------------------------------------------------------------------- */
/* ------------------------------- teachers del ------------------------- */
/* ---------------------------------------------------------------------- */
$("#del_teachers").on('click', function() {
    var arr = new Array();
    $("input[name=del]:checked").each(function () {
        arr.push($(this).attr("value"));
    });
    var proceed = true;
    
    if (arr.length == "") {
            output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Для видалення потрібно обрати хоча б один запис! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
            proceed = false;
    }
    const result = confirm('Видалити записи?');
    if (result) {
        if (proceed) {
            for (var i = arr.length - 1; i >= 0; i--) {
            //data to be sent to server
                var post_data = {
                    'id': arr[i]
                };
                var output;

            //Ajax post data to server
                $.post('../dovidka_db/del_teachers.php', post_data, function(response){
                    if (response == 'error') {
                        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Виникла помилка при видаленні! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                    } else{
                        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно видалено! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
                        $("#result_add").hide().html(output).slideDown().delay(1000).slideUp();
                        setTimeout(function(){location.href="teachers.php"} , 2000);
                    }
                }, 'json');
            }
        }
    }

});

/* ---------------------------------------------------------------------- */
/* ------------------------------- raport day add ----------------------- */
/* ---------------------------------------------------------------------- */
$("#add_raport_day").on('click', function() {
    var output;
    var date = $('input[name=calendar]').val();
    var group = $('#group').val();
    var proceed = true;

    if (date == "") {
        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Вкажіть дату! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
        $("#result").hide().html(output).slideDown().delay(1000).slideUp();
        proceed = false;
    }else{
        if (group == 'null') {
            output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Вкажіть групу! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
            $("#result").hide().html(output).slideDown().delay(1000).slideUp();
            proceed = false;
        }
    }
    var check = false;
    for (var i = 0; i <=5; i++) {
        var subject = $('#subject'+i).val();
        var activity = $('#activity'+i).val();
        var teacher = $('#teacher'+i).val();
        if (subject != 'null' && activity != 'null' && teacher != 'null') {
            check = true;
        }
    }

    if (check == false && proceed == true) {
        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Введіть повні данні хоча б для однієї пари! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
        $("#result").hide().html(output).slideDown().delay(1000).slideUp();
    }

    if (proceed && check) {
        var chek = false;
        for (var i = 0; i <=5; i++) {
            var lesson = i;
            subject = $('#subject'+i).val();
                                console.log(subject);
            activity = $('#activity'+i).val();
            teacher = $('#teacher'+i).val();
            if ($('#several'+i).is(":checked")){
                var several = true;
            }else{
                var several = false;
            }
            var post_data = {
                'date': date,
                'group': group,
                'lesson': lesson,
                'subject': subject,
                'activity': activity,
                'teacher': teacher,
                'several': several
            };

            $.post('../raport_db/add_raport_day.php', post_data, function(response){
                }, 'json');
                chek = true;
            var lesson = 'null';
            var subject = 'null';
            var activity = 'null';
            var teacher = 'null';
        }

        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
        $("#result").hide().html(output).slideDown().delay(1000).slideUp();

        for (var i = 0; i <=5; i++) {
            clearSelection('subject'+i);
            clearSelection('activity'+i);
            clearSelection('teacher'+i);
        }
        clearSelection('group');

    }
    
});

/* ---------------------------------------------------------------------- */
/* ------------------------------- raport day week----------------------- */
/* ---------------------------------------------------------------------- */
$("#add_raport_week").on('click', function() {
    var output;
    var date = $('input[name=calendar]').val();
    var group = $('#group').val();
    var proceed = true;

    if (date == "") {
        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Вкажіть дату! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
        $("#result").hide().html(output).slideDown().delay(1000).slideUp();
        proceed = false;
    }else{
        if (group == 'null') {
            output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Вкажіть групу! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
            $("#result").hide().html(output).slideDown().delay(1000).slideUp();
            proceed = false;
        }
    }
    var check = false;
    for (var i = 0; i <=5; i++) {
        var subject = $('#subject'+i).val();
        var activity = $('#activity'+i).val();
        var teacher = $('#teacher'+i).val();
        if (subject != 'null' && activity != 'null' && teacher != 'null') {
            check = true;
        }
    }

    if (check == false && proceed == true) {
        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Введіть повні данні хоча б для однієї пари! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
        $("#result").hide().html(output).slideDown().delay(1000).slideUp();
    }

    if (proceed && check) {
        var chek = false;
        for (var i = 0; i <=5; i++) {
            var lesson = i;
            subject = $('#subject'+i).val();
                                console.log(subject);
            activity = $('#activity'+i).val();
            teacher = $('#teacher'+i).val();
            if ($('#several'+i).is(":checked")){
                var several = true;
            }else{
                var several = false;
            }
            var post_data = {
                'date': date,
                'group': group,
                'lesson': lesson,
                'subject': subject,
                'activity': activity,
                'teacher': teacher,
                'several': several
            };

            $.post('../raport_db/add_raport_day.php', post_data, function(response){
                }, 'json');
                chek = true;
            var lesson = 'null';
            var subject = 'null';
            var activity = 'null';
            var teacher = 'null';
        }

        output = '<div class="alert bg-success" role="alert"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Запис успішно додано! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
        $("#result").hide().html(output).slideDown().delay(1000).slideUp();

        for (var i = 0; i <=5; i++) {
            clearSelection('subject'+i);
            clearSelection('activity'+i);
            clearSelection('teacher'+i);
        }
        clearSelection('group');

    }
    
});

/* ---------------------------------------------------------------------- */
/* ------------------------------- result raport day--------------------- */
/* ---------------------------------------------------------------------- */
function valid_day(f){
    var output;
    var date_from = $('input[name="from_date"]').val();
    var date_to = $('input[name="to_date"]').val();
    var teacher = $('select[name=teacher]').val();
    var proceed = true;
    if (date_from == "" || date_to == "" || teacher == "null") {
        output = '<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Вкажіть всі данні! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
        $("#result").hide().html(output).slideDown().delay(1000).slideUp();
        proceed = false;
    }else{
        f.submit();
    }
};


function clearSelection(select) {
  //This will select the first option of the select
  document.getElementById(select).options[0].selected = 'selected';
}
