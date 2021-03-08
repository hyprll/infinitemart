const TotalProduk = document.querySelector(".TotalProduk");

$.ajax({
  url: `${BASE_URL_SERVER}/produk`,
  type: "GET",
  dataType: "JSON",
  error: function () {},
  success: function (result) {
    const getTotalProduk = result.data.length;
    TotalProduk.innerHTML = getTotalProduk;
  },
});

const TotalUser = document.querySelector(".TotalUser");

$.ajax({
  url: `${BASE_URL_SERVER}/allbuyer`,
  type: "GET",
  dataType: "JSON",
  error: function () {},
  success: function (result) {
    const getTotalProduk = result.data.length;
    TotalUser.innerHTML = getTotalProduk;
  },
});

const TotalCheckout = document.querySelector(".TotalCheckout");

$.ajax({
  url: `${BASE_URL_SERVER}/checkout/all`,
  type: "GET",
  dataType: "JSON",
  error: function () {
    $("#TableOrder").DataTable({
      responsive: true,
      autoWidth: false,
      scrollCollapse: true,
      paging: true,
      lengthChange: false,
      searching: true,
      ordering: true,
      info: true,
    });
  },
  success: function (result) {
    const getTotalProduk = result.data.length;
    TotalCheckout.innerHTML = getTotalProduk;
    let handler = "";
    result.data.map((res, i) => {
      handler += handlerCheckout(res, i + 1);
    });
    $(".checkoutTable").html(handler);
    $("#TableOrder").DataTable({
      responsive: true,
      autoWidth: false,
      scrollCollapse: true,
      paging: true,
      lengthChange: false,
      searching: true,
      ordering: true,
      info: true,
    });
  },
});

function handlerCheckout(data, no) {
  const format = new FormatMoney();
  let handler = /* html */ `
    <tr>
        <td class="text-center">${no}</td>
        <td>${data.first_name} ${data.last_name}</td>
        <td>${data.order_id}</td>
        <td>${format.toRupiah(data.harga)} </td>
        <td>+62 ${data.phone}</td>
        <td>${data.tanggal}</td>
    </tr>
    `;
  return handler;
}

const TotalPenjual = document.querySelector(".TotalPenjual");

$.ajax({
  url: `${BASE_URL_SERVER}/toko`,
  type: "GET",
  dataType: "JSON",
  error: function () {},
  success: function (result) {
    const getTotalProduk = result.data.length;
    TotalPenjual.innerHTML = getTotalProduk;
  },
});
