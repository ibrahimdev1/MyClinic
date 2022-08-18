$.ajax({
    url: '/penddings/',
    type: 'GET',
    //data: { _token: CSRF_TOKEN },
    dataType: 'JSON',
    success: function(response) {
        console.log("response = ", response);
        var DatatableDataLocalDemo = function() {
            var e = function() {
                console.log("e = ", e);
                var e = JSON.parse(JSON.stringify(response)),
                    // var e = reservation_from_patients,
                    a = $(".m_datatable").mDatatable({
                        data: {
                            type: "local",
                            source: e,
                            pageSize: 10
                        },
                        layout: {
                            theme: "default",
                            class: "",
                            scroll: !1,
                            height: 450,
                            footer: !1
                        },
                        sortable: !0,
                        pagination: !0,
                        search: {
                            input: $("#generalSearch")
                        },
                        columns: [{
                                field: "id",
                                title: "#",
                                width: 50,
                                sortable: !1,
                                selector: !1,
                                textAlign: "center"
                            }, {
                                field: "name",
                                title: "Pationt name"
                            }, {
                                field: "email",
                                title: "Email",
                                responsive: {
                                    visible: "lg"
                                }
                            }, {
                                field: "number",
                                title: "Phone Number",
                                width: 100
                            }, {
                                field: "id_number",
                                title: "ID Number",
                                responsive: {
                                    visible: "lg"
                                }
                            }, {
                                field: "date",
                                title: "Date",
                                type: "date",
                                format: "MM/DD/YYYY"
                            }, {
                                field: "description",
                                title: "Description",
                                type: "text"
                            },
                            //  {
                            //     field: "Status",
                            //     title: "Status",
                            //     template: function(e) {
                            //         var a = {
                            //             1: {
                            //                 title: "Pending",
                            //                 class: "m-badge--brand"
                            //             },
                            //             2: {
                            //                 title: "Delivered",
                            //                 class: " m-badge--metal"
                            //             },
                            //             3: {
                            //                 title: "Canceled",
                            //                 class: " m-badge--primary"
                            //             },
                            //             4: {
                            //                 title: "Success",
                            //                 class: " m-badge--success"
                            //             },
                            //             5: {
                            //                 title: "Info",
                            //                 class: " m-badge--info"
                            //             },
                            //             6: {
                            //                 title: "Danger",
                            //                 class: " m-badge--danger"
                            //             },
                            //             7: {
                            //                 title: "Warning",
                            //                 class: " m-badge--warning"
                            //             }
                            //         };
                            //         return '<span class="m-badge ' + ' m-badge--wide">' + "</span>"
                            //     }
                            // }, {
                            //     field: "Type",
                            //     title: "Type",
                            //     template: function(e) {
                            //         var a = {
                            //             1: {
                            //                 title: "Online",
                            //                 state: "danger"
                            //             },
                            //             2: {
                            //                 title: "Retail",
                            //                 state: "primary"
                            //             },
                            //             3: {
                            //                 title: "Direct",
                            //                 state: "accent"
                            //             }
                            //         };
                            //         return '<span class="m-badge m-badge--' + a[e.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + a[e.Type].state + '">' + a[e.Type].title + "</span>"
                            //     }
                            // } ,
                            {
                                field: "Actions",
                                width: 110,
                                title: "Actions",
                                sortable: !1,
                                overflow: "visible",
                                template: function(e) {
                                    return '\t\t\t\t\t\t<div class="dropdown ' + (e.getDatatable().getPageSize() - e.getIndex() <= 4 ? "dropup" : "") + '">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">                            <i class="la la-edit"></i>                        </a>\t\t\t\t\t'
                                }
                            }
                        ]
                    }),
                    i = a.getDataSourceQuery();
                $("#m_form_status").on("change", function() {
                    a.search($(this).val(), "Status")
                }).val(void 0 !== i.Status ? i.Status : ""), $("#m_form_type").on("change", function() {
                    a.search($(this).val(), "Type")
                }).val(void 0 !== i.Type ? i.Type : ""), $("#m_form_status, #m_form_type").selectpicker()
            };
            return {
                init: function() {
                    e()
                }
            }
        }();
        jQuery(document).ready(function() {
            DatatableDataLocalDemo.init()
        });

    }

});





// $.ajax({
//     url: '/penddings/',
//     type: 'GET',
//     //data: { _token: CSRF_TOKEN },
//     dataType: 'JSON',
//     success: function(response) {
//         console.log("response = ", response);
//         var DatatableDataLocalDemo = function() {
//             var e = function() {
//                 console.log("e = ", e);
//                 var e = JSON.parse(JSON.stringify(response)),
//                     // var e = reservation_from_patients,
//                     a = $(".m_datatable").mDatatable({ data: { type: "local", source: e, pageSize: 10 }, layout: { theme: "default", class: "", scroll: !1, height: 450, footer: !1 }, sortable: !0, pagination: !0, search: { input: $("#generalSearch") }, columns: [{ field: "RecordID", title: "#", width: 50, sortable: !1, selector: !1, textAlign: "center" }, { field: "OrderID", title: "Order ID" }, { field: "ShipName", title: "Ship Name", responsive: { visible: "lg" } }, { field: "Currency", title: "Currency", width: 100 }, { field: "ShipAddress", title: "Ship Address", responsive: { visible: "lg" } }, { field: "ShipDate", title: "Ship Date", type: "date", format: "MM/DD/YYYY" }, { field: "Latitude", title: "Latitude", type: "number" }, { field: "Status", title: "Status", template: function(e) { var a = { 1: { title: "Pending", class: "m-badge--brand" }, 2: { title: "Delivered", class: " m-badge--metal" }, 3: { title: "Canceled", class: " m-badge--primary" }, 4: { title: "Success", class: " m-badge--success" }, 5: { title: "Info", class: " m-badge--info" }, 6: { title: "Danger", class: " m-badge--danger" }, 7: { title: "Warning", class: " m-badge--warning" } }; return '<span class="m-badge ' + ' m-badge--wide">' + "</span>" } }, { field: "Type", title: "Type", template: function(e) { var a = { 1: { title: "Online", state: "danger" }, 2: { title: "Retail", state: "primary" }, 3: { title: "Direct", state: "accent" } }; return '<span class="m-badge m-badge--' + a[e.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + a[e.Type].state + '">' + a[e.Type].title + "</span>" } }, { field: "Actions", width: 110, title: "Actions", sortable: !1, overflow: "visible", template: function(e) { return '\t\t\t\t\t\t<div class="dropdown ' + (e.getDatatable().getPageSize() - e.getIndex() <= 4 ? "dropup" : "") + '">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">                            <i class="la la-edit"></i>                        </a>\t\t\t\t\t' } }] }),
//                     i = a.getDataSourceQuery();
//                 $("#m_form_status").on("change", function() { a.search($(this).val(), "Status") }).val(void 0 !== i.Status ? i.Status : ""), $("#m_form_type").on("change", function() { a.search($(this).val(), "Type") }).val(void 0 !== i.Type ? i.Type : ""), $("#m_form_status, #m_form_type").selectpicker()
//             };
//             return { init: function() { e() } }
//         }();
//         jQuery(document).ready(function() { DatatableDataLocalDemo.init() });

//     }

// });


//////////////
// var DatatableDataLocalDemo = function() {
//     var e = function() {
//         var e = JSON.parse('[]'),
//             a = $(".m_datatable").mDatatable({
//                 data: {
//                     type: "local",
//                     source: e,
//                     pageSize: 10
//                 },
//                 layout: {
//                     theme: "default",
//                     class: "",
//                     scroll: !1,
//                     height: 450,
//                     footer: !1
//                 },
//                 sortable: !0,
//                 pagination: !0,
//                 search: {
//                     input: $("#generalSearch")
//                 },
//                 columns: [{
//                     field: "RecordID",
//                     title: "#",
//                     width: 50,
//                     sortable: !1,
//                     selector: !1,
//                     textAlign: "center"
//                 }, {
//                     field: "OrderID",
//                     title: "Order ID"
//                 }, {
//                     field: "ShipName",
//                     title: "Ship Name",
//                     responsive: {
//                         visible: "lg"
//                     }
//                 }, {
//                     field: "Currency",
//                     title: "Currency",
//                     width: 100
//                 }, {
//                     field: "ShipAddress",
//                     title: "Ship Address",
//                     responsive: {
//                         visible: "lg"
//                     }
//                 }, {
//                     field: "ShipDate",
//                     title: "Ship Date",
//                     type: "date",
//                     format: "MM/DD/YYYY"
//                 }, {
//                     field: "Latitude",
//                     title: "Latitude",
//                     type: "number"
//                 }, {
//                     field: "Status",
//                     title: "Status",
//                     template: function(e) {
//                         var a = {
//                             1: {
//                                 title: "Pending",
//                                 class: "m-badge--brand"
//                             },
//                             2: {
//                                 title: "Delivered",
//                                 class: " m-badge--metal"
//                             },
//                             3: {
//                                 title: "Canceled",
//                                 class: " m-badge--primary"
//                             },
//                             4: {
//                                 title: "Success",
//                                 class: " m-badge--success"
//                             },
//                             5: {
//                                 title: "Info",
//                                 class: " m-badge--info"
//                             },
//                             6: {
//                                 title: "Danger",
//                                 class: " m-badge--danger"
//                             },
//                             7: {
//                                 title: "Warning",
//                                 class: " m-badge--warning"
//                             }
//                         };
//                         return '<span class="m-badge ' + a[e.Status].class + ' m-badge--wide">' + a[e.Status].title + "</span>"
//                     }
//                 }, {
//                     field: "Type",
//                     title: "Type",
//                     template: function(e) {
//                         var a = {
//                             1: {
//                                 title: "Online",
//                                 state: "danger"
//                             },
//                             2: {
//                                 title: "Retail",
//                                 state: "primary"
//                             },
//                             3: {
//                                 title: "Direct",
//                                 state: "accent"
//                             }
//                         };
//                         return '<span class="m-badge m-badge--' + a[e.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + a[e.Type].state + '">' + a[e.Type].title + "</span>"
//                     }
//                 }, {
//                     field: "Actions",
//                     width: 110,
//                     title: "Actions",
//                     sortable: !1,
//                     overflow: "visible",
//                     template: function(e) {
//                         return '\t\t\t\t\t\t<div class="dropdown ' + (e.getDatatable().getPageSize() - e.getIndex() <= 4 ? "dropup" : "") + '">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">                            <i class="la la-edit"></i>                        </a>\t\t\t\t\t'
//                     }
//                 }]
//             }),
//             i = a.getDataSourceQuery();
//         $("#m_form_status").on("change", function() {
//             a.search($(this).val(), "Status")
//         }).val(void 0 !== i.Status ? i.Status : ""), $("#m_form_type").on("change", function() {
//             a.search($(this).val(), "Type")
//         }).val(void 0 !== i.Type ? i.Type : ""), $("#m_form_status, #m_form_type").selectpicker()
//     };
//     return {
//         init: function() {
//             e()
//         }
//     }
// }();
// jQuery(document).ready(function() {
//     DatatableDataLocalDemo.init()
// });