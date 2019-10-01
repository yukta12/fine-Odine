$(".pretty-select").each(function () {
    $(this).after($("<div></div>").addClass("pretty-select-container").html('<div class="display grey-darker"></div><ul class="hidden"></ul>'));
    var e = $(this).next(), t = $(this).find("option"), r = $(this).find("option:selected"), n = e.children("ul");
    t.each(function () {
        n.append($("<li></li>").addClass($(this).is(":selected") ? "selected" : "").attr("data-value", $(this).val()).html($(this).text()))
    }), e.children(".display").html(r.text() + '<span class="ico ico-xs n-darrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 37.4"><polyline  points="1.5 1.5 32 35.9 62.5 1.5" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/></svg></span>')
}), $(".pretty-select-container > .display").on("click", function (e) {
    $(this).siblings("ul").toggleClass("hidden"), e.stopPropagation()
}), $(".pretty-select-container").on("click", "li", function () {
    var e = $(this).closest(".pretty-select-container");
    e.find(".selected").removeClass("selected"), $(this).addClass("selected"), e.find("ul").addClass("hidden"), e.children(".display").html($(this).text() + '<span class="ico ico-xs n-darrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 37.4"><polyline  points="1.5 1.5 32 35.9 62.5 1.5" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/></svg></span>'), e.prev("select").val($(this).data("value")).trigger("change")
}), $("body").on("click", function () {
    $(".pretty-select-container ul").addClass("hidden")
}), $("select#select-change-city").on("change", function () {
    var e = $(this).val(), t = $(document).find('input[name="cityName"]').val(), r = $(document).find('select option[value="' + e + '"]')[0].innerText;
    clevertap.event.push("City Change", {
        "Old City": t,
        "New City": r,
        Medium: "Desktop Website"
    }), window.location = "" == e ? "/" : "/" + e
});
function onError(e) {
    var t = jQuery.parseJSON(e.responseText);
    switch (e.status) {
        case 401:
            showErrors(["Please login in order to continue!"]);
            break;
        case 422:
            t.errors && showErrors(t.errors), t.custom_error && showErrors([t.custom_error]);
            break;
        case 500:
            showErrors(["Please Try Again"])
    }
}
function onSuccess(e) {
    $(".popup").removeClass("active"), $("#popup-success #messages").html(""), $("#popup-success #messages").append('<li class="regular">' + e + "</li>"), $("#popup-success").addClass("active")
}
function showErrors(e) {
    $(".popup").removeClass("active"), $("#popup-error #errors").html(""), $.each(e, function (e, t) {
        $("#popup-error #errors").append('<li class="regular">' + t + "</li>")
    }), $("#popup-error").addClass("active")
}
function setCookie(e, t, r) {
    var n = new Date;
    n.setTime(n.getTime() + 24 * r * 60 * 60 * 1e3);
    var s = "expires=" + n.toUTCString();
    document.cookie = e + "=" + t + "; " + s
}
function getCookie(e) {
    e += "=";
    for (var t = document.cookie.split(";"), r = 0; r < t.length; r++) {
        for (var n = t[r]; " " == n.charAt(0);)n = n.substring(1);
        if (0 === n.indexOf(e))return n.substring(e.length, n.length)
    }
    return ""
}
function makeInitialTextReadOnly(e) {
    var t = e.val().length;
    e.keydown(function (e) {
        var r = e.which;
        (8 == r && this.selectionStart <= t || 46 == r && this.selectionStart < t) && e.preventDefault()
    })
}
function showAds(e, t, r, n, s) {
    $.ajax(AD_URL, {
        type: "GET",
        data: {type: VIEW_NAME, id: e, city: t, categories: r, buckets: n, pages: s},
        success: function (e, t) {
            var r = jQuery.parseJSON(e), n = r.platinum, s = r.golden, i = r.silver, o = 1 == n.length && n[0].id, a = 1 == s.length && s[0].id, l = '<span class="sponsored small">Ad</span>';
            if ($.isEmptyObject(n) || ($("#ad-platinum").html('<a href="' + n[0].url + '" ' + (!1 === o ? "" : 'data-id=" ' + o + ' "') + ' rel="nofollow" ><div class="img5-4"><img src="' + n[0].image + '"/>' + l + "</div></a>"), $("#ad-platinum").removeClass("hidden")), $.isEmptyObject(s) || ($("#ad-golden").html('<a href="' + s[0].url + '" ' + (!1 === a ? "" : 'data-id=" ' + a + ' "') + ' rel="nofollow" ><img class="block ico-full" src="' + s[0].image + '" />' + l + "</a>"), $("#ad-golden").removeClass("hidden")), !$.isEmptyObject(i)) {
                var d = $("#ad-silver").data("size") ? $("#ad-silver").data("size") : 4;
                $("#ad-silver").html("");
                for (var c = 0; c < i.length; c++)ad = i[c], $("#ad-silver").append('<a class="w-' + d + '-12" data-id="' + ad.id + '" href="' + ad.url + '" rel="nofollow"><div class="relative"><img class="block ico-full" src="' + ad.image + '"/>' + l + "</div></a>");
                $("#ad-silver-box").removeClass("hidden")
            }
        }
    })
}
function checkUniqueSet(e, t) {
    var r = e.length, n = t.length;
    if (r == n && r > 0 && n > 0) {
        for (var s = r, i = 0; i < s - 1; i++)for (var o = i + 1; o < s - 1; o++)if (e[i] == e[o] && t[i] == t[o])return !1;
        return !0
    }
}
function fireCleverSearchTapEvent(e, t) {
    var r = "";
    if ("location" == e.item.type)r = e.item.code; else {
        var n = e.item.code, s = n.split("-");
        r = s[s.length - 1]
    }
    clevertap.event.push("Search Result Selected", {
        ID: r,
        Keyword: t,
        Name: e.item.name,
        Source: "Website",
        Type: e.item.type
    })
}
function validateSelectedPax(e) {
    var t = 8, r = parseInt($("#coupon_count").data("coupon_count"));
    return r <= 8 && (t = r), !(parseInt(e) >= t) || (showErrors(["You can select maximum " + t + " coupons."]), !1)
}
function fireCleverTapEvent(e, t) {
    clevertap.event.push(e, {Source: "Header", Status: t, Medium: "Desktop Website"})
}
$(".load-more-button").on("click", function () {
    var e = $(this);
    e.addClass("hidden"), e.siblings(".loader").removeClass("hidden");
    var t = $(this).data("container"), r = $(t).data("page"), n = $(t).data("url");
    void 0 === n && (n = ""), r++, $.ajax(n, {
        type: "GET", data: {page: r}, success: function (n) {
            n && ($(t).data("page", r), $(t).append(n), e.removeClass("hidden")), e.siblings(".loader").addClass("hidden")
        }
    })
}), $(".datepicker").Zebra_DatePicker({
    direction: [!0, 30],
    format: "d M, Y",
    show_clear_date: !1,
    readonly_element: !0,
    default_position: "below",
    show_icon: !1,
    offset: [-1 * $(".datepicker").parent().outerWidth(), $(".datepicker").outerHeight()]
}), $(".input-mobile").intlTelInput({
    nationalMode: !1,
    initialCountry: "IN",
    autoHideDialCode: !1,
    preferredCountries: ["IN", "AE"],
    dropdownContainer: "body"
}), $(".input-mobile").on("countrychange", function (e, t) {
    $(".input-mobile").val(""), setTimeout(function () {
        makeInitialTextReadOnly($(".input-mobile"))
    }, 300)
}), makeInitialTextReadOnly($(".input-mobile"));
var keyword = "";
try {
    $(".autocomplete").autocomplete({
        minLength: 2,
        position: {my: "right top", at: "right bottom"},
        source: function (e, t) {
            keyword = e.term;
            var r = ($(this), $(this.element)), n = r.data("jqXHR");
            n && n.abort(), r.data("jqXHR", $.ajax("/autocomplete", {
                type: "GET",
                data: {term: e.term},
                success: function (e, r) {
                    var n = jQuery.parseJSON(e);
                    t(n)
                }
            }))
        },
        appendTo: $(".autocomplete").data("container"),
        messages: {
            noResults: "dfg", results: function () {
            }
        },
        classes: {},
        open: function () {
            $(".ui-menu").width(1.5 * $(".autocomplete").outerWidth())
        },
        select: function (e, t) {
            return fireCleverSearchTapEvent(t, keyword), $(".autocomplete").val(t.item.name), "restaurant" == t.item.type ? window.location = "/" + t.item.code : $("#form-search #location").val(t.item.code), $("#location~.error-msg").addClass("hidden"), !1
        }
    }).autocomplete("instance")._renderItem = function (e, t) {
        var r = $("<li>"), n = '<span class="ico"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.4 61"><g><path d="M273.5,1c-11.4,0-20.7,8.9-20.7,19.9S273.5,62,273.5,62s20.7-30.1,20.7-41.1S284.9,1,273.5,1Zm0,27.8a8.16,8.16,0,0,1-8.3-8,8.31,8.31,0,0,1,16.6,0A8.09,8.09,0,0,1,273.5,28.8Z" transform="translate(-252.8 -1)" style="fill:#616161"/></g></svg></span>';
        "restaurant" == t.type && (n = '<span class="ico"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.8 64"><g><rect x="1.5" y="22.7" width="26.5" height="39.8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><polygon points="49.3 62.5 28.1 62.5 28.1 22.7 22.7 22.7 22.7 1.5 49.3 1.5 49.3 62.5" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><rect x="36" y="54.5" width="8" height="8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><rect x="6.8" y="54.5" width="8" height="8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="1.5" y1="28" x2="12.1" y2="28" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="1.5" y1="33.3" x2="9.5" y2="33.3" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="22.7" y1="12.1" x2="33.4" y2="12.1" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="22.7" y1="6.8" x2="38.7" y2="6.8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="22.7" y1="17.4" x2="30.7" y2="17.4" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="1.5" y1="38.6" x2="6.8" y2="38.6" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></g></svg></span>');
        var s = t.description ? '<div class="small grey-light">' + t.description + "</div>" : "";
        return r.append('<div class="pointer grid"><div class="w-2-12 w-lg-1-12">' + n + '</div><div class="w-10-12 w-lg-11-12"><div>' + t.name + "</div>" + s + "</div></div>"), r.appendTo(e)
    }
} catch (e) {
}
$(".slider-next").on("click", function () {
    var e = $(this).data("slider"), t = $(e + ">*").length - 1, r = $(e).data("position");
    if (r + 1 <= t) {
        var n = parseInt($(e + ">*:nth-child(" + (r + 1) + ")").outerWidth(!0)), s = $(e).outerWidth();
        r + parseInt(s / n) <= t && (marginLeft = n * (r + 1) * -1, $(".slider>*").first().css("margin-left", marginLeft + "px"), $(e).data("position", r + 1))
    }
}), $(".slider-previous").on("click", function () {
    var e = $(this).data("slider"), t = ($(e + ">*").length, $(e).data("position"));
    if (t - 1 >= 0) {
        var r = parseInt($(e + ">*:nth-child(" + t + ")").outerWidth(!0)), n = $(e).outerWidth(!0);
        parseInt(n / r);
        t - 1 >= 0 && (marginLeft = r * (t - 1) * -1, $(".slider>*").first().css("margin-left", marginLeft + "px"), $(e).data("position", t - 1))
    }
}), $("#form-search").on("submit", function () {
    if (0 === $("#location").val().length)return $("#location").closest(".input-group").addClass("error"), $("#location").closest(".input-group").next(".error-msg").removeClass("hidden"), !1
}), $(".quickflex a").click(function () {
    var e = $(this).attr("href");
    return $("html,body").animate({scrollTop: $(e).offset().top}, 1e3), !1
}), $(document).ready(function () {
    $(window).scroll(function () {
        $(this).scrollTop() > 500 ? $(".back-top").fadeIn(500) : $(".back-top").fadeOut(500)
    }), $(".back-top").click(function (e) {
        return e.preventDefault(), $("html, body").animate({scrollTop: 0}, 500), !1
    })
}), $(".hide-section-header").on("click", function () {
    var e = $(this).attr("data-hide-height"), t = $(this).next(".hide-section");
    $(t).toggleClass("open"), $(t).hasClass("open") ? ($(t).css("max-height", e), $(this).text("hide")) : ($(t).css("max-height", "0px"), $(this).text("show"))
}), $(".copyText").click(function () {
    var e = $(this).data("copy-target");
    $(e).select();
    try {
        document.execCommand("copy");
        $(this).text("Copied"), setTimeout(function () {
            $(".copyText").text("Copy")
        }, 2e3)
    } catch (e) {
    }
}), $("#referral-addMore").click(function (e) {
    e.stopPropagation();
    var t = $("#referralFormTemplate").clone();
    t.removeClass("hidden-imp"), $(this).before(t)
}), $("#referralForm").on("click", ".removeReferralInputGroup", function () {
    $(this).parent(".referral-input-group").remove()
}), $("#referralInvite").click(function () {
    $("#referralInviteMsg").text(""), $("#referralForm").submit()
}), $("#referralForm").trigger("reset"), $("#referralForm").submit(function (e) {
    if (e.preventDefault(), $(this)[0].checkValidity()) {
        var t = new FormData($(this)[0]), r = t.getAll("friendEmail[]"), n = t.getAll("friendMobile[]");
        if (r.length < 1)return $("#referralInviteMsg").addClass("red").removeClass("hidden").removeClass("green").text("Please refer at least 1 friend."), !1;
        if (!checkUniqueSet(r, n))return $("#referralInviteMsg").addClass("red").removeClass("hidden").removeClass("green").text("Please provide unique set of entries."), !1;
        $("#referralInvite").text("Please wait").prop("disabled", !0), $.ajax({
            url: "/user/save-invites",
            type: "POST",
            data: t,
            cache: !1,
            contentType: !1,
            processData: !1,
            success: function (e) {
                $("#referralInviteMsg").addClass("green").removeClass("hidden").removeClass("red").text("Thank You for referring your friends to us."), $("#referralForm").trigger("reset"), $("#referralInvite").text("Invite More Friends").prop("disabled", !1)
            },
            error: function (e) {
                if ($("#referralInvite").text("Invite").prop("disabled", !1), e.responseJSON) {
                    var r = e.responseJSON.custom_error, n = $.map(e.responseJSON.errors, function (e, t) {
                        return [e]
                    });
                    if (void 0 !== r && $("#referralInviteMsg").addClass("red").removeClass("hidden").removeClass("green").text(r), void 0 !== n) {
                        var s = "", i = 0, o = [], a = n[0].toString();
                        a.indexOf("friendMobile") > 0 ? (s = "mobile", i = a.split(".")[1].split(" ")[0], o = t.getAll("friendMobile[]")) : a.indexOf("friendEmail") > 0 && (s = "email", i = a.split(".")[1].split(" ")[0], o = t.getAll("friendEmail[]")), $("#referralInviteMsg").addClass("red").removeClass("hidden").removeClass("green").html("The " + s + " <b>" + o[i] + "</b> is not valid")
                    }
                } else $("#referralInviteMsg").addClass("red").removeClass("hidden").removeClass("green").text("Sorry!! unable to refer your friends at the moment. Make sure to provide unique set of entries.")
            }
        })
    } else $("#referralInviteMsg").addClass("red").removeClass("hidden").removeClass("green").text("Please fill the form correctly."), $(this).find(":submit").click()
}), $(document).on("click", ".buffet-grid", function () {
    $(".buffet-list").toggleClass("hidden"), $("span.buffet-arrow-icon").toggleClass("icon-up-arrow icon-down-arrow")
}), $(".scroll-anchor").on("click hover", function (e) {
    e.preventDefault();
    var t = $(this).attr("href"), r = $(t).offset().top - 100;
    r = r > 0 ? r : 0, $("html, body").animate({scrollTop: r}, 500)
});
var n = 0;
$(".increment").on("click", function () {
    if (!$(this).parents(".qsr_deal").find("input[name=deal]").is(":checked")) {
        $(this).parents(".qsr_deal").find("input[name=deal]").trigger("click"), $(".qsr_deal").removeClass("bg-grey-secondary");
        $("input[name=deal]").is(":checked") && $(this).parents(".qsr_deal").addClass("bg-grey-secondary")
    }
    $(this).parents(".qsr_deal").find("input[name=deal]").is(":checked") && validateSelectedPax(n) && (n++, $(".q_coupon").html(0), $("input[name='deal']:checked").parents(".qsr_deal").find(".q_coupon").html(n), $("input[name='coupons']").val(n))
}), $(".decrement").on("click", function () {
    n > 0 && $(this).parents(".qsr_deal").find("input[name=deal]").is(":checked") && (n--, $(".q_coupon").html(0), $("input[name='deal']:checked").parents(".qsr_deal").find(".q_coupon").html(n), $("input[name='coupons']").val(n))
}), $("input[name='deal']").on("click", function () {
    $("input[name='coupons']").val(0), $(".w-12-12 .qsr-tnc").addClass("hidden"), $(this).parents(".qsr_deal").children(".qsr-tnc").removeClass("hidden"), n = 0, $(".q_coupon").html(0)
});
try {
    if (void 0 !== $("#header-search").offset()) {
        var searchWidgetPosition = $("#header-search").offset().top;
        $(window).scroll(function () {
            $(this).scrollTop() > searchWidgetPosition ? ($("#header-search").addClass("sticky"), $("#header-search").addClass("shadow"), $(".sticky-search").removeClass("hidden"), $("#header-search .search-bar").addClass("bd-left-grey-light")) : ($("#header-search").removeClass("sticky"), $("#header-search").removeClass("shadow"), $("#header-search .search-bar").removeClass("bd-left-grey-light"), $(".sticky-search").addClass("hidden"))
        })
    }
} catch (e) {
}
$("body").on("click", ".open-popup", function () {
    $(".popup").removeClass("active");
    var e = $(this).data("popup");
    $("body").css("overflow", "hidden"), $(e).addClass("active")
}), $(".popup .close").on("click", function () {
    $(this).closest(".popup").removeClass("active"), $("body").css("overflow", "auto")
}), $("#form-mobile input[name=mobile]").on("focus keydown mousedown", function () {
    var e = $(this), t = this;
    if (t.setSelectionRange) {
        var r = 2 * e.val().length;
        setTimeout(function () {
            t.setSelectionRange(r, r)
        }, 1)
    } else e.val(e.val())
}), $("#form-mobile").on("submit", function () {
    var e = $(this).find('button[type="submit"]'), t = e.siblings(".loader-small");
    e.addClass("hidden"), t.removeClass("hidden");
    var r = $(this).serialize();
    return $.ajax({
        url: "/check-user",
        type: "POST",
        data: r,
        headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        success: function (r) {
            e.removeClass("hidden"), t.addClass("hidden");
            var n = r.new_user, s = r.verified;
            $("#form-mobile").addClass("hidden");
            var i = $("#form-mobile").find('input[name="mobile"]').val();
            $("#popup-login").find(".mobile").html(i), $("#popup-login").find('.mobile~input[name="mobile"]').val(i), n || !s ? ($("#form-register").removeClass("hidden"), $("#form-login").addClass("hidden")) : ($("#form-login").removeClass("hidden"), $("#form-register").addClass("hidden"))
        },
        error: function (r) {
            e.removeClass("hidden"), t.addClass("hidden"), onError(r)
        },
        cache: !1
    }), !1
}), $("#form-register").on("submit", function () {
    var e = $(this).find(".buttons"), t = e.siblings(".loader-small");
    e.addClass("hidden"), t.removeClass("hidden");
    var r = $(this).serialize();
    return $.ajax({
        url: "/register",
        type: "POST",
        data: r,
        headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        success: function (e) {
            fireCleverTapEvent("Signed Up", "Success"), location.reload(!0)
        },
        error: function (r) {
            fireCleverTapEvent("Signed Up", "Failed"), e.removeClass("hidden"), t.addClass("hidden"), onError(r)
        },
        cache: !1
    }), !1
}), $("#form-login").on("submit", function () {
    var e = $(this).find(".buttons"), t = e.siblings(".loader-small");
    e.addClass("hidden"), t.removeClass("hidden");
    var r = $(this).serialize();
    return $.ajax({
        url: "/login",
        type: "POST",
        data: r,
        headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        success: function (e) {
            fireCleverTapEvent("Logged In", "Success"), location.reload(!0)
        },
        error: function (r) {
            fireCleverTapEvent("Logged In", "Failed"), e.removeClass("hidden"), t.addClass("hidden"), onError(r)
        },
        cache: !1
    }), !1
}), $("#popup-login .forgot-btn").on("click", function () {
    var e = $("#form-login .buttons"), t = e.siblings(".loader-small");
    e.addClass("hidden"), t.removeClass("hidden"), clevertap.event.push("Login With OTP Clicked", {
        Source: "Header",
        Medium: "Desktop Website"
    });
    var r = $("#form-login").serialize();
    return $.ajax({
        url: "/otp",
        type: "POST",
        data: r,
        headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        success: function (r) {
            e.removeClass("hidden"), t.addClass("hidden"), $("#form-login").addClass("hidden"), $("#form-otp").removeClass("hidden")
        },
        error: function (r) {
            e.removeClass("hidden"), t.addClass("hidden"), onError(r)
        },
        cache: !1
    }), !1
}), $("#popup-login .change-mobile").on("click", function () {
    $(this).closest("form").addClass("hidden"), $("#form-mobile").removeClass("hidden")
}), $("#form-otp").on("submit", function () {
    var e = $("#form-login .buttons"), t = e.siblings(".loader-small");
    e.addClass("hidden"), t.removeClass("hidden");
    var r = $(this).serialize();
    return $.ajax({
        url: "/login",
        type: "POST",
        data: r,
        headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        success: function (e) {
            fireCleverTapEvent("Logged In", "Success"), location.reload(!0)
        },
        error: function (r) {
            fireCleverTapEvent("Logged In", "Failed"), e.removeClass("hidden"), t.addClass("hidden"), onError(r)
        },
        cache: !1
    }), !1
}), $("#form-register .resend-otp, #form-otp .resend-otp").on("click", function () {
    var e = $(this).closest(".buttons"), t = e.siblings(".loader-small");
    e.addClass("hidden"), t.removeClass("hidden");
    var r = $("#form-login").serialize();
    return clevertap.event.push("OTP Resend Clicked", {
        Source: "Header",
        Medium: "Desktop Website"
    }), $.ajax({
        url: "/otp",
        type: "POST",
        data: r,
        headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        success: function (r) {
            e.removeClass("hidden"), t.addClass("hidden")
        },
        error: function (r) {
            e.removeClass("hidden"), t.addClass("hidden"), onError(r)
        },
        cache: !1
    }), !1
});