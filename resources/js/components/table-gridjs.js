/*
Template Name: Larkon - Responsive 5 Admin Dashboard
Author: Techzaa
File: datatable js
*/
import { Grid } from "gridjs";
import gridjs from "gridjs/dist/gridjs.umd.js";

class GridDatatable {
    init() {
        this.GridjsTableInit();
    }

    GridjsTableInit() {
        // // Basic Table
        // if (document.getElementById("table-gridjs")) {
        //     new gridjs.Grid({
        //         columns: [
        //             {
        //                 name: "ID",
        //                 formatter: function (cell) {
        //                     return gridjs.html(
        //                         '<span class="fw-semibold">' + cell + "</span>"
        //                     );
        //                 },
        //             },
        //             "Name",
        //             {
        //                 name: "Users",
        //                 formatter: function (cell) {
        //                     return gridjs.html(
        //                         "<span>" + cell + " Users" + "</span>"
        //                     );
        //                 },
        //             },
        //             "Status",
        //             {
        //                 name: "Actions",
        //                 width: "120px",
        //                 formatter: function (cell) {
        //                     return gridjs.html(
        //                         "<a href='#' class='text-reset text-decoration-underline'>Details</a>"
        //                     );
        //                 },
        //             },
        //         ],
        //         pagination: {
        //             limit: 5,
        //         },
        //         sort: true,
        //         search: true,
        //         ajax: {
        //             url: "/admin/roles/data", // Endpoint untuk mengambil data
        //             method: "GET",
        //             success: function (response) {
        //                 // Pastikan data yang diterima sesuai dengan format yang diinginkan
        //                 console.log("Data diterima:", response.data);
        //                 // Jika data diterima, set data ke gridjs
        //                 gridjs.setData(response.data);
        //             },
        //             error: function (xhr, status, error) {
        //                 console.error("Error:", error); // Menangani error dari AJAX request
        //             },
        //         },
        //     }).render(document.getElementById("table-gridjs"));
        // }

        // // pagination Table
        // if (document.getElementById("table-pagination"))
        //     new gridjs.Grid({
        //         columns: [
        //             {
        //                 name: "ID",
        //                 width: "120px",
        //                 formatter: function (cell) {
        //                     return gridjs.html(
        //                         '<a href="" class="fw-medium">' + cell + "</a>"
        //                     );
        //                 },
        //             },
        //             "Name",
        //             "Date",
        //             "Total",
        //             {
        //                 name: "Actions",
        //                 width: "100px",
        //                 formatter: function (cell) {
        //                     return gridjs.html(
        //                         "<button type='button' class='btn btn-sm btn-light'>" +
        //                             "Details" +
        //                             "</button>"
        //                     );
        //                 },
        //             },
        //         ],
        //         pagination: {
        //             limit: 5,
        //         },

        //         data: [
        //             ["#RB2320", "Alice", "07 Oct, 2024", "$24.05"],
        //             ["#RB8652", "Bob", "07 Oct, 2024", "$26.15"],
        //             ["#RB8520", "Charlie", "06 Oct, 2024", "$21.25"],
        //             ["#RB9512", "David", "05 Oct, 2024", "$25.03"],
        //             ["#RB7532", "Eve", "05 Oct, 2024", "$22.61"],
        //             ["#RB9632", "Frank", "04 Oct, 2024", "$24.05"],
        //             ["#RB7456", "Grace", "04 Oct, 2024", "$26.15"],
        //             ["#RB3002", "Hannah", "04 Oct, 2024", "$21.25"],
        //             ["#RB9857", "Ian", "03 Oct, 2024", "$22.61"],
        //             ["#RB2589", "Jane", "03 Oct, 2024", "$25.03"],
        //         ],
        //     }).render(document.getElementById("table-pagination"));

        // // search Table
        // if (document.getElementById("table-search"))
        //     new gridjs.Grid({
        //         columns: ["Name", "Email", "Position", "Company", "Country"],
        //         pagination: {
        //             limit: 5,
        //         },
        //         search: true,
        //         data: [
        //             [
        //                 "Alice",
        //                 "alice@example.com",
        //                 "Software Engineer",
        //                 "ABC Company",
        //                 "United States",
        //             ],
        //             [
        //                 "Bob",
        //                 "bob@example.com",
        //                 "Product Manager",
        //                 "XYZ Inc",
        //                 "Canada",
        //             ],
        //             [
        //                 "Charlie",
        //                 "charlie@example.com",
        //                 "Data Analyst",
        //                 "123 Corp",
        //                 "Australia",
        //             ],
        //             [
        //                 "David",
        //                 "david@example.com",
        //                 "UI/UX Designer",
        //                 "456 Ltd",
        //                 "United Kingdom",
        //             ],
        //             [
        //                 "Eve",
        //                 "eve@example.com",
        //                 "Marketing Specialist",
        //                 "789 Enterprises",
        //                 "France",
        //             ],
        //             [
        //                 "Frank",
        //                 "frank@example.com",
        //                 "HR Manager",
        //                 "ABC Company",
        //                 "Germany",
        //             ],
        //             [
        //                 "Grace",
        //                 "grace@example.com",
        //                 "Financial Analyst",
        //                 "XYZ Inc",
        //                 "Japan",
        //             ],
        //             [
        //                 "Hannah",
        //                 "hannah@example.com",
        //                 "Sales Representative",
        //                 "123 Corp",
        //                 "Brazil",
        //             ],
        //             [
        //                 "Ian",
        //                 "ian@example.com",
        //                 "Software Developer",
        //                 "456 Ltd",
        //                 "India",
        //             ],
        //             [
        //                 "Jane",
        //                 "jane@example.com",
        //                 "Operations Manager",
        //                 "789 Enterprises",
        //                 "China",
        //             ],
        //         ],
        //     }).render(document.getElementById("table-search"));

        // // Sorting Table
        // if (document.getElementById("table-sorting"))
        //     new gridjs.Grid({
        //         columns: ["Name", "Email", "Position", "Company", "Country"],
        //         pagination: {
        //             limit: 5,
        //         },
        //         sort: true,
        //         data: [
        //             [
        //                 "Alice",
        //                 "alice@example.com",
        //                 "Software Engineer",
        //                 "ABC Company",
        //                 "United States",
        //             ],
        //             [
        //                 "Bob",
        //                 "bob@example.com",
        //                 "Product Manager",
        //                 "XYZ Inc",
        //                 "Canada",
        //             ],
        //             [
        //                 "Charlie",
        //                 "charlie@example.com",
        //                 "Data Analyst",
        //                 "123 Corp",
        //                 "Australia",
        //             ],
        //             [
        //                 "David",
        //                 "david@example.com",
        //                 "UI/UX Designer",
        //                 "456 Ltd",
        //                 "United Kingdom",
        //             ],
        //             [
        //                 "Eve",
        //                 "eve@example.com",
        //                 "Marketing Specialist",
        //                 "789 Enterprises",
        //                 "France",
        //             ],
        //             [
        //                 "Frank",
        //                 "frank@example.com",
        //                 "HR Manager",
        //                 "ABC Company",
        //                 "Germany",
        //             ],
        //             [
        //                 "Grace",
        //                 "grace@example.com",
        //                 "Financial Analyst",
        //                 "XYZ Inc",
        //                 "Japan",
        //             ],
        //             [
        //                 "Hannah",
        //                 "hannah@example.com",
        //                 "Sales Representative",
        //                 "123 Corp",
        //                 "Brazil",
        //             ],
        //             [
        //                 "Ian",
        //                 "ian@example.com",
        //                 "Software Developer",
        //                 "456 Ltd",
        //                 "India",
        //             ],
        //             [
        //                 "Jane",
        //                 "jane@example.com",
        //                 "Operations Manager",
        //                 "789 Enterprises",
        //                 "China",
        //             ],
        //         ],
        //     }).render(document.getElementById("table-sorting"));

        // // Loading State Table
        // if (document.getElementById("table-loading-state"))
        //     new gridjs.Grid({
        //         columns: ["Name", "Email", "Position", "Company", "Country"],
        //         pagination: {
        //             limit: 5,
        //         },
        //         sort: true,
        //         data: function () {
        //             return new Promise(function (resolve) {
        //                 setTimeout(function () {
        //                     resolve([
        //                         [
        //                             "Alice",
        //                             "alice@example.com",
        //                             "Software Engineer",
        //                             "ABC Company",
        //                             "United States",
        //                         ],
        //                         [
        //                             "Bob",
        //                             "bob@example.com",
        //                             "Product Manager",
        //                             "XYZ Inc",
        //                             "Canada",
        //                         ],
        //                         [
        //                             "Charlie",
        //                             "charlie@example.com",
        //                             "Data Analyst",
        //                             "123 Corp",
        //                             "Australia",
        //                         ],
        //                         [
        //                             "David",
        //                             "david@example.com",
        //                             "UI/UX Designer",
        //                             "456 Ltd",
        //                             "United Kingdom",
        //                         ],
        //                         [
        //                             "Eve",
        //                             "eve@example.com",
        //                             "Marketing Specialist",
        //                             "789 Enterprises",
        //                             "France",
        //                         ],
        //                         [
        //                             "Frank",
        //                             "frank@example.com",
        //                             "HR Manager",
        //                             "ABC Company",
        //                             "Germany",
        //                         ],
        //                         [
        //                             "Grace",
        //                             "grace@example.com",
        //                             "Financial Analyst",
        //                             "XYZ Inc",
        //                             "Japan",
        //                         ],
        //                         [
        //                             "Hannah",
        //                             "hannah@example.com",
        //                             "Sales Representative",
        //                             "123 Corp",
        //                             "Brazil",
        //                         ],
        //                         [
        //                             "Ian",
        //                             "ian@example.com",
        //                             "Software Developer",
        //                             "456 Ltd",
        //                             "India",
        //                         ],
        //                         [
        //                             "Jane",
        //                             "jane@example.com",
        //                             "Operations Manager",
        //                             "789 Enterprises",
        //                             "China",
        //                         ],
        //                     ]);
        //                 }, 2000);
        //             });
        //         },
        //     }).render(document.getElementById("table-loading-state"));

        // // Fixed Header
        // if (document.getElementById("table-fixed-header"))
        //     new gridjs.Grid({
        //         columns: ["Name", "Email", "Position", "Company", "Country"],
        //         sort: true,
        //         pagination: true,
        //         fixedHeader: true,
        //         height: "400px",
        //         data: [
        //             [
        //                 "Alice",
        //                 "alice@example.com",
        //                 "Software Engineer",
        //                 "ABC Company",
        //                 "United States",
        //             ],
        //             [
        //                 "Bob",
        //                 "bob@example.com",
        //                 "Product Manager",
        //                 "XYZ Inc",
        //                 "Canada",
        //             ],
        //             [
        //                 "Charlie",
        //                 "charlie@example.com",
        //                 "Data Analyst",
        //                 "123 Corp",
        //                 "Australia",
        //             ],
        //             [
        //                 "David",
        //                 "david@example.com",
        //                 "UI/UX Designer",
        //                 "456 Ltd",
        //                 "United Kingdom",
        //             ],
        //             [
        //                 "Eve",
        //                 "eve@example.com",
        //                 "Marketing Specialist",
        //                 "789 Enterprises",
        //                 "France",
        //             ],
        //             [
        //                 "Frank",
        //                 "frank@example.com",
        //                 "HR Manager",
        //                 "ABC Company",
        //                 "Germany",
        //             ],
        //             [
        //                 "Grace",
        //                 "grace@example.com",
        //                 "Financial Analyst",
        //                 "XYZ Inc",
        //                 "Japan",
        //             ],
        //             [
        //                 "Hannah",
        //                 "hannah@example.com",
        //                 "Sales Representative",
        //                 "123 Corp",
        //                 "Brazil",
        //             ],
        //             [
        //                 "Ian",
        //                 "ian@example.com",
        //                 "Software Developer",
        //                 "456 Ltd",
        //                 "India",
        //             ],
        //             [
        //                 "Jane",
        //                 "jane@example.com",
        //                 "Operations Manager",
        //                 "789 Enterprises",
        //                 "China",
        //             ],
        //         ],
        //     }).render(document.getElementById("table-fixed-header"));

        // Hidden Columns
        // if (document.getElementById("table-hidden-column"))
        //     new gridjs.Grid({
        //         columns: [
        //             "Name",
        //             "Email",
        //             "Position",
        //             "Company",
        //             {
        //                 name: "Country",
        //                 hidden: true,
        //             },
        //         ],
        //         pagination: {
        //             limit: 5,
        //         },
        //         sort: true,
        //         data: [
        //             [
        //                 "Alice",
        //                 "alice@example.com",
        //                 "Software Engineer",
        //                 "ABC Company",
        //                 "United States",
        //             ],
        //             [
        //                 "Bob",
        //                 "bob@example.com",
        //                 "Product Manager",
        //                 "XYZ Inc",
        //                 "Canada",
        //             ],
        //             [
        //                 "Charlie",
        //                 "charlie@example.com",
        //                 "Data Analyst",
        //                 "123 Corp",
        //                 "Australia",
        //             ],
        //             [
        //                 "David",
        //                 "david@example.com",
        //                 "UI/UX Designer",
        //                 "456 Ltd",
        //                 "United Kingdom",
        //             ],
        //             [
        //                 "Eve",
        //                 "eve@example.com",
        //                 "Marketing Specialist",
        //                 "789 Enterprises",
        //                 "France",
        //             ],
        //             [
        //                 "Frank",
        //                 "frank@example.com",
        //                 "HR Manager",
        //                 "ABC Company",
        //                 "Germany",
        //             ],
        //             [
        //                 "Grace",
        //                 "grace@example.com",
        //                 "Financial Analyst",
        //                 "XYZ Inc",
        //                 "Japan",
        //             ],
        //             [
        //                 "Hannah",
        //                 "hannah@example.com",
        //                 "Sales Representative",
        //                 "123 Corp",
        //                 "Brazil",
        //             ],
        //             [
        //                 "Ian",
        //                 "ian@example.com",
        //                 "Software Developer",
        //                 "456 Ltd",
        //                 "India",
        //             ],
        //             [
        //                 "Jane",
        //                 "jane@example.com",
        //                 "Operations Manager",
        //                 "789 Enterprises",
        //                 "China",
        //             ],
        //         ],
        //     }).render(document.getElementById("table-hidden-column"));

        if (document.getElementById("table-role")) {
            new gridjs.Grid({
                columns: [
                    {
                        name: "No",
                        formatter: function (cell) {
                            return gridjs.html("" + cell + "");
                        },
                    },
                    { id: "name", name: "Name" },
                    { id: "guard_name", name: "Guard Name" },
                    {
                        id: "created_at",
                        name: "Created at",
                        formatter: (cell) => {
                            if (!cell) return "-";

                            const date = new Date(cell);
                            return new Intl.DateTimeFormat("id-ID", {
                                day: "2-digit",
                                month: "short",
                                year: "numeric",
                                hour: "2-digit",
                                minute: "2-digit",
                                hour24: true,
                            }).format(date);
                        },
                    },
                    {
                        id: "action",
                        name: "Action",
                        formatter: (cell, row) => {
                            const roleId = row.cells[0].data;
                            return gridjs.html(`<a href="/admin/roles/${roleId}" class="btn btn-soft-primary btn-sm">
                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                            </a>`);
                        },
                    },
                ],
                pagination: { limit: 5 },
                sort: true,
                search: true,
                server: {
                    url: "data",
                    method: "GET",
                    then: (data) => {
                        console.log("Data dari server:", data);
                        return data.map((item, index) => [
                            index + 1,
                            item.name,
                            item.guard_name,
                            item.created_at,
                        ]);
                    },
                },
            }).render(document.getElementById("table-role"));
        }

        if (document.getElementById("table-permission")) {
            new gridjs.Grid({
                columns: [
                    { name: "No", formatter: (cell) => gridjs.html(cell) },
                    { id: "name", name: "Name" },
                    {
                        id: "assigned_to",
                        name: "Assigned To",
                        formatter: (cell) => {
                            // console.log("Data assigned_to sebelum ditampilkan:", cell);
                            if (typeof cell === "object" && cell?.props?.content) {
                                return gridjs.html(cell.props.content);
                            }
                            return gridjs.html(cell);
                        },
                    },
                    {
                        id: "created_at",
                        name: "Created at",
                        formatter: (cell) => {
                            if (!cell) return "-";
                            const date = new Date(cell);
                            return new Intl.DateTimeFormat("id-ID", {
                                day: "2-digit",
                                month: "short",
                                year: "numeric",
                                hour: "2-digit",
                                minute: "2-digit",
                                hour24: true,
                            }).format(date);
                        },
                    },
                    {
                        id: "updated_at",
                        name: "Last Update",
                        formatter: (cell) => {
                            if (!cell) return "-";
                            const date = new Date(cell);
                            return new Intl.DateTimeFormat("id-ID", {
                                day: "2-digit",
                                month: "short",
                                year: "numeric",
                                hour: "2-digit",
                                minute: "2-digit",
                                hour24: true,
                            }).format(date);
                        },
                    },
                    {
                        id: "action",
                        name: "Action",
                        formatter: (cell, row) => {
                            const permissionId = row.cells[0].data;
                            return gridjs.html(`
                                <a href="/admin/permissions/edit/${permissionId}" class="btn btn-soft-primary btn-sm">
                                    <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                </a>
                                <button class="btn btn-soft-danger btn-sm ms-1" onclick="deletePermission(${permissionId})">
                                    <iconify-icon icon="solar:trash-bin-2-broken" class="align-middle fs-18"></iconify-icon>
                                </button>
                            `);
                        },
                    },
                ],
                pagination: { limit: 5 },
                sort: true,
                search: true,
                server: {
                    url: "data/permissions",
                    method: "GET",
                    then: (res) => {
                        console.log("Response dari server:", res);
                        if (!res || !res.data) return [];
                        return res.data.map((item, index) => [
                            index + 1,
                            item.name,
                            gridjs.html(item.assigned_to || "-"),
                            item.created_at,
                            item.updated_at
                        ]);
                    },
                },
                handle: (error) => {
                    console.error("Terjadi kesalahan saat mengambil data:", error);
                },
            }).render(document.getElementById("table-permission"));
        }

    }
}

document.addEventListener("DOMContentLoaded", function (e) {
    new GridDatatable().init();
});
