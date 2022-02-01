"use strict";
var KTCreateAccount = (function () {
    var e,
        t,
        i,
        o,
        s,
        r,
        a = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_account")) &&
                new bootstrap.Modal(e),
                (t = document.querySelector("#kt_create_account_stepper")),
                (i = t.querySelector("#kt_create_account_form")),
                (o = t.querySelector('[data-kt-stepper-action="submit"]')),
                (s = t.querySelector('[data-kt-stepper-action="next"]')),
                (r = new KTStepper(t)).on("kt.stepper.changed", function (e) {
                    4 === r.getCurrentStepIndex()
                        ? (o.classList.remove("d-none"),
                          o.classList.add("d-inline-block"),
                          s.classList.add("d-none"))
                        : 5 === r.getCurrentStepIndex()
                        ? (o.classList.add("d-none"), s.classList.add("d-none"))
                        : (o.classList.remove("d-inline-block"),
                          o.classList.remove("d-none"),
                          s.classList.remove("d-none"));
                }),
                r.on("kt.stepper.next", function (e) {
                    if (e.currentStepIndex === 2) {
                        let totalExtras = 0;
                        $(".dynamic-field").remove();
                        // display information
                        $("input.extras-field:checked").each(function (
                            index,
                            element
                        ) {
                            totalExtras += parseFloat($(element).val());
                            $("#billing-table").append(`
                                <tr class='dynamic-field'>
                                    <th></th>
                                    <th class="text-gray-600 text-end fs-4"> - ${$(
                                        element
                                    ).attr("data-name")}</th>
                                    <th class="fw-boldest fs-4 text-end">${$(
                                        element
                                    ).val()}</th>
                                </tr>
                            `);
                        });
                        let [fromDate, toDate] = $("#dateRange")
                            .val()
                            .split("-");
                        let [fromMonth, fromDay, fromYear] =
                            fromDate.split("/");
                        let [toMonth, toDay, toYear] = toDate.split("/");

                        let from = moment([fromYear, fromMonth, fromDay]);
                        let to = moment([toYear, toMonth, toDay]);
                        let daysToStay = to.diff(from, "days") + 1;
                        let pricePerDay = $("#pricePerDay").val();
                        let totalPrice = parseFloat(pricePerDay) * daysToStay;
                        $("#roomName").text($("#input-room-name").val());
                        $("#roomDescription").text(
                            $("#input-room-description").val()
                        );
                        $("#roomPrice").text(`${pricePerDay} (per day)`);
                        $("#no-of-days").text($("#dateRange").val());
                        $("#days").text(
                            `${daysToStay} ${daysToStay === 1 ? "day" : "days"}`
                        );
                        $("#total").text(`${totalPrice.toFixed(2)}`);
                        $("#billing-table").append(`
                        <tr class='dynamic-field'>
                            <th></th>
                            <th class="text-end fs-4">TOTAL</th>
                            <th class="fw-boldest fs-4 text-end">${(
                                parseFloat(totalPrice) + parseFloat(totalExtras)
                            ).toFixed(2)}</th>
                        </tr>
                    `);
                    }
                    e.goNext(), KTUtil.scrollTop();
                }),
                r.on("kt.stepper.previous", function (e) {
                    console.log("stepper.previous"),
                        e.goPrevious(),
                        KTUtil.scrollTop();
                });
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTCreateAccount.init();
});
