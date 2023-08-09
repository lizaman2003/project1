const myToast = document.getElementById("notify");
const notify = bootstrap.Toast.getOrCreateInstance(myToast);

function formAction(form, action) {
    action.preventDefault();
    let idForm = $(form).attr("id");

    $.post({
        url: $(form).attr("action"),
        data: $(form).serialize(),
        success: (res) => {
            if (res.success == "success") {
                window.location.href = "/";
            }
        },
        error: (res) => {
            $("form#" + idForm + " div.ivalid-feedback").text("");
            $("form#" + idForm + " input").removeClass("is-invalid");
            $.each(res.responseJSON, (index, value) => {
                $("form#" + idForm + " div#" + index + "Error").text(value);
                $("form#" + idForm + " input#" + index + "Input").addClass(
                    "is-invalid"
                );
            });
        },
    });
}
function login1(form, action1) {
    action1.preventDefault();
    let idForm = $(form).attr("id");

    $.post({
        url: $(form).attr("action"),
        data: $(form).serialize(),
        success: (res) => {
            if (res.success == "success") {
                window.location.href = "/";
            }
            if (res.success == "admin") {
                window.location.href = "/";
            }
        },
        error: (res) => {
            if (res.responseJSON["error"] == "error") {
                $("form#" + idForm + " input").addClass("is-invalid");
                $("form#" + idForm + " div#login1Error").text("");
                $("form#" + idForm + " div#password1Error").text(
                    "Неверный логин или пароль"
                );
            } else {
                $("form#" + idForm + " div.invalid-feedback").text("");
                $("form#" + idForm + " input").removeClass("is-invalid");
                $.each(res.responseJSON, (index, value) => {
                    $("form#" + idForm + " div#" + index + "Error").text(value);
                    $("form#" + idForm + " input#" + index + "Input").addClass(
                        "is-invalid"
                    );
                });
            }
        },
    });
}

function filter(t) {
    let id_level = $(t).val();
    $.ajax({
        url: "/filter",
        type: "GET",
        data: { id_level: id_level },
        success: function (res) {
            $("div#material").html(res);
        },
    });
}
function filterlesson(t) {
    let time = $(t).val();
    $.ajax({
        url: "/filter_lesson",
        type: "GET",
        data: { time: time },
        success: function (res) {
            $("div#lesson").html(res);
        },
    });
}
window.onscroll = function () {
    let scrollElem = document.getElementById("scrollToTop");
    if (
        document.documentElement.scrollTop >
        document.documentElement.clientHeight
    ) {
        scrollElem.style.opacity = "1";
    } else {
        scrollElem.style.opacity = "0";
    }
};
let timeOut;
function goUp() {
    var top = Math.max(
        document.body.scrollTop,
        document.documentElement.scrollTop
    );
    if (top > 0) {
        window.scrollBy(0, -100);
        timeOut = setTimeout("goUp()", 0);
    } else clearTimeout(timeOut);
}

function addLesson_book(lesson, type) {
    $.get({
        url: "/personal_cabinet/addLesson_book",
        data: { lesson: lesson, type: type },
        success: (res) => {
            // $("span#places1" + id).text(res.places1);
            if (res.lesson == "success") {
                setTimeout(function () {
                    window.location.href = "/personal_cabinet";
                }, 2000);
                $("div#notify > div.toast-body").text(
                    "Вы успешно записаны на занятие"
                );
                notify.show();
            }
        },
        error: (res) => {
            if (res.responseJSON.lesson == "noCount") {
                $("div#notify > div.toast-body").text(
                    "К сожалению нет столько мест"
                );
                notify.show();
            }
            if (res.responseJSON.lesson == "noUser") {
                $("div#notify > div.toast-body").text(
                    "Вы уже записаны на это занятие"
                );
                notify.show();
            }
            if (res.responseJSON.lesson == "nolevel") {
                $("div#notify > div.toast-body").text(
                    "Это занятие не вашего уровня"
                );
                notify.show();
            }
        },
    });
}

function abonement(form, action2) {
    action2.preventDefault();
    let idForm = $(form).attr("id");

    $.post({
        url: $(form).attr("action"),
        data: $(form).serialize(),
        success: (res) => {
            if (res.success == "success") {
                window.location.href = "/personal_cabinet";
            }
        },
        error: (res) => {
            if (res.responseJSON["error"] == "error") {
                $("form#" + idForm + " select").addClass("is-invalid");
            } else {
                $("form#" + idForm + " div.invalid-feedback").text("");
                $("form#" + idForm + " select").removeClass("is-invalid");
                $.each(res.responseJSON, (index, value) => {
                    $("form#" + idForm + " div#" + index + "Error").text(value);
                    $("form#" + idForm + " select#" + index + "Input").addClass(
                        "is-invalid"
                    );
                });
            }
        },
    });
}
$("button#buyabonement").on("click", function () {
    $("div#notify > div.toast-body").text(
        "Сначала зарегестрируйтесь и войдите в личный кабинет"
    );
    $("div#notify > div.toast-body").append(
        "<button data-bs-toggle='modal' data-bs-target='#auth' class='btn btn1 ms-2 btn-sm'>Перейти в модальные окна</button>"
    );
    notify.show();
});
$("button#free").on("click", function () {
    $("div#notify > div.toast-body").append(
        " <p class='phone'>Пожалуйста, созвонитесь с нашим менеджером по номеру 7 347 266-88-29<a href='tel:89872405847' class='btn btn1 btn-sm ms-2'>Позвонить сейчас</a></p>"
    );
    notify.show();
});

function newComment(form, action2) {
    action2.preventDefault();
    let idForm = $(form).attr("id");

    $.post({
        url: $(form).attr("action"),
        data: $(form).serialize(),
        success: (res) => {
            if (res.success == "success") {
                window.location.href = "/";
            }
        },
        error: (res) => {
            if (res.responseJSON["error"] == "error") {
                $("form#" + idForm + " textarea").addClass("is-invalid");
            } else {
                $("form#" + idForm + " div.invalid-feedback").text("");
                $("form#" + idForm + " textarea").removeClass("is-invalid");
                $.each(res.responseJSON, (index, value) => {
                    $("form#" + idForm + " div#" + index + "Error").text(value);
                    $(
                        "form#" + idForm + " textarea#" + index + "Input"
                    ).addClass("is-invalid");
                });
            }
        },
    });
}

function settings(form, action) {
    action.preventDefault();
    let idForm = $(form).attr("id");

    $.post({
        url: $(form).attr("action"),
        data: $(form).serialize(),
        success: (res) => {
            if (res.success == "success") {
                window.location.href = "/personal_cabinet";
            }
            if (res.success == "admin") {
                window.location.href = "/admin_panel";
            }
            if (res.success == "superadmin") {
                window.location.href = "/superadmin_panel";
            }
        },
        error: (res) => {
            $("form#" + idForm + " div.ivalid-feedback").text("");
            $("form#" + idForm + " input").removeClass("is-invalid");
            $.each(res.responseJSON, (index, value) => {
                $("form#" + idForm + " div#" + index + "Error").text(value);
                $("form#" + idForm + " input#" + index + "Input").addClass(
                    "is-invalid"
                );
            });
        },
    });
}

function selectAdmin(t, id) {
    let level = $(t).val();

    $("form#twoForm" + id).slideUp();
    $("form#two1Form" + id).slideUp();
    $("form#" + level + id).slideDown(300);
}
