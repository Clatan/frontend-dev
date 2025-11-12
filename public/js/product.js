$(document).ready(function () {
    $('#productTable').DataTable({
        pageLength: 8,
        lengthMenu: [8, 20, 30, 50],
        ordering: true,
        responsive: true,
        language: {
            search: "Cari Produk:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Tidak ada data tersedia",
            infoFiltered: "(disaring dari total _MAX_ data)",
            zeroRecords: "Tidak ada data yang cocok ditemukan",
            paginate: {
                first: "Awal",
                last: "Akhir",
                next: "›",
                previous: "‹"
            },
        },
        dom:
            "<'flex flex-col sm:flex-row justify-between items-center mb-3'<'text-gray-100'l><'text-gray-100'f>>" +
            "<'text-center overflow-x-auto't>" +
            "<'flex flex-col sm:flex-row justify-between items-center mt-3'<'text-gray-100'i><'text-gray-100'p>>",

        initComplete: function () {
            $('.dataTables_filter input')
            .addClass('px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500');
        }
    });
});