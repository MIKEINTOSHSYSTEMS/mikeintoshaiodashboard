function init_todoList(todolist, ticketid) {
    (function($) {
        'use strict';
        $(function() {
            $(".todoList .card-title").click(function() {
                var fa = $(this).find(".fa.caretfa");
                if (fa.hasClass("fa-caret-down")) {
                    $(".todoList").addClass("open");
                    fa.removeClass("fa-caret-down");
                    fa.addClass("fa-caret-up");
                    $(".fa.status").hide();
                    $('.todo-list-input').focus();
                } else if (fa.hasClass("fa-caret-up")) {
                    $(".todoList").removeClass("open");
                    fa.removeClass("fa-caret-up");
                    fa.addClass("fa-caret-down");
                    $(".fa.status").show();
                }
            });

            function setListStatusIcon() {
                $(".card-title .fa.status").html("");
                var todoListItem = $('.todo-list');
                /* empty list, tasks in process, all tasks completed */
                var icon = "fa status fa-file-o";
                var itemscount = todoListItem.find("li").size();
                if (itemscount > 0) {
                    icon = "fa status fa-tasks-new";
                    if (itemscount === todoListItem.find("li.completed").size())
                        icon = "fa status fa-check";
                }
                $(".card-title .fa.status").attr("class", icon);
                if ($(".card-title .fa.status").hasClass("fa-tasks-new")) {
                    $(".card-title .fa.status").html('<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tasks" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-tasks fa-w-16 fa-2x"><path fill="#EC2424" d="M139.61 35.5a12 12 0 0 0-17 0L58.93 98.81l-22.7-22.12a12 12 0 0 0-17 0L3.53 92.41a12 12 0 0 0 0 17l47.59 47.4a12.78 12.78 0 0 0 17.61 0l15.59-15.62L156.52 69a12.09 12.09 0 0 0 .09-17zm0 159.19a12 12 0 0 0-17 0l-63.68 63.72-22.7-22.1a12 12 0 0 0-17 0L3.53 252a12 12 0 0 0 0 17L51 316.5a12.77 12.77 0 0 0 17.6 0l15.7-15.69 72.2-72.22a12 12 0 0 0 .09-16.9zM64 368c-26.49 0-48.59 21.5-48.59 48S37.53 464 64 464a48 48 0 0 0 0-96zm432 16H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z" class=""></path></svg>');
                }

            }
            var htmlItem = "<li data-id='{id}' class='{completed}'><div class='form-check'>";
            htmlItem += "<label class='form-check-label'><input class='checkbox' type='checkbox' {checked} />{item}<i class='input-helper'></i></label></div><i class='remove mdi mdi-close-circle-outline'></i></li>";
            var todoListItem = $('.todo-list');
            var todoListInput = $('.todo-list-input');

            $.each(todolist, function(i, todo) {
                var appItem = htmlItem.replace("{item}", todo.task);
                appItem = appItem.replace("{id}", todo.id);
                if (parseInt(todo.completed) == 1) {
                    appItem = appItem.replace("{completed}", "completed");
                    appItem = appItem.replace("{checked}", "checked");
                }
                todoListItem.append(appItem);
            });
            setListStatusIcon();
            $('.todo-list-add-btn').on("click", addItem);
            $('.todo-list-input').on("keypress", function(event) {
                if (event.which == 13) { //enter
                    addItem(event);
                }
            });

            function addItem(event) {
                event.preventDefault();
                var item = $('.todo-list-input').val();
                if (item) {
                    item = $('<div>').text(item).html();
                    var itemhtml = htmlItem.replace("{item}", item);

                    todoListInput.val("");
                    $.get(Runner.pages.getUrl("hd_messages", "list"), { todoItem: item, ticketid: ticketid }, function(todoid) {
                        todoListItem.append(itemhtml.replace("{id}", todoid));
                        setListStatusIcon();
                    });
                }
            }

            todoListItem.on('change', '.checkbox', function() {
                if ($(this).attr('checked')) {
                    $(this).removeAttr('checked');
                } else {
                    $(this).attr('checked', 'checked');
                }
                $(this).closest("li").toggleClass('completed');
                var tid = $(this).parents("li").data("id");

                $.get(Runner.pages.getUrl("hd_messages", "list"), { updateTodo: tid, status: ($(this).closest("li").hasClass('completed') ? 1 : 0) });
                setListStatusIcon();
            });

            todoListItem.on('click', '.remove', function() {
                var tid = $(this).parents("li").data("id");
                $.get(Runner.pages.getUrl("hd_messages", "list"), { deleteTodo: tid });
                $(this).parent().remove();
                setListStatusIcon();
            });

        });
    })(jQuery);
}